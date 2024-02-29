<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
class Forgetpasswordreset extends Controller
{
   function forgetPassword(){
        return view("ForgetPasssword");
    }

    function forgetpassswordUser(Request $request){

        $email=request()->email;
        $request->validate([
            'email'=>['email','exists:users,email','required','min:5']
        ]);
        $token =Str::random(64);
        $datavaler = DB::table('password_reset_tokens')->where('email',$email)->first();
       
        if($datavaler){ 
          
            DB::table('password_reset_tokens')->update([
                'email'=> $email,
                'token'=>$token,
                'created_at'=>Carbon::now()
            ]);
        }else{
            
            DB::table('password_reset_tokens')->insert([
            'email'=> $email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);
        }
        $userName = User::where('email',$email)->first();
        Mail::send('Emailtemplet',['token'=>$token ,'fisrtName'=>$userName->firstName,'lastName'=>$userName->lastName],
        function($message) use ($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
     
        return redirect()->to(route('loginPage'))
        ->with('message',"Admin send message to your email reset password");
    }
    function resetPassword($token){
        return view('ResetPassword',compact('token'));
    }
    function resetPassworduser(Request $request){
       $request->validate([
        'email'=>["email","exists:users,email",'required','min:8'],
        'password'=>['required','min:8'],


    ]);

       $updatedataINtableReset = DB::table('password_reset_tokens')
       ->where(['email'=>$request->email])->first();
       if(!$updatedataINtableReset){
        return to_route('forgetPassword')->with('erreur','Invalid ');
       }

        User::where('email',$request->email)->update(['password'=>Hash::make( $request->password)]);

        DB::table('password_reset_tokens')->where(['email'=>$request->email])->delete();
        return to_route('loginPage')->with('successmsg',"your password is Shenget ");
    }
}

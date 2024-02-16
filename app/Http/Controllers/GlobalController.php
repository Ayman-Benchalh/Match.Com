<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GlobalController extends Controller
{
    public function index(){
        return  view('Lading_Page');
    }
    public function login(){
        return  view('Loginpage');
    }
    public function Create_Acount(){
        return  view('CreateAccount');
    }
    public function insertAccount(){         
        
        $firstname=request()->firstName;
        $lastname=request()->lastName;
        $email=request()->email;
        $email2=request()->email2;
        $password=request()->password;
        $password2=request()->password2; 
        // dd($firstname , $lastname ,$email,$email2 , $password,$password2);
        
        
        
        $values = ['email'=>$email,'password'=>$password];
        if($email==$email2 && $password==$password2){
            request()->validate([
                'email'=>['required','email', 'min:8'],
                'password'=>['required','min:5'],
                
            ]);
            
            if(Auth::attempt($values)){ 
                
                return back()->withErrors([
                    'email'=>" ! This email it have an Account "
                    ])->onlyinput('email');
                }else{
                    User::create([
                        'firstName'=>$firstname,
                        'lastName'=>$lastname,
                        'email'=>$email,
                        'password'=>hash::make($password),
                    ]);
                    return  view("loginpage");
                }
                
                
                
            }else{
                return back()->withErrors([
                    'email'=>" ! You have some erreur in email or password"
                    ])->onlyinput('email',"email2","password",'password2','firstName','lastName');
                };
                return view("loginpage");
                
                
            }
        public function login_Acount(){

            $email = request()->email;
            $password = request()->password;
            // dd($email ,  $password );
            request()->validate([
                'email'=>['email','min:8'],
                'password'=>['required','min:8'],
            ]);
            $values =['email'=> $email ,'password'=>$password ];
            if(Auth::attempt($values)){
                request()->session()->regenerate();
               User::where('email',$email);
               return "good login";
            }else{
                // dd(Auth::attempt($values)) ;
                return back()->withErrors([
                    'email'=>"You have A probleme in your login "
                ])->onlyInput('email');
            }
               return "good login";
        }
}
        
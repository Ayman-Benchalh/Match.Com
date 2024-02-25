<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\boitdemessages;
use App\Models\Product;
use App\Models\User;
use App\Models\Command;
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
 
            request()->validate([
                'email'=>['email','min:8'],
                'password'=>['required','min:8'],
            ]);

            $values =['email'=> $email ,'password'=>$password ];
            if(Auth::attempt($values)){
             
             $data =  User::where('email',$email)->first();
             return to_route('AllCollection',['idUser'=>$data->idUser]);
            }else{
                
                return back()->withErrors([
                    'email'=>"You have A probleme in your login "
                ])->onlyInput('email');
            }
               
        }

    public function AllCollection($idUser){
        $dataprodt= Product::all();
        $dataUser=  User::where('idUser',$idUser )->first();
  
        return view('viewAllProduct',['idUser'=>$idUser  ,'dataprodt'=> $dataprodt ,'dataUser'=>$dataUser]);
    }
    public function viewOneProduct($idUser , $idProduct){
        $dataOneprodt= Product::where('idProduct',$idProduct)->first();
        $datatheeprodt= Product::where('idProduct','<','3')->get();
        
        $dataOneUser= User::where('idUser',$idUser)->first();

        return view('ViewOneProduct',
        ['idUser'=>$idUser ,'idProduct'=>$idProduct,'dataOneprodt'=> $dataOneprodt,'dataOneUser'=> $dataOneUser ,'datatheeprodt'=>$datatheeprodt]);
    }



    public function logout()  {
    
        request()->session()->flush();
        Auth::logout();
        
    }
    public function commandCollection($idUser , $idProduct){
        $dataprodt= Product::all();
        $dataAdmin = Admin::all()->first();
        $dataUser =User::where('idUser',$idUser)->first();
        $dataProdt =Product::where('idProduct',$idProduct)->first();


        Command::create([
            'idUser'=>$dataUser->idUser,
            'idAdmin'=>$dataAdmin->idAdmin,
            'idProduct'=>$dataProdt->idProduct,
            'datecommand'=>date('Y-m-d'),
            'statut'=>"Not Paid",
        ]);
        
        return to_route('AllCollection',['idUser'=>$idUser  ,'dataprodt'=> $dataprodt ,'dataUser'=>$dataUser])
                    ->withSuccess('Command is secssus you can Command more product');
    }

    public function editeUser($idUser) {
        $dataprodt= Product::all();
        $dataUser =User::where('idUser',$idUser)->first();

        $firstName = request()->firstName;
        $lastName = request()->lastName;
        $email = request()->email;
        $password = request()->password;
         if($password== null){
            $password = $dataUser->password;
        }else{
           $password = request()->password;
        };
       
      User::where('idUser',$idUser)->update([
        'firstName'=>$firstName,
        'lastName'=>$lastName,
        'email'=>$email,
        'password'=>hash::make($password)
    ]);
        
        return to_route('AllCollection',['idUser'=>$idUser  ,'dataprodt'=> $dataprodt ,'dataUser'=>$dataUser]);

    }


    public function boitMessage($idUser){
        $datatheeprodt= Product::where('idProduct','<','3')->get();
        $dataOneUser= User::where('idUser',$idUser)->first();
        $dataAdmin= Admin::all()->first();
      
            return view('BoitMEssage',['idUser'=>$idUser ,'idAdmin'=>$dataAdmin->idAdmin,'dataOneUser'=> $dataOneUser ,'datatheeprodt'=>$datatheeprodt]);
    }
    public function sendmessg($idUser,$idAdmin){
        $mesageuser = request()->messageuser;
        request()->validate([
            "messageuser"=>['required','min:5']
        ]);
 
        // BoitDeMessage::create([
        //     "idAdmin"=>$idAdmin,
        //     "idUser"=>$idUser,
        //     "messageUser"=>$mesageuser,
        //     "dateMessageUser"=>date('Y-m-d H:i:s'),
        // ]);

        $insertdata = New boitdemessages;
        $insertdata->idAdmin= $idAdmin;
        $insertdata->idUSer= $idUser;
        $insertdata->messageUser= $mesageuser;
        $insertdata->dateMessageUser=date('Y-m-d H:i:s');
        return "message is inserted";
    }
}
        
<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Command;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Boitdemessages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


   public function login_Admin_page(){
      return view('Adminsession.loginpageAsAdmin');
   
   }

   public function login_Admin(Request $request){

      $credentials = $request->validate([
          'email'=>['email','min:8'],
          'password'=>['required','min:8'],
      ]);
      $email = request()->email;
      // $password = request()->password;
      // $credentials =['email'=> $email ,'password'=>$password ];
      if(auth()->guard('admin')->attempt($credentials)){
         // dd(Auth::user());
         // $value = $request->session()->all();
         // if($value){
         // dd($value); }
         $dataAdmin=Admin::where('email',$email)->first();
         // dd(Auth::check());
       return redirect()->route('indexpage');
      }else{
          return back()->withErrors([
              'email'=>"You have A probleme in your ADMIN login"
          ])->onlyInput('email');
      }
         
  }

  public function logout_admin()  {
    
   // request()->session()->flush();
   Auth::guard('admin')->logout();
   return redirect()->route('ladingPage');
   
}










   public function index(){
      // if(Auth::guard('admin')->check()){
      $dataAdmin=Admin::where('idAdmin',Auth::user()->idAdmin)->first();

      $usersCount=User::count();
      
      $commandCount=Command::count();
      
      $collectionCount=Product::count();
      // dd(Auth::user());
      return  view('Adminsession.DashbordPage',['users'=>$usersCount,'commands'=>$commandCount,'collections'=>$collectionCount,'adminDa'=>$dataAdmin]);
      // }
      // else{
      //    return to_route('AdminLoginPage');
      // }

   
   }

   public function Add_collection(){
      // if(Auth::guard('admin')->user()){
      $dataAdmin=Admin::where('idAdmin',Auth::user()->idAdmin)->first();
      $countProd=Product::count();
   return  view('Adminsession.Add_collection',['adminDa'=>$dataAdmin,'count'=>$countProd]);
   // }
   // else{
   //    return to_route('AdminLoginPage');
   // }
   }

   public function store(Request $request){
      $validatedData=$request->validate([
         'nom' => 'required|string',
         'sauvegarder' => 'required|string',
         'prix' => 'required',
         'desination1' => 'required|string',
         'desination2' => 'required|string',
         'desination3' => 'required|string',
         'desination4' => 'required|string',
         'desination5' => 'required|string',
         'desination6' => 'required|string',
     ]);
     DB::table('products')->insert([
      'nom' => $validatedData['nom'],
      'sauvegarder' => $validatedData['sauvegarder'],
      'prix' => $validatedData['prix'],
      'desination1' => $validatedData['desination1'],
      'desination2' => $validatedData['desination2'],
      'desination3' => $validatedData['desination3'],
      'desination4' => $validatedData['desination4'],
      'desination5' => $validatedData['desination5'],
      'desination6' => $validatedData['desination6'],
      'created_at' => now(),
      'updated_at' => now(),
  ]);

     return back()->with('success','PRODUCT ADDED SUCCESSFULLY');

   }

 
   public function deleteUser($idUser){
      $user=User::where('idUser',$idUser);
      if($user){
         boitdemessages::where('idUser',$idUser)->update([
            'idUser'=>null
         ]);
         Command::where('idUser',$idUser)->update([
            'idUser'=>null
         ]);
         $user->delete();
      }
      return back()->withSuccess('User DELETED Successfully');
   }


  

   public function User_dashbord(){
      // if(Auth::guard('admin')->user()){
      $dataAdmin=Admin::where('idAdmin',Auth::user()->idAdmin)->first();
      $clients=User::all();
      $usersCount=User::count();
      $aboType=Product::all()->first();
      $data=[];
      $data['objectOne'] = $clients;
      $data['objectTwo'] = $aboType;
      // $aboType=DB::select('SELECT * FROM products');
   return  view('Adminsession.User_dashbord',['clients'=>$clients,'userCount'=>$usersCount,'aboType'=>$aboType,'data'=>$data,'adminDa'=>$dataAdmin]);
   // }
   // else{
   //    return to_route('AdminLoginPage');
   // }
   }








   public function Delivery_dashbord(){
      // if(Auth::guard('admin')->user()){

      $dataAdmin=Admin::where('idAdmin',Auth::user()->idAdmin)->first();

      $commandCount=Command::count();
      $todaydate=date('d-m-y');
      $getCommands=Command::all();
      $getProduct=Command::first();
   return  view('Adminsession.Delivery_dashbord',['adminDa'=>$dataAdmin,'commands'=>$commandCount,'todaydate'=>$todaydate,'Commands'=>$getCommands,'Productdata'=>$getProduct]);
   // }
   // else{
   //    return to_route('AdminLoginPage');
   // }
   }

   public function deleteCommand($idCommand){
      $commandtoDelete=Command::where('idCommand',$idCommand);

      if($commandtoDelete){
        
         $commandtoDelete->delete();
      }
      return back()->withSuccess('Command DELETED Successfully');
   }









  







   public function Configration(){
      // if(Auth::guard('admin')->user()){

      $dataAdmin=Admin::where('idAdmin',Auth::user()->idAdmin)->first();  
      // dd($dataAdmin);
   return  view('Adminsession.Configration_page',['adminDa'=>$dataAdmin]);
   // }
   // else
   // {
   //    return to_route('AdminLoginPage');
   // }
}





   public function UpdateConfiguration(Request $request){

      
      $adminDa = Admin::where('idAdmin',Auth::user()->idAdmin)->first();
      $firstName=request()->firstName;
      $lastName=request()->lastName;
      $email=request()->email;
      $password=request()->Password;
         if($password== null){
            $password = $adminDa->password;
        }else{
           $password = request()->password;
        };

        Admin::where('idAdmin',Auth::user()->idAdmin)->update([
         'firstName'=>$firstName,
         'lastName'=>$lastName,
         'email'=>$email,
         'password'=>$password,
     ]);

             return redirect()->route('ConfigrationView')->with('success','Admin Data Updated');
         }




   public function Admin_Boite_message(string $idUser =null){
      // $mesCom=Command::where('idcommand',$idcommand)->first();
      // dd($mesCom);
      $allUsers=User::all();
      $UserSelected=User::where('idUser',$idUser)->first();
      // $fetchBoiteMessages=Boitdemessages::where('idUser',$idUser)->get();
      $allmessage=Boitdemessages::where('idUser',$idUser)->get();
      // $Boitdemessages=Boitdemessages::get();
      // dd($idUser);
      // dd($allmessage);
      return  view('Adminsession.Admin_boit_message',compact('allUsers','allmessage','UserSelected'));
   }



   public function sendMessageAdmin(Request $request,$idUser){
      
      // $allUsers=User::all();
      // $allmessage=Boitdemessages::where('idUser',$idUser)->get();

      $dataAdmin= Admin::all()->first();
      $messageAdmin = request()->messageAdmin;
      $dataOneUser= User::where('idUser',$idUser)->first();

      request()->validate([
          "messageAdmin"=>['required','min:1']
      ]);

      boitdemessages::create([
          "idAdmin"=>Auth::user()->idAdmin,
          "idUser"=>$idUser,
          "messageAdmin"=>$messageAdmin,
          "dateMessageAdmin"=>date('Y-m-d H:i:s'),
      ]);
      
      return back();
      // return redirect()->route("Admin_Boite_message",compact('allUsers','allmessage'));
      

   }

   // public function Admin_Boite_message_withUser(){
   //    $allUsers=User::all();
   //    return  view('Adminsession.Admin_boit_message',compact('allUsers'));

   // }
   // public function logOut(){
   //    request()->session()->flush();
   //    Auth::logout();
   // }
}
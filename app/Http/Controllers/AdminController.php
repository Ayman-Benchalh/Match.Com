<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Command;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index(){
      $adminFName=Admin::get()->first();

      $usersCount=User::count();
      
      $commandCount=Command::count();
      
      $collectionCount=Product::count();
   
      return  view('Adminsession.DashbordPage',['users'=>$usersCount,'commands'=>$commandCount,'collections'=>$collectionCount,'Admin'=>$adminFName]);


   
   }

   public function Add_collection(){
      
   return  view('Adminsession.Add_collection');
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

     return redirect('/DashbordAdmin');

   }

   public function deleteUser($idUser){
      $user=User::findOrFail($idUser);
      if($user){
         $user->delete();
      }
      return redirect('/DashbordAdmin');
   }

   public function User_dashbord(){

      $clients=User::paginate(6);
      $usersCount=User::count();
      $aboType=Product::all()->first();
      $data=[];
      $data['objectOne'] = $clients;
      $data['objectTwo'] = $aboType;
      // $aboType=DB::select('SELECT * FROM products');
   return  view('Adminsession.User_dashbord',['clients'=>$clients,'userCount'=>$usersCount,'aboType'=>$aboType,'data'=>$data]);
   }






   public function Delivery_dashbord(){
      $commandCount=Command::count();
      $todaydate=date('d-m-y');
   return  view('Adminsession.Delivery_dashbord',['commands'=>$commandCount,'todaydate'=>$todaydate]);
   }




   public function Configration(){

   return  view('Adminsession.Configration_page');
   }





   public function Admin_Boite_message(){
   return  view('Adminsession.Admin_boit_message');
   }
   public function logOut(){
      request()->session()->flush();
      Auth::logout();
   }
}

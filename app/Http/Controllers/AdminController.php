<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
   return  view('Adminsession.DashbordPage');
   }
   public function Add_collection(){
   return  view('Adminsession.Add_collection');
   }
   public function User_dashbord(){
   return  view('Adminsession.User_dashbord');
   }
   public function Delivery_dashbord(){
   return  view('Adminsession.Delivery_dashbord');
   }
   public function Configration(){
   return  view('Adminsession.Configration_page');
   }
   public function Admin_Boite_message(){
   return  view('Adminsession.Admin_boit_message');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

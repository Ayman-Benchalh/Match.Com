<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('AdminLoginPage');
    }
}

        // if(!$request->expectsJson()){
        // if($request->is('DashbordAdmin')){

        //     return route('AdminLoginPage');  
        // }
        // elseif($request->is('Addcollection')){
        //     return route('AdminLoginPage');  
        // }
        // elseif($request->is('Userdashbord')){
        //     return route('AdminLoginPage');  
        // }
        // elseif($request->is('Deliverydashbord')){
        //     return route('AdminLoginPage');  
        // }  
        // elseif($request->is('Configration')){
        //     return route('AdminLoginPage');  
        // }
        // elseif($request->is('AdminBoitemessage')){
        //     return route('AdminLoginPage');  
        // }
        // elseif($request->is('AllCollection/*')){
        //     return route('loginPage');  
        // }
        // elseif($request->is('AllCollection/*')){
        //     return route('loginPage');  
        // }elseif($request->is('boitMessage/*')){
        //     return route('loginPage');  
        // }elseif($request->is('viewOneProduct/*/OneCollection/*')){
        //     return route('loginPage');  
        // }
        // else{
        //     return route('ladingPage');
        // }

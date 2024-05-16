<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;



class StripeController extends Controller
{
    public function session(Request $request,$idProduct,$idUser){

        
        // $dataUser =User::where('idUser',$idUser)->first();
        // $dataProdt =Product::where('idProduct',$idProduct)->first();

        // passing data for the cancel and success urls
        
        $dataOneprodt= Product::where('idProduct',$idProduct)->first();
        $datatheeprodt= Product::where('idProduct','<','3')->get();
        
        $dataOneUser= User::where('idUser',$idUser)->first();


        Stripe::setApiKey(config('stripe.sk'));

        $productname=$request->productname." iptv 4k Good Quality";
        $totalprice=$request->total;

        $total=intval($totalprice*100);  
        
        // $successUrl = action([GlobalController::class, 'commandCollection'],
        //  ['idUser' => $dataOneUser->idUser, 'idProduct' => $dataOneprodt->idProduct]);

        $successUrl = route('commandCollection',['idUser' => $dataOneUser->idUser, 'idProduct' => $dataOneprodt->idProduct]);
            
        $session = Session::create([
                'line_items'  => [
                    [
                        'price_data' => [
                            'currency'     => 'USD',
                            'product_data' => [
                                "name" => $productname,
                            ],
                            'unit_amount'  => $total,
                        ],
                        'quantity'   => 1,
                    ],
                    
                ],
                
                'mode'        => 'payment',

                'success_url' => $successUrl,
                
                'cancel_url'  => route('viewOne_Product', [
                    'idUser' => $idUser,
                    'idProduct' => $idProduct,
                    'dataOneprodt' => $dataOneprodt,
                    'dataOneUser' => $dataOneUser,
                    'datatheeprodt' => $datatheeprodt
                ])
            ]);
    
            return redirect()->away($session->url);
    }
    
    public function success(){
        return "Your command has passed successfully ";
    }
}

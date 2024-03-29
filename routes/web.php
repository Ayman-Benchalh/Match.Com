<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\GlobalController;
namespace App\Http\Controllers\Forgetpasswordreset;
namespace App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\GlobalController;
use App\Http\Controllers\Forgetpasswordreset;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[GlobalController ::class,"index" ])->name("ladingPage");

Route::get('/login',[GlobalController::class,'login'])->name("loginPage");

Route::get('/Create_Acount',[GlobalController::class,'Create_Acount'])->name("CreateAcountPage");

Route::post('/Create_Acount',[GlobalController::class,'insertAccount'])->name("insertAccount");
Route::post('/login_Acount',[GlobalController::class,'login_Acount'])->name("login_Acount");


Route::get('/AllCollection/{idUser}',[GlobalController::class,'AllCollection'])->name("AllCollection");
Route::get('/viewOneProduct/{idUser}/OneCollection/{idProduct}',[GlobalController::class,'viewOneProduct'])->name("viewOne_Product");
Route::get('/logout',[GlobalController::class,'logout'])->name("logout")->middleware(['auth','isUser','PreventBackHistoryy']);

Route::post('/commandCollection/{idUser}/CollectionID/{idProduct}',[GlobalController::class,'commandCollection'])->name('commandCollection');
Route::put('/editUser/{idUser}',[GlobalController::class,'editeUser'])->name('editUser');

Route::get("/boitMessage/{idUser}",[GlobalController::class,'boitMessage'])->name('boitMessage');
Route::post("/sendmessg/User/{idUser}/sendToAdmin/{idAdmin}",[GlobalController::class,'sendmessg'])->name('sendmessg');




Route::get("/forgetPassword",[Forgetpasswordreset::class,'forgetPassword'])->name('forgetPassword');
Route::post("/forgetpassswordUser",[Forgetpasswordreset::class,'forgetpassswordUser'])->name('forgetpassswordUser');
Route::get("/resetPassword/{token}",[Forgetpasswordreset::class,'resetPassword'])->name('resetPassword');
Route::post("/resetPassworduser",[Forgetpasswordreset::class,'resetPassworduser'])->name('resetPassworduser');
<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\GlobalController;

use App\Http\Controllers\GlobalController;
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
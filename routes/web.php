<?php
// namespace App\Http\Controllers;
// namespace App\Http\Controllers\GlobalController;
// namespace App\Http\Controllers\Forgetpasswordreset;
// namespace App\Http\Middleware\Auth;
namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StripeController;
use GuzzleHttp\Middleware;
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
Route::post('/login_Acount',[GlobalController::class,'login_Acount'])->name("login_Acount");

Route::get('/Create_Acount',[GlobalController::class,'Create_Acount'])->name("CreateAcountPage");

Route::post('/Create_Acount',[GlobalController::class,'insertAccount'])->name("insertAccount");

// Route::middleware[('auth'),function () {

    // Route::middleware(['auth:user'])->group(function () {
        // ...
// Route::middleware('auth:user')->group(function () {


Route::get('/AllCollection/{idUser}',[GlobalController::class,'AllCollection'])->name("AllCollection");
Route::get('/viewOneProduct/{idUser}/OneCollection/{idProduct}',[GlobalController::class,'viewOneProduct'])->name("viewOne_Product");
Route::get('/logout',[GlobalController::class,'logout'])->name("logout");

Route::post("/session/{idProduct}/{idUser}",[StripeController::class,'session'])->name('session');
// Route::get("/success",[StripeController::class,'success'])->name('success');

Route::post('/commandCollection/{idUser}/CollectionID/{idProduct}',[GlobalController::class,'commandCollection'])->name('commandCollection');
Route::get('/commandCollection/{idUser}/CollectionID/{idProduct}',[GlobalController::class,'commandCollection'])->name('commandCollection');
Route::put('/editUser/{idUser}',[GlobalController::class,'editeUser'])->name('editUser');

Route::get("/boitMessage/{idUser}",[GlobalController::class,'boitMessage'])->name('boitMessage');
Route::post("/sendmessg/User/{idUser}/sendToAdmin/{idAdmin}",[GlobalController::class,'sendmessg'])->name('sendmessg');


// });
// });

Route::get("/forgetPassword",[Forgetpasswordreset::class,'forgetPassword'])->name('forgetPassword');
Route::post("/forgetpassswordUser",[Forgetpasswordreset::class,'forgetpassswordUser'])->name('forgetpassswordUser');
Route::get("/resetPassword/{token}",[Forgetpasswordreset::class,'resetPassword'])->name('resetPassword');
Route::post("/resetPassworduser",[Forgetpasswordreset::class,'resetPassworduser'])->name('resetPassworduser');






















// Route::group(['middleware'=>'auth'],function () {

Route::get('/AdminLogin',[AdminController::class,'login_Admin_page'])->name('AdminLoginPage');
Route::post('/AdminLogin',[AdminController::class,'login_Admin'])->name('AdminLogin');

Route::middleware('auth:admin')->group(function () {

Route::get('/DashbordAdmin',[AdminController::class,'index'])->name('indexpage');
Route::get('/Addcollection',[AdminController::class,'Add_collection'])->name('Add_collection');

Route::post('/store_product', [AdminController::class, 'store'])->name('store_product');
Route::post('/sendMessageAdmin/{idUser}', [AdminController::class, 'sendMessageAdmin'])->name('sendMessageAdmin');

Route::delete('/deleteUser/{idUser}',[AdminController::class,'deleteUser'])->name('DeleteUser');
Route::delete('/deleteCommand/{idCommand}',[AdminController::class,'deleteCommand'])->name('deleteCommand');

Route::get('/Userdashbord',[AdminController::class,'User_dashbord'])->name('User_dashbord');
Route::get('/Deliverydashbord',[AdminController::class,'Delivery_dashbord'])->name('Delivery_dashbord');
Route::get('/Configration',[AdminController::class,'Configration'])->name('ConfigrationView');

Route::put('/Configration/{idAdmin}',[AdminController::class,'UpdateConfiguration'])->name('Configration');

Route::get('/AdminBoitemessage/{idUser?}/',[AdminController::class,'Admin_Boite_message'])->name('Admin_Boite_message');
Route::delete('/AdminLogout',[AdminController::class,'logout_admin'])->name('logOutAdmin');
});
Route::fallback(function(){
    return view('pagenotfound');
});

// Route::get('/logOut',[GlobalController::class,'logOut'])->middleware(['auth'

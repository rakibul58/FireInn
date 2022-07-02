<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CrudController;
use Illuminate\Contracts\Session\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session()->forget('user');
    return redirect('login');
});

Route::view("/register",'register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::post("/adminlogin",[UserController::class,'adminLogin']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::get("customercrud",[CrudController::class,'customerCrud']);
Route::get("addcustomer",[CrudController::class,'addCustomer']);
Route::post("storecustomer",[CrudController::class,'storeCustomer']);
Route::get("editcustomer/{id}",[CrudController::class,'editCustomer']);
Route::post("updatecustomer/{id}",[CrudController::class,'updateCustomer']);
Route::get("deletecustomer/{id}",[CrudController::class,'deleteCustomer']);
Route::view("/adminlogin",'adminLogin');
Route::view("/dashboard",'dashBoard');


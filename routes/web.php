<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',[AuthController::class,'Login'])->name('login');
Route::get('/register',[AuthController::class,'Register'])->name('register');
Route::get('/forget-password',[AuthController::class,'ForgetPassword'])->name('forgetPassword');
Route::post('/login-post',[AuthController::class,'LoginPost'])->name('login.post');

Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin/dashboard',[DashboardController::class,'Dashboard'])->name('admin.dashboard');
});
Route::get('/logout',[AuthController::class,'LogOut'])->name('logout');



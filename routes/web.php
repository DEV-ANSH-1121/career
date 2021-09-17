<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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


Route::get('/sendSMS', [HomeController::class, 'sendSMS'])->name('sendSMS');
Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/login', [HomeController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [HomeController::class, 'login'])->name('login');
Route::post('/signup', [HomeController::class, 'register'])->name('registerUser');
Route::post('/sendMailOtp', [HomeController::class, 'sendMailOtp'])->name('sendMailOtp');
Route::post('/verifyMailOtp', [HomeController::class, 'verifyMailOtp'])->name('verifyMailOtp');
Route::post('/sendMobileOtp', [HomeController::class, 'sendMobileOtp'])->name('sendMobileOtp');
Route::post('/verifyMobileOtp', [HomeController::class, 'verifyMobileOtp'])->name('verifyMobileOtp');
Route::post('/getOtpForgetPwd', [HomeController::class, 'getOtpForgetPwd'])->name('getOtpForgetPwd');
Route::post('/resetPassword', [HomeController::class, 'resetPassword'])->name('resetPassword');


Route::group(['as' => 'user.','middleware' => ['auth']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/update-profile', [UserController::class, 'updateProfile'])->name('updateProfile');
});
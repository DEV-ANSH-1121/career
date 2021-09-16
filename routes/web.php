<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/login', [HomeController::class, 'loginPage'])->name('loginPage');
Route::post('/signup', [HomeController::class, 'register'])->name('registerUser');
Route::post('/sendMailOtp', [HomeController::class, 'sendMailOtp'])->name('sendMailOtp');
Route::post('/verifyMailOtp', [HomeController::class, 'verifyMailOtp'])->name('verifyMailOtp');
Route::post('/sendMobileOtpsendMobileOtp', [HomeController::class, 'sendMobileOtp'])->name('sendMobileOtp');
Route::post('/verifyMobileOtp', [HomeController::class, 'verifyMobileOtp'])->name('verifyMobileOtp');
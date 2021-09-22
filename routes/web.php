<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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


Route::get('/pinTableUpdate', [UserController::class, 'pinTableUpdate'])->name('pinTableUpdate');
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
    Route::group(['middleware' => ['profileUpdate']], function () {

        Route::group(['middleware' => ['skillTest'/*,'hrInterview'*/]], function () {
            Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
            Route::get('/lead', [UserController::class, 'lead'])->name('lead');
            Route::get('/hrm', [UserController::class, 'hrm'])->name('hrm');
            Route::get('/report', [UserController::class, 'report'])->name('report');
            Route::get('/call-logs/{id?}', [UserController::class, 'callLogs'])->name('counsellorCall');
            Route::get('/email-logs/{id?}', [UserController::class, 'emailLogs'])->name('counsellorEmail');
            Route::get('/sms-logs/{id?}', [UserController::class, 'smsLogs'])->name('counsellorSms');
            Route::get('/whatsapp-logs/{id?}', [UserController::class, 'whatsappLogs'])->name('counsellorWhatsapp');
            Route::get('/visit-logs/{id?}', [UserController::class, 'visitLogs'])->name('counsellorVisit');
            //Route::post('/store-visit-logs', [UserController::class, 'storeVisitLogs'])->name('counsellorStoreVisit');
            Route::get('/client-call-logs/{id?}', [UserController::class, 'clientCallLogs'])->name('clientCall');
            Route::get('/client-email-logs/{id?}', [UserController::class, 'clientEmailLogs'])->name('clientEmail');
            Route::get('/client-sms-logs/{id?}', [UserController::class, 'clientSmsLogs'])->name('clientSms');
            Route::get('/client-whatsapp-logs/{id?}', [UserController::class, 'clientWhatsappLogs'])->name('clientWhatsapp');
            Route::get('/client-visit-logs/{id?}', [UserController::class, 'clientVisitLogs'])->name('clientVisit');
            Route::get('/master-table', [UserController::class, 'masterTable'])->name('masterTable');
            Route::get('/study-schedule', [UserController::class, 'studySchedule'])->name('studySchedule');
            Route::get('/study-dashboard', [UserController::class, 'studyDashboard'])->name('studyDashboard');
             Route::get('/study-test', [UserController::class, 'studyTest'])->name('studyTest');
             Route::get('/career-dashboard', [UserController::class, 'careerDashboard'])->name('careerDashboard');
             Route::get('/teacher-schedule', [UserController::class, 'teacherSchedule'])->name('teacherSchedule');

           
        });
        Route::group(['middleware' => ['skillResult']], function () {
            Route::get('/skill-test', [UserController::class, 'skillTest'])->name('skillTest');
        });
        Route::post('/skill/submitSingleAnswer', [UserController::class, 'submitSingleAnswer'])->name('submitSingleAnswer');
        Route::get('/skill/finalSubmit', [UserController::class, 'finalSubmit'])->name('finalSubmit');
        Route::get('/skill/skillResult', [UserController::class, 'skillResult'])->name('skillResult');
        Route::get('/hr-interview', [UserController::class, 'hrInterview'])->name('hrInterview');
    });
    
    Route::get('/update-profile', [UserController::class, 'getProfile'])->name('getProfile');
    Route::post('/store-profile', [UserController::class, 'storeProfile'])->name('storeProfile');


    Route::group(['as' => 'admin.','middleware' => ['adminAuth']], function () {   
        Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('dashboard');
    });
});
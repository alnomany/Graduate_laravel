<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\FixedFormController;
use App\Http\Controllers\RemFormController;

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
    Route::middleware('auth')->group(function() {
            //removable

    Route::get('/remform/create', [RemFormController::class, 'create'])->name('remform.create');
    Route::post('/remform/store', [RemFormController::class, 'store'])->name('remform.store');
    Route::get('/remform/edit/{id}', [RemFormController::class, 'edit'])->name('remform.edit');
    Route::put('/remform/fill/{update}', [RemFormController::class, 'update'])->name('remform.fill.update');
    Route::patch('/remform/fill/{update}',[RemFormController::class, 'update'])->name('remform.fill.update');
    Route::get('/remform/delete/{id}', [RemFormController::class, 'delete'])->name('remform.delete');


    Route::get('/remform/fill', [RemFormController::class, 'fill'])->name('remform.fill');
    //fech student removable
    Route::post('remform/fetch-name-rem', [RemFormController::class, 'fetchname']);
    //fech patint
    Route::post('/remform/fetch-prn-rem',[RemFormController::class,'fetchprn'])->name('remform.fetchprn');
   //get records
   Route::get('remform/record', [RemFormController::class, 'record'])->name('remform.get-more-record');







    Route::get('/fixedform/create', [FixedFormController::class, 'create'])->name('create');
    Route::get('fixedform/export/', [FixedFormController::class, 'export'])->name('fill.export');

    Route::get('remform/export/', [RemFormController::class, 'export'])->name('fill.export.rem');

    Route::get('fixedform/export/student', [FixedFormController::class, 'exportstudent'])->name('fill.export.student');
    Route::get('fixedform/export/student/excel', [FixedFormController::class, 'exportexcelstudent'])->name('fill.export.Excel.student');



    Route::get('/fixedform/fill', [FixedFormController::class, 'fill'])->name('fill');
    Route::put('/fixedform/fill/{update}', [FixedFormController::class, 'update'])->name('fill.update');
    Route::patch('/fixedform/fill/{update}',[FixedFormController::class, 'update'])->name('fill.update');
    Route::post('/fixedform/store', [FixedFormController::class, 'store'])->name('fixedform.store');

Route::get('/fixedform/edit/{id}', [FixedFormController::class, 'edit'])->name('fixform.edit');
Route::get('/fixedform/delete/{id}', [FixedFormController::class, 'delete'])->name('fixform.delete');





Route::get('/fixedform', [FixedFormController::class, 'index']);

});
//pationt
Route::post('/fixedform/fetch-prn',[FixedFormController::class,'fetchprn'])->name('fetchprn');
Route::post('/fixedform/fetch-tooth',[FixedFormController::class,'fetchtooth'])->name('fetchtooth');
Route::post('/fixedform/fetch-name-pation-edit',[FixedFormController::class,'fetchpation'])->name('fetchpation');


//student

Route::post('fixedform/fetch-name', [FixedFormController::class, 'fetchname']);
Route::post('fixedform/fetch-name-student-edit', [FixedFormController::class, 'fetch_name_student_edit']);

Route::get('fixedform/record', [FixedFormController::class, 'record'])->name('fixedform.get-more-record');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('welcome');
});
Route::controller(AuthOtpController::class)->group(function(){
    Route::get('/otp/login', 'login')->name('otp.login');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    Route::get('/otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
});
Route::post('/login/phone', 'AuthController@create')->name('register-phone');
Route::post('/verify/phone', 'AuthController@verify')->name('verify-phone');
Route::controller(AuthController::class)->group(function(){
    Route::post('/login/phone', 'create')->name('register-phone');
    Route::post('/verify/phone', 'verify')->name('verify-phone');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RemFormController;
use App\Http\Controllers\FixedFormController;
use App\Http\Controllers\StudentController;

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
    Route::get('/remform/fill', [RemFormController::class, 'fill'])->name('remform.fill');

    Route::put('/remform/fill/{update}', [RemFormController::class, 'update'])->name('remform.fill.update');
    Route::patch('/remform/fill/{update}',[RemFormController::class, 'update'])->name('remform.fill.update');
    Route::get('/remform/delete/{id}', [RemFormController::class, 'delete'])->name('remform.delete');
    //note
    Route::get('/remform/note', [RemFormController::class, 'note'])->name('remform.note');

//test

Route::get('forms',[FixedFormController::class, 'formCreate']);
Route::post('forms',[FixedFormController::class, 'formPost'])->name('forms');

//test

    //fech student removable
    Route::post('remform/fetch-name-rem', [RemFormController::class, 'fetchname']);
    //fech patint
    Route::post('/remform/fetch-prn-rem',[RemFormController::class,'fetchprn'])->name('remform.fetchprn');
   //get records
   Route::get('remform/record', [RemFormController::class, 'record'])->name('remform.get-more-record');


   Route::get('/fixedform/updatepassword', [FixedFormController::class, 'updatePassword']);
   Route::get('/fixedform/note', [FixedFormController::class, 'note'])->name('fixed.note');






    Route::get('/fixedform/create', [FixedFormController::class, 'create'])->name('create');
    Route::get('fixedform/export/', [FixedFormController::class, 'export'])->name('fill.export');

    Route::get('remform/export/', [RemFormController::class, 'export'])->name('fill.export.rem');
    Route::get('remform/export/student', [RemFormController::class, 'exportstudent'])->name('fill.remform.export.student');
    Route::get('remform/export/student/excel', [RemFormController::class, 'exportexcelstudent'])->name('fill.rem.export.Excel.student');


    Route::get('fixedform/export/student', [FixedFormController::class, 'exportstudent'])->name('fill.export.student');
    Route::get('fixedform/export/student/excel', [FixedFormController::class, 'exportexcelstudent'])->name('fill.export.Excel.student');
    Route::get('fixedform/export/student/excel/mail', [FixedFormController::class, 'exportexcelstudent'])->name('fill.export.Excel.student.mail');

    Route::get('import/excel', [StudentController::class, 'ImportExcelStudent'])->name('import.excel.student');
    Route::get('student/view', [StudentController::class, 'view'])->name('student.view');
    Route::get('student/view/rem', [StudentController::class, 'rem'])->name('student.view.rem');





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
////////////////////////////////////change password/////////////////////////////////////////
Route::get('/changePassword', [App\Http\Controllers\ProfileController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [ProfileController::class, 'changePasswordPost'])->name('changePasswordPost');
////////////////////////////////////////////OTP///////////////////////////////////
Route::controller(AuthOtpController::class)->group(function(){
    Route::get('/otp/login', 'login')->name('otp.login');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    Route::get('/otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
});
Route::post('/login/phone', 'AuthController@create')->name('register-phone');
Route::controller(AuthController::class)->group(function(){
    Route::post('/login/phone', 'create')->name('register-phone');
    Route::post('/verify/phone', 'verify')->name('verify-phone');
});
/////////////////////////////////End OTP///////////////////////////////////////////

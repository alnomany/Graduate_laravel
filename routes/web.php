<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FixedFormController;

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
    Route::get('/fixedform/create', [FixedFormController::class, 'create'])->name('create');
    Route::get('fixedform/export/', [FixedFormController::class, 'export'])->name('fill.export');

    Route::get('/fixedform/fill', [FixedFormController::class, 'fill'])->name('fill');
    Route::put('/fixedform/fill/{update}', [FixedFormController::class, 'update'])->name('fill.update');
    Route::patch('/fixedform/fill/{update}',[FixedFormController::class, 'update'])->name('fill.update');
    Route::post('/fixedform/store', [FixedFormController::class, 'store'])->name('store');

Route::get('/fixedform/edit/{id}', [FixedFormController::class, 'edit'])->name('fixform.edit');
Route::get('/fixedform/delete/{id}', [FixedFormController::class, 'delete'])->name('fixform.delete');





Route::get('/fixedform', [FixedFormController::class, 'index']);

});

Route::post('/fixedform/fetch-prn',[FixedFormController::class,'fetchprn'])->name('fetchprn');
Route::post('/fixedform/fetch-tooth',[FixedFormController::class,'fetchtooth'])->name('fetchtooth');
Route::post('/fixedform/fetch-name-pation-create',[FixedFormController::class,'fetchpation'])->name('fetchpation');



Route::post('fixedform/fetch-name', [FixedFormController::class, 'fetchname']);
Route::get('fixedform/record', [FixedFormController::class, 'record'])->name('fixedform.get-more-record');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('welcome');
});

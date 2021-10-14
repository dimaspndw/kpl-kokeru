<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//admin
Route::middleware('role:admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->name('dashboard');
    Route::resource('pegawai', App\Http\Controllers\PegawaiController::class);
    Route::resource('ruang', App\Http\Controllers\RuangController::class);
    

});
//cleaner
Route::middleware('role:cleaner')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'cs'])->name('home');
});




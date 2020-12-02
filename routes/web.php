<?php

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
Route::middleware('role:admin')->get('/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->name('dashboard');
Route::middleware('role:admin')->resource('pegawai', App\Http\Controllers\PegawaiController::class);

//cleaner
Route::middleware('role:cleaner')->get('/home', [App\Http\Controllers\HomeController::class, 'cs'])->name('home');




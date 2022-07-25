<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDaftarController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserAbsensiController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FinalPresentationController;
use App\Http\Controllers\UserFinalPresentationController;


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
    return view('index');
});


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user_daftar', [UserDaftarController::class,'index'])->name('user_daftar');
Route::get('/user_absensi', [UserAbsensiController::class,'index'])->name('user_absensi');
Route::get('/user_final_presentation', [UserFinalPresentationController::class,'index'])->name('user_final_presentation');
Route::get('/change_password', [ChangePasswordController::class,'index'])->name('change_password');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/absensi', [AbsensiController::class,'index'])->name('absensi');
Route::get('/pendaftaran', [PendaftaranController::class,'index'])->name('pendaftaran');
Route::get('/final_presentation', [FinalPresentationController::class,'index'])->name('final_presentation');

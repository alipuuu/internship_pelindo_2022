<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HadirController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\TheySayController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserHadirController;
use App\Http\Controllers\PenempatanController;
use App\Http\Controllers\TidakHadirController;
use App\Http\Controllers\UserDaftarController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UserTidakHadirController;
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
// php artisan serve --host 10.1.237.86 --port 8000
Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// change password
Route::post('change-password', [ChangePasswordController::class,'index']);
Route::post('change_password', [ChangePasswordController::class,'store'])->name('change_password');

// myprofile
Route::get('/change_password', [ChangePasswordController::class,'index'])->name('change_password');

// what they say
Route::get('/theysay', [TheySayController::class,'index'])->name('theysay');

// dashboard
Route::get('/dashboard_user', [DashboardUserController::class,'index'])->name('dashboard_user');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

// penempatan lokasi
Route::get('/penempatan', [PenempatanController::class,'index'])->name('penempatan');
Route::post('/insert_penempatan', [PenempatanController::class,'insert_penempatan'])->name('insert_penempatan');
Route::post('/update_penempatan/{id}', [PenempatanController::class,'update_penempatan'])->name('update_penempatan');
Route::get('/delete_penempatan/{id}', [PenempatanController::class,'delete_penempatan'])->name('delete_penempatan');

// divisi
Route::get('/divisi', [DivisiController::class,'index'])->name('divisi');
Route::post('/insert_divisi', [DivisiController::class,'insert_divisi'])->name('insert_divisi');
Route::post('/update_divisi/{id}', [DivisiController::class,'update_divisi'])->name('update_divisi');
Route::get('/delete_divisi/{id}', [DivisiController::class,'delete_divisi'])->name('delete_divisi');

// instansi
Route::get('/instansi', [InstansiController::class,'index'])->name('instansi');
Route::post('/insert_instansi', [InstansiController::class,'insert_instansi'])->name('insert_instansi');
Route::post('/update_instansi/{id}', [InstansiController::class,'update_instansi'])->name('update_instansi');
Route::get('/delete_instansi/{id}', [InstansiController::class,'delete_instansi'])->name('delete_instansi');

// magang
Route::get('/magang', [MagangController::class,'index'])->name('magang');
Route::post('/insert_magang', [MagangController::class,'insert_magang'])->name('insert_magang');
Route::post('/update_magang/{id}', [MagangController::class,'update_magang'])->name('update_magang');
Route::get('/delete_magang/{id}', [MagangController::class,'delete_magang'])->name('delete_magang');

// user daftar
Route::get('/user_daftar', [UserDaftarController::class,'index'])->name('user_daftar');
Route::post('/edit_data_peserta/{id}', [UserDaftarController::class,'edit_data_peserta'])->name('edit_data_peserta');
Route::post('/update_penempatan_peserta/{id}', [UserDaftarController::class,'update_penempatan_peserta'])->name('update_penempatan_peserta');
Route::get('/update_pendaftaran/{id}',[UserDaftarController::class,'status_update']);

// informasi data pribadi
Route::get('/datapribadi', [DataPribadiController::class,'index'])->name('datapribadi');
Route::get('/detail_datapribadi/{id}', [DataPribadiController::class,'detail_datapribadi']);
Route::get('/edit_datapribadi/{id}', [DataPribadiController::class,'edit_datapribadi']);
Route::put('/update_datapribadi/{id}', [DataPribadiController::class,'update_datapribadi'])->name('update_datapribadi');;

// absensi hadir
Route::get('/hadir', [HadirController::class,'index'])->name('hadir');
Route::get('/user_hadir', [UserHadirController::class,'index'])->name('user_hadir');
Route::post('/insert_hadir', [HadirController::class,'insert_hadir'])->name('insert_hadir');

// absensi tidak hadir
Route::get('/tidakhadir', [TidakHadirController::class,'index'])->name('tidakhadir');
Route::get('/user_tidakhadir', [UserTidakHadirController::class,'index'])->name('user_tidakhadir');
Route::post('/insert_tidakhadir', [TidakHadirController::class,'insert_tidakhadir'])->name('insert_tidakhadir');

// final presentation
Route::get('/final_presentation', [FinalPresentationController::class,'index'])->name('final_presentation');
Route::get('/user_final_presentation', [UserFinalPresentationController::class,'index'])->name('user_final_presentation');



// Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
// Route::get('/register',[CustomAuthController::class,'register'])->middleware('alreadyLoggedIn');
// Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
// Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
// Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
// Route::get('/logout',[CustomAuthController::class,'logout']);

// userr
// Route::get('/userr', [UserrController::class,'index'])->name('userr');
// Route::post('/insert_userr', [UserrController::class,'insert']);
// Route::get('/delete_userr/{id}',[UserrController::class,'delete']);
// Route::get('/update_userr/{id}',[UserrController::class,'status_update']);

// pendaftaran
// Route::get('/pendaftaran', [PendaftaranController::class,'index'])->name('pendaftaran');
// Route::post('/insert_pendaftaran', [PendaftaranController::class,'insert_pendaftaran'])->name('insert_pendaftaran');
// Route::post('/edit_pendaftaran', [EditPendaftaranController::class,'index'])->name('edit_pendaftaran');
// Route::post('/edit_pendaftaran/{id}', [EditPendaftaranController::class,'edit_pendaftaran'])->name('edit_pendaftaran');

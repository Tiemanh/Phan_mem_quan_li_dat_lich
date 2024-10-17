<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Doctor\BacSiController as DoctorBacSiController;
use App\Http\Controllers\Doctor\BenhNhanController;
use App\Http\Controllers\Doctor\CaLamController;
use App\Http\Controllers\Doctor\HomeController;
use App\Http\Controllers\Doctor\LichHenController;
use App\Http\Controllers\Doctor\TuVanController;
use App\Http\Controllers\Patient\BacSiController;
use App\Http\Controllers\Patient\DanhGiaController;
use App\Http\Controllers\Patient\DatLichKhamController;
use App\Http\Controllers\Patient\ThanhToanController;
use App\Http\Controllers\Patient\TrangChuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'account'], function () {
    Route::get('login', [AccountController::class, 'login'])->name('account.login');
    Route::post('login', [AccountController::class, 'check_login']);
    Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');

    Route::get('register', [AccountController::class, 'register'])->name('account.register');
    Route::post('check_register', [AccountController::class, 'check_register']);

    Route::get('profile', [AccountController::class, 'profile'])->name('account.profile');
    Route::post('check_profile', [AccountController::class, 'check_profile']);

    Route::get('change_password', [AccountController::class, 'change_password'])->name('account.change_password');
    Route::post('check_change_password', [AccountController::class, 'check_change_password']);

    Route::get('forgot_password', [AccountController::class, 'forgot_password'])->name('account.forgot_password');
    Route::post('check_forgot_password', [AccountController::class, 'check_forgot_password']);

    Route::get('reset_password', [AccountController::class, 'reset_password'])->name('account.reset_password');
    Route::post('check_reset_password', [AccountController::class, 'check_reset_password']);
});


Route::get('/', [TrangChuController::class, 'index'])->name('trangchu.index');

Route::get('/thongtinbacsi', [BacSiController::class, 'index'])->name('bacsi.index');

Route::get('/danhgia', [DanhGiaController::class, 'index'])->name('danhgia.index');

Route::get('/tuvan', [TuVanController::class, 'get'])->name('tuvan.get');
Route::get('/chattuvan', [TuVanController::class, 'chat_patient'])->name('tuvan.chatpatient');

Route::get('/datlichkham', [DatLichKhamController::class, 'index'])->name('datlichkham.index');
Route::get('/datlichkhammoi', [DatLichKhamController::class, 'create'])->name('datlichkham.create');

Route::get('/thanhtoan', [ThanhToanController::class, 'index'])->name('thanhtoan.index');


Route::group(['prefix' => 'bacsi'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('bacsi.trangchu.index');
    Route::get('/calam', [CaLamController::class, 'index'])->name('calam.index');
    Route::get('/benhnhan', [BenhNhanController::class, 'index'])->name('benhnhan.index');
    Route::get('/lichhhen', [LichHenController::class, 'index'])->name('lichhen.index');
    Route::get('/tuvan', [TuVanController::class, 'index'])->name('tuvan.index');
    Route::get('/tuvanchat', [TuVanController::class, 'chat_doctor'])->name('tuvan.chatdoctor');
});

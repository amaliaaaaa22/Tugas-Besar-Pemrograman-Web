<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\PenerbanganController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/registrasi', [RegistrasiController::class, 'ShowForm'])->name('registrasi.form');
Route::post('/registrasi', [RegistrasiController::class, 'handleForm'])->name('registrasi.submit');
Route::get('/penerbangan', [PenerbanganController::class, 'index'])->name('penerbangan');
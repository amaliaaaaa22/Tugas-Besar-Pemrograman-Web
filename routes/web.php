<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\PenerbanganController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\TransactionPassengerController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\RescheduleController;
use App\Http\Controllers\PerjalananFlightsController;
use App\Http\Controllers\FlightClassController;
use App\Http\Controllers\UserProfileController;



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
Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi');
Route::post('/destinasi/{destinasiId}/upload', [DestinasiController::class, 'uploadImage'])->name('destinasi.uploadImage');
Route::get('/transaction_passengers', [TransactionPassengerController::class, 'index'])->name('transaction.index');
Route::get('/tiket', [TiketController::class, 'index'])->name('tiket.index');
Route::post('/tiket/{tiketId}/upload', [TiketController::class, 'uploadImage'])->name('tiket.upload');
Route::get('/reschedule', [RescheduleController::class, 'showForm'])->name('reschedule.form');
Route::post('/reschedule', [RescheduleController::class, 'processReschedule'])->name('reschedule.process');
Route::get('/reschedule/success', [RescheduleController::class, 'success'])->name('reschedule.success');
Route::resource('perjalananflights', PerjalananFlightsController::class);
Route::prefix('flight_class')->group(function () {
    // Route untuk menampilkan daftar flight class
    Route::get('/', [FlightClassController::class, 'index'])->name('flight_class.index');
    
    // Route untuk menampilkan form tambah flight class
    Route::get('/create', [FlightClassController::class, 'create'])->name('flight_class.create');
    
    // Route untuk menyimpan flight class baru
    Route::post('/', [FlightClassController::class, 'store'])->name('flight_class.store');
    
    // Route untuk menampilkan detail flight class
    Route::get('/{id}', [FlightClassController::class, 'show'])->name('flight_class.show');
    
    // Route untuk menampilkan form edit flight class
    Route::get('/{id}/edit', [FlightClassController::class, 'edit'])->name('flight_class.edit');
    
    // Route untuk memperbarui data flight class
    Route::put('/{id}', [FlightClassController::class, 'update'])->name('flight_class.update');
    
    // Route untuk menghapus flight class
    Route::delete('/{id}', [FlightClassController::class, 'destroy'])->name('flight_class.destroy');
    Route::get('/reschedule/success', [RescheduleController::class, 'success'])->name('reschedule.success');
});
Route::middleware(['profiles.edit'])->group(function () {
    Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');
});
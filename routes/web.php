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
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\FlightClassController;


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
Route::post('/destinasi', [DestinasiController::class, 'search'])->name('destinasi.search');
Route::get('/transaction_passengers', [TransactionPassengerController::class, 'index'])->name('transaction.index');
Route::get('/tiket', [TiketController::class, 'index'])->name('tiket.index');
Route::post('/tiket/{tiketId}/upload', [TiketController::class, 'uploadImage'])->name('tiket.upload');
Route::get('/reschedule', [RescheduleController::class, 'showForm'])->name('reschedule.form');
Route::post('/reschedule', [RescheduleController::class, 'processReschedule'])->name('reschedule.process');
Route::get('/reschedule/success', [RescheduleController::class, 'success'])->name('reschedule.success');
Route::get('/perjalananflights', [PerjalananFlightsController::class, 'index'])->name('perjalananflights.index');
Route::get('/perjalananflights/create', [PerjalananFlightsController::class, 'create'])->name('perjalananflights.create');
Route::post('/perjalananflights', [PerjalananFlightsController::class, 'store'])->name('perjalananflights.store');
Route::get('/perjalananflights/{id}/edit', [PerjalananFlightsController::class, 'edit'])->name('perjalananflights.edit');
Route::put('/perjalananflights/{id}', [PerjalananFlightsController::class, 'update'])->name('perjalananflights.update');
Route::delete('/perjalananflights/{id}', [PerjalananFlightsController::class, 'destroy'])->name('perjalananflights.destroy');
Route::get('/transaction_passengers', [TransactionPassengerController::class, 'index'])->name('transaction.index');
Route::post('/transaction_passengers', [TransactionPassengerController::class, 'store']);
Route::put('/transaction_passengers/{id}', [TransactionPassengerController::class, 'update']);
Route::delete('/transaction_passengers/{id}', [TransactionPassengerController::class, 'destroy']);
Route::resource('transaksis', TransaksiController::class);
Route::resource('perjalananflights', PerjalananFlightsController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('flight_class', FlightClassController::class);

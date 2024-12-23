<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Cek jika aplikasi dalam mode pemeliharaan
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance; // Memuat halaman pemeliharaan jika ada
}

require __DIR__.'/../vendor/autoload.php'; // Memuat autoload dari Composer

echo "Mencoba memuat: " . __DIR__.'/../bootstrap/app.php'; // Lihat jalur file yang akan dicoba untuk di-require
die(); 

$app = require_once __DIR__.'/../bootstrap/app.php'; // Memuat aplikasi dari bootstrap

$kernel = $app->make(Kernel::class); // Membuat instance kernel

$response = $kernel->handle(
    $request = Request::capture() // Mengambil permintaan HTTP
)->send(); // Mengirimkan respons ke pengguna

$kernel->terminate($request, $response); 
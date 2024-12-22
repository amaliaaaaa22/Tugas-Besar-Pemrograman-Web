// resources/views/layouts/main.blade.php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkyBooking - Booking Tiket Pesawat Online')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Include CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    @include('layouts.navigation')
    
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Include JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>

// resources/views/layouts/navigation.blade.php
<nav class="bg-white fixed w-full z-50 shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-primary">
                Sky<span class="text-accent">Booking</span>
            </a>
            
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Beranda
                </a>
                <a href="{{ route('promos') }}" class="nav-link {{ request()->routeIs('promos') ? 'active' : '' }}">
                    <i class="fas fa-tag"></i> Promo
                </a>
                <a href="{{ route('destinations') }}" class="nav-link {{ request()->routeIs('destinations') ? 'active' : '' }}">
                    <i class="fas fa-plane"></i> Destinasi
                </a>
                @guest
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                @else
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center space-x-2">
                            <div class="w-8 h-8 rounded-full bg-accent text-white flex items-center justify-center">
                                <i class="fas fa-user"></i>
                            </div>
                            <span>{{ Auth::user()->name }}</span>
                        </button>
                        
                        <div x-show="open" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">
                                <i class="fas fa-user-circle"></i> Profile
                            </a>
                            <a href="{{ route('bookings') }}" class="block px-4 py-2 hover:bg-gray-100">
                                <i class="fas fa-ticket-alt"></i> Pesanan Saya
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>

// resources/views/layouts/footer.blade.php
<footer class="bg-primary text-white">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">Tentang SkyBooking</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-accent">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-accent">Karir</a></li>
                    <li><a href="#" class="hover:text-accent">Berita</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Produk</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-accent">Tiket Pesawat</a></li>
                    <li><a href="#" class="hover:text-accent">Hotel</a></li>
                    <li><a href="#" class="hover:text-accent">Paket Wisata</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Bantuan</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-accent">FAQ</a></li>
                    <li><a href="#" class="hover:text-accent">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-accent">Syarat dan Ketentuan</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
                <ul class="space-y-2">
                    <li><i class="fas fa-phone"></i> 0800-1-234-567</li>
                    <li><i class="fas fa-envelope"></i> cs@skybooking.com</li>
                    <li class="flex space-x-4 mt-4">
                        <a href="#" class="hover:text-accent"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-accent"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-accent"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-8 pt-8 border-t border-gray-700 text-center">
            <p>&copy; {{ date('Y') }} SkyBooking. All rights reserved.</p>
        </div>
    </div>
</footer>

// resources/views/search/index.blade.php
@extends('layouts.main')

@section('title', 'Cari Penerbangan - SkyBooking')

@section('content')
<div class="min-h-screen bg-gray-100 pt-24">
    <div class="container mx-auto px-4">
        <!-- Search Form -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <form action="{{ route('search.flights') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Dari</label>
                        <div class="relative">
                            <i class="fas fa-plane-departure absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" name="from" class="pl-10 w-full border rounded-md p-2" 
                                placeholder="Kota Keberangkatan" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Ke</label>
                        <div class="relative">
                            <i class="fas fa-plane-arrival absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" name="to" class="pl-10 w-full border rounded-md p-2" 
                                placeholder="Kota Tujuan" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Tanggal Berangkat</label>
                        <div class="relative">
                            <i class="fas fa-calendar absolute left-3 top-3 text-gray-400"></i>
                            <input type="date" name="departure_date" class="pl-10 w-full border rounded-md p-2" required>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full bg-accent text-white py-3 rounded-md hover:bg-accent-dark">
                        <i class="fas fa-search mr-2"></i> Cari Penerbangan
                    </button>
                </div>
            </form>
        </div>

        <!-- Search Results -->
        @if(isset($flights))
            <div class="space-y-4">
                @foreach($flights as $flight)
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <img src="{{ $flight->airline_logo }}" alt="{{ $flight->airline_name }}" 
                                    class="w-12 h-12 object-contain">
                                <div>
                                    <h3 class="font-semibold">{{ $flight->airline_name }}</h3>
                                    <p class="text-sm text-gray-500">{{ $flight->flight_number }}</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-xl font-bold text-primary">Rp {{ number_format($flight->price) }}</p>
                                <a href="{{ route('flights.show', $flight->id) }}" 
                                    class="inline-block mt-2 px-4 py-2 bg-accent text-white rounded-md hover:bg-accent-dark">
                                    Pilih
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection

// resources/views/auth/login.blade.php
@extends('layouts.main')

@section('title', 'Login - SkyBooking')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-primary">Login ke SkyBooking</h2>
            <p class="mt-2 text-gray-600">Selamat datang kembali!</p>
        </div>
        <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                        <input id="email" name="email" type="email" required 
                            class="appearance-none rounded-none relative block w-full px-10 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-accent focus:border-accent focus:z-10 sm:text-sm" 
                            placeholder="Email">
                    </div>
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
                        <input id="password" name="password" type="password" required 
                            class="appearance-none rounded-none relative block w-full px-10 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-accent focus:border-accent focus:z-10 sm:text-sm" 
                            placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" 
                        class="h-4 w-4 text-accent focus:ring-accent border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Ingat saya
                    </label>
                </div>

                <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="font-medium text-accent hover:text-accent-dark">
                        Lupa password?
                    </a>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-accent hover:bg-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <i class="fas fa-sign-in-alt"></i>
                    </span>
                    Login
                </button>
            </div>
        </form>

        <div class="text-center">
            <p class="text-sm text-gray-600">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="font-medium text-accent hover:text-accent-dark">
                    Daftar sekarang
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
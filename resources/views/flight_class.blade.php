<!DOCTYPE html>
<html lang="id">
<!-- [Previous head content remains the same until the class-grid style] -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyBooking - Pilih Kelas Penerbangan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1e90ff;
            --secondary: #0066cc;
            --accent: #4dabff;
            --light: #f0f8ff;
            --dark: #004080;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light);
        }

        /* [Previous styles remain the same until class-grid] */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            padding: 0.8rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 600;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .hero {
            height: 300px;
            background: linear-gradient(rgba(10, 21, 227, 0.63), rgba(7, 69, 204, 0.66)), url('/api/placeholder/1920/400');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 60px;
        }

        .hero-content {
            text-align: center;
            color: white;
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title {
            font-size: 2.5rem;
            margin-bottom: 0.8rem;
            font-weight: 700;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        .flight-classes {
            max-width: 1000px; /* Increased from 1200px */
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        /* Updated class-grid styles */
        .class-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(900px, 1fr)); /* Increased from 280px */
            gap: 2rem;
            padding: 1rem;
        }

        /* Updated class-card styles */
        .class-card {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            max-width: 100%; /* Ensures card doesn't overflow container */
        }

        .class-card:hover {
            transform: translateY(-5px);
        }

        .class-image {
            height: 500px; /* Increased from 200px */
            width: 100%;
            object-fit: cover;
        }

        .class-content {
            padding: 2rem; /* Increased from 1.5rem */
        }

        .class-title {
            font-size: 1.6rem; /* Increased from 1.4rem */
            margin-bottom: 1rem;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .class-description {
            color: #666;
            margin-bottom: 1.2rem;
            line-height: 1.6;
            font-size: 1.1rem; /* Added font size */
        }

        .features-list {
            list-style: none;
            margin-bottom: 1.5rem;
        }

        .features-list li {
            display: flex;
            align-items: center;
            gap: 0.8rem; /* Increased from 0.5rem */
            margin-bottom: 0.8rem; /* Increased from 0.5rem */
            color: #444;
            font-size: 1.1rem; /* Added font size */
        }

        .features-list i {
            color: var(--primary);
            font-size: 1.2rem; /* Added icon size */
        }

        .price {
            font-size: 1.5rem; /* Increased from 1.3rem */
            font-weight: 600;
            color: var(--primary);
            margin: 1.5rem 0; /* Increased from 1rem */
        }

        .select-btn {
            display: block;
            width: 100%;
            background: var(--primary);
            color: white;
            text-align: center;
            padding: 1rem; /* Increased from 0.8rem */
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem; /* Added font size */
            transition: background 0.3s ease;
        }

        .select-btn:hover {
            background: var(--secondary);
        }

        /* Updated media queries */
        @media (max-width: 992px) {
            .class-grid {
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .class-grid {
                grid-template-columns: 1fr;
            }
            
            .flight-classes {
                padding: 0 1rem;
            }
            
        }

        
    </style>
</head>
<!-- [Rest of the HTML content remains exactly the same] -->
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">SkyBooking</a>
            <div class="nav-links">
                <a href="./beranda"><i class="fas fa-home"></i> Beranda</a>
                <a href="./reschedule"><i class="fas fa-calendar-alt"></i> Reschedule</a>
                <a href="./penerbangan"><i class="fas fa-plane"></i> Penerbangan</a>
                <a href="./tiket"><i class="fas fa-ticket-alt"></i> Tiket Saya</a>
                <a href="./login"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

    <section class="hero" style="background: linear-gradient(rgba(29, 33, 112, 0.63), rgba(29, 33, 112, 0.63)), url('{{ asset('images/bg.jpg') }}')">
        <div class="hero-content">
            <h1 class="hero-title">Temukan Kelas Penerbangan</h1>
            <p class="hero-subtitle">Temukan kenyamanan yang sesuai dengan kebutuhan perjalanan Anda</p>
        </div>
    </section>

    <section class="flight-classes">
        <h2 class="section-title">Kelas Penerbangan Tersedia</h2>
        <div class="class-grid">
            <!-- Economy Class -->
            <div class="class-card">
                <img src="{{ asset('images/ekonomi2.jpg') }}" alt="Economy Class" class="class-image">
                <div class="class-content">
                    <h3 class="class-title">
                        <i class="fas fa-plane"></i>
                        Economy Class
                    </h3>
                    <p class="class-description">
                        Kenyamanan optimal dengan harga terjangkau. Cocok untuk perjalanan singkat dan wisatawan hemat.
                    </p>
                    <ul class="features-list">
                        <li><i class="fas fa-chair"></i> Kursi standar yang nyaman</li>
                        <li><i class="fas fa-utensils"></i> Makanan ringan</li>
                        <li><i class="fas fa-suitcase"></i> Bagasi 20kg</li>
                        <li><i class="fas fa-tv"></i> Hiburan dasar</li>
                    </ul>
                    <div class="price">Mulai dari Rp 1.000.000</div>
                    <!-- <a href="#" class="select-btn">Pilih Kelas Ini</a> -->
                </div>
            </div>

            <!-- Premium Economy -->
            <div class="class-card">
                <img src="{{ asset('images/ekonomiprem.jpg') }}" alt="Premium Economy" class="class-image">
                <div class="class-content">
                    <h3 class="class-title">
                        <i class="fas fa-plane"></i>
                        Premium Economy
                    </h3>
                    <p class="class-description">
                        Peningkatan kenyamanan dengan layanan tambahan. Ideal untuk perjalanan menengah dengan budget optimal.
                    </p>
                    <ul class="features-list">
                        <li><i class="fas fa-chair"></i> Kursi lebih lebar</li>
                        <li><i class="fas fa-utensils"></i> Menu makanan premium</li>
                        <li><i class="fas fa-suitcase"></i> Bagasi 30kg</li>
                        <li><i class="fas fa-tv"></i> Hiburan lengkap</li>
                    </ul>
                    <div class="price">Mulai dari Rp 2.500.000</div>
                    <!-- <a href="#" class="select-btn">Pilih Kelas Ini</a> -->
                </div>
            </div>

            <!-- Business Class -->
            <div class="class-card">
                <img src="{{ asset('images/bisnis2.jpg') }}" alt="Business Class" class="class-image">
                <div class="class-content">
                    <h3 class="class-title">
                        <i class="fas fa-plane"></i>
                        Business Class
                    </h3>
                    <p class="class-description">
                        Pengalaman perjalanan premium dengan privasi dan kenyamanan tingkat tinggi. Sempurna untuk pebisnis.
                    </p>
                    <ul class="features-list">
                        <li><i class="fas fa-chair"></i> Kursi dapat direbahkan penuh</li>
                        <li><i class="fas fa-utensils"></i> Menu fine dining</li>
                        <li><i class="fas fa-suitcase"></i> Bagasi 40kg</li>
                        <li><i class="fas fa-glass-martini-alt"></i> Lounge access</li>
                    </ul>
                    <div class="price">Mulai dari Rp 5.000.000</div>
                    <!-- <a href="#" class="select-btn">Pilih Kelas Ini</a> -->
                </div>
            </div>

            <!-- First Class -->
            <div class="class-card">
                <img src="{{ asset('images/class.jpg') }}" alt="First Class" class="class-image">
                <div class="class-content">
                    <h3 class="class-title">
                        <i class="fas fa-plane"></i>
                        First Class
                    </h3>
                    <p class="class-description">
                        Kemewahan tanpa batas dengan layanan personal eksklusif. Pengalaman terbaik di udara.
                    </p>
                    <ul class="features-list">
                        <li><i class="fas fa-door-closed"></i> Suite pribadi</li>
                        <li><i class="fas fa-utensils"></i> Menu fine dining on-demand</li>
                        <li><i class="fas fa-suitcase"></i> Bagasi 50kg</li>
                        <li><i class="fas fa-concierge-bell"></i> Personal butler</li>
                    </ul>
                    <div class="price">Mulai dari Rp 15.000.000</div>
                    <!-- <a href="#" class="select-btn">Pilih Kelas Ini</a> -->
                </div>
            </div>
        </div>
    </section>
</body>
</html>
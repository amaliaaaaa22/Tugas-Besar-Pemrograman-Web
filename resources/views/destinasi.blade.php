<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyBooking - Pesan Tiket Pesawat</title>
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
            font-weight: 700;
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
            height: 400px; /* Reduced from 600px */
            background: linear-gradient(rgba(10, 21, 227, 0.63), rgba(7, 69, 204, 0.66)), url('/api/placeholder/1920/400');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 60px; /* Reduced from 72px */
        }

        .hero-content {
            text-align: center;
            color: white;
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title {
            font-size: 2.8rem; /* Reduced from 3.5rem */
            margin-bottom: 0.8rem;
            font-weight: 700;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        .search-container {
            background: white;
            padding: 1.5rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 1000px;
            margin: -30px auto 0; /* Adjusted from -50px */
            position: relative;
        }

        .search-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1rem;
        }

        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
        }

        .form-input {
            width: 100%;
            padding: 0.7rem 1rem 0.7rem 2.5rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(30, 144, 255, 0.1);
        }

        .search-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
            background: var(--secondary);
        }

        .destinations {
            max-width: 1200px;
            margin: 2rem auto; /* Reduced from 4rem */
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 1.8rem; /* Reduced from 2rem */
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .destination-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .destination-card {
            background: white;
            border-radius: 0.8rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .destination-card:hover {
            transform: translateY(-5px);
        }

        .card-image {
            height: 160px; /* Reduced from 200px */
            width: 100%;
            object-fit: cover;
        }

        .card-content {
            padding: 1.2rem;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 0.4rem;
            color: var(--dark);
        }

        .card-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.4rem;
            color: #4a90e2;
            font-size: 0.9rem;
        }

        .price {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary);
            margin: 0.8rem 0;
        }

        .book-btn {
            display: block;
            width: 100%;
            background: var(--primary);
            color: white;
            text-align: center;
            padding: 0.7rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .book-btn:hover {
            background: var(--secondary);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .search-container {
                margin: -20px 1rem 0;
            }
            
            .hero {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <?php
    $destinations = [
        [
            'city' => 'Bali',
            'code' => 'DPS',
            'image' => '/api/placeholder/400/250',
            'description' => 'Keindahan pantai dan budaya eksotis',
            'price' => 'Rp 1.500.000',
            'duration' => '1j 45m',
            'rating' => '4.8'
        ],
        [
            'city' => 'Jakarta',
            'code' => 'CGK',
            'image' => '/api/placeholder/400/250',
            'description' => 'Pusat bisnis dan ibu kota Indonesia',
            'price' => 'Rp 1.200.000',
            'duration' => '1j 30m',
            'rating' => '4.5'
        ],
        [
            'city' => 'Surabaya',
            'code' => 'SUB',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pahlawan dengan wisata sejarah',
            'price' => 'Rp 1.300.000',
            'duration' => '1j 15m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Bandung',
            'code' => 'BDO',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota kebanggaan Indonesia',
            'price' => 'Rp 1.100.000',
            'duration' => '1j 45m',
            'rating' => '4.7'
        ],
        [
            'city' => 'Yogyakarta',
            'code' => 'JOG',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pelajar dengan kebudayaan tradisional',
            'price' => 'Rp 1.400.000',
            'duration' => '1j 30m',
            'rating' => '4.7'
        ],
        [
            'city' => 'Medan',
            'code' => 'KNO',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota terbesar di Sumatera Utara',
            'price' => 'Rp 1.600.000',
            'duration' => '1j 45m',
            'rating' => '4.5'
        ],
        [
            'city' => 'Semarang',
            'code' => 'SRG',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pelabuhan dengan bangunan bersejarah',
            'price' => 'Rp 1.250.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Makassar',
            'code' => 'UPG',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Palembang',
            'code' => 'PLM',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Denpasar',
            'code' => 'DPS',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Padang',
            'code' => 'PDG',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Balikpapan',
            'code' => 'BPN',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Pontianak',
            'code' => 'PNK',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Manado',
            'code' => 'MDC',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6',
        ],
        [
            'city' => 'Banjarmasin',
            'code' => 'BDJ',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Pekanbaru',
            'code' => 'PKU',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Bandar Lampung',
            'code' => 'TKG',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Samarinda',
            'code' => 'SRI',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Ternate',
            'code' => 'TTE',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
        [
            'city' => 'Ambon',
            'code' => 'AMQ',
            'image' => '/api/placeholder/400/250',
            'description' => 'Kota pesisir dengan keindahan alam',
            'price' => 'Rp 1.350.000',
            'duration' => '1j 30m',
            'rating' => '4.6'
        ],
];
    ?>

    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">SkyBooking</a>
            <div class="nav-links">
                <a href="#"><i class="fas fa-home"></i> Beranda</a>
                <a href="#"><i class="fas fa-tag"></i> Promo</a>
                <a href="#"><i class="fas fa-plane"></i> Destinasi</a>
                <a href="#"><i class="fas fa-headset"></i> Bantuan</a>
                <a href="#"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Jelajahi Dunia Bersama Kami</h1>
            <p class="hero-subtitle">Temukan penerbangan terbaik ke destinasi impian Anda</p>
        </div>
    </section>

    <div class="search-container">
        <form class="search-form">
            <div class="form-group">
                <i class="fas fa-plane-departure"></i>
                <input type="text" class="form-input" placeholder="Dari mana?">
            </div>
            <div class="form-group">
                <i class="fas fa-plane-arrival"></i>
                <input type="text" class="form-input" placeholder="Ke mana?">
            </div>
            <div class="form-group">
                <i class="fas fa-calendar"></i>
                <input type="date" class="form-input">
            </div>
            <div class="form-group">
                <i class="fas fa-users"></i>
                <select class="form-input">
                    <option value="">Jumlah Penumpang</option>
                    <option value="1">1 Penumpang</option>
                    <option value="2">2 Penumpang</option>
                    <option value="3">3 Penumpang</option>
                    <option value="4">4+ Penumpang</option>
                </select>
            </div>
            <button type="submit" class="search-btn">
                <i class="fas fa-search"></i> Cari Penerbangan
            </button>
        </form>
    </div>

    <section class="destinations">
        <h2 class="section-title">Destinasi Populer</h2>
        <div class="destination-grid">
            <?php foreach($destinations as $dest): ?>
            <div class="destination-card">
                <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['city']; ?>" class="card-image">
                <div class="card-content">
                    <h3 class="card-title"><?php echo $dest['city']; ?> (<?php echo $dest['code']; ?>)</h3>
                    <div class="card-info">
                        <i class="fas fa-info-circle"></i>
                        <span><?php echo $dest['description']; ?></span>
                    </div>
                    <div class="card-info">
                        <i class="fas fa-clock"></i>
                        <span>Durasi: <?php echo $dest['duration']; ?></span>
                    </div>
                    <div class="card-info">
                        <i class="fas fa-star"></i>
                        <span>Rating: <?php echo $dest['rating']; ?></span>
                    </div>
                    <div class="price"><?php echo $dest['price']; ?></div>
                    <a href="#" class="book-btn">
                        <i class="fas fa-ticket-alt"></i> Pesan Sekarang
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>
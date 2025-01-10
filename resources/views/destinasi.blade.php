<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Penerbangan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        
        :root {
            --primary-color: #2c3e50;
            --accent-color: #3498db;
            --gradient-start: #2980b9;
            --gradient-end: #3498db;
        }

        body {
            background-color: #f8f9fa;
        }

        nav {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo span {
            color: var(--accent-color);
        }

        .nav-links a {
            color: var(--primary-color);
            text-decoration: none;
            margin-left: 30px;
            font-weight: 500;
            transition: color 0.3s ease;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        .hero-section {
            position: relative;
            height: 400px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 24px;
        }

        .main-content {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-content h1 {
            font-size: 28px;
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            text-align: left;
            padding: 10px 15px;
            background-color: rgb(38, 110, 173);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .back-button:hover {
            background-color: rgb(11, 56, 90);
        }

        .destination-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .destination-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 15px;
            text-align: center;
        }

        .destination-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .destination-info {
            margin-bottom: 10px;
        }

        .destination-info h2 {
            font-size: 20px;
            margin: 0;
            color: #333;
        }

        .destination-info p {
            margin: 5px 0;
            color: #555;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            width: 100%;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button i {
            margin-right: 8px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 1024px) {
            .destination-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .destination-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .destination-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<nav>
        <div class="container">
            <a href="#" class="logo">Sky<span>Booking</span></a>
            <div class="nav-links">
                <a href="./beranda"><i class="fas fa-home"></i> Beranda</a>
                <a href="#"><i class="fas fa-tag"></i> Promo</a>
                <a href="./destinasi"><i class="fas fa-plane"></i> Destinasi</a>
                <a href="#"><i class="fas fa-headset"></i> Bantuan</a>
                <a href="./login"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>
    <div class="hero-section">
        <img src="./bg1.jpg" alt="Beach destination" class="hero-image">
        <div class="hero-content">
            <h1>Jelajahi Destinasi Impian Anda</h1>
            <p>Temukan pengalaman perjalanan tak terlupakan</p>
        </div>
    </div>

    <div class="main-content">
        <h1>Destinasi Penerbangan Populer</h1>
        <a href="/beranda" class="back-button">&larr; Kembali</a>

        <div class="destination-grid">
            <!-- Destinasi 1 -->
            <div class="destination-card">
                <a href="https://pin.it/7H6sEEjSj" target="_blank"><img src="https://via.placeholder.com/300" alt="Bali"></a>
                <div class="destination-info">
                    <h2>Bali (DPS)</h2>
                    <p><i class="fas fa-plane"></i> Keindahan pantai dan budaya eksotis.</p>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 2 -->
            <div class="destination-card">
                <a href="https://via.placeholder.com/300" target="_blank"><img src="https://via.placeholder.com/300" alt="Jakarta"></a>
                <div class="destination-info">
                    <h2>Jakarta (CGK)</h2>
                    <p><i class="fas fa-plane"></i> Pusat bisnis dan ibu kota Indonesia.</p>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 3 -->
            <div class="destination-card">
                <a href="https://via.placeholder.com/300" target="_blank"><img src="https://via.placeholder.com/300" alt="Surabaya"></a>
                <div class="destination-info">
                    <h2>Surabaya (SUB)</h2>
                    <p><i class="fas fa-plane"></i> Kota pahlawan dengan wisata sejarah.</p>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 4 -->
            <div class="destination-card">
                <a href="https://via.placeholder.com/300" target="_blank"><img src="https://via.placeholder.com/300" alt="Medan"></a>
                <div class="destination-info">
                    <h2>Medan (KNO)</h2>
                    <p><i class="fas fa-plane"></i> Kuliner khas dan keindahan Danau Toba.</p>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 5 -->
            <div class="destination-card">
                <a href="https://via.placeholder.com/300" target="_blank"><img src="https://via.placeholder.com/300" alt="Bandung"></a>
                <div class="destination-info">
                    <h2>Bandung (BDO)</h2>
                    <p><i class="fas fa-plane"></i> Wisata alam dan belanja fashion.</p>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 6 -->
            <div class="destination-card">
                <a href="https://via.placeholder.com/300" target="_blank"><img src="https://via.placeholder.com/300" alt="Makassar"></a>
                <div class="destination-info">
                    <h2>Makassar (UPG)</h2>
                    <p><i class="fas fa-plane"></i> Wisata bahari dan kuliner khas Sulawesi.</p>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>
        </div>
    </div>
</body>
</html>
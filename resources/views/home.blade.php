<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyBooking - Booking Tiket Pesawat Online</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 80px;
        }

        .hero-content {
            text-align: center;
            color: white;
            margin-bottom: 2rem;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            color: #3498db; /* Mengubah warna teks menjadi biru */
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #3498db; /* Mengubah warna teks menjadi biru */
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .search-box {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 90%;
            max-width: 1000px;
            backdrop-filter: blur(10px);
        }

        .search-form {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.7rem;
            font-weight: 600;
            color: var(--primary-color);
            font-size: 0.95rem;
        }

        input, select {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: white;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .search-btn {
            grid-column: 1 / -1;
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-end));
            color: white;
            padding: 1.2rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            transition: transform 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .features {
            padding: 6rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .features h2 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
            color: var(--primary-color);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-card i {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }

        .promo-section {
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-end));
            padding: 4rem 2rem;
            color: white;
            text-align: center;
        }

        .promo-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .promo-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .promo-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 4rem 2rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
        }

        .footer-section h3 {
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.8rem;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: white;
        }

        .copyright {
            text-align: center;
            padding-top: 3rem;
            margin-top: 3rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #ccc;
        }

        @media (max-width: 768px) {
            .search-form {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="#" class="logo">Sky<span>Booking</span></a>
            <div class="nav-links">
                <a href="#"><i class="fas fa-home"></i> Beranda</a>
                <a href="#"><i class="fas fa-tag"></i> Promo</a>
                <a href="#"><i class="fas fa-plane"></i> Destinasi</a>
                <a href="#"><i class="fas fa-headset"></i> Bantuan</a>
                <a href="#"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="search-box">
            <div class="hero-content">
                <h1>Temukan Penerbangan Terbaik</h1>
                <p>Jelajahi dunia dengan harga terbaik dan pelayanan premium</p>
            </div>
            <form class="search-form">
                <div class="form-group">
                    <label for="from"><i class="fas fa-plane-departure"></i> Dari</label>
                    <input type="text" id="from" placeholder="Kota Keberangkatan">
                </div>
                <div class="form-group">
                    <label for="to"><i class="fas fa-plane-arrival"></i> Ke</label>
                    <input type="text" id="to" placeholder="Kota Tujuan">
                </div>
                <div class="form-group">
                    <label for="departure"><i class="far fa-calendar-alt"></i> Tanggal Berangkat</label>
                    <input type="date" id="departure">
                </div>
                <div class="form-group">
                    <label for="return"><i class="far fa-calendar-alt"></i> Tanggal Kembali</label>
                    <input type="date" id="return">
                </div>
                <div class="form-group">
                    <label for="passengers"><i class="fas fa-users"></i> Jumlah Penumpang</label>
                    <select id="passengers">
                        <option value="1">1 Penumpang</option>
                        <option value="2">2 Penumpang</option>
                        <option value="3">3 Penumpang</option>
                        <option value="4">4+ Penumpang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="class"><i class="fas fa-chair"></i> Kelas Penerbangan</label>
                    <select id="class">
                        <option value="economy">Ekonomi</option>
                        <option value="business">Bisnis</option>
                        <option value="first">First Class</option>
                    </select>
                </div>
                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i> Cari Penerbangan
                </button>
            </form>
        </div>
    </div>

    <section class="features">
        <h2>Mengapa Memilih SkyBooking?</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <i class="fas fa-tag"></i>
                <h3>Harga Terbaik</h3>
                <p>Dapatkan harga tiket pesawat termurah dengan berbagai pilihan maskapai terpercaya dan promo menarik.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-bolt"></i>
                <h3>Mudah dan Cepat</h3>
                <p>Proses booking yang simpel dan cepat, hanya dalam hitungan menit dengan berbagai metode pembayaran.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Aman Terpercaya</h3>
                <p>Transaksi aman dan terpercaya dengan sistem keamanan terkini dan garansi uang kembali 100%.</p>
            </div>
        </div>
    </section>

    <section class="promo-section">
        <div class="promo-content">
            <h2>Dapatkan Promo Spesial!</h2>
            <p>Berlangganan newsletter kami dan dapatkan informasi tentang promo dan penawaran spesial.</p>
            <form class="search-form" style="max-width: 500px; margin: 0 auto;">
                <div class="form-group" style="margin-bottom: 0;">
                    <input type="email" placeholder="Masukkan email Anda" style="border: none;">
                </div>
                <button type="submit" class="search-btn" style="background: var(--primary-color);">
                    Berlangganan
                </button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Tentang SkyBooking</h3>
                <ul>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Produk</h3>
                <ul>
                    <li><a href="#">Tiket Pesawat</a></li>
                    <li><a href="#">Hotel</a></li>
                    <li><a href="#">Paket Wisata</a></li>
                    <li><a href="#">Asuransi Perjalanan</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Bantuan</h3>
                <ul>
                    <li><a href="#">Pusat Bantuan</a></li>
                    <li><a href="#">Cara Pemesanan</a></li>
                    <li><a href="#">Pembayaran</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3><div class="footer-section">
                <h3>Ikuti Kami</h3>
                <div class="social-links" style="display: flex; gap: 1rem; margin-top: 1rem;">
                    <a href="#" style="font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="font-size: 1.5rem;"><i class="fab fa-youtube"></i></a>
                </div>
                <div style="margin-top: 1.5rem;">
                    <h3>Download Aplikasi</h3>
                    <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                        <a href="#"><img src="/api/placeholder/120/40" alt="Play Store" style="border-radius: 5px;"></a>
                        <a href="#"><img src="/api/placeholder/120/40" alt="App Store" style="border-radius: 5px;"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 SkyBooking. Semua hak dilindungi.</p>
            <div style="margin-top: 1rem;">
                <img src="/api/placeholder/300/30" alt="Payment Partners" style="opacity: 0.7;">
            </div>
        </div>
    </footer>
</body>
</html>
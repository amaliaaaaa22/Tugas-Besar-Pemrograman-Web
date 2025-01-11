<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxuryFlight - Premium Flight Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #1e40af;
            --accent: #3b82f6;
            --background: #f8fafc;
            --card: #ffffff;
            --text: #1e293b;
            --text-light: #64748b;
            --border: #e2e8f0;
            --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: var(--background);
            color: var(--text);
        }

        .navbar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .hero {
            height: 85vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url('/api/placeholder/1920/1080') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 0 1rem;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .search-box {
            background: var(--card);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-lg);
            max-width: 1000px;
            margin: -100px auto 0;
            position: relative;
        }

        .tabs {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .tab {
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tab.active {
            background: var(--primary);
            color: white;
        }

        .search-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .search-group {
            position: relative;
        }

        .search-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-light);
        }

        .search-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.5rem;
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            font-size: 0.95rem;
            transition: all 0.2s;
            background: var(--background);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 2.4rem;
            color: var(--text-light);
        }

        .search-button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .search-button:hover {
            background: var(--secondary);
        }

        .features {
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: var(--text);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: var(--card);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.2s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .feature-description {
            color: var(--text-light);
            line-height: 1.6;
        }

        .deals {
            padding: 4rem 0;
            background: white;
        }

        .deals-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .deal-card {
            background: var(--card);
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.2s;
        }

        .deal-card:hover {
            transform: translateY(-5px);
        }

        .deal-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .deal-content {
            padding: 1.5rem;
        }

        .deal-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text);
        }

        .deal-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

        .deal-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 1rem 0;
        }

        .deal-button {
            display: block;
            background: var(--primary);
            color: white;
            text-decoration: none;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            text-align: center;
            font-weight: 500;
            transition: background 0.2s;
        }

        .deal-button:hover {
            background: var(--secondary);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .nav-links {
                display: none;
            }

            .search-box {
                margin: -50px 1rem 0;
                padding: 1.5rem;
            }

            .features, .deals {
                padding: 2rem 0;
            }
        }

        .testimonials {
            padding: 4rem 0;
            background: var(--background);
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: var(--card);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow);
        }

        .testimonial-content {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: var(--text);
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .author-info h4 {
            font-weight: 600;
            color: var(--text);
        }

        .author-info p {
            color: var(--text-light);
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <a href="#" class="logo">
                    <i class="fas fa-plane"></i>
                    LuxuryFlight
                </a>
                <div class="nav-links">
                    <a href="#" class="nav-link"><i class="fas fa-home"></i> Beranda</a>
                    <a href="#" class="nav-link"><i class="fas fa-tag"></i> Promo</a>
                    <a href="#" class="nav-link"><i class="fas fa-map-marker-alt"></i> Destinasi</a>
                    <a href="#" class="nav-link"><i class="fas fa-headset"></i> Bantuan</a>
                    <a href="#" class="nav-link"><i class="fas fa-user-circle"></i> Akun Saya</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Temukan Penerbangan Premium Anda</h1>
            <p class="hero-subtitle">Nikmati pengalaman penerbangan tak terlupakan dengan layanan kelas dunia</p>
        </div>
    </section>

    <div class="container">
        <div class="search-box">
            <div class="tabs">
                <div class="tab active">
                    <i class="fas fa-plane"></i>
                    Penerbangan
                </div>
                <div class="tab">
                    <i class="fas fa-hotel"></i>
                    Hotel
                </div>
                <div class="tab">
                    <i class="fas fa-car"></i>
                    Rental Mobil
                </div>
            </div>

            <form action="#" method="POST">
                <div class="search-grid">
                    <div class="search-group">
                        <label class="search-label">Dari</label>
                        <i class="fas fa-plane-departure search-icon"></i>
                        <input type="text" class="search-input" placeholder="Kota keberangkatan">
                    </div>
                    <div class="search-group">
                        <label class="search-label">Ke</label>
                        <i class="fas fa-plane-arrival search-icon"></i>
                        <input type="text" class="search-input" placeholder="Kota tujuan">
                    </div>
                    <div class="search-group">
                        <label class="search-label">Tanggal Berangkat</label>
                        <i class="fas fa-calendar search-icon"></i>
                        <input type="date" class="search-input">
                    </div>
                    <div class="search-group">
                        <label class="search-label">Tanggal Kembali</label>
                        <i class="fas fa-calendar-alt search-icon"></i>
                        <input type="date" class="search-input">
                    </div>
                    <div class="search-group">
                        <label class="search-label">Penumpang</label>
                        <i class="fas fa-users search-icon"></i>
                        <select class="search-input">
                            <option>1 Penumpang</option>
                            <option>2 Penumpang</option>
                            <option>3 Penumpang</option>
                            <option>4+ Penumpang</option>
                        </select>
                    </div>
                    <div class="search-group">
                        <label class="search-label">Kelas</label>
                        <i class="fas fa-chair search-icon"></i>
                        <select class="search-input">
                            <option>Ekonomi</option>
                            <option>Bisnis</option>
                            <option>First Class</option>
                        </select>
                    </div>
                </div>
                <button class="search-button">
                    <i class="fas fa-search"></i>
                    Cari Penerbangan
                </button>
            </form>
        </div>
    </div>

   <section class="features">
        <div class="container">
            <h2 class="section-title">Mengapa Memilih LuxuryFlight?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Pembayaran Aman</h3>
                    <p class="feature-description">Transaksi aman dengan berbagai metode pembayaran terpercaya dan terenkripsi.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3 class="feature-title">Harga Terbaik</h3>
                    <p class="feature-description">Jaminan harga termurah dengan berbagai promo menarik setiap harinya.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">24/7 Layanan</h3>
                    <p class="feature-description">Tim support kami siap membantu Anda 24 jam setiap hari.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3 class="feature-title">Banyak Pilihan</h3>
                    <p class="feature-description">Ratusan maskapai dan rute penerbangan untuk pilihan terbaik Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="deals">
        <div class="container">
            <h2 class="section-title">Penawaran Spesial</h2>
            <div class="deals-grid">
                <?php
                $deals = [
                    [
                        'image' => '/api/placeholder/400/250',
                        'title' => 'Jakarta ⟶ Bali',
                        'duration' => '1j 45m',
                        'airline' => 'Garuda Indonesia',
                        'price' => 'Rp 1.250.000',
                        'discount' => '25% OFF'
                    ],
                    [
                        'image' => '/api/placeholder/400/250',
                        'title' => 'Jakarta ⟶ Singapore',
                        'duration' => '1j 55m',
                        'airline' => 'Singapore Airlines',
                        'price' => 'Rp 2.500.000',
                        'discount' => '20% OFF'
                    ],
                    [
                        'image' => '/api/placeholder/400/250',
                        'title' => 'Jakarta ⟶ Tokyo',
                        'duration' => '7j 15m',
                        'airline' => 'Japan Airlines',
                        'price' => 'Rp 7.500.000',
                        'discount' => '30% OFF'
                    ]
                ];

                foreach($deals as $deal):
                ?>
                <div class="deal-card">
                    <img src="<?php echo $deal['image']; ?>" alt="<?php echo $deal['title']; ?>" class="deal-image">
                    <div class="deal-content">
                        <h3 class="deal-title"><?php echo $deal['title']; ?></h3>
                        <div class="deal-info">
                            <i class="fas fa-clock"></i>
                            <span><?php echo $deal['duration']; ?></span>
                        </div>
                        <div class="deal-info">
                            <i class="fas fa-plane"></i>
                            <span><?php echo $deal['airline']; ?></span>
                        </div>
                        <div class="deal-info">
                            <i class="fas fa-tag"></i>
                            <span><?php echo $deal['discount']; ?></span>
                        </div>
                        <div class="deal-price"><?php echo $deal['price']; ?></div>
                        <a href="#" class="deal-button">
                            <i class="fas fa-ticket-alt"></i> Pesan Sekarang
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">Apa Kata Mereka?</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-content">
                        "Pengalaman booking yang sangat mudah dan cepat. Harga yang ditawarkan juga sangat kompetitif. Sangat recommended!"
                    </p>
                    <div class="testimonial-author">
                        <img src="/api/placeholder/50/50" alt="User 1" class="author-image">
                        <div class="author-info">
                            <h4>Budi Santoso</h4>
                            <p>Jakarta</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <p class="testimonial-content">
                        "Customer service yang sangat membantu dan responsif. Proses refund juga sangat mudah dan cepat."
                    </p>
                    <div class="testimonial-author">
                        <img src="/api/placeholder/50/50" alt="User 2" class="author-image">
                        <div class="author-info">
                            <h4>Sarah Wulandari</h4>
                            <p>Surabaya</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <p class="testimonial-content">
                        "Banyak pilihan maskapai dan promo menarik. Sudah berkali-kali booking disini dan selalu puas!"
                    </p>
                    <div class="testimonial-author">
                        <img src="/api/placeholder/50/50" alt="User 3" class="author-image">
                        <div class="author-info">
                            <h4>Rudi Hermawan</h4>
                            <p>Bandung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer style="background: var(--text); color: white; padding: 3rem 0; margin-top: 4rem;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 1rem;">Tentang LuxuryFlight</h3>
                    <p style="color: #cbd5e1; line-height: 1.6;">
                        LuxuryFlight adalah platform pemesanan tiket pesawat premium yang menyediakan pengalaman penerbangan terbaik dengan harga kompetitif.
                    </p>
                </div>
                <div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 1rem;">Link Cepat</h3>
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #cbd5e1; text-decoration: none;">Promo</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #cbd5e1; text-decoration: none;">Destinasi Populer</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #cbd5e1; text-decoration: none;">FAQ</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #cbd5e1; text-decoration: none;">Syarat dan Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 1rem;">Hubungi Kami</h3>
                    <p style="color: #cbd5e1; margin-bottom: 0.5rem;"><i class="fas fa-phone"></i> +62 21 1234 5678</p>
                    <p style="color: #cbd5e1; margin-bottom: 0.5rem;"><i class="fas fa-envelope"></i> cs@luxuryflight.com</p>
                    <p style="color: #cbd5e1;"><i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia</p>
                </div>
                <div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 1rem;">Ikuti Kami</h3>
                    <div style="display: flex; gap: 1rem;">
                        <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                        <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #334155;">
                <p>© 2025 LuxuryFlight. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
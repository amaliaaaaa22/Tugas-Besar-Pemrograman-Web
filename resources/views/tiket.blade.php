<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary-color: #1a365d;
            --accent-color: #38bdf8;
            --gradient-start: #0ea5e9;
            --gradient-end: #0284c7;
            --sidebar-width: 280px;
        }

        body {
            background: linear-gradient(135deg, #f0f4f8 0%, #e6eef5 100%);
            min-height: 100vh;
            display: flex;
        }

        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: white;
            padding: 2rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 3rem;
        }

        .logo i {
            color: var(--accent-color);
        }

        .nav-menu {
            list-style: none;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 1rem;
            color: #64748b;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            margin-bottom: 0.5rem;
        }

        .nav-link:hover, .nav-link.active {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
        }

        .nav-link i {
            margin-right: 1rem;
        }

        .main-content {
            flex: 1;
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 2rem;
            color: var(--primary-color);
        }

        .form-group {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .search-box {
            position: relative;
        }

        .search-box label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
            font-weight: 500;
        }

        .search-box input,
        .search-box select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .search-box input:focus,
        .search-box select:focus {
            border-color: var(--accent-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.2);
        }

        .search-button {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .search-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .popular-search {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .tag {
            background: #f0f4f8;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            color: var(--primary-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tag:hover {
            background: var(--accent-color);
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
            .main-content {
                padding: 1rem;
            }
        }
               /* Sidebar Styles */
        .sidebar {
            position: fixed;
            width: var(--sidebar-width);
            height: 100vh;
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 2rem;
            overflow-y: auto;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem; /* Kurangi dari 2.5rem menjadi 1.5rem */
            padding-bottom: 1rem; /* Kurangi dari 1.5rem menjadi 1rem */
            border-bottom: 2px solid #f0f4f8;
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            font-size: 28px;
            color: var(--accent-color);
            transform: rotate(-45deg);
            animation: flyPlane 3s infinite ease-in-out;
        }

        @keyframes flyPlane {
            0%, 100% { transform: rotate(-45deg) translateY(0); }
            50% { transform: rotate(-45deg) translateY(-5px); }
        }
        .logo span {
             background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            background-clip: text; 
             -webkit-background-clip: text; 
             -webkit-text-fill-color: transparent; 
             color: transparent; 
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            margin-bottom: 0.8rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 1.2rem;
            color: #64748b;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav-link i {
            margin-right: 1rem;
            width: 24px;
            text-align: center;
            font-size: 1.1rem;
        }

        .nav-link:hover, .nav-link.active {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(14, 165, 233, 0.2);
        }

        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem 2.5rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            padding: 1rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .header h1 {
            font-size: 1.8rem;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header h1 i {
            color: var(--accent-color);
            font-size: 1.5rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .notifications-icon {
            position: relative;
            cursor: pointer;
        }

        .notifications-icon i {
            font-size: 1.3rem;
            color: #64748b;
        }

        .notifications-icon::after {
            content: '';
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .user-avatar:hover {
            transform: scale(1.05);
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="logo">
                <i class="fas fa-plane"></i>
                Sky<span>Booking</span>
            </a>
        </div>
        <ul class="nav-menu">
            <li>
                <a href="./beranda" class="nav-link">
                    <i class="fas fa-home"></i>
                    Beranda
                </a>
            </li>
            <li>
                <a href="./penerbangan" class="nav-link">
                    <i class="fas fa-plane-departure"></i>
                    Penerbangan Saya
                </a>
            </li>
            <li>
                <a href="/tiket" class="nav-link active">
                    <i class="fas fa-ticket-alt"></i>
                    Pesan Tiket
                </a>
            </li>
            <li>
                <a href="/destinasi" class="nav-link">
                    <i class="fas fa-map-marked-alt"></i>
                    Destinasi
                </a>
            </li>
            <li>
                <a href="./flight_class" class="nav-link">
                    <i class="fas fa-user-circle"></i>
                    Kelas Penerbangan
                </a>
            </li>
            <li>
                <a href="./login" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Pesan Tiket Pesawat</h1>
        </div>

        <form class="form-group">
            <div class="search-box">
                <label><i class="fas fa-plane-departure"></i> Nama</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
            </div>
            <div class="search-box">
                <label><i class="fas fa-plane-departure"></i> Dari</label>
                <input type="text" name="dari" placeholder="Kota Keberangkatan" required>
            </div>
            <div class="search-box">
                <label><i class="fas fa-plane-arrival"></i> Ke</label>
                <input type="text" name="ke" value="{{ request('kota_tujuan') }}" readonly>
                <input type="hidden" name="kode_tujuan" value="{{ request('kode_tujuan') }}">
            </div>
            <div class="search-box">
                <label><i class="far fa-calendar-alt"></i> Tanggal Berangkat</label>
                <input type="date" name="tanggal_berangkat" required min="{{ date('Y-m-d') }}">
            </div>
            <div class="search-box">
                <label><i class="far fa-calendar-alt"></i> Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" min="{{ date('Y-m-d') }}">
            </div>
            <div class="search-box">
                <label><i class="fas fa-users"></i> Jumlah Penumpang</label>
                <select name="jumlah_penumpang">
                    <option value="1">1 Penumpang</option>
                    <option value="2">2 Penumpang</option>
                    <option value="3">3 Penumpang</option>
                    <option value="4">4+ Penumpang</option>
                </select>
            </div>
            <div class="search-box">
                <label><i class="fas fa-chair"></i> Kelas Penerbangan</label>
                <select name="kelas_penerbangan">
                    <option value="ekonomi">Ekonomi</option>
                    <option value="bisnis">Bisnis</option>
                    <option value="first">First Class</option>
                </select>
            </div>
            <div class="search-box">
                <label><i class="fas fa-clock"></i> Durasi</label>
                <input type="text" name="durasi" value="{{ request('durasi') }}" readonly>
            </div>
            <div class="search-box">
                <label><i class="fas fa-ticket"></i> Harga</label>
                <input type="text" name="harga" value="{{ request('harga') }}" readonly>
            </div>
            <a href="/transaksi" type="submit" class="search-button" style="text-decoration: none;">Pesan Tiket Anda</a>
        </form>

        <div class="popular-search">
            <h3>Destinasi Populer</h3>
            <div class="tags">
                <span class="tag">Bali</span>
                <span class="tag">Yogyakarta</span>
                <span class="tag">Lombok</span>
                <span class="tag">Raja Ampat</span>
                <span class="tag">Bromo</span>
                <span class="tag">Jakarta</span>
                <span class="tag">Bandung</span>
                <span class="tag">Surabaya</span>
            </div>
        </div>
    </div>
</body>
</html>
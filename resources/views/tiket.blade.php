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
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            padding: 2rem;
            color: white;
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 3rem;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 1rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            margin-bottom: 0.5rem;
        }

        .nav-link:hover, .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
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
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#" class="logo">
            <i class="fas fa-plane"></i>
            SkyBooking
        </a>
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
                <label><i class="fas fa-plane-departure"></i> Dari</label>
                <input type="text" placeholder="Kota Keberangkatan">
            </div>
            <div class="search-box">
                <label><i class="fas fa-plane-arrival"></i> Ke</label>
                <input type="text" placeholder="Kota Tujuan">
            </div>
            <div class="search-box">
                <label><i class="far fa-calendar-alt"></i> Tanggal Berangkat</label>
                <input type="date">
            </div>
            <div class="search-box">
                <label><i class="far fa-calendar-alt"></i> Tanggal Kembali</label>
                <input type="date">
            </div>
            <div class="search-box">
                <label><i class="fas fa-users"></i> Jumlah Penumpang</label>
                <select>
                    <option>1 Penumpang</option>
                    <option>2 Penumpang</option>
                    <option>3 Penumpang</option>
                    <option>4+ Penumpang</option>
                </select>
            </div>
            <div class="search-box">
                <label><i class="fas fa-chair"></i> Kelas Penerbangan</label>
                <select>
                    <option>Ekonomi</option>
                    <option>Bisnis</option>
                    <option>First Class</option>
                </select>
            </div>
            <button class="search-button">Cari Penerbangan</button>
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
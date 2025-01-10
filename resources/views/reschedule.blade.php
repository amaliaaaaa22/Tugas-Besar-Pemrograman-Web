<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyBooking - Reschedule Penerbangan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Existing styles (same as the previous code) */
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
            color: #3498db;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #3498db;
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
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="#" class="logo">Sky<span>Booking</span></a>
            <div class="nav-links">
                <a href="./beranda"><i class="fas fa-home"></i> Beranda</a>
                <a href="#"><i class="fas fa-calendar-alt"></i> Reschedule</a>
                <a href="./destinasi"><i class="fas fa-plane"></i> Destinasi</a>
                <a href="#"><i class="fas fa-headset"></i> Bantuan</a>
                <a href="./login"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="search-box">
            <div class="hero-content">
                <h1>Reschedule Penerbangan Anda</h1>
                <p>Atur ulang jadwal penerbangan Anda dengan mudah dan cepat.</p>
            </div>
            <form class="search-form">
                <div class="form-group">
                    <label for="from"><i class="fas fa-plane-departure"></i> Dari</label>
                    <input type="text" id="from" placeholder="Kota Keberangkatan" required>
                </div>
                <div class="form-group">
                    <label for="to"><i class="fas fa-plane-arrival"></i> Ke</label>
                    <input type="text" id="to" placeholder="Kota Tujuan" required>
                </div>
                <div class="form-group">
                    <label for="departure"><i class="far fa-calendar-alt"></i> Tanggal Berangkat</label>
                    <input type="date" id="departure" required>
                </div>
                <div class="form-group">
                    <label for="return"><i class="far fa-calendar-alt"></i> Tanggal Kembali</label>
                    <input type="date" id="return" required>
                </div>
                <div class="form-group">
                    <label for="passengers"><i class="fas fa-users"></i> Jumlah Penumpang</label>
                    <select id="passengers" required>
                        <option value="1">1 Penumpang</option>
                        <option value="2">2 Penumpang</option>
                        <option value="3">3 Penumpang</option>
                        <option value="4">4+ Penumpang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="class"><i class="fas fa-chair"></i> Kelas Penerbangan</label>
                    <select id="class" required>
                        <option value="economy">Ekonomi</option>
                        <option value="business">Bisnis</option>
                        <option value="first">First Class</option>
                    </select>
                </div>
                <button type="submit" class="search-btn">
                    <i class="fas fa-sync"></i> Reschedule Penerbangan
                </button>
            </form>
        </div>
    </div>
</body>
</html>

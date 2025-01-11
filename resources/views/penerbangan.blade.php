<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbangan Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --background-color: #f4f6f9;
            --card-color: #ffffff;
            --text-color: #2c3e50;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            line-height: 1.6;
            color: var(--text-color);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .page-header h1 {
            font-size: 24px;
            font-weight: 700;
        }

        .page-header .user-info {
            display: flex;
            align-items: center;
        }

        .page-header .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .flight-card {
            background-color: var(--card-color);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            margin-bottom: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .flight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }

        .flight-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: linear-gradient(135deg, var(--primary-color), #2980b9);
            color: white;
        }

        .flight-body {
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .flight-details {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .flight-details p {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-confirmed {
            background-color: var(--secondary-color);
            color: white;
        }

        .flight-icon {
            font-size: 50px;
            color: rgba(255,255,255,0.7);
        }

        .route-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .route-info i {
            font-size: 24px;
        }

        @media (max-width: 600px) {
            .flight-body {
                grid-template-columns: 1fr;
            }
        }
    </style>
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
            background-color: #f0f4f8;
            min-height: 100vh;
            position: relative;
        }

        /* Animated Background */
        .bg-pattern {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            opacity: 0.4;
            background: 
                linear-gradient(45deg, transparent 49%, #e5e7eb 49% 51%, transparent 51%) 0 0/30px 30px,
                linear-gradient(-45deg, transparent 49%, #e5e7eb 49% 51%, transparent 51%) 0 0/30px 30px;
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
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
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
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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

        /* Dashboard Cards */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2.5rem;
        }

        .dashboard-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
        }

        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, transparent, rgba(14, 165, 233, 0.1));
            border-radius: 0 20px 0 100%;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.2rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        .card-header i {
            font-size: 1.5rem;
            padding: 1rem;
            background: #f0f9ff;
            border-radius: 12px;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin: 2.5rem 0;
        }

        .action-button {
            background: white;
            border: none;
            padding: 1.5rem;
            border-radius: 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            font-weight: 500;
            color: var(--primary-color);
        }

        .action-button a {
            text-decoration: none; /* Menghapus garis bawah */
            color: inherit; /* Menggunakan warna teks yang diwarisi dari elemen induk */
        }

        .action-button a:hover {
            text-decoration: none; /* Tetap tanpa garis bawah saat hover */
        }

        .action-button i {
            font-size: 1.2rem;
            padding: 1rem;
            background: #f0f9ff;
            border-radius: 12px;
            color: var(--accent-color);
            transition: all 0.3s ease;
        }

        .action-button:hover {
            transform: translateY(-5px);
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
        }

        .action-button:hover i {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        /* Upcoming Flights */
        .upcoming-flights {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .flight-list {
            margin-top: 1.5rem;
        }

        .flight-item {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 2rem;
            align-items: center;
            padding: 1.5rem;
            border-bottom: 2px solid #f0f4f8;
            transition: all 0.3s ease;
        }

        .flight-item:hover {
            background: #f8fafc;
            transform: translateX(5px);
        }

        .flight-icon {
            width: 50px;
            height: 50px;
            background: #f0f9ff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-color);
            font-size: 1.2rem;
        }

        .flight-details h3 {
            font-size: 1.1rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .flight-details h3 i {
            font-size: 0.9rem;
            color: var(--accent-color);
        }

        .flight-details p {
            color: #64748b;
            font-size: 0.95rem;
        }

        .flight-status {
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-confirmed {
            background: #dcfce7;
            color: #15803d;
        }

        /* Notifications */
        .notifications {
            position: fixed;
            top: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        .notification {
            background: white;
            padding: 1.2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            animation: slideIn 0.3s ease;
            border-left: 4px solid var(--accent-color);
        }

        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .notification i {
            color: var(--accent-color);
            font-size: 1.2rem;
        }

        .notification strong {
            color: var(--primary-color);
            display: block;
            margin-bottom: 0.3rem;
        }

        .notification p {
            color: #64748b;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .dashboard-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            :root {
                --sidebar-width: 0px;
            }

            .sidebar {
                transform: translateX(-100%);
                z-index: 1000;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .quick-actions {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
  <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="logo">
                <i class="fas fa-plane"></i>
                Sky<span>Booking</span>
            </a>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="./beranda" class="nav-link">
                    <i class="fas fa-home"></i>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a href="./penerbangan" class="nav-link active">
                    <i class="fas fa-plane-departure"></i>
                    Penerbangan Saya
                </a>
            </li>
            <li class="nav-item">
                <a href="/tiket" class="nav-link">
                    <i class="fas fa-ticket-alt"></i>
                    Pesan Tiket
                </a>
            </li>
            <li class="nav-item">
                <a href="/destinasi" class="nav-link">
                    <i class="fas fa-map-marked-alt"></i>
                    Destinasi
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-circle"></i>
                    Profil
                </a>
            </li>
            <li class="nav-item">
            <a href="./login" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1><i class="fas fa-plane-arrival"></i> Selamat Datang!</h1>
            <div class="user-profile">
                <div class="notifications-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Penerbangan Saya</h1>
            <div class="user-info">
                <img src="https://via.placeholder.com/40" alt="User">
                <span>John Doe</span>
            </div>
        </div>

        <div class="flight-card">
            <div class="flight-header">
                <div class="route-info">
                    <i class="fas fa-plane-departure"></i>
                    <h2>GA123 - Jakarta ke Bali</h2>
                </div>
                <i class="fas fa-plane flight-icon"></i>
            </div>
            <div class="flight-body">
                <div class="flight-details">
                    <p>
                        <strong>Keberangkatan</strong>
                        <span>10:00 WIB</span>
                    </p>
                    <p>
                        <strong>Asal</strong>
                        <span>Jakarta (CGK)</span>
                    </p>
                </div>
                <div class="flight-details">
                    <p>
                        <strong>Kedatangan</strong>
                        <span>12:00 WITA</span>
                    </p>
                    <p>
                        <strong>Tujuan</strong>
                        <span>Bali (DPS)</span>
                    </p>
                </div>
                <div class="flight-details" style="grid-column: 1 / -1;">
                    <p>
                        <strong>Status</strong>
                        <span class="status-badge status-confirmed">Confirmed</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="flight-card">
            <div class="flight-header">
                <div class="route-info">
                    <i class="fas fa-plane-departure"></i>
                    <h2>GA124 - Bali ke Jakarta</h2>
                </div>
                <i class="fas fa-plane flight-icon"></i>
            </div>
            <div class="flight-body">
                <div class="flight-details">
                    <p>
                        <strong>Keberangkatan</strong>
                        <span>15:00 WITA</span>
                    </p>
                    <p>
                        <strong>Asal</strong>
                        <span>Bali (DPS)</span>
                    </p>
                </div>
                <div class="flight-details">
                    <p>
                        <strong>Kedatangan</strong>
                        <span>17:00 WIB</span>
                    </p>
                    <p>
                        <strong>Tujuan</strong>
                        <span>Jakarta (CGK)</span>
                    </p>
                </div>
                <div class="flight-details" style="grid-column: 1 / -1;">
                    <p>
                        <strong>Status</strong>
                        <span class="status-badge status-confirmed">Confirmed</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
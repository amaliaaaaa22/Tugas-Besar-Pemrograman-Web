<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - SkyBooking</title>
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
            --sidebar-width: 250px;
        }

        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            width: var(--sidebar-width);
            height: 100vh;
            background: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            padding: 1.5rem;
            overflow-y: auto;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo span {
            color: var(--accent-color);
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 1rem;
            color: var(--primary-color);
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .nav-link i {
            margin-right: 1rem;
            width: 20px;
            text-align: center;
        }

        .nav-link:hover, .nav-link.active {
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-end));
            color: white;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Dashboard Cards */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .dashboard-card {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .card-title {
            font-size: 1.1rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        .upcoming-flights {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .flight-list {
            margin-top: 1rem;
        }

        .flight-item {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 1.5rem;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }

        .flight-icon {
            width: 40px;
            height: 40px;
            background: #f8f9fa;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-color);
        }

        .flight-details h3 {
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .flight-details p {
            color: #666;
            font-size: 0.9rem;
        }

        .flight-status {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .status-confirmed {
            background: #e3f2fd;
            color: #1976d2;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .action-button {
            background: white;
            border: none;
            padding: 1rem;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .action-button i {
            color: var(--accent-color);
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
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .notification i {
            color: var(--accent-color);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar.active {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="logo">Sky<span>Booking</span></a>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fas fa-home"></i>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-plane"></i>
                    Penerbangan Saya
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-tag"></i>
                    Pesan Tiket
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-history"></i>
                    Destinasi
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    Profil
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Selamat Datang!</h1>
            <div class="user-profile">
                <div class="notifications-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="dashboard-grid">
            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">Poin Rewards</h2>
                    <i class="fas fa-star" style="color: #ffc107;"></i>
                </div>
                <h3 style="font-size: 2rem; color: var(--accent-color);">2,500</h3>
                <p style="color: #666;">Poin tersedia</p>
            </div>
            
            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">Status Member</h2>
                    <i class="fas fa-crown" style="color: #ffc107;"></i>
                </div>
                <h3 style="font-size: 1.5rem; color: var(--accent-color);">Gold Member</h3>
                <p style="color: #666;">Berlaku hingga Des 2024</p>
            </div>

            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">Penerbangan Tahun Ini</h2>
                    <i class="fas fa-plane-departure" style="color: var(--accent-color);"></i>
                </div>
                <h3 style="font-size: 2rem; color: var(--accent-color);">8</h3>
                <p style="color: #666;">Total penerbangan</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <button class="action-button">
                <i class="fas fa-ticket-alt"></i>
                Booking Tiket
            </button>
            <button class="action-button">
                <i class="fas fa-clock"></i>
                Check-in
            </button>
            <button class="action-button">
                <i class="fas fa-exchange-alt"></i>
                Reschedule
            </button>
            <button class="action-button">
                <i class="fas fa-gift"></i>
                Tukar Poin
            </button>
        </div>

        <!-- Upcoming Flights -->
        <div class="upcoming-flights" style="margin-top: 2rem;">
            <div class="card-header">
                <h2 class="card-title">Penerbangan Mendatang</h2>
                <a href="#" style="color: var(--accent-color); text-decoration: none;">Lihat Semua</a>
            </div>
            <div class="flight-list">
                <div class="flight-item">
                    <div class="flight-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <div class="flight-details">
                        <h3>Jakarta (CGK) → Bali (DPS)</h3>
                        <p>24 Dec 2024 • 10:00 AM • GA-402</p>
                    </div>
                    <span class="flight-status status-confirmed">Confirmed</span>
                </div>
                <div class="flight-item">
                    <div class="flight-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <div class="flight-details">
                        <h3>Bali (DPS) → Jakarta (CGK)</h3>
                        <p>28 Dec 2024 • 13:45 PM • GA-409</p>
                    </div>
                    <span class="flight-status status-confirmed">Confirmed</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifications -->
    <div class="notifications">
        <div class="notification">
            <i class="fas fa-info-circle"></i>
            <div>
                <strong>Check-in tersedia</strong>
                <p>Anda dapat melakukan check-in untuk penerbangan GA-402</p>
            </div>
        </div>
    </div>
</body>
</html>
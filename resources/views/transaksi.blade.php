<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbangan Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>

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
                <a href="./transaction_passengers" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    Daftar
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
    
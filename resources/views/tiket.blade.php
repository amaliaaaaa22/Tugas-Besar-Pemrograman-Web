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
            background-color: #f0f4f8;
            min-height: 100vh;
            display: flex;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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
        }

        .logo span {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-menu {
            list-style: none;
            margin-top: 2rem;
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

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 2rem;
        }

        .header {
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 2rem;
            color: var(--primary-color);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background-color: #f5f3ff;
            min-height: 100vh;
            padding: 2rem;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            margin-bottom: 2rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4f46e5;
        }

        .nav-button {
            background-color: #4f46e5;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
        }

        .hero {
            background: linear-gradient(135deg, #fff 0%, #f5f3ff 100%);
            border-radius: 1.5rem;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .hero h1 {
            font-size: 2.5rem;
            color: #1f2937;
            margin-bottom: 1rem;
        }

        .search-container {
            background: white;
            padding: 1rem;
            border-radius: 1rem;
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .search-box {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-right: 1px solid #e5e7eb;
        }

        .search-box:last-child {
            border-right: none;
        }

        .search-box input, .search-box select {
            border: none;
            outline: none;
            width: 100%;
            font-size: 0.9rem;
        }

        .search-button {
            background-color: #4f46e5;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .popular-search {
            margin: 2rem 0;
        }

        .popular-search h3 {
            color: #4b5563;
            margin-bottom: 1rem;
        }

        .tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .tag {
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.9rem;
            color: #4b5563;
            border: 1px solid #e5e7eb;
            cursor: pointer;
        }

        .ticket-list {
            margin-top: 2rem;
        }

        .ticket-card {
            background: white;
            border-radius: 1rem;
            padding: 1rem;
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .ticket-info {
            flex: 1;
        }

        .ticket-actions {
            display: flex;
            gap: 0.5rem;
        }

        .edit-button, .delete-button {
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
        }

        .edit-button {
            background-color: #4f46e5;
            color: white;
        }

        .delete-button {
            background-color: #ef4444;
            color: white;
        }

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
                @media (max-width: 768px) {
            .search-form {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 1.5rem;
                }
            }
    </style>
</head>
<body>
     <div class="bg-pattern"></div>

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
                <a href="./penerbangan" class="nav-link">
                    <i class="fas fa-plane-departure"></i>
                    Penerbangan Saya
                </a>
            </li>
            <li class="nav-item">
                <a href="/tiket" class="nav-link active">
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

</head>
<body>
    <div class="navbar">
        <div class="logo">Sky Booking</div>
        <button class="nav-button">Logout</button>
    </div>

    <div class="hero">
        <h1>Pesan Tiket Pesawat</h1>
        <div class="form-container">
            <form class="form-group">
                <div class="search-box">
                    <label for="from"><i class="fas fa-plane-departure"></i> Dari</label>
                    <input type="text" id="from" placeholder="Kota Keberangkatan">
                </div>
                <div class="search-box">
                    <label for="to"><i class="fas fa-plane-arrival"></i> Ke</label>
                    <input type="text" id="to" placeholder="Kota Tujuan">
                </div>
                <div class="search-box">
                    <label for="departure"><i class="far fa-calendar-alt"></i> Tanggal Berangkat</label>
                    <input type="date" id="departure" placeholder="Tanggal Berangkat">
                </div>
                <div class="search-box">
                    <label for="return"><i class="far fa-calendar-alt"></i> Tanggal Kembali</label>
                    <input type="date" id="return" placeholder="Tanggal Kembali">
                </div>
                <div class="search-box">
                    <label for="passengers"><i class="fas fa-users"></i> Jumlah Penumpang</label>
                    <select id="passengers">
                        <option value="1">1 Penumpang</option>
                        <option value="2">2 Penumpang</option>
                        <option value="3">3 Penumpang</option>
                        <option value="4">4+ Penumpang</option>
                    </select>
                </div>
                <div class="search-box">
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
            <button class="search-button" onclick="saveTicket()">Pesan</button>
    </div>

        <div class="popular-search">
            <h3>Popular Search</h3>
            <div class="tags">
                <span class="tag">Bali</span>
                <span class="tag">Borobudur Temple</span>
                <span class="tag">Bromo</span>
                <span class="tag">Raja Ampat</span>
                <span class="tag">Lombok</span>
                <span class="tag">Yogyakarta</span>
                <span class="tag">Surabaya</span>
                <span class="tag">Jakarta</span>
                <span class="tag">Bandung</span>
                <span class="tag">Semarang</span>
                <span class="tag">Denpasar</span>
                <span class="tag">Medan</span>
                <span class="tag">Surabaya</span>
            </div>
        </div>
    </div>

    <div class="ticket-list" id="ticket-list">
        <!-- Ticket cards will be rendered here -->
    </div>

    <script>
        let tickets = [];

        function renderTickets() {
            const ticketList = document.getElementById("ticket-list");
            ticketList.innerHTML = "";
            
            tickets.forEach((ticket, index) => {
                const card = document.createElement("div");
                card.className = "ticket-card";
                card.innerHTML = `
                    <div class="ticket-info">
                        <h3>${ticket.name}</h3>
                        <p>Destinasi: ${ticket.destination}</p>
                        <p>Jumlah Tiket: ${ticket.quantity}</p>
                    </div>
                    <div class="ticket-actions">
                        <button class="edit-button" onclick="editTicket(${index})">Edit</button>
                        <button class="delete-button" onclick="deleteTicket(${index})">Hapus</button>
                    </div>
                `;
                ticketList.appendChild(card);
            });
        }

        function saveTicket() {
            const name = document.getElementById("name").value;
            const destination = document.getElementById("destination").value;
            const quantity = document.getElementById("quantity").value;

            if (!name || !destination || !quantity) {
                alert("Mohon isi semua field");
                return;
            }

            tickets.push({ name, destination, quantity });
            
            // Reset form
            document.getElementById("name").value = "";
            document.getElementById("destination").value = "";
            document.getElementById("quantity").value = "";
            
            renderTickets();
        }

        function editTicket(index) {
            const ticket = tickets[index];
            document.getElementById("name").value = ticket.name;
            document.getElementById("destination").value = ticket.destination;
            document.getElementById("quantity").value = ticket.quantity;
            
            tickets.splice(index, 1);
            renderTickets();
        }

        function deleteTicket(index) {
            tickets.splice(index, 1);
            renderTickets();
        }
    </script>
</body>
</html>-
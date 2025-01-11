<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour.ink - Pesan Tiket</title>
    <style>
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
    </style>
</head>
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
        
        <div class="search-container">
            <div class="search-box">
                <input type="text" id="name" placeholder="Nama Penumpang" required>
            </div>
            <div class="search-box">
                <select id="destination" required>
                    <option value="">Pilih Destinasi</option>
                    <option value="Bali">Bali</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Medan">Medan</option>
                </select>
            </div>
            <div class="search-box">
                <input type="number" id="quantity" placeholder="Jumlah Tiket" required>
            </div>
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
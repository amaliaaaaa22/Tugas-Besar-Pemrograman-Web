<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Passengers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family:  'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            padding: 0.8rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            text-decoration: none;
            color: #007bff;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: #1a1a1a;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links a i {
            font-size: 1.2rem;
            color: #1a1a1a;
        }

        .nav-links a:hover {
            color: #007bff;
        }

        .nav-links a:hover i {
            color: #007bff;
        }

        /* Container and Form Styles */
        .container {
            max-width: 1200px;
            margin: 80px auto 0;
            padding: 20px;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            max-width: 400px; /* Set max-width agar tidak terlalu lebar */
            margin: 0 auto;   /* Center form horizontally */
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-edit {
            background: #ffc107;
            color: #000;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .table th,
        .table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .table th {
            background: #f8f9fa;
        }

        .alert {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1001;
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
        }

        .passenger-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-top: 0;
            font-size: 1.5rem;
        }

        .card p {
            margin: 5px 0;
        }

        .card-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .card-actions button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
        }

        .card-actions .btn-edit {
            background: #ffc107;
            color: #000;
        }

        .card-actions .btn-delete {
            background: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">SkyBooking</a>
            <div class="nav-links">
                <a href="./beranda"><i class="fas fa-home"></i> Beranda</a>
                <a href="./reschedule"><i class="fas fa-calendar-alt"></i> Reschedule</a>
                <a href="./penerbangan"><i class="fas fa-plane"></i> Penerbangan</a>
                <a href="./tiket"><i class="fas fa-ticket-alt"></i> Tiket Saya</a>
                <a href="./login"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

    <div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-container">
        <h2>Add New Passenger</h2>
        <form action="{{ route('transaction.index') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="form-group">
                <label for="negara">Negara</label>
                <input type="text" class="form-control" id="negara" name="negara" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Passenger</button>
        </form>
    </div>

    <!-- Passenger Cards -->
    <div class="passenger-cards">
        @foreach($passengers as $passenger)
            <div class="card">
                <h3>{{ $passenger->nama }}</h3>
                <p><strong>Tanggal Lahir:</strong> {{ $passenger->tanggal_lahir }}</p>
                <p><strong>Negara:</strong> {{ $passenger->negara }}</p>
                <div class="card-actions">
                    <button class="btn btn-edit" onclick="editPassenger({{ $passenger->id }})">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <form action="{{ url('transaction_passengers/'.$passenger->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this passenger?')">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>


    <!-- Edit Form Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <h2>Edit Passenger</h2>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="edit_nama">Nama</label>
                    <input type="text" class="form-control" id="edit_nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="edit_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="edit_tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label for="edit_negara">Negara</label>
                    <input type="text" class="form-control" id="edit_negara" name="negara" required>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <button type="button" class="btn" onclick="closeModal()">Cancel</button>
            </form>
        </div>
    </div>

    <script>
        function editPassenger(id) {
            fetch(`/transaction_passengers/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('edit_nama').value = data.nama;
                    document.getElementById('edit_tanggal_lahir').value = data.tanggal_lahir;
                    document.getElementById('edit_negara').value = data.negara;
                    document.getElementById('editForm').action = `/transaction_passengers/${id}`;
                    document.getElementById('editModal').style.display = 'block';
                });
        }

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('editModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>
</html>
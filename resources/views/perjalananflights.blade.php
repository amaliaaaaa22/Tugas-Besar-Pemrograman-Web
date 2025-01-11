<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perjalanan Flights</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --primary: #1e90ff;
            --secondary: #0066cc;
            --accent: #4dabff;
            --light: #f0f8ff;
            --dark: #004080;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light);
            line-height: 1.6;
        }

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
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .container {
            max-width: 1200px;
            margin: 100px auto 0;
            padding: 2rem;
        }

        h1 {
            font-size: 2rem;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .flash-message {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 40px;
        }

        .card-header {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: var(--dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-body {
            font-size: 1rem;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: var(--primary);
            color: white;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-align: center;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-sm {
            font-size: 0.9rem;
        }

        .btn-warning {
            background-color: #ffc107;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .actions {
            display: flex;
            justify-content: center;
        }

        .actions form {
            margin-left: 10px;
        }

        .empty-message {
            text-align: center;
            font-style: italic;
            color: #555;
        }

        @media (max-width: 768px) {
            .card-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .card-body {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <i class="fas fa-plane"></i>
                Sky<span>Booking</span>
            </a>
            <div class="nav-links">
                <a href="./beranda"><i class="fas fa-home"></i> Beranda</a>
                <a href="./reschedule"><i class="fas fa-tag"></i> Reschedule</a>
                <a href="./penerbangan"><i class="fas fa-plane"></i> Penerbangan</a>
                <a href="./tiket"><i class="fas fa-headset"></i> Tiket Saya</a>
                <a href="./login"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <!-- Flash message -->
        @if(session('success'))
            <div class="flash-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- Header Section -->
        <div class="card">
            <div class="card-header">
                <h1>Daftar Perjalanan Flights</h1>
                <a href="{{ route('perjalananflights.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>

            <!-- Flights Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Penerbangan</th>
                                <th>Pesawat</th>
                                <th>Segment</th>
                                <th>Classes</th>
                                <th>Transaksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($perjalananflights as $flight)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $flight->no_penerbangan }}</td>
                                    <td>{{ $flight->pesawat->nama_pesawat ?? '-' }}</td>
                                    <td>
                                        @forelse($flight->segments as $segment)
                                            {{ $segment->nama_segment }}<br>
                                        @empty
                                            <small class="text-muted">Tidak ada segment</small>
                                        @endforelse
                                    </td>
                                    <td>
                                        @forelse($flight->classes as $class)
                                            {{ $class->nama_class }}<br>
                                        @empty
                                            <small class="text-muted">Tidak ada class</small>
                                        @endforelse
                                    </td>
                                    <td>
                                        @forelse($flight->transaksi as $transaksi)
                                            ID: {{ $transaksi->id }} - Total: {{ number_format($transaksi->total, 0, ',', '.') }}<br>
                                        @empty
                                            <small class="text-muted">Tidak ada transaksi</small>
                                        @endforelse
                                    </td>
                                    <td class="actions">
                                        <a href="{{ route('perjalananflights.edit', $flight->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{ route('perjalananflights.destroy', $flight->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="empty-message">
                                        <em>Data tidak ditemukan</em>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</body>
</html>

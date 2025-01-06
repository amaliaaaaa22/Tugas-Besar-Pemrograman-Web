<!-- resources/views/perjalananflights/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perjalanan Flights</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Perjalanan Flights</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Penerbangan</th>
                    <th>Pesawat</th>
                    <th>Segment</th>
                    <th>Classes</th>
                    <th>Transaksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($perjalananflights as $flight)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $flight->no_penerbangan }}</td>
                        <td>{{ $flight->pesawat->nama_pesawat ?? '-' }}</td>
                        <td>
                            @foreach($flight->segment as $segment)
                                {{ $segment->nama_segment }}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($flight->classes as $class)
                                {{ $class->nama_class }}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($flight->transaksi as $transaksi)
                                ID: {{ $transaksi->id }} - Total: {{ $transaksi->total }}<br>
                            @endforeach
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

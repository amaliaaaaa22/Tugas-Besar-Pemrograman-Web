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
       <!-- Flash message -->
       @if(session('success'))
           <div class="alert alert-success">
               {{ session('success') }}
           </div>
       @endif

       <!-- Header Section -->
       <div class="d-flex justify-content-between align-items-center mb-4">
           <h1>Daftar Perjalanan Flights</h1>
           <a href="{{ route('perjalananflights.create') }}" class="btn btn-primary">Tambah Data</a>
       </div>

       <!-- Flights Table -->
       <div class="card">
           <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-striped table-bordered">
                       <thead class="table-dark">
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
                                   <td>
                                       <a href="{{ route('perjalananflights.edit', $flight->id) }}" 
                                          class="btn btn-sm btn-warning mb-1">
                                           Edit
                                       </a>
                                       <form action="{{ route('perjalananflights.destroy', $flight->id) }}" 
                                             method="POST" 
                                             class="d-inline">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" 
                                                   class="btn btn-sm btn-danger" 
                                                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                                               Hapus
                                           </button>
                                       </form>
                                   </td>
                               </tr>
                           @empty
                               <tr>
                                   <td colspan="7" class="text-center">
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

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

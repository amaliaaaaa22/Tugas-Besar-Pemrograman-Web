<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Transaksi</h1>

        <!-- Flash Message -->
        <div id="flashMessage" class="alert alert-success" style="display: none;">
            Transaksi berhasil diperbarui!
        </div>

        <!-- Tabel Transaksi -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Transaksi</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Status Pembayaran</th>
                    <th>Subtotal</th>
                    <th>Grandtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="transaksiTableBody">
                <!-- Data akan dimasukkan di sini menggunakan JavaScript -->
            </tbody>
        </table>
    </div>

    <script>
        // Simulasi data transaksi (bisa diganti dengan data dari backend)
        const transaksiData = [
            {
                id: 1,
                code: "TRX001",
                nama: "John Doe",
                email: "john.doe@example.com",
                no_telepon: "081234567890",
                status_pembayaran: "Lunas",
                subtotal: 1000000,
                grandtotal: 1200000
            },
            {
                id: 2,
                code: "TRX002",
                nama: "Jane Smith",
                email: "jane.smith@example.com",
                no_telepon: "081298765432",
                status_pembayaran: "Belum Lunas",
                subtotal: 800000,
                grandtotal: 950000
            }
        ];

        // Render data transaksi ke tabel
        const transaksiTableBody = document.getElementById('transaksiTableBody');

        transaksiData.forEach((item, index) => {
            const row = document.createElement('tr');

            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${item.code}</td>
                <td>${item.nama}</td>
                <td>${item.email}</td>
                <td>${item.no_telepon}</td>
                <td>${item.status_pembayaran}</td>
                <td>${item.subtotal.toLocaleString()}</td>
                <td>${item.grandtotal.toLocaleString()}</td>
                <td>
                    <button class="btn btn-info btn-sm" onclick="viewTransaction(${item.id})">Lihat</button>
                    <button class="btn btn-warning btn-sm" onclick="editTransaction(${item.id})">Ubah</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteTransaction(${item.id})">Hapus</button>
                </td>
            `;

            transaksiTableBody.appendChild(row);
        });

        // Fungsi aksi tombol
        function viewTransaction(id) {
            alert('Melihat detail transaksi ID: ' + id);
        }

        function editTransaction(id) {
            alert('Mengubah transaksi ID: ' + id);
        }

        function deleteTransaction(id) {
            if (confirm('Apakah Anda yakin ingin menghapus transaksi ID: ' + id + '?')) {
                alert('Transaksi ID: ' + id + ' berhasil dihapus.');
            }
        }
    </script>
</body>
</html>

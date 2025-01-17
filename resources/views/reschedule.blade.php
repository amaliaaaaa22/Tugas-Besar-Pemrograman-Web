<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyBooking - Input Penerbangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body class="bg-gradient-to-r from-blue-400 to-blue-600 min-h-screen flex flex-col items-center p-10">
    <div class="text-center text-white mb-8">
        <i class="fas fa-plane text-4xl mb-2"></i>
        <h1 class="text-4xl font-bold mb-1">SkyBooking</h1>
        <p class="text-xl">Reschedule Tiket Penerbangan</p>
    </div>

    <div class="w-full max-w-7xl bg-white rounded-2xl p-8 shadow-lg">
        <div class="grid grid-cols-7 gap-4 bg-blue-500 text-white p-4 rounded-lg mb-6">
            <div class="flex items-center gap-2"><i class="fas fa-plane-departure"></i> DARI</div>
            <div class="flex items-center gap-2"><i class="fas fa-plane-arrival"></i> KE</div>
            <div class="flex items-center gap-2"><i class="far fa-calendar-alt"></i> TANGGAL BERANGKAT</div>
            <div class="flex items-center gap-2"><i class="far fa-calendar-alt"></i> TANGGAL KEMBALI</div>
            <div class="flex items-center gap-2"><i class="fas fa-users"></i> JUMLAH PENUMPANG</div>
            <div class="flex items-center gap-2"><i class="fas fa-chair"></i> KELAS</div>
            <div class="flex items-center gap-2"><i class="fas fa-cog"></i> AKSI</div>
        </div>

        <div id="form-container">
            <div class="grid grid-cols-7 gap-4 bg-gray-100 p-4 rounded-lg mb-4 form-row">
                <div><input type="text" placeholder="Kota Keberangkatan" class="w-full p-3 border rounded-lg"></div>
                <div><input type="text" placeholder="Kota Tujuan" class="w-full p-3 border rounded-lg"></div>
                <div><input type="date" class="w-full p-3 border rounded-lg"></div>
                <div><input type="date" class="w-full p-3 border rounded-lg"></div>
                <div>
                    <select class="w-full p-3 border rounded-lg">
                        <option value="" disabled selected>Pilih Penumpang</option>
                        <option value="1">1 Penumpang</option>
                        <option value="2">2 Penumpang</option>
                        <option value="3">3 Penumpang</option>
                        <option value="4">4+ Penumpang</option>
                    </select>
                </div>
                <div>
                    <select class="w-full p-3 border rounded-lg">
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="economy">Ekonomi</option>
                        <option value="business">Bisnis</option>
                        <option value="first">First Class</option>
                    </select>
                </div>
                <div class="flex gap-2 justify-end">
                    <button class="bg-blue-500 text-white p-2 rounded-lg edit-btn"><i class="fas fa-edit"></i> Edit</button>
                    <button class="bg-red-500 text-white p-2 rounded-lg delete-btn"><i class="fas fa-trash-alt"></i> Hapus</button>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <button id="add-row-btn" class="bg-green-500 text-white p-3 rounded-lg"><i class="fas fa-plus"></i> Tambah Data</button>
        </div>

        <div class="flex justify-end mt-4">
            <!-- Tombol Kembali -->
            <a href="./beranda" class="bg-gray-500 text-white p-3 rounded-lg inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>
    </div>

    <script>
        document.getElementById('add-row-btn').addEventListener('click', function() {
            const formContainer = document.getElementById('form-container');
            const newRow = document.createElement('div');
            newRow.classList.add('grid', 'grid-cols-7', 'gap-4', 'bg-gray-100', 'p-4', 'rounded-lg', 'mb-4', 'form-row');
            newRow.innerHTML = `
                <div><input type="text" placeholder="Kota Keberangkatan" class="w-full p-3 border rounded-lg"></div>
                <div><input type="text" placeholder="Kota Tujuan" class="w-full p-3 border rounded-lg"></div>
                <div><input type="date" class="w-full p-3 border rounded-lg"></div>
                <div><input type="date" class="w-full p-3 border rounded-lg"></div>
                <div>
                    <select class="w-full p-3 border rounded-lg">
                        <option value="" disabled selected>Pilih Penumpang</option>
                        <option value="1">1 Penumpang</option>
                        <option value="2">2 Penumpang</option>
                        <option value="3">3 Penumpang</option>
                        <option value="4">4+ Penumpang</option>
                    </select>
                </div>
                <div>
                    <select class="w-full p-3 border rounded-lg">
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="economy">Ekonomi</option>
                        <option value="business">Bisnis</option>
                        <option value="first">First Class</option>
                    </select>
                </div>
                <div class="flex gap-2 justify-end">
                    <button class="bg-blue-500 text-white p-2 rounded-lg edit-btn"><i class="fas fa-edit"></i> Edit</button>
                    <button class="bg-red-500 text-white p-2 rounded-lg delete-btn"><i class="fas fa-trash-alt"></i> Hapus</button>
                </div>
            `;
            formContainer.appendChild(newRow);
            addEventListeners(newRow);
        });

        function addEventListeners(row) {
            row.querySelector('.edit-btn').addEventListener('click', function() {
                const inputs = row.querySelectorAll('input, select');
                if (this.innerHTML.includes('Edit')) {
                    inputs.forEach(input => input.removeAttribute('disabled'));
                    this.innerHTML = '<i class="fas fa-save"></i> Simpan';
                    this.classList.replace('bg-blue-500', 'bg-green-500');
                } else {
                    inputs.forEach(input => input.setAttribute('disabled', true));
                    this.innerHTML = '<i class="fas fa-edit"></i> Edit';
                    this.classList.replace('bg-green-500', 'bg-blue-500');
                }
            });

            row.querySelector('.delete-btn').addEventListener('click', function() {
                row.remove();
            });
        }

        document.querySelectorAll('.form-row').forEach(row => addEventListeners(row));
    </script>
</body>
</html>
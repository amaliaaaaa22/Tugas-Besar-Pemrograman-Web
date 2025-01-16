<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan Tiket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <style>
        :root {
            --primary-color: #1a365d;
            --accent-color: #38bdf8;
            --gradient-start: #0ea5e9;
            --gradient-end: #0284c7;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .ticket-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 900px;
            padding: 30px;
            display: flex;
            flex-direction: column;
        }

        .ticket-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 15px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
        }

        .logo i {
            color: var(--accent-color);
            margin-right: 10px;
        }

        .ticket-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .section {
            background-color: #f9fafb;
            padding: 20px;
            border-radius: 10px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .info-row label {
            color: #6b7280;
            font-weight: bold;
        }

        .barcode-section {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #barcode {
            max-width: 300px;
            margin-top: 10px;
        }

        .print-button {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            align-self: center;
        }

        .flight-summary {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .summary-item {
            background-color: #f0f4f8;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }

        @media print {
            .print-button {
                display: none;
            }
        }
        .print-button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="ticket-container">
        <div class="ticket-header">
            <div class="logo">
                <i class="fas fa-plane"></i>
                SkyBooking
            </div>
            <div>
                <strong>Nomor Pesanan:</strong> 
                <span id="order-number">SB-2023-1234</span>
            </div>
        </div>

        <div class="ticket-details">
            <div class="section">
                <h3>Rincian Perjalanan</h3>
                <div class="info-row">
                    <label>Kota Keberangkatan</label>
                    <span id="departure-city">Jakarta</span>
                </div>
                <div class="info-row">
                    <label>Kota Tujuan</label>
                    <span id="destination-city">Bali</span>
                </div>
                <div class="info-row">
                    <label>Tanggal Keberangkatan</label>
                    <span id="departure-date">15 Agustus 2023</span>
                </div>
                <div class="info-row">
                    <label>Tanggal Kembali</label>
                    <span id="return-date">22 Agustus 2023</span>
                </div>
            </div>

            <div class="section">
                <h3> Detail Penumpang</h3>
                <div class="info-row">
                    <label>Nama Lengkap</label>
                    <span id="full-name">Andin Dwi</span>
                </div>
                <div class="info-row">
                    <label>Jumlah Penumpang</label>
                    <span id="passenger-count">2 Dewasa</span>
                </div>
                <div class="info-row">
                    <label>Kelas Penerbangan</label>
                    <span id="flight-class">Ekonomi</span>
                </div>
                <div class="info-row">
                    <label>Total Harga</label>
                    <span id="total-price">Rp 2.500.000</span>
                </div>
            </div>
        </div>

        <div class="flight-summary">
            <div class="summary-item">
                <i class="fas fa-plane"></i>
                <h4>Maskapai</h4>
                <p id="airline">Garuda Indonesia</p>
            </div>
            <div class="summary-item">
                <i class="fas fa-chair"></i>
                <h4>Kursi</h4>
                <p id="seat-number">12A, 12B</p>
            </div>
            <div class="summary-item">
                <i class="fas fa-ticket-alt"></i>
                <h4>Status</h4>
                <p id="ticket-status">Terkonfirmasi</p>
            </div>
        </div>

        <div class="barcode-section">
            <h3>Boarding Pass</h3>
            <svg id="barcode"></svg>
        </div>
        <button class="print-button" onclick="showPopup()">
            <i class="fas fa-money-bill"></i> Bayar Sekarang
        </button>

        <!-- Pop-up Modal -->
        <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); 
        background-color: white; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; z-index: 1000; border-radius: 10px;">
            <p>Apakah Anda yakin ingin membayar sekarang?</p>
            <button onclick="confirmPayment()" style="margin-right: 10px;">Ya</button>
            <button onclick="closePopup()">Tidak</button>
        </div>
        <!-- Overlay -->
        <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999;"></div>


            <button class="print-button" onclick="window.print()">
                <i class="fas fa-print"></i> Cetak Tiket
            </button>
        </div>
    <script>
          function showPopup() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }

        function confirmPayment() {
                closePopup();
                alert("Pembayaran berhasil dilakukan!");
                window.location.href = "./penerbangan"; // Arahkan ke halaman penerbangan
            }
        // Fungsi untuk mengambil parameter dari URL
        function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }

        // Fungsi untuk mengisi data tiket
        function populateTicketData() {
            // Contoh data yang bisa diambil dari form sebelumnya
            document.getElementById('departure-city').textContent = 
                getQueryParam('dari') || 'Jakarta';
            document.getElementById('destination-city').textContent = 
                getQueryParam('ke') || 'Bali';
            document.getElementById('departure-date').textContent = 
                getQueryParam('tanggal') || '15 Agustus 2023';
            document.getElementById('return-date').textContent = 
                getQueryParam('kembali') || '22 Agustus 2023';
            document.getElementById('passenger-count').textContent = 
                getQueryParam('jumlah') || '2 Dewasa';
            document.getElementById('flight-class').textContent = 
                getQueryParam('kelas') || 'Ekonomi';
            document.getElementById('total-price').textContent = 
                getQueryParam('harga') || 'Rp 2.500.000';
            document.getElementById('airline').textContent = 
                getQueryParam('maskapai') || 'Garuda Indonesia';
            document.getElementById('seat-number').textContent = 
                getQueryParam('kursi') || '12A, 12B';
            document.getElementById('ticket-status').textContent = 
                getQueryParam('status') || 'Terkonfirmasi';
            document.getElementById('order-number').textContent = 
                getQueryParam('nomor') || 'SB-2023-1234';

            // Generate Barcode
            JsBarcode("#barcode", document.getElementById('order-number').textContent, {
                format: "CODE128",
                width: 2,
                height: 100,
                displayValue: true
            });
        }

        // Panggil fungsi untuk mengisi data tiket saat halaman dimuat
        window.onload = populateTicketData;
    </script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
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
            --sidebar-width: 250px;
        }

        body {
            background: linear-gradient(135deg, #f0f4f8 0%, #e6eef5 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            padding: 1rem;
        }

        .main-content {
            width: 100%;
            max-width: 800px;
            padding: 1rem;
        }

        .transaction-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin: 0 auto;
            font-size: 13px;
            max-width: 600px;
            width: 100%;
        }

        .transaction-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f0f4f8;
        }

        .transaction-header h2 {
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .transaction-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .detail-group {
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
        }

        .detail-label {
            color: #64748b;
            font-size: 0.85rem;
        }

        .detail-value {
            color: var(--primary-color);
            font-weight: 500;
            font-size: 1rem;
        }

        .payment-section {
            background: #f8fafc;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
        }

        .qrcode-container {
            margin: 1.5rem auto;
            width: 160px;
            height: 160px;
        }

        .payment-info {
            margin-top: 1rem;
            text-align: center;
            color: #64748b;
        }

        .total-amount {
            font-size: 1.6rem;
            color: var(--primary-color);
            font-weight: bold;
            margin: 1rem 0;
        }

        .payment-deadline {
            color: #ef4444;
            font-weight: 500;
            margin-top: 1rem;
        }

        .button-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .action-button {
            padding: 0.8rem 1.6rem;
            border-radius: 10px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
        }

        .print-button {
            background: var(--primary-color);
            color: white;
        }

        .back-button {
            background: #e5e7eb;
            color: #64748b;
        }

        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: white;
            padding: 1.5rem;
            position: fixed;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f0f4f8;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo i {
            color: var(--accent-color);
        }

        .nav-menu {
            list-style: none;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.8rem;
            color: #64748b;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            margin-bottom: 0.5rem;
        }

        .nav-link:hover, .nav-link.active {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
        }

        .nav-link i {
            margin-right: 0.8rem;
        }
    </style>
</head>
<body>

    <div class="main-content">
        <div class="transaction-card">
            <div class="transaction-header">
                <h2>Detail Transaksi</h2>
                <div class="transaction-id">ID: TRX-{{ date('Ymd') }}-{{ rand(1000, 9999) }}</div>
            </div>

            <div class="transaction-details">
                <div class="detail-group">
                    <span class="detail-label">Nama Penumpang</span>
                    <span class="detail-value">{{ request('nama') }}</span>
                </div>
                <div class="detail-group">
                    <span class="detail-label">Rute Penerbangan</span>
                    <span class="detail-value">{{ request('dari') }} → {{ request('ke') }}</span>
                </div>
                <div class="detail-group">
                    <span class="detail-label">Tanggal Berangkat</span>
                    <span class="detail-value">{{ request('tanggal_berangkat') }}</span>
                </div>
                <div class="detail-group">
                    <span class="detail-label">Tanggal Kembali</span>
                    <span class="detail-value">{{ request('tanggal_kembali') ?? 'Tidak Ada' }}</span>
                </div>
                <div class="detail-group">
                    <span class="detail-label">Jumlah Penumpang</span>
                    <span class="detail-value">{{ request('jumlah_penumpang') }} Orang</span>
                </div>
                <div class="detail-group">
                    <span class="detail-label">Kelas Penerbangan</span>
                    <span class="detail-value">{{ ucfirst(request('kelas_penerbangan')) }}</span>
                </div>
                <div class="detail-group">
                    <span class="detail-label">Durasi Penerbangan</span>
                    <span class="detail-value">{{ request('durasi') }}</span>
                </div>
            </div>

            <div class="payment-section">
                <h3>Pembayaran</h3>
                <div class="total-amount">Rp {{ number_format((float) request('harga'), 0, ',', '.') }}</div>
                
                <div class="qrcode-container" id="qrcode"></div>

                <div class="payment-info">
                    <p>Silakan scan QR code di atas untuk melakukan pembayaran</p>
                    <p class="payment-deadline">Batas waktu pembayaran: {{ date('d M Y H:i', strtotime('+24 hours')) }}</p>
                </div>

                <div class="button-group">
                    <a href="#" class="action-button print-button" onclick="window.print()">
                        <i class="fas fa-print"></i> Cetak Tiket
                    </a>
                    <a href="/tiket" class="action-button back-button">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Generate QR Code
        document.addEventListener('DOMContentLoaded', function() {
            var qrcode = new QRCode(document.getElementById("qrcode"), {
                text: "SKY-{{ date('Ymd') }}-{{ rand(1000, 9999) }}-{{ request('harga') }}",
                width: 160,
                height: 160,
                colorDark : "#1a365d",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });
        });
    </script>
</body>
</html>

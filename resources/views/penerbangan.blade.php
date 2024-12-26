<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbangan Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Abu-abu terang */
        }

        /* Konten Utama */
        .main-content {
            padding: 20px;
            background-color: #f8f9fa;
        }

        .main-content h1 {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .flight-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .flight-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .flight-info h2 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .flight-details p {
            margin: 5px 0;
            color: #555;
        }

        .status-badge {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- Konten Utama -->
<div class="main-content">
    <h1>Penerbangan Saya</h1>
    
    <!-- Kartu Penerbangan -->
    <div class="flight-card">
        <div class="flight-header">
            <div class="flight-info">
                <h2>Nomor Penerbangan: GA123</h2>
                <p><strong>Asal:</strong> Jakarta (CGK)</p>
                <p><strong>Tujuan:</strong> Bali (DPS)</p>
            </div>
            <i class="fas fa-plane departure-icon" style="font-size: 40px; color: #007bff;"></i>
        </div>
        <div class="flight-details">
            <p><strong>Waktu Keberangkatan:</strong> 10:00 WIB</p>
            <p><strong>Waktu Kedatangan:</strong> 12:00 WITA</p>
            <p><span class="status-badge">Confirmed</span></p>
        </div>
    </div>

    <!-- Kartu Penerbangan Lain -->
    <div class="flight-card">
        <div class="flight-header">
            <div class="flight-info">
                <h2>Nomor Penerbangan: GA124</h2>
                <p><strong>Asal:</strong> Bali (DPS)</p>
                <p><strong>Tujuan:</strong> Jakarta (CGK)</p>
            </div>
            <i class="fas fa-plane departure-icon" style="font-size: 40px; color: #007bff;"></i>
        </div>
        <div class="flight-details">
            <p><strong>Waktu Keberangkatan:</strong> 15:00 WITA</p>
            <p><strong>Waktu Kedatangan:</strong> 17:00 WIB</p>
            <p><span class="status-badge">Confirmed</span></p>
        </div>
    </div>
</div>

</body>
</html>

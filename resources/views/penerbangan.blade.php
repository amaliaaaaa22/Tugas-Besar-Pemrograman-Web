<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Penerbangan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .flight-card {
            background-color: #fff;
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
        .flight-info {
            display: flex;
            flex-direction: column;
        }
        .flight-info h2 {
            margin: 0;
            font-size: 20px;
        }
        .flight-details {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }
        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tampilan Penerbangan Saya</h1>
    
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
            <div>
                <p><strong>Waktu Keberangkatan:</strong> 10:00 WIB</p>
                <p><strong>Waktu Kedatangan:</strong> 12:00 WITA</p>
            </div>
            <button class="button" onclick="alert('Menampilkan detail penerbangan')">Lihat Detail</button>
        </div>
    </div>
</div>

</body>
</html>
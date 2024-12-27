<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbangan Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --background-color: #f4f6f9;
            --card-color: #ffffff;
            --text-color: #2c3e50;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            line-height: 1.6;
            color: var(--text-color);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .page-header h1 {
            font-size: 24px;
            font-weight: 700;
        }

        .page-header .user-info {
            display: flex;
            align-items: center;
        }

        .page-header .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .flight-card {
            background-color: var(--card-color);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            margin-bottom: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .flight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }

        .flight-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: linear-gradient(135deg, var(--primary-color), #2980b9);
            color: white;
        }

        .flight-body {
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .flight-details {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .flight-details p {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-confirmed {
            background-color: var(--secondary-color);
            color: white;
        }

        .flight-icon {
            font-size: 50px;
            color: rgba(255,255,255,0.7);
        }

        .route-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .route-info i {
            font-size: 24px;
        }

        @media (max-width: 600px) {
            .flight-body {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Penerbangan Saya</h1>
            <div class="user-info">
                <img src="https://via.placeholder.com/40" alt="User">
                <span>John Doe</span>
            </div>
        </div>

        <div class="flight-card">
            <div class="flight-header">
                <div class="route-info">
                    <i class="fas fa-plane-departure"></i>
                    <h2>GA123 - Jakarta ke Bali</h2>
                </div>
                <i class="fas fa-plane flight-icon"></i>
            </div>
            <div class="flight-body">
                <div class="flight-details">
                    <p>
                        <strong>Keberangkatan</strong>
                        <span>10:00 WIB</span>
                    </p>
                    <p>
                        <strong>Asal</strong>
                        <span>Jakarta (CGK)</span>
                    </p>
                </div>
                <div class="flight-details">
                    <p>
                        <strong>Kedatangan</strong>
                        <span>12:00 WITA</span>
                    </p>
                    <p>
                        <strong>Tujuan</strong>
                        <span>Bali (DPS)</span>
                    </p>
                </div>
                <div class="flight-details" style="grid-column: 1 / -1;">
                    <p>
                        <strong>Status</strong>
                        <span class="status-badge status-confirmed">Confirmed</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="flight-card">
            <div class="flight-header">
                <div class="route-info">
                    <i class="fas fa-plane-departure"></i>
                    <h2>GA124 - Bali ke Jakarta</h2>
                </div>
                <i class="fas fa-plane flight-icon"></i>
            </div>
            <div class="flight-body">
                <div class="flight-details">
                    <p>
                        <strong>Keberangkatan</strong>
                        <span>15:00 WITA</span>
                    </p>
                    <p>
                        <strong>Asal</strong>
                        <span>Bali (DPS)</span>
                    </p>
                </div>
                <div class="flight-details">
                    <p>
                        <strong>Kedatangan</strong>
                        <span>17:00 WIB</span>
                    </p>
                    <p>
                        <strong>Tujuan</strong>
                        <span>Jakarta (CGK)</span>
                    </p>
                </div>
                <div class="flight-details" style="grid-column: 1 / -1;">
                    <p>
                        <strong>Status</strong>
                        <span class="status-badge status-confirmed">Confirmed</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
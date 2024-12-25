<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran - SkyBooking</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0099ff, #0043a8);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .header .icon {
            color: #0099ff;
            font-size: 40px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .form-control {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #0099ff;
            outline: none;
            box-shadow: 0 0 10px rgba(0, 153, 255, 0.2);
        }

        .btn-submit {
            width: 100%;
            padding: 15px;
            background: #0099ff;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: #0043a8;
            transform: translateY(-2px);
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }

        .footer a {
            color: #0099ff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-plane icon"></i>
            <h1>SkyBooking</h1>
            <p>Daftar untuk memesan tiket pesawat</p>
        </div>

        <form action="login" method="GET">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
            </div>

            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-submit">
                Daftar Sekarang
            </button>
        </form>

        <div class="footer">
            Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
        </div>
    </div>
</body>
</html>
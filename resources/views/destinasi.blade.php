<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Penerbangan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .hero-section {
            position: relative;
            height: 400px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 24px;
        }

        .main-content {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-content h1 {
            font-size: 28px;
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            text-align: left;
            padding: 10px 15px;
            background-color: rgb(38, 110, 173);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .back-button:hover {
            background-color: rgb(11, 56, 90);
        }

        .destination-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .destination-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 15px;
            text-align: center;
        }

        .destination-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .destination-info {
            margin-bottom: 10px;
        }

        .destination-info h2 {
            font-size: 20px;
            margin: 0;
            color: #333;
        }

        .destination-info p {
            margin: 5px 0;
            color: #555;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            width: 100%;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button i {
            margin-right: 8px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .file-upload {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .file-upload input[type="file"] {
            display: none;
        }

        .file-upload label {
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .file-upload label:hover {
            background-color: #0056b3;
        }

        @media (max-width: 1024px) {
            .destination-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .destination-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .destination-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <img src="./bg1.jpg" alt="Beach destination" class="hero-image">
        <div class="hero-content">
            <h1>Jelajahi Destinasi Impian Anda</h1>
            <p>Temukan pengalaman perjalanan tak terlupakan</p>
        </div>
    </div>

    <div class="main-content">
        <h1>Destinasi Penerbangan Populer</h1>
        <a href="/beranda" class="back-button">&larr; Kembali</a>

        <div class="destination-grid">
            <!-- Destinasi 1 -->
            <div class="destination-card">
                <img id="image-bali" src="https://via.placeholder.com/300" alt="Bali">
                <div class="destination-info">
                    <h2>Bali (DPS)</h2>
                    <p><i class="fas fa-plane"></i> Keindahan pantai dan budaya eksotis.</p>
                </div>
                <div class="file-upload">
                    <input type="file" id="upload-bali" accept="image/*" onchange="updateImage('image-bali', 'upload-bali')">
                    <label for="upload-bali">Unggah Foto</label>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 2 -->
            <div class="destination-card">
                <img id="image-jakarta" src="https://via.placeholder.com/300" alt="Jakarta">
                <div class="destination-info">
                    <h2>Jakarta (CGK)</h2>
                    <p><i class="fas fa-plane"></i> Pusat bisnis dan ibu kota Indonesia.</p>
                </div>
                <div class="file-upload">
                    <input type="file" id="upload-jakarta" accept="image/*" onchange="updateImage('image-jakarta', 'upload-jakarta')">
                    <label for="upload-jakarta">Unggah Foto</label>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 3 -->
            <div class="destination-card">
                <img id="image-surabaya" src="https://via.placeholder.com/300" alt="Surabaya">
                <div class="destination-info">
                    <h2>Surabaya (SUB)</h2>
                    <p><i class="fas fa-plane"></i> Kota pahlawan dengan wisata sejarah.</p>
                </div>
                <div class="file-upload">
                    <input type="file" id="upload-surabaya" accept="image/*" onchange="updateImage('image-surabaya', 'upload-surabaya')">
                    <label for="upload-surabaya">Unggah Foto</label>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 4 -->
            <div class="destination-card">
                <img id="image-medan" src="https://via.placeholder.com/300" alt="Medan">
                <div class="destination-info">
                    <h2>Medan (KNO)</h2>
                    <p><i class="fas fa-plane"></i> Kuliner khas dan keindahan Danau Toba.</p>
                </div>
                <div class="file-upload">
                    <input type="file" id="upload-medan" accept="image/*" onchange="updateImage('image-medan', 'upload-medan')">
                    <label for="upload-medan">Unggah Foto</label>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 5 -->
            <div class="destination-card">
                <img id="image-bandung" src="https://via.placeholder.com/300" alt="Bandung">
                <div class="destination-info">
                    <h2>Bandung (BDO)</h2>
                    <p><i class="fas fa-plane"></i> Wisata alam dan belanja fashion.</p>
                </div>
                <div class="file-upload">
                    <input type="file" id="upload-bandung" accept="image/*" onchange="updateImage('image-bandung', 'upload-bandung')">
                    <label for="upload-bandung">Unggah Foto</label>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>

            <!-- Destinasi 6 -->
            <div class="destination-card">
                <img id="image-makassar" src="https://via.placeholder.com/300" alt="Makassar">
                <div class="destination-info">
                    <h2>Makassar (UPG)</h2>
                    <p><i class="fas fa-plane"></i> Wisata bahari dan kuliner khas Sulawesi.</p>
                </div>
                <div class="file-upload">
                    <input type="file" id="upload-makassar" accept="image/*" onchange="updateImage('image-makassar', 'upload-makassar')">
                    <label for="upload-makassar">Unggah Foto</label>
                </div>
                <button class="button"><i class="fas fa-ticket-alt"></i> Pesan Tiket</button>
            </div>
        </div>
    </div>

    <script>
        function updateImage(imageId, inputId) {
            const inputFile = document.getElementById(inputId);
            const imageElement = document.getElementById(imageId);

            if (inputFile.files && inputFile.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imageElement.src = e.target.result;
                };
                reader.readAsDataURL(inputFile.files[0]);
            }
        }
    </script>
</body>
</html>
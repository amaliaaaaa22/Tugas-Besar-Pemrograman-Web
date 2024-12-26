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

        .main-content {
            padding: 20px;
        }

        .main-content h1 {
            font-size: 28px;
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        .destination-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
            padding: 15px;
        }

        .destination-card img {
            width: 100%;
            height: 300px; /* Menambah tinggi gambar */
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
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Input File */
        .file-upload {
            display: flex;
            align-items: center;
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
    </style>
</head>
<body>

<div class="main-content">
    <h1>Destinasi Penerbangan Populer</h1>

    <!-- Daftar Destinasi -->
    <div class="destination-card">
        <img id="image-bali" src="https://via.placeholder.com/300x200" alt="Bali">
        <div class="destination-info">
            <h2>Bali (DPS)</h2>
            <p>Keindahan pantai dan budaya eksotis.</p>
        </div>
        <div class="file-upload">
            <input type="file" id="upload-bali" accept="image/*" onchange="updateImage('image-bali', 'upload-bali')">
            <label for="upload-bali">Unggah Foto</label>
        </div>
        <!-- Tombol Pesan Tiket -->
        <button class="button">Pesan Tiket</button>
    </div>

    <div class="destination-card">
        <img id="image-jakarta" src="https://via.placeholder.com/300x200" alt="Jakarta">
        <div class="destination-info">
            <h2>Jakarta (CGK)</h2>
            <p>Pusat bisnis dan ibu kota Indonesia.</p>
        </div>
        <div class="file-upload">
            <input type="file" id="upload-jakarta" accept="image/*" onchange="updateImage('image-jakarta', 'upload-jakarta')">
            <label for="upload-jakarta">Unggah Foto</label>
        </div>
        <!-- Tombol Pesan Tiket -->
        <button class="button">Pesan Tiket</button>
    </div>
</div>

<script>
    // Fungsi untuk mengganti gambar saat pengguna mengunggah foto baru
    function updateImage(imageId, inputId) {
        const inputFile = document.getElementById(inputId);
        const imageElement = document.getElementById(imageId);

        if (inputFile.files && inputFile.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imageElement.src = e.target.result; // Set URL hasil pembacaan file
            };
            reader.readAsDataURL(inputFile.files[0]); // Membaca file gambar
        }
    }
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Penerbangan Ekslusif</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color:rgba(12, 115, 155, 0.85);
            --secondary-color:rgb(56, 142, 216);
            --accent-color:rgb(95, 134, 207);
            --background-color: #f0f4f8;
            --text-color: #2c3e50;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--background-color) 0%, #e6f2f7 100%);
            color: var(--text-color);
            line-height: 1.6;
        }

        .aviation-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .destination-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 30px;
        }

        .destination-card {
            background-color: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            border: 1px solid rgba(0,0,0,0.05);
            position: relative;
        }

        .destination-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }

        .destination-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 50px rgba(0,0,0,0.15);
        }

        .destination-image {
            position: relative;
            height: 350px;
            overflow: hidden;
        }

        .destination-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .destination-card:hover .destination-image img {
            transform: scale(1.1);
        }

        .destination-content {
            padding: 25px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .destination-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .destination-title {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .destination-title h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .destination-code {
            background-color: var(--accent-color);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        .destination-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .destination-icons {
            display: flex;
            gap: 15px;
            color: var(--secondary-color);
        }

        .destination-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .btn-upload, .btn-book {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 18px;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-upload {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn-book {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-upload:hover, .btn-book:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .destination-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="aviation-container">
        <div class="section-header">
            <h1>
                <i class="fas fa-plane"></i>
                Destinasi Penerbangan Ekslusif
                <i class="fas fa-globe-americas"></i>
            </h1>
        </div>

        <div class="destination-grid">
            <!-- Kartu Destinasi Pertama -->
            <div class="destination-card">
                <div class="destination-image">
                    <img id="image-bali" src="https://via.placeholder.com/400x350" alt="Bali">
                </div>
                <div class="destination-content">
                    <div class="destination-header">
                        <div class="destination-title">
                            <h2>Bali</h2>
                            <span class="destination-code">DPS</span>
                        </div>
                        <div class="destination-icons">
                            <i class="fas fa-umbrella-beach" title="Pantai"></i>
                            <i class="fas fa-mountain" title="Alam"></i>
                            <i class="fas fa-temple" title="Budaya"></i>
                        </div>
                    </div>
                    
                    <div class="destination-details">
                        <div>
                            <strong>Jarak:</strong> 1,124 km
                        </div>
                        <div>
                            <strong>Waktu Terbang:</strong> 2j 15m
                        </div>
                    </div>

                    <div class="destination-actions">
                        <input type="file" id="upload-bali" style="display:none;" accept="image/*" onchange="updateImage('image-bali', this)">
                        <label for="upload-bali" class="btn-upload">
                            <i class="fas fa-cloud-upload-alt"></i> Unggah Foto
                        </label>
                        <a href="#" class="btn-book">
                            <i class="fas fa-ticket-alt"></i> Pesan Tiket
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kartu Destinasi Kedua -->
            <div class="destination-card">
                <div class="destination-image">
                    <img id="image-jakarta" src="https://via.placeholder.com/400x350" alt="Jakarta">
                </div>
                <div class="destination-content">
                    <div class="destination-header">
                        <div class="destination-title">
                            <h2>Jakarta</h2>
                            <span class="destination-code">CGK</span>
                        </div>
                        <div class="destination-icons">
                            <i class="fas fa-city" title="Kota"></i>
                            <i class="fas fa-shopping-bag" title="Belanja"></i>
                            <i class="fas fa-utensils" title="Kuliner"></i>
                        </div>
                    </div>
                    
                    <div class="destination-details">
                        <div>
                            <strong>Jarak:</strong> 1,200 km
                        </div>
                        <div>
                            <strong>Waktu Terbang:</strong> 1j 45m
                        </div>
                    </div>

                    <div class="destination-actions">
                        <input type="file" id="upload-jakarta" style="display:none;" accept="image/*" onchange="updateImage('image-jakarta', this)">
                        <label for="upload-jakarta" class="btn-upload">
                            <i class="fas fa-cloud-upload-alt"></i> Unggah Foto
                        </label>
                        <a href="#" class="btn-book">
                            <i class="fas fa-ticket-alt"></i> Pesan Tiket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateImage(imageId, inputElement) {
            const imageElement = document.getElementById(imageId);
            const file = inputElement.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imageElement.src = e.target.result; // Set URL hasil pembacaan file
                };
                reader.readAsDataURL(file); // Membaca file gambar
            }
        }
    </script>
</body>
</html>
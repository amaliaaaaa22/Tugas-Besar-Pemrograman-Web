<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyBooking - Input Penerbangan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #87CEEB, #1E90FF);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        .logo-container {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .logo-container i {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .logo-container h1 {
            font-size: 2.5em;
            margin-bottom: 5px;
        }

        .logo-container p {
            font-size: 1.2em;
        }

        .container {
            width: 95%;
            max-width: 1800px;
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .header {
            background:rgba(30, 143, 255, 0.69);
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 20px;
        }

        .header > div {
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            font-size: 1em;
            font-weight: 500;
            padding: 0 10px;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 20px;
            padding: 15px;
            align-items: center;
            background: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .form-field {
            position: relative;
        }

        input, select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 0.95em;
            background: white;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            outline: none;
            border-color:rgba(64, 147, 231, 0.7);
            box-shadow: 0 0 0 3px rgba(30, 144, 255, 0.1);
        }

        .btn-container {
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }

        button {
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.9em;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .edit-btn {
            background: #1E90FF;
            color: white;
        }

        .delete-btn {
            background: #ff4757;
            color: white;
        }

        button:hover {
            transform: translateY(-2px);
        }

        .edit-btn:hover {
            background: #187bcd;
        }

        .delete-btn:hover {
            background: #e0394a;
        }

        /* Responsive adjustments */
        @media (max-width: 1400px) {
            .header, .form-row {
                grid-template-columns: repeat(4, 1fr);
            }
            
            .btn-container {
                grid-column: span 4;
                justify-content: flex-start;
            }
        }

        @media (max-width: 768px) {
            .header, .form-row {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .btn-container {
                grid-column: span 2;
            }
            
            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <i class="fas fa-plane"></i>
        <h1>SkyBooking</h1>
        <p>Reschedule Tiket Penerbangan</p>
    </div>

    <div class="container">
        <div class="header">
            <div><i class="fas fa-plane-departure"></i> DARI</div>
            <div><i class="fas fa-plane-arrival"></i> KE</div>
            <div><i class="far fa-calendar-alt"></i> TANGGAL BERANGKAT</div>
            <div><i class="far fa-calendar-alt"></i> TANGGAL KEMBALI</div>
            <div><i class="fas fa-users"></i> JUMLAH PENUMPANG</div>
            <div><i class="fas fa-chair"></i> KELAS</div>
            <div><i class="fas fa-cog"></i> AKSI</div>
        </div>

        <div class="form-row">
            <div class="form-field">
                <input type="text" placeholder="Kota Keberangkatan">
            </div>
            <div class="form-field">
                <input type="text" placeholder="Kota Tujuan">
            </div>
            <div class="form-field">
                <input type="date">
            </div>
            <div class="form-field">
                <input type="date">
            </div>
            <div class="form-field">
                <select>
                    <option value="" disabled selected>Pilih Penumpang</option>
                    <option value="1">1 Penumpang</option>
                    <option value="2">2 Penumpang</option>
                    <option value="3">3 Penumpang</option>
                    <option value="4">4+ Penumpang</option>
                </select>
            </div>
            <div class="form-field">
                <select>
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="economy">Ekonomi</option>
                    <option value="business">Bisnis</option>
                    <option value="first">First Class</option>
                </select>
            </div>
            <div class="btn-container">
                <button class="edit-btn">
                    <i class="fas fa-edit"></i> Edit
                </button>
                <button class="delete-btn">
                    <i class="fas fa-trash-alt"></i> Hapus
                </button>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('.form-row');
                const inputs = row.querySelectorAll('input, select');
                
                if (this.innerHTML.includes('Edit')) {
                    inputs.forEach(input => input.removeAttribute('disabled'));
                    this.innerHTML = '<i class="fas fa-save"></i> Simpan';
                    this.style.backgroundColor = '#27ae60';
                } else {
                    inputs.forEach(input => input.setAttribute('disabled', true));
                    this.innerHTML = '<i class="fas fa-edit"></i> Edit';
                    this.style.backgroundColor = '#1E90FF';
                }
            });
        });

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('.form-row');
                row.style.opacity = '0';
                row.style.transform = 'translateY(20px)';
                row.style.transition = 'all 0.3s ease';
                setTimeout(() => row.remove(), 300);
            });
        });
    </script>
</body>
</html>
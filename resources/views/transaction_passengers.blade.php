<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Passengers</title>
    <style>
        /* Basic styles for the transaction passengers page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="date"] {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form button {
            background-color: red;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Transaction Passengers</h1>

    <!-- Form to add a new passenger -->
    <form action="{{ route('transaction_passengers.store') }}" method="POST" class="form">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label for="negara">Negara</label>
            <input type="text" id="negara" name="negara" required>
        </div>

        <button type="submit">Add Passenger</button>
    </form>

    <!-- List of passengers -->
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Negara</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($passengers as $passenger)
                <tr>
                    <td>{{ $passenger->nama }}</td>
                    <td>{{ $passenger->tanggal_lahir }}</td>
                    <td>{{ $passenger->negara }}</td>
                    <td>
                        <form action="{{ route('transaction_passengers.destroy', $passenger->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

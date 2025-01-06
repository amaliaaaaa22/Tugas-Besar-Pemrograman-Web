<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        form input, form select, form button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
            text-align: center;
        }
        .actions button {
            margin: 0 5px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Pesan Tiket</h1>
    <form id="ticket-form">
        <input type="hidden" id="ticket-id" />
        <input type="text" id="name" placeholder="Nama Penumpang" required />
        <select id="destination" required>
            <option value="">Pilih Destinasi</option>
            <option value="Bali">Bali</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Medan">Medan</option>
        </select>
        <input type="number" id="quantity" placeholder="Jumlah Tiket" required />
        <button type="button" onclick="saveTicket()">Simpan</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Destinasi</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="ticket-list">
            <!-- Data tiket akan ditampilkan di sini -->
        </tbody>
    </table>

    <script>
        let tickets = [];

        function renderTable() {
            const tbody = document.getElementById("ticket-list");
            tbody.innerHTML = "";
            tickets.forEach((ticket, index) => {
                tbody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${ticket.name}</td>
                        <td>${ticket.destination}</td>
                        <td>${ticket.quantity}</td>
                        <td class="actions">
                            <button onclick="editTicket(${index})">Edit</button>
                            <button onclick="deleteTicket(${index})">Hapus</button>
                        </td>
                    </tr>
                `;
            });
        }

        function saveTicket() {
            const id = document.getElementById("ticket-id").value;
            const name = document.getElementById("name").value;
            const destination = document.getElementById("destination").value;
            const quantity = document.getElementById("quantity").value;

            if (id) {
                // Update ticket
                tickets[id] = { name, destination, quantity };
            } else {
                // Add new ticket
                tickets.push({ name, destination, quantity });
            }

            document.getElementById("ticket-form").reset();
            renderTable();
        }

        function editTicket(index) {
            const ticket = tickets[index];
            document.getElementById("ticket-id").value = index;
            document.getElementById("name").value = ticket.name;
            document.getElementById("destination").value = ticket.destination;
            document.getElementById("quantity").value = ticket.quantity;
        }

        function deleteTicket(index) {
            tickets.splice(index, 1);
            renderTable();
        }
    </script>
</body>
</html>

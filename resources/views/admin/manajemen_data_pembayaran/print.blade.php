<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Pembayaran</title>
    <style>
        /* CSS untuk styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .data-item {
            margin-bottom: 15px;
        }

        .data-item label {
            font-weight: bold;
            margin-right: 10px;
            color: #333;
        }

        .data-item span {
            color: #666;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #000; /* Ubah warna menjadi hitam */
        }

        .subtitle {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
            color: #666; /* Ubah warna menjadi abu-abu */
        }

        .button-container {
            text-align: center;
            margin-top: 10px; /* Mengurangi margin atas agar lebih dekat dengan konten */
        }

        .photo {
            max-width: 300px;
            margin-top: 10px;
            border-radius: 5px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container" id="print-content">
        <div class="title">Cetak Data Pembayaran</div>
        <div class="subtitle">TK Al-Muchlis</div> <!-- Tambahkan tulisan TK Al-Muchlis sebagai subjudul -->
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Bukti Pembayaran</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayarans as $index => $pembayaran)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><img src="{{ asset('path/to/your/images/' . $pembayaran->bukti) }}" alt="{{ $pembayaran->bukti }}" class="photo"></td>
                    <td>{{ $pembayaran->tgl_pembayaran }}</td>
                    <td>{{ $pembayaran->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Button for printing -->
        <div class="button-container">
            <button onclick="printData()">Cetak Data</button>
        </div>
    </div>

    <!-- JavaScript untuk mencetak data -->
    <script>
        function printData() {
            var originalContent = document.body.innerHTML;
            var printContent = document.getElementById('print-content').innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
    </script>
</body>

</html>

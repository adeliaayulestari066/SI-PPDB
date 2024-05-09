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

        .photo {
            max-width: 300px;
            margin-top: 10px;
            border-radius: 5px;
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

        .button-container {
            text-align: center;
            margin-top: 10px; /* Mengurangi margin atas agar lebih dekat dengan konten */
        }
    </style>
</head>
<body>
    <div class="container" id="print-content">
        <div class="title">Cetak Data Pembayaran</div>
        <!-- Data pembayaran dari variabel $pembayaran -->
        <div class="data-item">
            <label>Nama siswa:</label>
            <span id="siswa">{{ $pembayaran->siswa->nama_siswa }}</span>
        </div>
        <div class="data-item">
            <label>Bukti Pembayaran:</label>
            <img id="bukti_pembayaran" src="{{ asset('bukti/' . $pembayaran->bukti) }}" alt="Bukti Pembayaran" class="photo">
        </div>
        <div class="data-item">
            <label>Tanggal Pembayaran:</label>
            <span id="tanggal">{{ $pembayaran->tgl_pembayaran }}</span>
        </div>
        <!-- Button for printing -->
        <div class="button-container">
            <button onclick="printData()">Cetak Data</button>
        </div>
    </div>

    <!-- JavaScript untuk mencetak data -->
    <script>
        function printData() {
            var siswa = document.getElementById('siswa').textContent;
            var tanggal = document.getElementById('tanggal').textContent;

            var printContent =
                `<div class="title">Cetak Data Siswa Baru</div>` +
                `<div class="subtitle">TK Al-Muchlis</div>` +
                `<div class="data-item"><label>Nama Siswa:</label><span>${siswa}</span></div>` +
                `<div class="data-item"><label>Bukti Pembayaran:</label><img class="photo" src="{{ asset('bukti/' . $pembayaran->bukti) }}" alt="Bukti Pembayaran"></div>`+
                `<div class="data-item"><label>Tanggal Pembayaran:</label><span>${tanggal}</span></div>` ;
            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
        // function printData() {
        //     var originalContent = document.body.innerHTML;
        //     var printContent = document.getElementById('print-content').innerHTML;
        //     document.body.innerHTML = printContent;
        //     window.print();
        //     document.body.innerHTML = originalContent;
        // }
    </script>
</body>
</html>

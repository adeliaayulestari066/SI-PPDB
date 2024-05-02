<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Guru</title>
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
            max-width: 200px;
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
    </style>
</head>

<body>
    <div class="container" id="print-content">
        <div class="title">Cetak Data Guru</div>
        <!-- Data guru dari database -->
        <div class="data-item">
            <label>Nama Guru:</label>
            <span id="nama">{{ $guru->nama_guru }}</span>
        </div>
        <div class="data-item">
            <label>Jabatan:</label>
            <span id="jabatan">{{ $guru->jabatan }}</span>
        </div>
        <div class="data-item">
            <label>NIP/NUPTK:</label>
            <span id="nip_nuptk">{{ $guru->nip_nuptk }}</span>
        </div>
        <div class="data-item">
            <label>Alamat:</label>
            <span>{{ $guru->alamat }}</span>
        </div>
        <div class="data-item">
            <label>No. HP:</label>
            <span>{{ $guru->no_hp }}</span>
        </div>
        <div class="data-item">
            <label>Status Kepegawaian:</label>
            <span>{{ $guru->status_kepegawaian }}</span>
        </div>
        <!-- Tampilkan Foto Guru -->
        <div class="data-item">
            <label>Foto Guru:</label>
            <img class="photo" src="{{ asset($guru->gambar) }}" alt="Foto Guru">
        </div>
        <!-- Button for printing -->
        <div class="button-container">
            <button onclick="printData()">Cetak Data</button>
        </div>
    </div>

    <!-- Script -->
    <script>
        function printData() {
            var nama = document.getElementById('nama').textContent;
            var jabatan = document.getElementById('jabatan').textContent;
            var nip_nuptk = document.getElementById('nip_nuptk').textContent;

            // Buat elemen baru untuk menyimpan konten yang akan dicetak
            var printContent =
                `<div class="container">` +
                `<div class="title">Cetak Data Guru</div>` +
                `<div class="data-item"><label>Nama Guru:</label><span>${nama}</span></div>` +
                `<div class="data-item"><label>Jabatan:</label><span>${jabatan}</span></div>` +
                `<div class="data-item"><label>NIP/NUPTK:</label><span>${nip_nuptk}</span></div>` +
                `<div class="data-item"><label>Alamat:</label><span>{{ $guru->alamat }}</span></div>` +
                `<div class="data-item"><label>No. HP:</label><span>{{ $guru->no_hp }}</span></div>` +
                `<div class="data-item"><label>Status Kepegawaian:</label><span>{{ $guru->status_kepegawaian }}</span></div>` +
                `<div class="data-item"><label>Foto Guru:</label><img class="photo" src="{{ asset($guru->gambar) }}" alt="Foto Guru"></div>` +
                `</div>`;

            var printWindow = window.open('', '_blank'); // Buka jendela baru untuk pencetakan
            printWindow.document.write(printContent); // Tulis konten ke jendela baru
            printWindow.document.close(); // Tutup penulisan dokumen
            printWindow.print(); // Lakukan pencetakan
        }
    </script>
</body>

</html>

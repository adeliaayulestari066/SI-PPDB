<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Siswa Baru</title>
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
        <div class="title">Cetak Data Siswa Baru</div>
        <div class="subtitle">TK Al-Muchlis</div> <!-- Tambahkan tulisan TK Al-Muchlis sebagai subjudul -->
        <!-- Data siswa dari database -->
        <div class="data-item">
            <label>Nama Siswa:</label>
            <span id="nama">{{ $siswa->nama_siswa }}</span>
        </div>
        <div class="data-item">
            <label>Umur:</label>
            <span id="umur">{{ $siswa->umur }}</span>
        </div>
        <div class="data-item">
            <label>Tempat Lahir:</label>
            <span id="tempat_lahir">{{ $siswa->tmpt_lhr }}</span>
        </div>
        <div class="data-item">
            <label>Tanggal Lahir:</label>
            <span id="tanggal_lahir">{{ $siswa->tgl_lhr }}</span>
        </div>
        <div class="data-item">
            <label>Alamat:</label>
            <span>{{ $siswa->alamat }}</span>
        </div>
        <div class="data-item">
            <label>Agama:</label>
            <span>{{ $siswa->agama }}</span>
        </div>
        <div class="data-item">
            <label>Nama Ayah:</label>
            <span>{{ $siswa->nama_ayah }}</span>
        </div>
        <div class="data-item">
            <label>Pekerjaan Ayah:</label>
            <span>{{ $siswa->pekerjaan_ayah }}</span>
        </div>
        <div class="data-item">
            <label>Nama Ibu:</label>
            <span>{{ $siswa->nama_ibu }}</span>
        </div>
        <div class="data-item">
            <label>Pekerjaan Ibu:</label>
            <span>{{ $siswa->pekerjaan_ibu }}</span>
        </div>
        <!-- Tampilkan Foto KK -->
        <div class="data-item">
            <label>Foto KK:</label>
            <img class="photo" src="{{ asset($siswa->foto_kk) }}" alt="Foto KK">
        </div>
        <!-- Tampilkan Foto Akte -->
        <div class="data-item">
            <label>Foto Akte:</label>
            <img class="photo" src="{{ asset($siswa->foto_akte) }}" alt="Foto Akte">
        </div>
        <!-- Button for printing -->
        <div class="button-container">
            <button onclick="printData()">Cetak Data</button>
        </div>
    </div>

    <!-- JavaScript untuk mencetak data -->
    <script>
        function printData() {
            var nama = document.getElementById('nama').textContent;
            var umur = document.getElementById('umur').textContent;
            var tempat_lahir = document.getElementById('tempat_lahir').textContent;
            var tanggal_lahir = document.getElementById('tanggal_lahir').textContent;

            var printContent =
                `<div class="title">Cetak Data Siswa Baru</div>` +
                `<div class="subtitle">TK Al-Muchlis</div>` +
                `<div class="data-item"><label>Nama Siswa:</label><span>${nama}</span></div>` +
                `<div class="data-item"><label>Umur:</label><span>${umur}</span></div>` +
                `<div class="data-item"><label>Tempat Lahir:</label><span>${tempat_lahir}</span></div>` +
                `<div class="data-item"><label>Tanggal Lahir:</label><span>${tanggal_lahir}</span></div>` +
                `<div class="data-item"><label>Alamat:</label><span>{{ $siswa->alamat }}</span></div>` +
                `<div class="data-item"><label>Agama:</label><span>{{ $siswa->agama }}</span></div>` +
                `<div class="data-item"><label>Nama Ayah:</label><span>{{ $siswa->nama_ayah }}</span></div>` +
                `<div class="data-item"><label>Pekerjaan Ayah:</label><span>{{ $siswa->pekerjaan_ayah }}</span></div>` +
                `<div class="data-item"><label>Nama Ibu:</label><span>{{ $siswa->nama_ibu }}</span></div>` +
                `<div class="data-item"><label>Pekerjaan Ibu:</label><span>{{ $siswa->pekerjaan_ibu }}</span></div>` +
                `<div class="data-item"><label>Foto KK:</label><img class="photo" src="{{ asset($siswa->foto_kk) }}" alt="Foto KK"></div>` +
                `<div class="data-item"><label>Foto Akte:</label><img class="photo" src="{{ asset($siswa->foto_akte) }}" alt="Foto Akte"></div>`;

            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
    </script>
</body>

</html>

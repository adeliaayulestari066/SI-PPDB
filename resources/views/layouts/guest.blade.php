<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TK Al-Muchlis</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-image: url("{{ asset('assets/img/favicon/loginbg.png') }}");
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Memastikan body mengambil tinggi penuh viewport */
            margin: 0; /* Menghapus margin default */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.8); /* Menambahkan latar belakang putih semi-transparan ke konten */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan yang halus */
            text-align: center; /* Menengahkan teks */
        }
        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        .logo img {
            margin-bottom: 10px; /* Memberikan jarak antara gambar dan teks */
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="logo">
            <img src="{{ asset('assets/img/favicon/logo_tkina.png') }}" class="w-20 h-20 fill-current text-gray-500" alt="Logo TK Al-Muchlis" />
            <span class="text-gray-700 text-sm font-semibold">TK Al-Muchlis</span>
        </div>
        {{ $slot }}
    </div>
</body>
</html>

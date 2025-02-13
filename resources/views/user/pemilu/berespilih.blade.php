@extends('main2')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terima Kasih - Pemilihan Selesai</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-lg text-center w-full ">
    <h4 class="text-2xl font-bold text-gray-900 mb-4">TERIMA KASIH TELAH MELAKUKAN PEMILIHAN</h4>
    <p class="text-gray-700 mb-6">Data Anda berhasil masuk sistem. Silakan lakukan logout dengan menekan tombol <strong>KELUAR/LOGOUT</strong> di bawah!</p>
    <a href="{{ ('/user/pemilu/home') }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold text-lg rounded-full shadow-md hover:bg-blue-700 transition duration-300">KELUAR/LOGOUT</a>
  </div>
</body>
</html>

@endsection

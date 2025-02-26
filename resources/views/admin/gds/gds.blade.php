@extends('main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GDS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
  <div class="flex">
    <!-- Sidebar -->
    <div class="w-16 hover:w-56 min-h-screen bg-gray-800 text-white p-4 shadow-lg fixed transition-all duration-300 ease-in-out overflow-hidden group">
      <h4 class="text-2xl font-bold text-center mb-6 hidden group-hover:block">📌 GDS</h4>
      <ul class="space-y-4">
        <li>
          <a href="{{ route('gds.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition">
            <i class="fas fa-calendar-check text-lg"></i>
            <span class="hidden group-hover:inline-block">GDS</span>
          </a>
        </li>
        <li>
          <a href="{{ route('rekapgds.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition">
            <i class="fas fa-folder-open text-lg"></i>
            <span class="hidden group-hover:inline-block">Rekap GDS</span>
          </a>
        </li>
        <li>
          <a href="{{ route('tambahdata.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition">
            <i class="fas fa-user-plus text-lg"></i>
            <span class="hidden group-hover:inline-block">Daftar Siswa</span>
          </a>
        </li>
        <li>
          <a href="{{ route('jadwalgds.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition">
            <i class="fas fa-calendar-alt text-lg"></i>
            <span class="hidden group-hover:inline-block">Jadwal GDS</span>
          </a>
        </li>
        <li class="mt-6 border-t border-gray-700 pt-4">
          <a href="{{ url('/admin') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition">
            <i class="fas fa-arrow-left text-lg"></i>
            <span class="hidden group-hover:inline-block">Kembali</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Content -->
    <div class="flex-1 p-6 transition-all duration-300 ease-in-out ml-16 group-hover:ml-56" style="width: calc(100% - 4rem);">
      @yield('content2')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>

@endsection

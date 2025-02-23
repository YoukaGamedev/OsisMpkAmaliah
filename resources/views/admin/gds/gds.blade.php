@extends('main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GDS</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="flex">
    <!-- Sidebar -->
    <div class="w-59 min-h-screen bg-gray-800 text-white p-5 shadow-lg">
      <h4 class="text-2xl font-bold text-center mb-6">GDS</h4>
      <ul class="space-y-4">
        <li>
          <a href="{{ route('gds.index') }}" class="flex items-center space-x-2 p-3 rounded hover:bg-gray-700 transition">
            <i class="fas fa-calendar-check"></i>
            <span>GDS</span>
          </a>
        </li>
        <li>
          <a href="{{ route('rekapgds.index') }}" class="flex items-center space-x-2 p-3 rounded hover:bg-gray-700 transition">
            <i class="fas fa-folder-open"></i>
            <span>Rekap GDS</span>
          </a>
        </li>
        <li>
          <a href="{{ ('/admin/gds/tambahdata/tambahdata') }}" class="flex items-center space-x-2 p-3 rounded hover:bg-gray-700 transition">
            <i class="fas fa-user-plus"></i>
            <span>Tambah Data</span>
          </a>
        </li>
        <li>
          <a href="{{ ('/admin/gds/jadwalgds/index') }}" class="flex items-center space-x-2 p-3 rounded hover:bg-gray-700 transition">
            <i class="fas fa-calendar-alt"></i>
            <span>Jadwal GDS</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Content -->
    <div class="flex-1 p-6">
      @yield('content2')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>

@endsection
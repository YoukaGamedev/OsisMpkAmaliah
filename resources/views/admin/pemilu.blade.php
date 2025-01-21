@extends('main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/asset/css/pemilu.css') }}">
</head>
<body>
    <div class="sidebar">
        <h4>Pemilu</h4>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/dashboard') }}"><i class="fas fa-user-plus"></i>Data Sekolah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/datakelas') }}"><i class="fas fa-users"></i>Data Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/datakandidat') }}"><i class="fas fa-users"></i>Data Kandidat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/datadpt') }}"><i class="fas fa-users"></i>Data DPT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/hasilpemilihan') }}"><i class="fas fa-users"></i>Hasil Pilih</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-users"></i>Jadwal GDS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-users"></i>Jadwal GDS</a>
          </li>
        </ul>
      </div>
    <div class="content1">
    @yield('content1')
    </div>
</body>
</html>

@endsection

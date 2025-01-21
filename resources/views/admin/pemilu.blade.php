@extends('main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/asset/css/pemilu.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <h4>Pemilu</h4>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/dashboard') }}">
                <i class="bi bi-house-door-fill"></i> Data Sekolah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/datakelas') }}">
                <i class="bi bi-person-lines-fill"></i> Data Kelas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/datakandidat') }}">
                <i class="bi bi-person-circle"></i> Data Kandidat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/datadpt') }}">
                <i class="bi bi-file-earmark-text"></i> Data DPT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ ('/admin/hasilpemilihan') }}">
                <i class="bi bi-graph-up-arrow"></i> Hasil Pilih
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-calendar-event"></i> Jadwal GDS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-calendar-check"></i> Jadwal GDS
            </a>
          </li>
        </ul>
    </div>
    <div class="content1">
        @yield('content1')
    </div>
</body>
</html>

@endsection

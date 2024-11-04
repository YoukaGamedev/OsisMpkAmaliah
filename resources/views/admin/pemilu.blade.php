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
        <div class="sidebar-items"><a href="{{ ('/user/home') }}">MAIN PENGATURAN UMUM</a></div>
        <div class="sidebar-item"><a href="{{ ('/admin/dashboard') }}">Dashboard</a></div>
        <div class="sidebar-item"><a href="{{ ('/admin/datakelas') }}">Data Kelas</a></div>
        <div class="sidebar-items"><a href="{{ ('/admin/votes') }}">Kandidat & DPT</a></div>
        <div class="sidebar-item"><a href="{{ ('/admin/datakandidat') }}">Data Kandidat</a></div>
        <div class="sidebar-item"><a href="{{ ('/admin/datadpt') }}">Data DPT</a></div>
        <div class="sidebar-items"><a href="{{ ('/admin/') }}">Hasil dan Laporan</a></div>
        <div class="sidebar-item"><a href="{{ ('/admin/hasilpemilihan') }}">Hasil Pemilihan</a></div>
        <div class="sidebar-item"><a href="{{ ('/admin/daftarhadir') }}">daftar hadir</a></div>
    </div>
    <div class="content1">
    @yield('content1')
    </div>
</body>
</html>

@endsection

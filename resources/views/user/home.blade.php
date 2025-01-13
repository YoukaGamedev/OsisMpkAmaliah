@extends('main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .body {
      background-color: #f8f9fa;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .navbar {
      width: 100%;
      background-color: #007bff;
      padding: 1rem;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: #fff !important;
    }
    .welcome-section {
      text-align: center;
      margin-top: 50px;
    }
    .welcome-section h1 {
      font-size: 2.5rem;
      font-weight: bold;
      color: #343a40;
      margin-bottom: 10px;
    }
    .welcome-section h4 {
      font-size: 1.5rem;
      color: #007bff;
      margin-bottom: 20px;
    }
    .welcome-section p {
      font-size: 1.2rem;
      color: #6c757d;
    }
    .btn-custom {
      padding: 10px 30px;
      font-size: 1.1rem;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
    <div class="container">
        <!-- Welcome Section -->
  <div class="welcome-section">
    @foreach ($dashboard as $dash)
      @csrf 
      <h1>Selamat Datang Di Pemilu Tahun {{ $dash->tahun_pelajaran }}</h1>
      <h4 class="text-primary">Identitas Lembaga</h4>
      <p>{{ $dash->nama_sekolah }} - Kepala Sekolah {{ $dash->nama_kepsek }} - Alamat {{ $dash->alamat_jalan }}, {{ $dash->desa }}, {{ $dash->kecamatan }}, {{ $dash->kota }}. Pemilu dilaksanakan pada tanggal {{ $dash->tanggal }}</p>
    @endforeach
    <a href="{{ url('/user/pilihkandidat') }}" class="btn btn-primary btn-custom">Pilih Kandidat</a>
  </div>
    </div>



  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection

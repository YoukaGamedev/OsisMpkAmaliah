@extends('main2')

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
    body {
      background-color: #f8f9fa;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center; /* Centers the content vertically */
      font-family: 'Arial', sans-serif;
    }
    .welcome-section {
      text-align: center;
      padding: 40px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 1000px;
      width: 100%;
    }
    .welcome-section h1 {
      font-size: 2.5rem;
      font-weight: bold;
      color: #343a40;
      margin-bottom: 20px;
    }
    .welcome-section h4 {
      font-size: 1.6rem;
      color: #007bff;
      margin-bottom: 15px;
    }
    .welcome-section p {
      font-size: 1.2rem;
      color: #6c757d;
      line-height: 1.6;
      margin-bottom: 30px;
    }
    .btn-custom {
      padding: 12px 30px;
      font-size: 1.2rem;
      border-radius: 5px;
      margin-top: 15px;
    }
    .footer {
      background-color: #007bff;
      color: white;
      width: 100%;
      padding: 15px;
      text-align: center;
      position: fixed;
      bottom: 0;
    }
  </style>
</head>
<body>

  <!-- Welcome Section -->
  <div class="welcome-section">
    @foreach ($dashboard as $dash)
      @csrf 
      <h1>Selamat Datang Di Pemilu Tahun {{ $dash->tahun_pelajaran }}</h1>
      <h4 class="text-primary">Identitas Lembaga</h4>
      <p>{{ $dash->nama_sekolah }} - Kepala Sekolah {{ $dash->nama_kepsek }} - Alamat {{ $dash->alamat_jalan }}, {{ $dash->desa }}, {{ $dash->kecamatan }}, {{ $dash->kota }}. Pemilu dilaksanakan pada tanggal {{ $dash->tanggal }}</p>
    @endforeach
    <a href="{{ url('/user/pemilu/pilihkandidat') }}" class="btn btn-primary btn-custom">Pilih Kandidat</a>
  </div>

  <!-- Footer -->
  <div class="footer">
    <p>&copy; 2025 Pemilu. All Rights Reserved.</p>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection

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
    body {
      background-color: #f8f9fa;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .welcome-section {
      text-align: center;
    }
    .welcome-section h1 h4 {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 20px;
      color: #343a40;
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

  <div class="welcome-section">
  @foreach ($dashboard as $dash)
  @csrf 
    <h1>Selamat Datang Di Pemilu Tahun {{ $dash->tahun_pelajaran }}</h1>
    <h4 class="text-primary">Identitas Lembaga</h4>
    <p>{{ $dash->nama_sekolah }} {{ $dash->nama_kepsek }} {{ $dash->alamat_jalan }} {{ $dash->desa }} {{ $dash->kecamatan }} {{ $dash->kota }} di pemilu yang dilaksanakan pada tanggal {{ $dash->tanggal }}</p>
    @endforeach
    <a href="{{ ('/user/pilihkandidat') }}" class="btn btn-primary btn-custom">Pilih Kandidat</a>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



@endsection 
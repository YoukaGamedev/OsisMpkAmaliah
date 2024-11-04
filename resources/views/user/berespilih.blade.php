@extends('main')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terima Kasih - Pemilihan Selesai</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .thank-you-card {
      margin-top: 50px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .thank-you-card h4 {
      color: #E74C3C;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .thank-you-card p {
      font-size: 16px;
      color: #555;
      margin-bottom: 20px;
    }
    .logout-btn {
      background-color: #007BFF;
      color: #fff;
      border: none;
      padding: 10px 30px;
      font-size: 16px;
      border-radius: 5px;
    }
    .logout-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="mt-3">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="thank-you-card">
          <h4 style="color: blue;">TERIMA KASIH TELAH MELAKUKAN PEMILIHAN</h4>
          <p>Data anda berhasil masuk sistem. Silakan lakukan logout dengan menekan tombol <strong>KELUAR/LOGOUT</strong> di bawah!</p>
          <a href="{{ ('/user/home') }}"><button class="btn logout-btn">KELUAR/LOGOUT</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection 
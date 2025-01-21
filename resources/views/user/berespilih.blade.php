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
      background-color: #f0f8ff;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }
    .thank-you-card {
      padding: 30px;
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      text-align: center;
      position: absolute;
      top: 50%;
      left: 55%;
      transform: translate(-50%, -50%); /* Centering the card */
    }
    .thank-you-card h4 {
      color:rgb(0, 0, 0);
      font-weight: bold;
      margin-bottom: 15px;
      font-size: 2.2rem;
    }
    .thank-you-card p {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 30px;
    }
    .logout-btn {
      background-color: #007BFF;
      color: #fff;
      border: none;
      padding: 12px 40px;
      font-size: 1.2rem;
      border-radius: 50px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .logout-btn:hover {
      background-color: #0056b3;
      transform: translateY(-2px);
    }
    .logout-btn:active {
      background-color: #004085;
      transform: translateY(0);
    }
    .thank-you-card .btn {
      margin-top: 15px;
    }
  </style>
</head>
<body>

  <!-- Assuming you have a navbar, otherwise you can add one here -->


  <div class="container-fluid" style="min-height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="thank-you-card">
      <h4>TERIMA KASIH TELAH MELAKUKAN PEMILIHAN</h4>
      <p>Data Anda berhasil masuk sistem. Silakan lakukan logout dengan menekan tombol <strong>KELUAR/LOGOUT</strong> di bawah!</p>
      <a href="{{ ('/user/home') }}"><button class="btn logout-btn">KELUAR/LOGOUT</button></a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection

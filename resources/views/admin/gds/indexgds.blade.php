@extends('admin.gds.gds')

@section('content2')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Perolehan Suara</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>

    .navbar {
      background-color: #007bff;
      color: #fff;
      border-bottom: 2px solid #0056b3;
    }
    .navbar a, .navbar input {
      color: #ffffff;
    }

    .main-content {
      margin-left: 260px;
      padding: 20px;
    }

    .centered-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 80px);
    }

    .btn-new-gds {
      background-color: #007bff;
      color: white;
      font-size: 1.2rem;
      padding: 15px 30px;
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .btn-new-gds:hover {
      background-color: #0464ca;
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .btn-new-gds:active {
      transform: scale(0.98);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body style="background-color: #f4f4f4;">
  <div>
    <div class="centered-content">
      <h1 class="mb-4">Buat Lembar GDS Baru</h1>
      <a href="{{ route('lembar-gds.index') }}" class="btn-new-gds">Lembar GDS Baru</a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
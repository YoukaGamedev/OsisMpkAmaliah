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
    .sidebar {
      background-color: #f8f9fa;
      height: 100vh;
      position: fixed;
      width: 250px;
      padding-top: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }
    .sidebar h4 {
      font-weight: bold;
      color: #007bff;
      text-align: center;
      margin-bottom: 20px;
    }
    .sidebar .nav-link {
      color: #343a40;
    }
    .sidebar .nav-link:hover {
      background-color: #e9ecef;
      border-radius: 4px;
    }
    .sidebar .nav-link i {
      margin-right: 8px;
    }

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
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s;
    }
    .btn-new-gds:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body style="background-color: #f4f4f4;">


  <div>
    <div class="centered-content">
      <h1 class="mb-4">Buat Lembar GDS Baru</h1>
      <button class="btn-new-gds">Lembar GDS Baru</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection

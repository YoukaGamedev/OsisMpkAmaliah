@extends('main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GDS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Tambahkan ini untuk Bootstrap Icons -->
  <style>
    /* Sidebar styles */
    .sidebar {
      background-color: #f8f9fa;
      height: 100v;
      position: fixed;
      width: 200px;
      padding-top: 20px;
      box-shadow: 2px 0 5px rgba(0,0,0,0.1);
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
      background-color: white;
      border-radius: 4px;
    }
    .sidebar .nav-link i {
      margin-right: 8px;
    }

    /* Navbar styles */
    .navbar {
      background-color: #007bff;
      color: #fff;
      border-bottom: 2px solid #0056b3;
    }
    .navbar a, .navbar input {
      color: #ffffff;
    }

    /* Table and card styles */
    .custom-table {
      margin-top: 20px;
    }
    .custom-table th {
      background-color: #f8f9fa;
      border-bottom: 2px solid #dee2e6;
    }

    /* Marquee styles */
    .marquee {
      overflow: hidden;
      white-space: nowrap;
      box-sizing: border-box;
      position: relative;
      background-color: #007bff;
      color: #fff;
      padding: 10px 0;
      font-weight: bold;
      font-size: 1.2rem;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      margin-top: 20px;
    }
    .marquee p {
      display: inline-block;
      animation: marquee 15s linear infinite;
      margin: 0;
    }

    /* Marquee animation */
    @keyframes marquee {
      0% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(-100%);
      }
    }
  </style>
</head>
<body style="background-color: #f4f4f4;">

  <!-- Sidebar -->
  <div class="sidebar">
    <h4>GDS</h4>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="{{ ('/admin/gds/indexgds') }}"><i class="fas fa-calendar-check"></i>GDS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ ('/admin/gds/rekapgds/rekapgds') }}"><i class="fas fa-calendar-check"></i>Rekap GDS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ ('/admin/gds/tambahdata/tambahdata') }}"><i class="fas fa-user-plus"></i>Tambah Data </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ ('/admin/gds/jadwalgds/index') }}"><i class="fas fa-users"></i>Jadwal GDS</a>
      </li>
    </ul>
  </div>
  <div class="content2">
    @yield('content2')
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
  </html>

  @endsection
@extends('admin.gds.gds')

@section('content2')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Perolehan Suara</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Tambahkan ini untuk Bootstrap Icons -->
  <style>
    /* Sidebar styles */
    .sidebar {
      background-color: #f8f9fa;
      height: 100vh;
      position: fixed;
      width: 250px;
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
      background-color: #e9ecef;
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

  <!-- Main Content -->
  <div class="main-content" style="margin-left: 90px; padding: 20px;">
    <nav class="navbar navbar-expand navbar-light">
      <a class="navbar-brand mx-3" href="#">Data Murid</a>
    </nav>

    <!-- Card for Data Table -->
    <div class="mt-2">
      <div class="card">
        <div class="card-header bg-primary text-white">
          Daftar Murid
        </div>

        <div class="mt-3 mb-3 d-flex">
            <input class="form-control mr-1 ml-2" type="search" placeholder="Cari murid/karyawan" aria-label="Search">
            <button class="btn btn-primary d-flex align-items-center mr-1" id="searchButton">
              <i class="bi bi-search"></i> Cari
            </button>
            <button class="btn btn-success d-flex align-items-center mr-2" id="scanButton">
              <i class="bi bi-qr-code-scan"></i> scan
            </button>
          </div>
          
          
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Kelas/Posisi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>001</td>
                  <td>John Doe</td>
                  <td>10 A</td>
                  <td>
                    <button class="btn btn-info btn-sm">Detail</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>Jane Smith</td>
                  <td>11 B</td>
                  <td>
                    <button class="btn btn-info btn-sm">Detail</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>003</td>
                  <td>Michael Johnson</td>
                  <td>12 C</td>
                  <td>
                    <button class="btn btn-info btn-sm">Detail</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection

@extends('admin.pemilu')

@section('content1')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Hadir Pemilih</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .table-card {
      margin-top: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
    }
    .download-btn {
      float: right;
    }
    .table th, .table td {
      vertical-align: middle;
    }
  </style>
</head>
<body>

  <div class="mt-1">
    <!-- Daftar Hadir Pemilih Card -->
    <div class="table-card card">
      <div class="card-header">
        <h5 class="card-title d-inline">DAFTAR HADIR PEMILIH</h5>
        <button class="btn btn-danger btn-sm download-btn">DOWNLOAD DAFTAR HADIR</button>
      </div>
      <div class="card-body">
        <!-- Table 1: Summary -->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>JENIS DATA</th>
              <th>ANGKA</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>JUMLAH TOTAL DPT</td>
              <td>0</td>
            </tr>
            <tr>
              <td>2</td>
              <td>JUMLAH DPT HADIR</td>
              <td>0</td>
            </tr>
            <tr>
              <td>3</td>
              <td>JUMLAH DPT TIDAK HADIR</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>
        
        <!-- Table 2: Daftar Hadir -->
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th>No</th>
              <th>NISN</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1234567890</td>
              <td>John Doe</td>
              <td>X IPA 1</td>
              <td>Hadir</td>
            </tr>
            <tr>
              <td>2</td>
              <td>9876543210</td>
              <td>Jane Smith</td>
              <td>X IPA 2</td>
              <td>Tidak Hadir</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection
@extends('admin.pemilu')

@section('content1')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Perolehan Suara</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    .custom-table {
      margin-top: 20px;
    }
    .custom-table th {
      background-color: #f8f9fa;
      border-bottom: 2px solid #dee2e6;
    }
  </style>
</head>
<body style="background-color: #f4f4f4;">
  <div class="mt-2">
    <!-- Card Wrapper -->
    <div class="card mt-4">
      <div class="card-header">
        <h5 class="text-center mb-0">HASIL PEROLEHAN SUARA</h5>
      </div>
      <div class="card-body">
        <!-- Table -->
        <table class="table table-bordered custom-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Data</th>
              <th>Angka</th>
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
              <td>JUMLAH DPT MEMILIH</td>
              <td>0</td>
            </tr>
            <tr>
              <td>3</td>
              <td>JUMLAH DPT TIDAK MEMILIH</td>
              <td>0</td>
            </tr>
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

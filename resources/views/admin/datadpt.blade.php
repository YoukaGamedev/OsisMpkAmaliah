@extends('admin.pemilu')

@section('content1')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .table {
      margin-top: 20px;
    }
    .form-group {
      margin-bottom: 10px;
    }
    .btn {
      margin-bottom: 10px;
    }
    .input-group button {
      margin-left: 5px;
    }
  </style>
</head>
<body>
  <div class="mt-3">
    <div class="row">
      <!-- Data Table Positioned on the Left -->
      <div class="col-md-8">

        <!-- Search Form wrapped inside a Card -->
        <div class="card mb-4">
          <div class="card-body">
          <h3 class="text-center">DATA DPT</h3>
            <h5 class="card-title">Cari Data DPT</h5>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari Data DPT">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">Cari Data</button>
                <button class="btn btn-secondary" type="button">Semua Data</button>
              </div>
            </div>
            <!-- Data Table -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>NISN</th>
              <th>Nama Siswa</th>
              <th>L/P</th>
              <th>Kelas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $dpt)
          @csrf 
            <tr>
              <td>{{$loop -> iteration}}</td>
              <td>{{ $dpt->nisn }}</td>
              <td>{{ $dpt->nama }}</td>
              <td>{{ $dpt->jenis_kelamin }}</td>
              <td>{{ $dpt->kelas }}</td>
              <td>
              <form action="{{ url('admin/datadpt/'.$dpt->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah data akan di hapus?')">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>

          </div>
        </div>

      <!-- Form Input Positioned on the Right -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="mb-4">TAMBAH DPT</h5>
            <form action="{{ ('/admin/datadpt') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="nisn">NISN</label>
                <input name="nisn" type="text" class="form-control" id="nisn" placeholder="NISN">
              </div>
              <div class="form-group">
                <label for="nomorPasangan">Nama Siswa</label>
                <input name="nama" type="text" class="form-control" id="nomorPasangan" placeholder="Nama Siswa">
              </div>
              <div class="form-group">
                <label for="namaPasangan">Jenis Kelamin</label>
                <input name="jenis_kelamin" type="text" class="form-control" id="namaPasangan" placeholder="Jenis Kelamin">
              </div>
              <div class="form-group">
                <label for="namaPasangan">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="namaPasangan" placeholder="Kelas">
              </div>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection

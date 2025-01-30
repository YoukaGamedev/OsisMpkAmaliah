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
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari Data DPT">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">Cari Data</button>
              </div>
            </div>
            @if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
            <!-- Data Table -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Password</th>
              <th>Konfirmasi Password</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $dpt)
          @csrf 
            <tr>
              <td>{{$loop -> iteration}}</td>
              <td>{{ $dpt->name }}</td>
              <td>{{ $dpt->email }}</td>
              <td>{{ $dpt->password }}</td>
              <td>{{ $dpt->password }}</td>
              <td>
              <form action="{{ route('datadpt.destroy', $dpt->id) }}" method="POST" class="d-inline" 
      onsubmit="return confirm('Apakah data akan dihapus?')">
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
            <form action="{{ url('/admin/datadpt') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
<div class="form-group">
    <label for="password">Password</label>
    <div class="input-group">
        <input type="password" class="form-control" id="password" name="password" required>
        <div class="input-group-append">
            <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                <i class="fas fa-eye"></i> <!-- Ikon mata -->
            </button>
        </div>
    </div>
</div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-primary">Add User</button>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    // Ketika tombol mata diklik, toggle antara password dan text
    togglePassword.addEventListener('click', function () {
        // Cek apakah tipe input password adalah password atau text
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;

        // Ganti ikon mata berdasarkan tipe input
        this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });
  </script>
</body>
</html>

@endsection

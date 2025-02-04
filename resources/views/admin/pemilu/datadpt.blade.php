@extends('admin.pemilu.pemilu')

@section('content1')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data DPT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .table {
      margin-top: 20px;
      font-size: 16px; /* Increased text size for better visibility */
    }
    .form-group {
      margin-bottom: 15px; /* Increased spacing for form fields */
    }
    .btn {
      margin-bottom: 15px; /* Increased spacing for buttons */
    }
    .input-group button {
      margin-left: 10px; /* Increased spacing between input and button */
    }
    .card-body {
      padding: 30px; /* Increased padding for more space */
    }
    .input-group-append button {
      background: transparent;
      border: none;
      outline: none;
      cursor: pointer;
    }
    .input-group-append button i {
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="mt-5">
    <div class="row">
      <!-- Data Table Positioned on the Left -->
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-body">
            <h3 class="text-center mb-4">DATA DPT</h3>
            <!-- Search Form -->
            <form action="{{ route('datadpt.index') }}" method="GET" class="mb-3">
              <div class="input-group">
                <input type="text" class="form-control" name="name" placeholder="Cari berdasarkan Nama" value="{{ request()->input('name') }}">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Cari Data</button>
                </div>
              </div>
            </form>

            @if(session('status'))
              <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <!-- Data Table -->
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $dpt)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $dpt->name }}</td>
                    <td>{{ $dpt->email }}</td>
                    <td>{{ $dpt->password }}</td>
                    <td>
  <a href="{{ route('datadpt.edit', $dpt->id) }}" class="btn btn-warning btn-sm">Edit</a> <!-- Edit Button -->
  <form action="{{ route('datadpt.destroy', $dpt->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah data akan dihapus?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
  </form>
</td>

                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Form Input Positioned on the Right -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="mb-4">TAMBAH DPT</h5>
            <form action="{{ url('/admin/pemilu/datadpt') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="name">Nama</label>
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
                    <button type="button" class="btn btn-outline-secondary" id="toggle-password">
                      <i class="fas fa-eye" id="eye-icon"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                  <div class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary" id="toggle-password-confirm">
                      <i class="fas fa-eye" id="eye-icon-confirm"></i>
                    </button>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg">Tambah User</button> <!-- Enlarged Button -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Font Awesome for eye icon -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script>
    document.getElementById('toggle-password').addEventListener('click', function() {
      var passwordField = document.getElementById('password');
      var icon = document.getElementById('eye-icon');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });

    document.getElementById('toggle-password-confirm').addEventListener('click', function() {
      var passwordField = document.getElementById('password_confirmation');
      var icon = document.getElementById('eye-icon-confirm');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });
  </script>
</body>
</html>
@endsection










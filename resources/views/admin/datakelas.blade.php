@extends('admin.pemilu')

@section('content1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table and Form Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f4f4;">

<div class="mt-4">
    <div class="row">
        <!-- Table - Wrapped in a card -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-4">Data Kelas</h2>
                    <table class="table table-sm table-striped">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" class="text-start">Kelas</th>
                                <th scope="col" class="text-start">Jumlah Siswa</th> <!-- Align First to the left -->
                                <th scope="col" class="text-end px-5">Aksi</th> <!-- Align Handle to the right -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($datakelas as $item)
                        @csrf 
                            <tr>
                                <th scope="row">{{$loop -> iteration}}</th>
                                <td class="text-start">{{ $item->kelas }}</td> <!-- Align Mark to the left -->
                                <td>{{ $item->no_kelas }}</td> <!-- Align Mark to the left -->
                                <td class="text-end px-3"><form action="{{ url('admin/datakelas/'.$item->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah data akan di hapus?')">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                            </form></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <!-- Input Form - Wrapped in a card with background -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Form Input Data Kelas</h3>
                    <form action="{{ url('admin/datakelas') }}" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Kelas</label>
                            <input name="kelas" type="text" class="form-control" id="nameInput" placeholder="Kelas">
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Jumlah Siswa</label>
                            <input name="no_kelas" type="text" class="form-control" id="emailInput" placeholder="Nomor Kelas">
                        </div>
                        <button type="submit" class="btn btn-primary submit">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection

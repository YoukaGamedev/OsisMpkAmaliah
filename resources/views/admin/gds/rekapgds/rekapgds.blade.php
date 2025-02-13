@extends('admin.gds.gds')

@section('content2')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DR Rekap Absensi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .main-content {
            width: calc(100% - 100px);
            margin-left: 90px;
            padding: 20px;
            min-height: calc(100vh - 140px);
        }

        .navbar {
            background-color: gray;
            color: #fff;
            border-bottom: 2px solid gray;
        }
        .navbar a, .navbar input {
            color: #fff;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 5px;
            padding: 5px 10px;
        }
        .search-box input {
            border: none;
            outline: none;
            width: 100%;
        }
        .search-box i {
            color: gray;
        }

        .table-custom {
            border-collapse: collapse;
            width: 100%;
        }

        .table-custom th, .table-custom td {
            padding: 12px 20px;
        }

        .table-custom th {
            background-color: gray;
            color: #fff;
            font-weight: bold;
            border: 1px solid gray;
        }

        .table-custom td {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        .table-custom tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-custom tbody tr:hover {
            background-color: #e0e0e0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <nav class="navbar navbar-expand navbar-light">
            <a style="color: white;" class="navbar-brand mx-3" href="#">Rekap GDS</a>
            <div class="ml-auto">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input class="form-control" type="search" placeholder="Cari karyawan" aria-label="Search">
                </div>
            </div>
        </nav>

        <div class="table-responsive mt-4">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>PJ</th>
                        <th>Hari</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekapgds as $rekap)
                    <tr onclick="window.location='{{ route('rekapgds.show', $rekap->id) }}'">
                        <td>{{ $rekap->pj }}</td>
                        <td>{{ $rekap->hari }}</td>
                        <td>{{ \Carbon\Carbon::parse($rekap->created_at)->format('d-m-Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
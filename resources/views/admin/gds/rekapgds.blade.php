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
    <style>
        .main-content {
            width: calc(100% - 100px);
            margin-left: 90px;
            padding: 20px;
            min-height: calc(100vh - 140px);
        }

        .navbar {
            background-color: #007bff;
            color: #fff;
            border-bottom: 2px solid #0056b3;
        }
        .navbar a, .navbar input {
            color: #fff;
        }

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

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        .table-custom {
            border-collapse: collapse;
            width: 100%;
        }

        .table-custom th, .table-custom td {
            padding: 12px 20px;
        }

        .table-custom th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border: 1px solid #0056b3;
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

        .btn-scan {
            background-color: purple;
            color: #fff;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-scan:hover {
            background-color: #c82333;
        }

        .btn-scan i {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <nav class="navbar navbar-expand navbar-light">
            <a style="color: white;" class="navbar-brand mx-3" href="#">Rekap GDS</a>
            <div class="ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari karyawan" aria-label="Search">
            </div>
        </nav>

        <!-- Button Scan -->
        <div class="mt-4 text-right">
            <button class="btn btn-scan">
                <i class="fas fa-qrcode"></i> Scan QR Code
            </button>
        </div>

        <!-- Table -->
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

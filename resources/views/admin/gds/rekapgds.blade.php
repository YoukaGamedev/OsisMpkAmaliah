@extends('admin.gds.gds')

@section('content2')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DR Rekap Absensi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
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

        /* Main content styles */
        .main-content {
    width: calc(100% - 100px); /* Adjust width based on the sidebar width */
    margin-left: 90px; /* Matches the sidebar width */
    padding: 20px;
    min-height: calc(100vh - 140px);
}

        /* Navbar styles */
        .navbar {
            background-color: #007bff;
            color: #fff;
            border-bottom: 2px solid #0056b3;
        }
        .navbar a, .navbar input {
            color: #fff;
        }

        /* Marquee styles */
        .marquee {
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            position: relative;
            background-color: #007bff; /* Background color of the marquee */
            color: #fff; /* Text color */
            padding: 10px 0; /* Padding for better spacing */
            font-weight: bold;
            font-size: 1.2rem; /* Increased font size */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Subtle shadow effect */
            margin-top: 20px; /* Margin to separate from navbar */
        }
        .marquee p {
            display: inline-block;
            animation: marquee 15s linear infinite;
            margin: 0; /* Remove default margin */
        }

        /* Marquee animation */
        @keyframes marquee {
            0% {
                transform: translateX(100%); /* Start off the right */
            }
            100% {
                transform: translateX(-100%); /* End off the left */
            }
        }
    </style>
</head>
<body>
    <!-- Main Content -->
    <div class="main-content">
        <nav class="navbar navbar-expand navbar-light">
            <a class="navbar-brand mx-3" href="#">Rekap GDS</a> <!-- Changed the title to Rekap Absensi -->
            <div class="ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari karyawan" aria-label="Search"> <!-- Adjusted the placeholder for search -->
            </div>
        </nav>
        
        <div class="mt-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Rekap GDS <!-- Changed the card header to reflect the attendance summary -->
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="reportFormat">Format Laporan</label>
                                <select id="reportFormat" class="form-control">
                                    <option selected>Pilih format laporan</option>
                                    <option value="pdf">PDF</option>
                                    <option value="excel">Excel</option>
                                    <option value="word">Word</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="startDate">Tanggal Awal Absensi</label>
                                <input type="date" class="form-control" id="startDate">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="endDate">Tanggal Akhir Absensi</label>
                                <input type="date" class="form-control" id="endDate">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Lihat Rekap Absensi</button> <!-- Adjusted button text -->
                    </form>
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
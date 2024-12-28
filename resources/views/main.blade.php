<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <link rel="stylesheet" href="{{ asset('/asset/css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: white;
        }

        /* Hover effect for logo */
        .logo {
            transition: transform 0.3s ease;
            text-decoration: none;
        }

        .logo:hover {
            transform: scale(1.1); /* Enlarge the logo slightly when hovered */
            text-decoration: none;
        }

        /* Center the logo */
        .header {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;     /* Center vertically */
            height: 70px;
            background-color: #007bff;
        }

        .admin {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <!-- Center the logo in the header -->
        <a href="{{ ('/') }}" class="logo">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" width="50"> <!-- Replace with your logo image -->
        </a>
        <div class="admin">Admin</div>
        <h1>hahahah</h1>
    </div>
    
    <div class="main-container">
        <div class="sidebar p-3">
            <a class="nav-link text-white" href="#">Data OSIS</a>
            <a class="nav-link text-white" href="#">Data MPK</a>
            <a class="nav-link text-white" href="#">Jadwal Event</a>
            <a class="nav-link text-white" href="#">Kontak</a>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <br><br><br>
    <div class="footer text-center bg-light">
        &copy; OsisMpk
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <link rel="stylesheet" href="{{ asset('/asset/css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Ikon Font Awesome -->
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
        }

        /* Header and Back Button Styling */
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70px;
            background-color: #007bff;
            padding: 0 20px;
            position: relative;
        }

        /* Back button on the far left with bluish-white color */
        .back-button {
            color: #e0f7ff; /* Biru keputih-putihan */
            font-size: 1.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
            position: absolute;
            left: 20px; /* Pindah ke paling kiri */
            background-color: transparent;
            border: none;
        }

        .back-button:hover {
            color: #cceeff;
            transform: scale(1.1); /* Efek pembesaran saat di-hover */
        }

        /* Admin Position */
        .admin {
            position: absolute;
            right: 20px;
            color: white;
            font-weight: bold;
        }

        /* Content styling */
        .main-container {
            display: flex;
            gap: 20px;
            padding: 20px;
        }

        .content {
            margin-top: -80px; /* Mengurangi jarak antara navbar dan konten */
        }
    </style>
</head>
<body>
    <div class="header">
        <!-- Back button positioned on the far left with bluish-white color -->
        <button class="back-button" onclick="window.history.back()" aria-label="Back">
            <i class="fas fa-arrow-left"></i>
        </button>
        
        <!-- Centered logo in the header -->
        <a href="{{ ('/') }}" class="logo">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" width="50"> <!-- Logo image -->
        </a>

        <!-- Admin text on the right -->
        <div class="admin">Admin</div>
        
    </div>
    
    <div class="main-container">
        <div class="sidebar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-plus"></i>Log Out </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-users"></i>Sign In</a>
              </li>
            </ul>
          </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    
    <div class="footer text-center bg-light mt-3">
        &copy; Osislembar
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

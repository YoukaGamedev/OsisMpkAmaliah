<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <link rel="stylesheet" href="{{ asset('/asset/css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Bootstrap Icons -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

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
            color: #e0f7ff; /* Light blue */
            font-size: 1.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
            position: absolute;
            left: 20px; /* Pushed to the far left */
            background-color: transparent;
            border: none;
        }

        .back-button:hover {
            color: #cceeff;
            transform: scale(1.1); /* Enlarges on hover */
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
            flex: 1;
        }

        .content {
            margin-top: -80px; /* Reduce gap between navbar and content */
        }

        /* Footer Styling */
        .footer {
            background-color: #007bff;
            color: white;
            padding: 10px 10px;
            font-size: 0.9rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer .social-icons {
            margin: 0;
        }

        .footer .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .footer .social-icons a:hover {
            color: #cceeff;
        }

        .footer p {
            margin: 0;
            font-size: 0.85rem;
        }

        .footer small {
            font-size: 0.75rem;
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
                <a class="nav-link" href="#"><i class="bi bi-box-arrow-left"></i> Log Out</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-box-arrow-in-right"></i> Sign In</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-bell"></i> Notifications</a> 
              </li>
            </ul>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    
    <div class="footer">
        <p>&copy; 2025 Osislembar | All Rights Reserved</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <small>Designed with <i class="fas fa-heart text-danger"></i> by Osislembar Team</small>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

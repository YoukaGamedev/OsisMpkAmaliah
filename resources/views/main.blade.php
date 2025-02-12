<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <link rel="stylesheet" href="{{ asset('/asset/css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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

        .logo {
            transition: transform 0.3s ease;
            text-decoration: none;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70px;
            background-color:rgb(178, 179, 181);
            padding: 0 20px;
            position: relative;
        }

        .back-button {
            color:rgb(0, 0, 0);
            font-size: 1.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
            position: absolute;
            left: 20px;
            background-color: transparent;
            border: none;
        }

        .back-button:hover {
            color:rgb(255, 255, 255);
            transform: scale(1.1);
        }

        .admin {
            position: absolute;
            right: 20px;
            color: white;
            font-weight: bold;
        }

        .main-container {
            display: flex;
            gap: 20px;
            padding: 20px;
            flex: 1;
        }

        .content {
            margin-top: -80px;
        }

        .footer {
            background-color:black;
            color: white;
            padding: 10px 10px;
            font-size: 0.9rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            width: 100%;
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

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            position: relative;
            color: white;
            font-weight: bold;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }

        .highlight {
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
        }

        .highlight.pink {
            background: linear-gradient(45deg, #f093fb, #f5576c);
        }

        .highlight.blue {
            background: linear-gradient(45deg, #5ee7df, #b490ca);
        }

        .welcome-message {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
        }

        .sidebar {
            background-color: white;
            color: white;
            padding: 20px;
            border-radius: 10px;
            z-index: 1; /* Keep sidebar above footer */
        }

        .nav-item {
            margin-bottom: 5px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 6px 8px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            color: black;
            font-size: 1rem;
            font-family: 'Arial', sans-serif;
        }

        .nav-link:hover {
            background-color: #e6e6e6;
            transform: scale(1.05);
            text-decoration: none;
        }

        .nav-link .icon {
            margin-right: 6px;
            font-size: 1.2rem;
            font-weight: bold;
            color: black;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .nav-link:hover .icon {
            transform: scale(1.2);
            color: #007bff;
        }

        .nav-link .link-text {
            flex: 1;
            transition: color 0.3s ease;
        }

        .nav-link:hover .link-text {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="header">
        <button class="back-button" onclick="window.history.back()" aria-label="Back">
            <i class="fas fa-arrow-left"></i>
        </button>

        <a href="{{ ('/') }}" class="logo">
            <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" width="50">
        </a>

        <div class="admin">
    {{ Auth::user() ? Auth::user()->name . ' (' . Auth::user()->role . ')' : 'Guest' }}
</div>


    </div>

    <div class="main-container">
        <div class="sidebar">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/pemilu/dashboard') }}">
                    <i class="bi bi-box-arrow-in-right icon"></i>
                    <span class="link-text">Pemilu</span>
                </a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/gds/indexgds') }}">
                    <i class="bi bi-box-arrow-in-right icon"></i>
                    <span class="link-text">GDS</span>
                </a> 
              </li>
              <br><br>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/pemilu/datadpt') }}">
                    <i class="bi bi-box-arrow-left icon"></i>
                    <span class="link-text">Tambah User</span>
                </a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-box-arrow-left icon"></i>
                    <span class="link-text">Tambah Admin
                    </span>
                </a> 
              </li>
              
              <br><br>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/logout') }}">
                    <i class="bi bi-box-arrow-left icon"></i>
                    <span class="link-text">Log Out</span>
                </a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-box-arrow-in-right icon"></i>
                    <span class="link-text">Sign In</span>
                </a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-bell-fill icon"></i>
                    <span class="link-text">Notifications</span>
                </a> 
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
        <small>Designed with <i class="fas fa-heart text-danger"></i> by OsisMpk Team</small>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

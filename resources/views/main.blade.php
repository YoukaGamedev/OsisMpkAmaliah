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
</head>
<body>
    <div class="header d-flex align-items-center justify-content-between p-3 bg-dark text-white">
        <button class="back-button btn btn-light" onclick="window.history.back()" aria-label="Back">
            <i class="fas fa-arrow-left"></i>
        </button>
        <a href="{{ ('/') }}" class="logo mx-auto">
            <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" width="50">
        </a>
        <div class="admin">
            {{ Auth::user() ? Auth::user()->name . ' (' . Auth::user()->role . ')' : 'Guest' }}
        </div>
    </div>
    
    <div class="main-container">
        <div class="sidebar bg-dark" style="margin-bottom: 80px;">
            <ul class="nav flex-column">
                <li class="nav-item bg-dark">
                    <a class="nav-link text-white" href="{{ url('/admin/pemilu/dashboard') }}">
                        <i class="bi bi-bar-chart icon"></i>
                        <span class="link-text">Pemilu</span>
                    </a> 
                </li>
                <li class="nav-item bg-dark">
                    <a class="nav-link text-white" href="{{ url('/admin/gds/indexgds') }}">
                        <i class="bi bi-clipboard-data icon"></i>
                        <span class="link-text">GDS</span>
                    </a> 
                </li>
                <li class="nav-item bg-dark">
                    <a class="nav-link text-white" href="{{ url('/admin/pemilu/datadpt') }}">
                        <i class="bi bi-person-plus icon"></i>
                        <span class="link-text">Tambah User</span>
                    </a> 
                </li>
                <li class="nav-item bg-dark">
                    <a class="nav-link text-white" href="#">
                        <i class="bi bi-person-badge icon"></i>
                        <span class="link-text">Tambah Admin</span>
                    </a> 
                </li>
                <li class="nav-item bg-dark">
                    <a class="nav-link text-white" href="{{ url('/logout') }}">
                        <i class="bi bi-box-arrow-right icon"></i>
                        <span class="link-text">Log Out</span>
                    </a> 
                </li>
                <li class="nav-item bg-dark">
                    <a class="nav-link text-white" href="#">
                        <i class="bi bi-box-arrow-in-left icon"></i>
                        <span class="link-text">Sign In</span>
                    </a> 
                </li>
                <li class="nav-item bg-dark">
                    <a class="nav-link text-white" href="#">
                        <i class="bi bi-bell icon"></i>
                        <span class="link-text">Notifications</span>
                    </a> 
                </li>
            </ul>
        </div>
        <div class="content" style="margin-bottom: 100px;">
            @yield('content')
        </div>
    </div>
    
    <footer class="footer bg-dark text-white">
        <p>&copy; 2025 Osislembar | All Rights Reserved</p>
        <div class="social-icons">
            <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <small>Designed with <i class="fas fa-heart text-danger"></i> by OsisMpk Team</small>
    </footer>
    
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .main-container {
            flex: 1;
            display: flex;
            gap: 20px;
            padding: 20px;
        }
        .content {
            flex: 1;
            padding-bottom: 100px;
        }
        .footer {
            padding: 15px 10px;
            font-size: 0.9rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            position: relative;
            margin-top: auto;
            padding-top: 6px;
        }
    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

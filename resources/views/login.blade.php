<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f9fc;
            height: 100vh;
            background-image: url('{{ asset('asset/img/amaliah.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .login-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 10px;
        }

        .login-card h3 {
            margin-bottom: 30px;
            font-weight: bold;
        }

        .login-btn {
            width: 100%;
            background-color: #007bff;
            border: none;
            padding: 10px;
            border-radius: 25px;
            color: white;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .form-control {
            border-radius: 25px;
            padding: 10px 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .forgot-password {
            display: block;
            text-align: right;
            font-size: 14px;
        }

        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 50px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-card">
        <div class="logo">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" width="50"> <!-- Replace with your logo image -->
        </div>
        <h3 class="text-center">Login</h3>
        <form action="{{ ('/user/welcome') }}">
            <div class="form-group">
                <input type="text" class="form-control" id="nama" placeholder="Nama Kamu">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn login-btn mt-4">Login</button>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

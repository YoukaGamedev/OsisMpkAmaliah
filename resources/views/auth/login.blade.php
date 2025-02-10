<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('asset/img/amaliah.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            padding: 20px;
            width: 100%;
            max-width: 360px;
            animation: slideIn 1s ease-in-out;
        }

        .btn-gradient {
            background: linear-gradient(90deg, rgb(83, 82, 82), rgb(43, 43, 44));
        }

        .btn-gradient:hover {
            background: linear-gradient(90deg, rgb(43, 43, 44), rgb(23, 23, 23));
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.6);
            border: none;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.8);
        }

        .input-group-text {
            background-color: rgba(255, 255, 255, 0.6);
            border: none;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        .logo-bounce {
            animation: bounce 2s infinite;
        }
    </style>
</head>
<body>

<div class="glass-effect animate__animated animate__fadeIn">
    <!-- Logo -->
    <div class="text-center mb-3">
        <div class="rounded-circle overflow-hidden border shadow-sm mx-auto logo-bounce" style="width: 80px; height: 80px;">
            <img 
                src="{{ asset('asset/img/logo osis.png') }}" 
                alt="Logo" 
                class="img-fluid"
            >
        </div>
    </div>
    <!-- Title -->
    <h3 class="text-center text-dark mb-4 animate__animated animate__fadeInDown">Login</h3>
    <!-- Form -->
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <!-- Username -->
        <div class="mb-3 animate__animated animate__fadeInLeft">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user text-muted"></i></span>
                <input 
                    type="email" 
                    name="email"
                    class="form-control" 
                    placeholder="Email Kamu"
                    required
                >
            </div>
        </div>
        <!-- Password -->
        <div class="mb-3 animate__animated animate__fadeInRight">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock text-muted"></i></span>
                <input 
                    type="password" 
                    id="password" 
                    name="password"
                    class="form-control" 
                    placeholder="Password"
                    required
                >
                <span 
                    class="input-group-text cursor-pointer"
                    onclick="togglePassword()">
                    <i class="fas fa-eye" id="eye-icon"></i>
                </span>
            </div>
        </div>
        <!-- Submit Button -->
        <button 
            type="submit" 
            class="btn btn-gradient w-100 py-2 text-white rounded-pill shadow-sm animate__animated animate__pulse">
            Login
        </button>
    </form>
</div>

<script>
    function togglePassword() {
        const field = document.getElementById('password');
        const icon = document.getElementById('eye-icon');
        if (field.type === 'password') {
            field.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            field.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</body>
</html>

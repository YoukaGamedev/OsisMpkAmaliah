<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
    </style>
</head>
<body class="bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('{{ asset('asset/img/amaliah.jpg') }}');">
    
    <div class="bg-white/30 backdrop-blur-md shadow-lg rounded-2xl p-8 w-full max-w-md animate__animated animate__fadeIn">
        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <div class="w-20 h-20 bg-white rounded-full shadow-md flex items-center justify-center animate-bounce">
                <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" class="w-16 h-16">
            </div>
        </div>
        
        <!-- Title -->
        <h3 class="text-center text-gray-800 text-2xl font-semibold mb-6">Login</h3>

        <!-- Error Message -->
        @if(session('error'))
            <div class="mb-4 text-red-600 text-sm text-center">
                <strong>{{ session('error') }}</strong>
            </div>
        @endif
        
        <!-- Form -->
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <!-- Email -->
            <div class="mb-4">
                <div class="flex items-center bg-white rounded-lg shadow-sm p-2">
                    <i class="fas fa-user text-gray-500 mx-2"></i>
                    <input type="email" name="email" class="w-full bg-transparent outline-none px-2 text-gray-700" placeholder="Email Kamu" required>
                </div>
            </div>
            
            <!-- Password -->
            <div class="mb-4 relative">
                <div class="flex items-center bg-white rounded-lg shadow-sm p-2">
                    <i class="fas fa-lock text-gray-500 mx-2"></i>
                    <input type="password" id="password" name="password" class="w-full bg-transparent outline-none px-2 text-gray-700" placeholder="Password" required>
                    <button type="button" onclick="togglePassword()" class="text-gray-500 focus:outline-none">
                        <i class="fas fa-eye" id="eye-icon"></i>
                    </button>
                </div>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="w-full bg-gray-700 text-white py-2 rounded-lg shadow-md hover:bg-gray-900 transition duration-300">Login</button>
        </form>
    </div>
    
    <script>
        function togglePassword() {
            const field = document.getElementById('password');
            const icon = document.getElementById('eye-icon');
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</body>
</html>

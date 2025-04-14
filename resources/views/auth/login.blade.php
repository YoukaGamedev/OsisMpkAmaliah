<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login OSIS Amaliah</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .bg-overlay {
            background-color: rgba(0, 0, 0, 0.6);
        }
        
        .animate-float {
            animation: float 3s infinite ease-in-out;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .animate-fade-in {
            opacity: 0;
            animation: fadeIn 1.2s forwards ease-out;
        }
        
        .animate-fade-in-delay {
            opacity: 0;
            animation: fadeIn 1.2s 0.5s forwards ease-out;
        }
        
        .animate-pulse-slow {
            animation: pulse 3s infinite;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .input-focus:focus-within {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }
    </style>
</head>
<body class="min-h-screen bg-cover bg-center flex flex-col items-center justify-center text-white relative overflow-hidden" style="background-image: url('{{ asset('asset/img/amaliah.jpg') }}');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-overlay"></div>
    
    <!-- Login Card -->
    <div class="z-10 w-full max-w-md animate-fade-in">
        <!-- Header with logo -->
        <div class="text-center mb-6">
            <div class="relative inline-block animate-float mb-2">
                <div class="absolute inset-0 bg-blue-500 rounded-full blur-xl opacity-20"></div>
                <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo OSIS" class="relative w-24 h-24 animate-pulse-slow">
            </div>
            <h1 class="text-2xl font-bold">OSIS Amaliah</h1>
            <p class="text-sm text-gray-300">Aplikasi Resmi OSIS SMA Amaliah</p>
        </div>
        
        <!-- Login Form Card -->
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-lg animate-fade-in-delay">
            <h2 class="text-center text-white text-2xl font-semibold mb-6">Masuk</h2>
            
            <!-- Error Message -->
            @if(session('error'))
                <div class="mb-4 text-red-300 text-sm text-center animate-fade-in-delay">
                    <strong>{{ session('error') }}</strong>
                </div>
            @endif
            
            <!-- Form -->
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-5">
                    <label for="email" class="block text-gray-200 text-sm font-medium mb-2">Email</label>
                    <div class="flex items-center bg-white/10 rounded-lg input-focus transition-all duration-300 p-3 border border-white/20">
                        <i class="fas fa-user text-blue-400 mr-3"></i>
                        <input type="email" id="email" name="email" class="w-full bg-transparent outline-none text-white placeholder-gray-400" placeholder="Masukkan email kamu" required>
                    </div>
                </div>
                
                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-200 text-sm font-medium mb-2">Password</label>
                    <div class="flex items-center bg-white/10 rounded-lg input-focus transition-all duration-300 p-3 border border-white/20">
                        <i class="fas fa-lock text-blue-400 mr-3"></i>
                        <input type="password" id="password" name="password" class="w-full bg-transparent outline-none text-white placeholder-gray-400" placeholder="Masukkan password" required>
                        <button type="button" onclick="togglePassword()" class="text-gray-400 focus:outline-none hover:text-white transition-colors">
                            <i class="fas fa-eye" id="eye-icon"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 px-4 rounded-lg font-medium hover:from-blue-700 hover:to-indigo-800 transition-all duration-300 shadow-lg flex items-center justify-center gap-2">
                    <span>Masuk Sekarang</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>
        </div>
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
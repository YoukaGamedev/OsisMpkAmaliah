<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{ asset('asset/img/amaliah.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            overflow: hidden; 
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .glass-effect:hover { 
            background: rgba(255, 255, 255, 0.4);
        }

        .input-focus {
            border: 1px solid #3182ce; /* Blue focus */
        }

        .btn-gradient {
            background: linear-gradient(90deg,rgb(83, 82, 82),rgb(83, 82, 82));
        }

        .btn-gradient:hover {
            background: linear-gradient(90deg,rgb(43, 43, 44),rgb(43, 43, 44));
        }

        .icon-animation {
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-5px);
            }
        }
    </style>
</head>
<body>

<div class="flex items-center justify-center h-screen">
    <!-- Login Card -->
    <div class="glass-effect p-8 rounded-2xl max-w-sm w-full"
        x-data="{ hoverEffect: false }">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-gray-550 shadow-md transition-transform transform hover:scale-105">
                <img 
                    src="{{ asset('asset/img/logo osis.png') }}" 
                    alt="Logo" 
                >
            </div>
        </div>
        <!-- Title -->
        <h3    
            class="text-3xl font-bold text-center text-blue-700 opacity-0 transform scale-0"
            x-init="$nextTick(() => { $el.style.opacity = 1; $el.style.transform = 'scale(1)' })"
        >
            Login
        </h3>
        <!-- Form -->
        <form action="{{ url('/user/welcome') }}" class="mt-6 space-y-4">
            <!-- Username -->
            <div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-4 flex items-center text-black-400 icon-animation">
                        <i class="fas fa-user"></i>
                    </span>
                    <input 
                        type="text" 
                        class="w-full pl-12 pr-4 py-3 text-gray-800 bg-white bg-opacity-50 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        placeholder="Nama Kamu"
                    >
                </div>
            </div>
            <!-- Password -->
            <div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-4 flex items-center text-black-400 icon-animation">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input 
                        type="password" 
                        id="password" 
                        class="w-full pl-12 pr-12 py-3 text-gray-800 bg-white bg-opacity-50 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        placeholder="Password"
                    >
                    <span 
                        class="absolute inset-y-0 right-4 flex items-center text-gray-400 cursor-pointer"
                        x-on:click="() => {
                            const field = document.getElementById('password');
                            field.type = field.type === 'password' ? 'text' : 'password';
                        }"
                    >
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
            </div>
            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full py-3 text-white btn-gradient rounded-full shadow-lg hover:shadow-xl transition"
            >
                Login
            </button>
        </form>
        <!-- Footer -->
        <div class="text-center mt-6 text-sm text-gray-600">
            Belum punya akun? <a href="{{ url('/register') }}" class="text-black-500 font-bold hover:underline">Daftar di sini</a>.
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <title>MPK OSIS Amaliah</title>
=======
    <title>Welcome Page</title>
>>>>>>> Stashed changes
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .fade-in {
            opacity: 0;
<<<<<<< Updated upstream
            animation: fadeIn 1s forwards ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
=======
            transform: translateY(-20px);
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
>>>>>>> Stashed changes
            to {
                opacity: 1;
                transform: translateY(0);
            }
<<<<<<< Updated upstream
        }

        .slide-in {
            opacity: 0;
            transform: translateX(-50px);
            animation: slideIn 1s forwards ease-in-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-r from-gray-900 to-gray-700 text-white">
    <div class="container p-10 rounded-lg shadow-lg max-w-3xl w-full flex items-center fade-in">
        <div class="flex-1 slide-in">
            <h1 class="text-3xl font-bold italic">SELAMAT DATANG DI APK OSIS MPK SMK AMALIAH</h1>
            <p class="text-lg mt-3 font-semibold">SILAKAN LOGIN UNTUK MELANJUTKAN</p>
            <a href="{{ route('login') }}" class="mt-5 inline-flex items-center gap-3 bg-white text-gray-900 px-6 py-3 rounded-full text-lg font-semibold shadow-md hover:scale-105 transition-transform">
                login <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="flex-1 flex justify-center slide-in" style="animation-delay: 0.5s;">
            <img src="{{ asset('/asset/img/logo osis.png') }}" alt="Logo" class="w-48 h-48">
        </div>
=======
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100 text-center">
    
    <div class="welcome-container bg-white bg-opacity-70 p-10 rounded-lg shadow-lg max-w-md w-full backdrop-blur-md fade-in flex flex-col items-center">
        <div class="logo-container flex justify-center items-center mb-5 bg-transparent p-4 rounded-full shadow-md">
            <img src="{{ asset('/asset/img/logo osis.png') }}" alt="Logo" class="w-20 h-20 rounded-full">
        </div>
        <h1 class="text-gray-500 text-2xl font-bold">Welcome to Our System</h1>
        <p class="text-gray-500 mt-2">Silakan login untuk melanjutkan</p>
        <a href="{{ route('auth.login') }}" class="btn-custom bg-gray-500 text-white px-6 py-3 rounded-lg text-lg mt-4 inline-flex items-center gap-2 transition-transform transform hover:scale-105">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
>>>>>>> Stashed changes
    </div>
</body>
</html>

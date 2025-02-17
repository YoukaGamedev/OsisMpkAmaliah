<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APK OSIS Amaliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s forwards ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            <h1 class="text-3xl font-bold italic">SELAMATttt DATANG DI APK OSIS MPK SMK AMALIAH</h1>
            <p class="text-lg mt-3 font-semibold">SILAKAN LOGIN UNTUK MELANJUTKAN</p>
            <a href="{{ route('login') }}" class="mt-5 inline-flex items-center gap-3 bg-white text-gray-900 px-6 py-3 rounded-full text-lg font-semibold shadow-md hover:scale-105 transition-transform">
                login <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="flex-1 flex justify-center slide-in" style="animation-delay: 0.5s;">
            <img src="{{ asset('/asset/img/logo osis.png') }}" alt="Logo" class="w-48 h-48">
        </div>
    </div>
</body>
</html>

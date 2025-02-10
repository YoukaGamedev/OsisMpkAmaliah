<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<<<<<<< Updated upstream
<body>

    <div class="welcome-container">
        <h1>Welcome to Our System</h1>
        <p>Silakan login untuk melanjutkan</p>
        <a href="{{ route('login') }}" class="btn btn-custom">Login</a>
=======
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

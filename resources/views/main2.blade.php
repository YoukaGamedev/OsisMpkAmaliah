<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layuuuuuout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        .logo:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <div class="bg-gray-800 text-white py-4 px-6 flex items-center justify-between">
        <a href="{{ ('/') }}" class="logo">
            <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" class="w-12">
        </a>
        <div class="font-bold">
            {{ Auth::user() ? Auth::user()->name . ' (' . Auth::user()->role . ')' : 'Guest' }}
        </div>
    </div>
    <div class="flex flex-1">
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>
</html>

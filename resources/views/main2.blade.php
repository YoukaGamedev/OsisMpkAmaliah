<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
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
        <button class="text-white text-lg hover:text-gray-300" onclick="window.history.back()" aria-label="Back">
            <i class="fas fa-arrow-left"></i>
        </button>
        <a href="{{ ('/') }}" class="logo">
            <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" class="w-12">
        </a>
        <div class="font-bold">
            {{ Auth::user() ? Auth::user()->name . ' (' . Auth::user()->role . ')' : 'Guest' }}
        </div>
    </div>
    <div class="flex flex-1">
        <aside class="bg-white w-64 p-5 shadow-md">
            <ul>
                <li class="mb-3">
                    <a class="flex items-center p-2 rounded-lg hover:bg-gray-200" href="{{ url('/user/pemilu/home') }}">
                        <i class="bi bi-people-fill mr-2"></i>
                        Pemilu
                    </a>
                </li>
                <li class="mb-3">
                    <a class="flex items-center p-2 rounded-lg hover:bg-gray-200" href="{{ url('/admin/gds/indexgds') }}">
                        <i class="bi bi-clipboard-data mr-2"></i>
                        GDS
                    </a>
                </li>
                <li class="mb-3 border-t pt-3">
                    <a class="flex items-center p-2 rounded-lg hover:bg-gray-200" href="{{ url('/logout') }}">
                        <i class="bi bi-box-arrow-left mr-2"></i>
                        Log Out
                    </a>
                </li>
                <li class="mb-3">
                    <a class="flex items-center p-2 rounded-lg hover:bg-gray-200" href="#">
                        <i class="bi bi-box-arrow-in-right mr-2"></i>
                        Sign In
                    </a>
                </li>
                <li class="mb-3">
                    <a class="flex items-center p-2 rounded-lg hover:bg-gray-200" href="#">
                        <i class="bi bi-bell-fill mr-2"></i>
                        Notifications
                    </a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>
</html>

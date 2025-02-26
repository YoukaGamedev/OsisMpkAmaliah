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
        .nav-shadow {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Enhanced Navbar -->
    <nav class="bg-gradient-to-r from-gray-700 to-gray-900 text-white py-4 px-6 nav-shadow">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center space-x-2">
                <a href="{{ ('/user') }}" class="logo">
                    <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" class="w-12 h-12 object-contain">
                </a>
            </div>

            <!-- User Profile Section -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center bg-white-700 rounded-full px-4 py-2">
                    @if(Auth::user())
                        @if(Auth::user()->role === 'admin')
                            <i class="bi bi-person-workspace text-blue-400 text-xl mr-2"></i>
                        @else
                            <i class="bi bi-person-circle text-gray-300 text-xl mr-2"></i>
                        @endif
                        <span class="font-medium">
                            {{ Auth::user()->name }}
                            <span class="text-gray-300 text-sm ml-1">({{ Auth::user()->role }})</span>
                        </span>
                    @else
                        <i class="bi bi-person-circle text-gray-300 text-xl mr-2"></i>
                        <span class="font-medium">Guest</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>
</html>
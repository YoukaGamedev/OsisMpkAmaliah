<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
        .profile-card:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease-in-out;
        }
    </style>
</head> 
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Enhanced Navbar -->
    <nav class="bg-gradient-to-r from-gray-700 to-gray-900 text-white py-4 px-4 sm:px-6 nav-shadow">
        <div class="max-w-screen-xl mx-auto flex flex-row items-center justify-between">
            
            <!-- Logo Section -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" class="w-10 h-10 sm:w-12 sm:h-12 object-contain">
            </div>

            <!-- User Profile Section -->
            <div class="flex items-center space-x-3">
                <a href="{{ route('profile.show') }}" class="flex items-center bg-white bg-opacity-10 rounded-full px-3 py-1 hover:bg-opacity-20 transition profile-card">
                    @if(Auth::user())
                        <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('asset/img/default-avatar.png') }}" 
                             alt="User Avatar" 
                             class="w-8 h-8 sm:w-10 sm:h-10 rounded-full border border-gray-300 object-cover">
                        <div class="ml-2 text-left leading-tight hidden sm:block">
                            <p class="text-white text-sm sm:text-base font-medium">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-gray-300 text-xs sm:text-sm">
                                {{ Auth::user()->role }}
                            </p>
                        </div>
                    @else
                        <i class="bi bi-person-circle text-gray-300 text-lg mr-2"></i>
                        <span class="font-medium text-sm">Guest</span>
                    @endif
                </a>
            </div>
        </div>
    </nav>

    <div class="flex flex-1">
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>
</html>

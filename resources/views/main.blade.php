<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSIS & MPK</title>
    <link rel="icon" href="{{ asset('asset/img/logo osis.png') }}" type="image/png">
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
        @keyframes pulse-subtle {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.9; }
        }
        .status-active {
            animation: pulse-subtle 2s infinite;
        }
        .profile-dropdown {
            transform-origin: top right;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }
        .profile-dropdown.hidden {
            transform: scale(0.95);
            opacity: 0;
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Enhanced Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-r from-gray-700 to-gray-900 text-white py-4 px-4 sm:px-6 nav-shadow">

        <div class="max-w-screen-xl mx-auto flex flex-row items-center justify-between">
            
            <!-- Logo Section -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" class="w-10 h-10 sm:w-12 sm:h-12 object-contain logo transition-transform duration-300">
                <div class="hidden sm:block">
                    <h1 class="font-bold text-lg">OSIS & MPK</h1>
                    <p class="text-xs text-gray-300">Bisa gabisa</p>
                </div>
            </div>
            
            <!-- Center Section - Quick Actions
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="px-3 py-1 rounded-full hover:bg-white hover:bg-opacity-10 transition-colors duration-200 flex items-center">
                    <i class="bi bi-bell mr-2"></i>
                    <span>Notifications</span>
                </a>
            </div> -->

            <!-- User Profile Section with Dropdown -->
            <div x-data="{ profileOpen: false }" class="relative">
                <!-- Profile Button -->
                <button @click="profileOpen = !profileOpen" @click.outside="profileOpen = false" 
                        class="flex items-center bg-white bg-opacity-10 rounded-full px-3 py-1.5 hover:bg-opacity-20 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                    @if(Auth::user())
                        <div class="relative">
                            <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('asset/img/logo osis.png') }}"
                                 alt="User Avatar"
                                 class="w-8 h-8 sm:w-10 sm:h-10 rounded-full border-2 border-blue-400 object-cover shadow-md">
                            <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-gray-800 status-active"></div>
                        </div>
                        <div class="ml-2 text-left leading-tight hidden sm:block">
                            <p class="text-white text-sm sm:text-base font-medium">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-gray-300 text-xs sm:text-sm flex items-center">
                                <span class="bg-blue-500 rounded-full w-2 h-2 mr-1"></span>
                                {{ Auth::user()->role }}
                            </p>
                        </div>
                        <i class="bi bi-chevron-down ml-2 text-gray-300 transition-transform duration-200" :class="profileOpen ? 'rotate-180' : ''"></i>
                    @else
                        <i class="bi bi-person-circle text-gray-300 text-lg mr-2"></i>
                        <span class="font-medium text-sm">Guest</span>
                        <i class="bi bi-chevron-down ml-2 text-gray-300 transition-transform duration-200" :class="profileOpen ? 'rotate-180' : ''"></i>
                    @endif
                </button>
                
                <!-- Profile Dropdown -->
                <div x-show="profileOpen" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg overflow-hidden z-50">
                    
                    @if(Auth::user())
                        <!-- User Info Header -->
                        <div class="bg-gradient-to-r from-blue-600 to-blue-800 p-4 text-white">
                            <div class="flex items-center">
                                <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('asset/img/logo osis.png') }}"
                                     alt="User Avatar"
                                     class="w-12 h-12 rounded-full border-2 border-white object-cover">
                                <div class="ml-3">
                                    <p class="font-bold">{{ Auth::user()->name }}</p>
                                    <p class="text-xs text-blue-100">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="mt-2 text-xs text-blue-100 flex items-center">
                                <span class="bg-green-400 rounded-full w-2 h-2 mr-1"></span>
                                Active now
                            </div>
                        </div>
                        
                        <!-- Action Links -->
                        <div class="py-1">
                            <!-- <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                <i class="bi bi-person text-gray-500 mr-3"></i>
                                My Profile
                            </a> -->
                            <div class="border-t border-gray-200 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left flex items-center px-4 py-2 text-red-600 hover:bg-gray-100">
                                    <i class="bi bi-box-arrow-right text-red-500 mr-3"></i>
                                    Sign Out
                                </button>
                            </form>
                        </div>
                    @else
                        <!-- Guest Links -->
                        <div class="py-1">
                            <a href="{{ route('login') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                <i class="bi bi-box-arrow-in-right text-gray-500 mr-3"></i>
                                Login
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    
    <div class="flex flex-1">
        <main class="flex-1 pt-[80px]">
            @yield('content')
        </main>
    </div>
</body>
</html>
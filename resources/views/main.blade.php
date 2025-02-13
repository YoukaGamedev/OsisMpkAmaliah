<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<body class="bg-gray-100">
    <div class="bg-gray-800 text-white flex items-center justify-between p-4">
        <button class="text-xl" onclick="window.history.back()">
            <i class="fas fa-arrow-left"></i>
        </button>
        <a href="{{ ('/') }}" class="logo">
            <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo" class="w-12">
        </a>
        <div>
            {{ Auth::user() ? Auth::user()->name . ' (' . Auth::user()->role . ')' : 'Guest' }}
        </div>
    </div>

    <div class="flex">
        <nav class="w-64 bg-white shadow-md h-screen p-5">
            <ul>
                <li class="mb-4">
                    <a href="/admin/pemilu/dashboard" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-200">
                        <i class="bi bi-people-fill"></i>
                        <span>Pemilu</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/gds/indexgds" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-200">
                        <i class="bi bi-clipboard-data"></i>
                        <span>GDS</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/pemilu/datadpt" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-200">
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Tambah User</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-200">
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Tambah Admin</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/logout" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-red-500 hover:text-white">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Log Out</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-200">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Sign In</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-200">
                        <i class="bi bi-bell-fill"></i>
                        <span>Notifications</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
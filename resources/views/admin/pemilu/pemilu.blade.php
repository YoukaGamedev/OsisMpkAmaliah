@extends('main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex">

    <!-- Mobile Toggle Button -->
    <button id="sidebarToggle" class="fixed z-30 bottom-4 right-4 md:hidden bg-gray-800 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 focus:outline-none">
        <i class="bi bi-list text-xl"></i>
    </button>

    <!-- Sidebar -->
    <aside id="sidebar" class="bg-gray-800 w-0 md:w-16 hover:md:w-56 shadow-lg h-screen p-0 md:p-4 fixed top-0 left-0 z-20 transition-all duration-300 ease-in-out overflow-hidden group transform -translate-x-full md:translate-x-0 mt-20">
        <h4 class="text-white text-lg font-semibold mb-6 hidden group-hover:block text-center mt-4">📌 Pemilu</h4>
        <ul class="space-y-4">
            <li>
                <a class="flex items-center text-white p-3 rounded-lg hover:bg-gray-700 transition" href="{{ route('dashboardpemilu.index') }}">
                    <i class="bi bi-house-door-fill text-lg mr-3"></i> 
                    <span class="hidden group-hover:inline-block">Data Sekolah</span>
                </a>
            </li>
            <li>
                <a class="flex items-center text-white p-3 rounded-lg hover:bg-gray-700 transition" href="{{ route('datakelas.index') }}">
                    <i class="bi bi-person-lines-fill text-lg mr-3"></i> 
                    <span class="hidden group-hover:inline-block">Data Kelas</span>
                </a>
            </li>
            <li>
                <a class="flex items-center text-white p-3 rounded-lg hover:bg-gray-700 transition" href="{{ route('datakandidat.index') }}">
                    <i class="bi bi-person-circle text-lg mr-3"></i> 
                    <span class="hidden group-hover:inline-block">Data Kandidat</span>
                </a>
            </li>
            <li>
                <a class="flex items-center text-white p-3 rounded-lg hover:bg-gray-700 transition" href="{{ route('datadpt.index') }}">
                    <i class="bi bi-file-earmark-text text-lg mr-3"></i> 
                    <span class="hidden group-hover:inline-block">Data DPT</span>
                </a>
            </li>
            <li>
                <a class="flex items-center text-white p-3 rounded-lg hover:bg-gray-700 transition" href="{{ route('hasilpemilihan.index') }}">
                    <i class="bi bi-graph-up-arrow text-lg mr-3"></i> 
                    <span class="hidden group-hover:inline-block">Hasil Pilih</span>
                </a>
            </li>
            <li class="mt-6 border-t border-gray-700 pt-4">
                <a class="flex items-center text-white p-3 rounded-lg hover:bg-gray-700 transition" href="{{ url('/admin') }}">
                    <i class="bi bi-arrow-left-circle-fill text-lg mr-3"></i> 
                    <span class="hidden group-hover:inline-block">Kembali</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Content -->
    <div class="flex-1 p-6 transition-all duration-300 ease-in-out ml-0 md:ml-16" style="width: 100%;" id="mainContent">
        @yield('content1')
    </div>

    <!-- Sidebar toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.getElementById('sidebarToggle');
            const content = document.getElementById('mainContent');

            toggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
                sidebar.classList.toggle('w-0');
                sidebar.classList.toggle('w-56');
                sidebar.classList.toggle('p-0');
                sidebar.classList.toggle('p-4');
            });

            // Close on outside click (only mobile)
            document.addEventListener('click', (e) => {
                const isMobile = window.innerWidth < 768;
                if (isMobile && !sidebar.contains(e.target) && !toggle.contains(e.target)) {
                    sidebar.classList.add('-translate-x-full');
                    sidebar.classList.add('w-0');
                    sidebar.classList.remove('w-56');
                    sidebar.classList.add('p-0');
                    sidebar.classList.remove('p-4');
                }
            });
        });
    </script>

</body>
</html>

@endsection

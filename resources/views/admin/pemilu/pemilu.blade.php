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
    
    <!-- Sidebar -->
    <aside class="bg-gray-800 w-16 hover:w-56 shadow-lg h-screen p-4 fixed transition-all duration-300 ease-in-out overflow-hidden group">
        <h4 class="text-white text-lg font-semibold mb-6 hidden group-hover:block text-center">📌 Pemilu</h4>
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
    <div class="flex-1 p-6 transition-all duration-300 ease-in-out ml-16 group-hover:ml-56" style="width: calc(100% - 4rem);">
        @yield('content1')
    </div>

</body>
</html>

@endsection

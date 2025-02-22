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
    <div class="bg-white-800 w-59 shadow-lg h-screen p-4 fixed">
        <h4 class="text-black text-lg font-semibold mb-5">Pemilu</h4>
        <ul class="space-y-3">
            <li>
                <a class="flex items-center text-black p-3 rounded-lg hover:bg-gray-200 hover:text-black transition" href="{{ route('dashboardpemilu.index') }}">
                    <i class="bi bi-house-door-fill mr-3"></i> Data Sekolah
                </a>
            </li>
            <li>
                <a class="flex items-center text-black p-3 rounded-lg hover:bg-gray-200 hover:text-black transition" href="{{ route('datakelas.index') }}">
                    <i class="bi bi-person-lines-fill mr-3"></i> Data Kelas
                </a>
            </li>
            <li>
                <a class="flex items-center text-black p-3 rounded-lg hover:bg-gray-200 hover:text-black transition" href="{{ route('datakandidat.index') }}">
                    <i class="bi bi-person-circle mr-3"></i> Data Kandidat
                </a>
            </li>
            <li>
                <a class="flex items-center text-black p-3 rounded-lg hover:bg-gray-200 hover:text-black transition" href="{{ route('datadpt.index') }}">
                    <i class="bi bi-file-earmark-text mr-3"></i> Data DPT
                </a>
            </li>
            <li>
                <a class="flex items-center text-black p-3 rounded-lg hover:bg-gray-200 hover:text-black transition" href="{{ route('hasilpemilihan.index') }}">
                    <i class="bi bi-graph-up-arrow mr-3"></i> Hasil Pilih
                </a>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="flex-1 p-6 ml-64">
        @yield('content1')
    </div>
</body>
</html>

@endsection

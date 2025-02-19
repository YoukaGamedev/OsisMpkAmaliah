@extends('main')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    <aside class="bg-gray-800 w-59 p-5 shadow-md h-screen">
        <ul>
            <li class="mb-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="{{ route('dashboardpemilu.index') }}">
                    <i class="bi bi-people-fill mr-2"></i> Pemilu
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="{{ url('/admin/gds/indexgds') }}">
                    <i class="bi bi-clipboard-data mr-2"></i> GDS
                </a>
            </li>
            <li class="mb-3 border-t pt-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="{{ url('/logout') }}">
                    <i class="bi bi-box-arrow-left mr-2"></i> Log Out
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="#">
                    <i class="bi bi-box-arrow-in-right mr-2"></i> Sign In
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="#">
                    <i class="bi bi-bell-fill mr-2"></i> Notifications
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 container mx-auto px-6 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <a href="{{ route('dashboardpemilu.index') }}" class="transition-transform transform hover:scale-105">
                <div class="bg-pink-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                    <i class="fas fa-vote-yea text-4xl mb-4 opacity-80"></i>
                    <h3 class="text-lg font-semibold">Pemilu Ketua OSIS</h3>
                </div>
            </a>

            <a href="{{ url('/admin/gds/indexgds') }}" class="transition-transform transform hover:scale-105">
                <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                    <i class="fas fa-database text-4xl mb-4 opacity-80"></i>
                    <h3 class="text-lg font-semibold">Gerakan Disiplin Siswa</h3>
                </div>
            </a>

            <a href="#" class="transition-transform transform hover:scale-105">
                <div class="bg-gray-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                    <i class="fas fa-hourglass-half text-4xl mb-4 opacity-80"></i>
                    <h3 class="text-lg font-semibold">Coming Soon</h3>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

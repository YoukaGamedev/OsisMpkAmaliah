@extends('main2')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    <aside class="bg-white w-16 hover:w-56 p-2 shadow-md h-screen transition-all duration-300 ease-in-out overflow-hidden group">
        <ul>
            <li class="mb-5">
                <a class="flex text-black items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="{{ url('/user/pemilu/home') }}">
                    <i class="bi bi-people-fill mr-2"></i> <span class="hidden group-hover:inline-block">Pemilu</span>
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-black items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="{{ url('/admin/gds/indexgds') }}">
                    <i class="bi bi-clipboard-data mr-2"></i> <span class="hidden group-hover:inline-block">GDS</span>
                </a>
            </li>
            <li class="mb-3 border-t pt-3">
                <a class="flex text-black items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="{{ url('/logout') }}">
                    <i class="bi bi-box-arrow-left mr-2"></i> <span class="hidden group-hover:inline-block">Log Out</span>
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-black items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="#">
                    <i class="bi bi-box-arrow-in-right mr-2"></i> <span class="hidden group-hover:inline-block">Sign In</span>
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-black items-center p-2 rounded-lg hover:bg-gray-200 hover:text-black" href="#">
                    <i class="bi bi-bell-fill mr-2"></i> <span class="hidden group-hover:inline-block">Notifications</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 container mx-auto px-6 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <a href="{{ url('/user/pemilu/home') }}" class="transition-transform transform hover:scale-105">
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

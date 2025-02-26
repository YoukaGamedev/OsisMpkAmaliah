@extends('main')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    <aside class="bg-gray-800 w-16 hover:w-56 p-2 shadow-md h-screen transition-all duration-300 ease-in-out overflow-hidden group">
        <ul>
            <li class="mb-5">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-700" href="{{ route('dashboardpemilu.index') }}">
                    <i class="bi bi-check2-square mr-2"></i> <span class="hidden group-hover:inline-block">Pemilu</span>
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-700" href="{{ route('gds.index') }}">
                    <i class="bi bi-bar-chart-line-fill mr-2"></i> <span class="hidden group-hover:inline-block">GDS</span>
                </a>
            </li>
            <li class="mb-3 border-t pt-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-700" href="{{ route('useradmin.index') }}">
                    <i class="bi bi-people-fill mr-2"></i> <span class="hidden group-hover:inline-block">User & Admin</span>
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-700" href="{{ route('structure.index') }}">
                    <i class="bi bi-diagram-3-fill mr-2"></i> <span class="hidden group-hover:inline-block">Struktur OSIS & MPK</span>
                </a>
            </li>
            <li class="mb-3">
                <a class="flex text-white items-center p-2 rounded-lg hover:bg-gray-700" href="{{ route('agenda.index') }}">
                    <i class="bi bi-calendar-event-fill mr-2"></i> <span class="hidden group-hover:inline-block">Agenda Proker</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 container mx-auto px-6 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Pemilu -->
            <a href="{{ route('dashboardpemilu.index') }}" class="transition-transform transform hover:scale-105">
                <div class="bg-pink-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                    <i class="bi bi-check2-square text-4xl mb-4 opacity-80"></i>
                    <h3 class="text-lg font-semibold">Pemilu Ketua OSIS</h3>
                </div>
            </a>
            
            <!-- GDS -->
            <a href="{{ route('gds.index') }}" class="transition-transform transform hover:scale-105">
                <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                    <i class="bi bi-bar-chart-line-fill text-4xl mb-4 opacity-80"></i>
                    <h3 class="text-lg font-semibold">Gerakan Disiplin Siswa</h3>
                </div>
            </a>
<br>
            <!-- User & Admin -->
            <a href="{{ route('useradmin.index') }}" class="transition-transform transform hover:scale-105">
                <div class="bg-green-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                    <i class="bi bi-people-fill text-4xl mb-4 opacity-80"></i>
                    <h3 class="text-lg font-semibold">User & Admin</h3>
                </div>
            </a>

            <!-- Struktur OSIS & MPK -->
            <a href="{{ route('structure.index') }}" class="transition-transform transform hover:scale-105">
                <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                    <i class="bi bi-diagram-3-fill text-4xl mb-4 opacity-80"></i>
                    <h3 class="text-lg font-semibold">Struktur OSIS & MPK</h3>
                </div>
            </a>

            <!-- Agenda Proker -->
            <a href="{{ route('agenda.index') }}" class="transition-transform transform hover:scale-105">
                <div class="bg-purple-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                    <i class="bi bi-calendar-event-fill text-4xl mb-4 opacity-80"></i>
                    <h3 class="text-lg font-semibold">Agenda Proker</h3>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

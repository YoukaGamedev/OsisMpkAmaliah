@extends('main')

@section('content')
<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="bg-gray-900 text-white w-20 hover:w-64 transition-all duration-300 ease-in-out shadow-lg h-screen overflow-hidden group">
        <div class="flex flex-col items-center group-hover:items-start gap-4 p-4">
            <h2 class="text-xl font-bold hidden group-hover:block mb-6">Menu</h2>
            <nav class="space-y-4 w-full">
                <a href="{{ url('/user/pemilu/home') }}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-800 transition">
                    <i class="bi bi-check2-square text-lg"></i>
                    <span class="hidden group-hover:inline-block">Pemilu</span>
                </a>
                <a href="{{ route('gds.index') }}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-800 transition">
                    <i class="bi bi-bar-chart-line-fill text-lg"></i>
                    <span class="hidden group-hover:inline-block">GDS</span>
                </a>
                <a href="{{ route('user.struktur') }}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-800 transition border-t pt-4">
                    <i class="bi bi-diagram-3-fill text-lg"></i>
                    <span class="hidden group-hover:inline-block">Struktur</span>
                </a>
                <a href="{{ route('user.agenda') }}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-800 transition">
                    <i class="bi bi-calendar-event-fill text-lg"></i>
                    <span class="hidden group-hover:inline-block">Agenda</span>
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Dashboard OSIS</h1>
            <p class="text-gray-500">Silakan pilih menu yang ingin kamu kelola.</p>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Pemilu -->
            <a href="{{ url('user/pemilu/home') }}" class="transition-all duration-300 hover:shadow-lg">
                <div class="bg-gradient-to-r from-pink-500 to-pink-600 text-white p-5 rounded-lg shadow-md flex items-center">
                    <div class="bg-white/20 p-3 rounded-full mr-4">
                        <i class="bi bi-check2-square text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Pemilu Ketua OSIS</h3>
                        <p class="text-xs opacity-80">Kelola pemilihan ketua</p>
                    </div>
                </div>
            </a>

            <!-- GDS -->
            <a href="{{ route('gds.index') }}" class="transition-all duration-300 hover:shadow-lg">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-5 rounded-lg shadow-md flex items-center">
                    <div class="bg-white/20 p-3 rounded-full mr-4">
                        <i class="bi bi-bar-chart-line-fill text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Gerakan Disiplin Siswa</h3>
                        <p class="text-xs opacity-80">Pantau kedisiplinan siswa</p>
                    </div>
                </div>
            </a>

            <!-- Struktur OSIS -->
            <a href="{{ route('user.struktur') }}" class="transition-all duration-300 hover:shadow-lg">
                <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-white p-5 rounded-lg shadow-md flex items-center">
                    <div class="bg-white/20 p-3 rounded-full mr-4">
                        <i class="bi bi-diagram-3-fill text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Struktur OSIS & MPK</h3>
                        <p class="text-xs opacity-80">Lihat susunan organisasi</p>
                    </div>
                </div>
            </a>

            <!-- Agenda -->
            <a href="{{ route('user.agenda') }}" class="transition-all duration-300 hover:shadow-lg">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-5 rounded-lg shadow-md flex items-center">
                    <div class="bg-white/20 p-3 rounded-full mr-4">
                        <i class="bi bi-calendar-event-fill text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Agenda Proker</h3>
                        <p class="text-xs opacity-80">Kelola jadwal program kerja</p>
                    </div>
                </div>
            </a>
        </div>
    </main>
</div>
@endsection

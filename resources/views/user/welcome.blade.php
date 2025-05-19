@extends('main')

@section('content')
<<<<<<< Updated upstream
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
                <a href="{{ route('pelanggaran.index') }}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-800 transition">
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
=======
<div class="flex">
    <!-- Sidebar - Positioned below header -->
    <aside id="sidebar" class="fixed top-20 bottom-0 left-0 z-10 bg-gray-800 w-0 md:w-16 hover:md:w-64 p-0 md:p-2 shadow-lg transition-all duration-300 ease-in-out overflow-hidden group transform -translate-x-full md:translate-x-0">
        <ul class="mt-2">
            <li class="mb-2">
                <a class="flex text-white items-center p-3 rounded-lg hover:bg-gray-700 transition-all" href="{{ route('dashboardpemilu.index') }}">
                    <i class="bi bi-check2-square text-lg min-w-[24px]"></i> 
                    <span class="ml-3 hidden group-hover:md:inline-block whitespace-nowrap">Pemilu</span>
                </a>
            </li>
            <li class="mb-2">
                <a class="flex text-white items-center p-3 rounded-lg hover:bg-gray-700 transition-all" href="{{ route('rekapgds.index') }}">
                    <i class="bi bi-bar-chart-line-fill text-lg min-w-[24px]"></i> 
                    <span class="ml-3 hidden group-hover:md:inline-block whitespace-nowrap">GDS</span>
                </a>
            </li>
            <li class="my-4 px-3">
                <div class="border-t border-gray-700"></div>
            </li>
            <li class="mb-2">
                <a class="flex text-white items-center p-3 rounded-lg hover:bg-gray-700 transition-all" href="{{ route('structure.index') }}">
                    <i class="bi bi-diagram-3-fill text-lg min-w-[24px]"></i> 
                    <span class="ml-3 hidden group-hover:md:inline-block whitespace-nowrap">Struktur OSIS & MPK</span>
                </a>
            </li>
            <li class="mb-2">
                <a class="flex text-white items-center p-3 rounded-lg hover:bg-gray-700 transition-all" href="{{ route('agenda.index') }}">
                    <i class="bi bi-calendar-event-fill text-lg min-w-[24px]"></i> 
                    <span class="ml-3 hidden group-hover:md:inline-block whitespace-nowrap">Agenda Proker</span>
>>>>>>> Stashed changes
                </a>
            </nav>
        </div>
    </aside>

<<<<<<< Updated upstream
    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Dashboard OSIS</h1>
            <p class="text-gray-500">Silakan pilih menu yang ingin kamu kelola.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-6">
            <!-- Card: Pemilu -->
            <a href="{{ route('dashboardpemilu.index') }}" class="transition-all duration-300 hover:shadow-lg">
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

            <!-- Card: GDS -->
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
=======
    <!-- Main Content - Positioned below header -->
    <div class="flex-1 pt-7 ml-0 md:ml-16 transition-all duration-300">
        <div class="container mx-auto px-4 py-6">
            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Fitur Utama</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
                    <a href="{{ route('rekapgds.index') }}" class="transition-all duration-300 hover:shadow-lg">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-5 rounded-lg shadow-md flex items-center">
                            <div class="bg-white/20 p-3 rounded-full mr-4">
                                <i class="bi bi-bar-chart-line-fill text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">GDS</h3>
                                <p class="text-xs opacity-80">Gerakan Disiplin Siswa</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Manajemen OSIS</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Struktur OSIS & MPK -->
                    <a href="" class="transition-all duration-300 hover:shadow-lg">
                        <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white p-5 rounded-lg shadow-md flex items-center">
                            <div class="bg-white/20 p-3 rounded-full mr-4">
                                <i class="bi bi-diagram-3-fill text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">Struktur OSIS & MPK</h3>
                                <p class="text-xs opacity-80">Kelola struktur organisasi</p>
                            </div>
                        </div>
                    </a>

                    <!-- Agenda Proker -->
                    <a href="{{ route('agenda.index') }}" class="transition-all duration-300 hover:shadow-lg">
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-5 rounded-lg shadow-md flex items-center">
                            <div class="bg-white/20 p-3 rounded-full mr-4">
                                <i class="bi bi-calendar-event-fill text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">Agenda Proker</h3>
                                <p class="text-xs opacity-80">Program kerja & jadwal</p>
                            </div>
                        </div>
                    </a>
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

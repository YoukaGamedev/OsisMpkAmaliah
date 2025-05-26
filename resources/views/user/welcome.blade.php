@extends('main')

@section('content')

@php
    $statusPemilu = \App\Models\Dashboard::first()?->status_pemilu;
@endphp

<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="bg-gray-900 text-white w-20 hover:w-64 transition-all duration-300 ease-in-out shadow-lg h-screen overflow-hidden group">
        <div class="flex flex-col items-center group-hover:items-start gap-4 p-4">
            <h2 class="text-xl font-bold hidden group-hover:block mb-6">Menu</h2>
            <nav class="space-y-4 w-full">
                @if ($statusPemilu)
                <a href="{{ url('user/pemilu/pilihkandidat') }}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-800 transition">
                    <i class="bi bi-check2-square text-lg"></i>
                    <span class="hidden group-hover:inline-block">Pemilu</span>
                </a>
                @endif
                <a href="{{ route('pelanggaran.index') }}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-800 transition">
                    <i class="bi bi-bar-chart-line-fill text-lg"></i>
                    <span class="hidden group-hover:inline-block">GDS</span>
                </a>
               
                <a href="{{ route('user.agenda') }}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-800 transition">
                    <i class="bi bi-calendar-event-fill text-lg"></i>
                    <span class="hidden group-hover:inline-block">Agenda</span>
                </a>
            </nav>
        </div>
    </aside>
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="mb-8 flex flex-col items-center text-center">
    <div class="text-4xl text-blue-600 mb-2">
        <i class="bi bi-person-circle"></i>
    </div>
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 leading-tight">
        Hai, {{ Auth::user()->name }} 👋
    </h1>
    <p class="text-gray-500 text-sm sm:text-base mb-4">
        Selamat datang di sistem informasi OSIS dan MPK
    </p>
</div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-6">
            <!-- Card: Pemilu -->

@if ($statusPemilu)
    <!-- Card: Pemilu -->
    <a href="{{ url('user/pemilu/pilihkandidat') }}" class="transition-all duration-300 hover:shadow-lg">
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
@endif

            <!-- Card: GDS -->
            <a href="{{ route('pelanggaran.index') }}" class="transition-all duration-300 hover:shadow-lg">
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
            </div>
        </div>
    </main>
</div>
@endsection

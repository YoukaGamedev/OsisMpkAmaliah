@extends('main')

@section('content')
<div class="flex relative">
    <!-- Mobile Navigation Toggle Button -->
    <button id="sidebarToggle" class="fixed z-20 bottom-4 right-4 md:hidden bg-gray-800 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 focus:outline-none">
        <i class="bi bi-list text-xl"></i>
    </button>

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
                <a class="flex text-white items-center p-3 rounded-lg hover:bg-gray-700 transition-all" href="{{ route('gds.index') }}">
                    <i class="bi bi-bar-chart-line-fill text-lg min-w-[24px]"></i> 
                    <span class="ml-3 hidden group-hover:md:inline-block whitespace-nowrap">GDS</span>
                </a>
            </li>
            <li class="my-4 px-3">
                <div class="border-t border-gray-700"></div>
            </li>
            <li class="mb-2">
                <a class="flex text-white items-center p-3 rounded-lg hover:bg-gray-700 transition-all" href="{{ route('useradmin.index') }}">
                    <i class="bi bi-people-fill text-lg min-w-[24px]"></i> 
                    <span class="ml-3 hidden group-hover:md:inline-block whitespace-nowrap">User & Admin</span>
                </a>
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
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content - Positioned below header -->
    <div class="flex-1 pt-7 ml-0 md:ml-16 transition-all duration-300">
        <div class="container mx-auto px-4 py-6">
            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Fitur Utama</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Pemilu -->
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
                    
                    <!-- GDS -->
                    <a href="{{ route('gds.index') }}" class="transition-all duration-300 hover:shadow-lg">
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
                    <a href="{{ route('structure.index') }}" class="transition-all duration-300 hover:shadow-lg">
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
                    
                    <!-- User & Admin -->
                    <a href="{{ route('useradmin.index') }}" class="transition-all duration-300 hover:shadow-lg">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-5 rounded-lg shadow-md flex items-center">
                            <div class="bg-white/20 p-3 rounded-full mr-4">
                                <i class="bi bi-people-fill text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">User & Admin</h3>
                                <p class="text-xs opacity-80">Kelola pengguna sistem</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
            sidebar.classList.toggle('w-0');
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('p-0');
            sidebar.classList.toggle('p-2');
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const isMobile = window.innerWidth < 768;
            if (isMobile && !sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.add('w-0');
                sidebar.classList.remove('w-64');
                sidebar.classList.add('p-0');
                sidebar.classList.remove('p-2');
            }
        });
    });
</script>
@endsection
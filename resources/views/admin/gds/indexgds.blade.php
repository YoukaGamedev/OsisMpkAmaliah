@extends('admin.gds.gds')

@section('content2')
    <!-- Stats Overview Row -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Total Pelanggaran Card -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 rounded-md bg-blue-100 dark:bg-blue-900 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 dark:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Pelanggaran</h2>
                        <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $totalPelanggaran }}</p>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ $peningkatanPelanggaran > 0 ? 'Naik' : 'Turun' }} dari bulan lalu</span>
                        <span class="text-xs font-medium {{ $peningkatanPelanggaran > 0 ? 'text-red-500' : 'text-green-500' }}">
                            {{ abs($peningkatanPelanggaran) }}%
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pelanggaran Bulan Ini Card -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 rounded-md bg-green-100 dark:bg-green-900 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 dark:text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-sm font-medium text-gray-600 dark:text-gray-400">Bulan Ini</h2>
                        <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $pelanggaranBulanIni }}</p>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ now()->format('F Y') }}</span>
                        <span class="text-xs font-medium {{ $trendBulanIni > 0 ? 'text-red-500' : 'text-green-500' }}">
                            {{ $trendBulanIni > 0 ? '+' : '' }}{{ $trendBulanIni }}%
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pelanggaran Teratas Card -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 rounded-md bg-red-100 dark:bg-red-900 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 dark:text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-sm font-medium text-gray-600 dark:text-gray-400">Pelanggaran Teratas</h2>
                        <p class="text-xl font-bold text-gray-900 dark:text-gray-100">{{ $pelanggaranTeratas }}</p>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ $persentasePelanggaranTeratas }}% dari total</span>
                        <span class="text-xs font-medium text-blue-500">
                            Detail
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Siswa Pelanggar Card -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 rounded-md bg-purple-100 dark:bg-purple-900 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500 dark:text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-sm font-medium text-gray-600 dark:text-gray-400">Siswa Pelanggar</h2>
                        <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $jumlahSiswaPelanggar }}</p>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ $persentaseSiswaPelanggar }}% dari total siswa</span>
                        <span class="text-xs font-medium text-blue-500">
                            <a href="{{ route('admin.siswa.pelanggar') }}">Lihat</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center bg-white dark:bg-gray-800 shadow-md rounded-lg p-4 mb-6">
        <h2 class="text-lg font-medium text-gray-800 dark:text-gray-200 mb-4 md:mb-0">
            Monitoring Pelanggaran
        </h2>
        <div class="flex flex-wrap gap-3">
            <select id="filterPeriode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="week">Minggu Ini</option>
                <option value="month" selected>Bulan Ini</option>
                <option value="semester">Semester Ini</option>
                <option value="year">Tahun Ini</option>
            </select>
            <select id="filterKelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="all">Semua Kelas</option>
                @foreach($kelasList as $kelas)
                    <option value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
                @endforeach
            </select>
            <button id="refreshData" class="flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                Refresh
            </button>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Area Chart -->
        <div class="lg:col-span-2 bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
                <h2 class="text-lg font-medium text-gray-800 dark:text-gray-200">Tren Pelanggaran</h2>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                        <div class="py-1">
                            <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 trendFilter" data-value="week">Minggu Ini</button>
                            <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 trendFilter" data-value="month">Bulan Ini</button>
                            <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 trendFilter" data-value="semester">Semester Ini</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="relative h-80">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
                <h2 class="text-lg font-medium text-gray-800 dark:text-gray-200">Distribusi Jenis Pelanggaran</h2>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                        <div class="py-1">
                            <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 pieFilter" data-value="week">Minggu Ini</button>
                            <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 pieFilter" data-value="month">Bulan Ini</button>
                            <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 pieFilter" data-value="semester">Semester Ini</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="relative h-64">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 flex flex-wrap justify-center gap-4 text-xs">
                    @foreach($kategoriPelanggaran as $index => $kategori)
                    <div class="flex items-center">
                        <span class="w-3 h-3 inline-block rounded-full bg-{{ $warna[$index % count($warna)] }}-500 mr-1"></span>
                        <span class="text-gray-600 dark:text-gray-300">{{ $kategori->nama }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Violations Table -->
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden mb-6">
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
            <h2 class="text-lg font-medium text-gray-800 dark:text-gray-200">Pelanggaran Terbaru</h2>
            <a href="{{ route('admin.pelanggaran.index') }}" class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300 text-sm font-medium">
                Lihat Semua
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Siswa
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Kelas
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Jenis Pelanggaran
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Poin
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Tindakan
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($pelanggaranTerbaru as $pelanggaran)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="{{ $pelanggaran->siswa->foto ?? asset('images/default-avatar.png') }}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                        {{ $pelanggaran->siswa->nama }}
                                    </div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">
                                        {{ $pelanggaran->siswa->nis }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900 dark:text-gray-100">{{ $pelanggaran->siswa->kelas->nama }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $pelanggaran->kategori_id == 1 ? 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200' : 
                                ($pelanggaran->kategori_id == 2 ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200' : 
                                'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200') }}">
                                {{ $pelanggaran->jenis->nama }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                            {{ $pelanggaran->jenis->poin }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                            {{ $pelanggaran->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.pelanggaran.show', $pelanggaran->id) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Classes Overview and Top Offenders Cards -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Classes Overview -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-lg font-medium text-gray-800 dark:text-gray-200">Pelanggaran per Kelas</h2>
            </div>
            <div class="p-6">
                <div class="relative h-80">
                    <canvas id="classChart"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Top Offenders -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-lg font-medium text-gray-800 dark:text-gray-200">Siswa dengan Pelanggaran Terbanyak</h2>
            </div>
            <div class="p-6">
                <ul>
                    @foreach($siswaTopPelanggar as $index => $siswa)
                    <li class="mb-4 last:mb-0">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 text-center">
                                <span class="text-lg font-bold {{ $index < 3 ? 'text-red-500' : 'text-gray-500 dark:text-gray-400' }}">
                                    #{{ $index + 1 }}
                                </span>
                            </div>
                            <div class="flex-shrink-0 ml-3">
                                <img class="h-10 w-10 rounded-full" src="{{ $siswa->foto ?? asset('images/default-avatar.png') }}" alt="">
                            </div>
                            <div class="ml-4 flex-grow">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{ $siswa->nama }}
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">
                                            {{ $siswa->kelas->nama }} | {{ $siswa->nis }}
                                        </div>
                                    </div>
                                    <div class="bg-red-100 dark:bg-red-900 px-3 py-1 rounded-full">
                                        <span class="text-sm font-semibold text-red-800 dark:text-red-200">{{ $siswa->total_poin }} Poin</span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200 dark:bg-gray-700">
                                        <div style="width:{{ ($siswa->total_poin / $maxPoin) * 100 }}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Area Chart - Trend Pelanggaran
    const areaCtx = document.getElementById('myAreaChart').getContext('2d');
    const areaChart = new Chart(areaCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode($trendLabels) !!},
            datasets: [{
                label: 'Jumlah Pelanggaran',
                data: {!! json_encode($trendData) !!},
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderColor: 'rgba(59, 130, 246, 1)',
                pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(59, 130, 246, 1)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(156, 163, 175, 0.1)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

    // Pie Chart - Distribusi Jenis Pelanggaran
    const pieCtx = document.getElementById('myPieChart').getContext('2d');
    const pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: {!! json_encode($pieLabels) !!},
            datasets: [{
                data: {!! json_encode($pieData) !!},
                backgroundColor: [
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(99, 102, 241, 0.8)',
                    'rgba(249, 115, 22, 0.8)',
                    'rgba(236, 72, 153, 0.8)'
                ],
                borderColor: [
                    'rgba(59, 130, 246, 1)',
                    'rgba(16, 185, 129, 1)',
                    'rgba(99, 102, 241, 1)',
                    'rgba(249, 115, 22, 1)',
                    'rgba(236, 72, 153, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
    
    // Bar Chart - Pelanggaran per Kelas
    const classCtx = document.getElementById('classChart').getContext('2d');
    const classChart = new Chart(classCtx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($kelasLabels) !!},
            datasets: [{
                label: 'Jumlah Pelanggaran',
                data: {!! json_encode($kelasData) !!},
                backgroundColor: 'rgba(99, 102, 241, 0.8)',
                borderColor: 'rgba(99, 102, 241, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(156, 163, 175, 0.1)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Filter events
    document.
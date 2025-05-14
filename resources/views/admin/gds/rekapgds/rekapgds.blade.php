@extends('admin.gds.gds')

@section('content2')
<div class="container px-4 mx-auto">
    <!-- Page Heading -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between py-4 mb-6">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Rekap Gerakan Disiplin Siswa (GDS)</h1>
    </div>

    <!-- Filter Card -->
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg mb-6 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
            <h2 class="text-lg font-medium text-gray-800 dark:text-gray-200">Filter Data</h2>
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                    <div class="py-1">
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>
                        <button onclick="exportExcel()"  class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Export to Excel</button>
                        <button id="printWindowBtn" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">
                            Windows Print
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 py-4">
        <form id="filterForm" method="GET" action="{{ route('rekapgds.index') }}" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" value="{{ request('tanggal') }}" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-blue-500 dark:focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm" id="tanggal" name="tanggal">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 opacity-0">Action</label>
                    <button type="submit" class="w-full flex justify-center items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        Filter
                    </button>
                </div>
            </form>
        </div>
    </div>

     <!-- Summary Cards -->
     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Total Pelanggaran Card -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Total Pelanggaran</dt>
                            <dd>
                                <div class="text-lg font-medium text-gray-900 dark:text-white" id="totalPelanggaran">{{ $rekapgds->count() }}</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Siswa Card -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Total Siswa Terlibat</dt>
                            <dd>
                                <div class="text-lg font-medium text-gray-900 dark:text-white" id="totalSiswa">{{ $rekapgds->pluck('siswa_id')->unique()->count() }}</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pelanggaran Terakhir Card -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">Pelanggaran Terakhir</dt>
                            <dd>
                                <div class="text-lg font-medium text-gray-900 dark:text-white" id="lastPelanggaran">
                                    @if($rekapgds->count() > 0)
                                        {{ \Carbon\Carbon::parse($rekapgds->sortByDesc('tanggal_pelanggaran')->first()->tanggal_pelanggaran)->format('d/m/Y') }}
                                    @else
                                        -
                                    @endif
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- DataTables -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden mb-6">
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
            <h2 class="text-lg font-medium text-gray-800 dark:text-gray-200">Data Rekap Pelanggaran GDS</h2>
        </div>
        <div class="px-6 py-4 overflow-x-auto">
        <form id="filterForm" action="{{ route('rekapgds.index') }}" method="GET" class="bg-white dark:bg-gray-800 p-4 rounded-md shadow">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
        {{-- Input Nama --}}
        <div>
            <label for="searchNama" class="text-sm text-gray-700 dark:text-gray-300">Nama Siswa</label>
            <input type="text" name="nama" id="searchNama" placeholder="Cari Nama..." value="{{ request('nama') }}"
                class="w-full text-sm px-3 py-2 rounded-md border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-400 focus:border-blue-400">
        </div>

        {{-- Dropdown Kelas --}}
        <div>
            <label for="searchKelas" class="text-sm text-gray-700 dark:text-gray-300">Kelas</label>
            <select name="kelas" id="searchKelas"
                class="w-full text-sm px-3 py-2 rounded-md border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-400 focus:border-blue-400">
                <option value="">Semua Kelas</option>
                @foreach($daftarKelas as $kelas)
                    <option value="{{ $kelas }}" {{ request('kelas') == $kelas ? 'selected' : '' }}>{{ $kelas }}</option>
                @endforeach
            </select>
        </div>

        {{-- Dropdown Jenis Pelanggaran --}}
        <div>
            <label for="searchPelanggaran" class="text-sm text-gray-700 dark:text-gray-300">Jenis Pelanggaran</label>
            <select name="jenis" id="searchPelanggaran"
                class="w-full text-sm px-3 py-2 rounded-md border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-400 focus:border-blue-400">
                <option value="">Semua Pelanggaran</option>
                @foreach($daftarJenisPelanggaran as $jenis)
                    <option value="{{ $jenis }}" {{ request('jenis') == $jenis ? 'selected' : '' }}>
                        {{ ucfirst(str_replace('_', ' ', $jenis)) }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Tombol Submit --}}
        <div class="flex items-end">
            <button type="submit"
                class="w-full px-4 py-3 bg-blue-600 hover:bg-blue-500 text-white text-sm font-medium rounded-md shadow focus:outline-none focus:ring-2 focus:ring-blue-300">
                Filter
            </button>
        </div>
    </div>
</form>
            <table id="rekapTable" class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nama Siswa</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Kelas</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tanggal</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Jenis Pelanggaran</th>
                    </tr>
                </thead>
                <tbody id="rekapTableBody" class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @php $no = 1; @endphp
                    @foreach($rekapgds as $rekap)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">{{ $no++ }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">{{ $rekap->siswa->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">{{ $rekap->siswa->kelas }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">{{ \Carbon\Carbon::parse($rekap->tanggal_pelanggaran)->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
    @php
        $pelanggaranFields = [
            'dasi', 'kacuk', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu',
            'jas', 'ring', 'bros', 'makeup', 'telat', 'ciput', 'hijab', 'almamater'
        ];

        $jenisPelanggaran = [];
        foreach ($pelanggaranFields as $field) {
            if ($rekap->$field == 0) {
                $jenisPelanggaran[] = ucfirst(str_replace('_', ' ', $field));
            }
        }
    @endphp

    {{ implode(', ', $jenisPelanggaran) }}
</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
function exportExcel() {
    const table = document.getElementById('rekapTable');
    const today = new Date().toISOString().slice(0, 10);
    const filename = `Rekap_GDS_${today}.xls`;

    const htmlContent = `
        <html xmlns:o="urn:schemas-microsoft-com:office:office"
              xmlns:x="urn:schemas-microsoft-com:office:excel"
              xmlns="http://www.w3.org/TR/REC-html40">
        <head>
            <meta charset="UTF-8">
            <style>
                table, th, td {
                    border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px;
                    text-align: left;
                    font-family: Arial, sans-serif;
                    font-size: 12px;
                }
                th {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            ${table.outerHTML}
        </body>
        </html>`;

    const blob = new Blob([htmlContent], { type: 'application/vnd.ms-excel' });
    const url = URL.createObjectURL(blob);

    const a = document.createElement('a');
    a.href = url;
    a.download = filename;
    document.body.appendChild(a); // diperlukan di Firefox
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}

document.getElementById('printWindowBtn').addEventListener('click', function () {
        window.print();
    });
</script>

<style>
@media print {
    body * {
        visibility: hidden;
    }

    #rekapTable, #rekapTable * {
        visibility: visible;
    }

    #rekapTable {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
    }
}
</style>


@endsection
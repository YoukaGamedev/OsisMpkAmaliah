@extends('admin.gds.gds')

@section('content2')
<div class="p-4 sm:p-6">
    <!-- Navbar -->
    <nav class="bg-gray-700 text-white p-3 sm:p-4 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 rounded-lg shadow-md">
        <h1 class="text-base sm:text-lg font-semibold">Rekap GDS</h1>
        <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
            <div class="flex items-center gap-2">
                <label for="filterTanggal" class="text-sm">Tanggal:</label>
                <input type="date" id="filterTanggal" class="pl-3 pr-4 py-1 sm:py-2 rounded-lg bg-white text-gray-700 shadow focus:ring focus:ring-blue-300 text-sm" value="{{ date('Y-m-d') }}">
            </div>
            <button onclick="cetakRekapan()" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 sm:py-2 px-3 sm:px-4 rounded-lg shadow text-sm flex items-center justify-center">
                <i class="fas fa-print mr-2"></i> Cetak
            </button>
        </div>
    </nav>
    @php
        $hariIndo = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];
        $hariIni = $hariIndo[date('l')];
        $pjHariIni = $jadwalgds->where('hari', $hariIni)->pluck('pj')->first() ?? 'Tidak ada';
    @endphp

    <!-- Tabel Rekap -->
    <div class="mt-4 sm:mt-6 bg-white shadow-md rounded-lg overflow-hidden" id="printArea">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center p-3 sm:p-4 bg-gray-700 text-white gap-2">
            <h2 class="text-base sm:text-lg font-semibold">Data Rekapan</h2>
            <span class="text-xs sm:text-sm bg-blue-500 px-3 py-1 rounded-lg shadow">PJ Hari {{ $hariIni }}: {{ $pjHariIni }}</span>
        </div>

        <!-- Scrollable Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse text-xs sm:text-sm" id="rekapTable">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="p-2 text-left border">Nama</th>
                        <th class="p-2 text-left border">Kelas</th>
                        <th class="p-2 text-left border">Atribut Tidak Terpenuhi</th>
                    </tr>
                </thead>
                <tbody id="rekapBody">
    @php
        $attributes = [
            'dasi' => 'Dasi', 'kacuk' => 'Kacu', 'kaos_kaki' => 'Kaos Kaki', 'sabuk' => 'Sabuk', 'nametag' => 'NameTag',
            'sepatu' => 'Sepatu', 'jas' => 'Jas', 'ring' => 'Ring', 'bros' => 'Bros', 'makeup' => 'Make Up',
            'telat' => 'Telat', 'ciput' => 'Ciput', 'hijab' => 'Hijab', 'almamater' => 'Almamater'
        ];
    @endphp

    @foreach ($rekapgds as $pelanggaran)
        @php
            $missing = [];
            foreach ($attributes as $key => $label) {
                // Pastikan hanya atribut yang bernilai 0 yang ditambahkan
                if ($pelanggaran->$key === 0) {
                    $missing[] = $label;
                }
            }
        @endphp

        @if (count($missing) > 0)
        <tr class="border-b hover:bg-gray-100">
            <!-- Menampilkan Nama dan Kelas Siswa -->
            <td class="p-2 border">{{ $pelanggaran->siswa->nama }}</td>
            <td class="p-2 border">{{ $pelanggaran->siswa->kelas }}</td>
            <!-- Menampilkan Atribut yang Tidak Terpenuhi -->
            <td class="p-2 border">{{ implode(', ', $missing) }}</td>
        </tr>
        @endif
    @endforeach
</tbody>

</tbody>

            </table>
        </div>
    </div>
</div>

<!-- Print Styles -->
<style>
@media print {
    body * {
        visibility: hidden;
    }
    #printArea, #printArea * {
        visibility: visible;
    }
    #printArea {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        font-size: 12px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 4px;
        border: 1px solid black;
    }
}
</style>

<!-- JS Interaksi -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    let filterTanggal = document.getElementById('filterTanggal');
    fetchData(filterTanggal.value);
    
    filterTanggal.addEventListener('change', function () {
        fetchData(this.value);
    });
});

function fetchData(tanggal) {
    fetch(`/rekapgds?tanggal=${tanggal}`)
        .then(response => response.json())
        .then(data => {
            let tableBody = document.getElementById('rekapBody');
            tableBody.innerHTML = '';
            if (data.length > 0) {
                data.forEach(rekap => {
                    let missingAttrs = [];
                    let attributes = {
    'dasi': 'Dasi', 'kacuk': 'Kacu', 'kaos_kaki': 'Kaos Kaki', 'sabuk': 'Sabuk', 'nametag': 'NameTag',
    'sepatu': 'Sepatu', 'jas': 'Jas', 'ring': 'Ring', 'bros': 'Bros', 'makeup': 'Make Up',
    'telat': 'Telat', 'ciput': 'Ciput', 'hijab': 'Hijab', 'almamater': 'Almamater'
};
                    for (let key in attributes) {
                        if (!rekap[key]) {
                            missingAttrs.push(attributes[key]);
                        }
                    }
                    tableBody.innerHTML += `
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-2 border">${rekap.nama}</td>
                            <td class="p-2 border">${rekap.kelas}</td>
                            <td class="p-2 border">${missingAttrs.length > 0 ? missingAttrs.join(', ') : '-'}</td>
                        </tr>`;
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="3" class="p-2 text-center text-gray-500 border">Tidak ada data untuk tanggal ini.</td></tr>';
            }
        });
}

function cetakRekapan() {
    window.print();
    setTimeout(() => {
        window.location.reload();
    }, 500);
}
</script>
@endsection

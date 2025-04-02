@extends('admin.gds.gds')

@section('content2')
<div class="p-6">
    <nav class="bg-gray-700 text-white p-4 flex justify-between items-center rounded-lg shadow-md">
        <h1 class="text-lg font-semibold">Rekap GDS</h1>
        <div class="flex gap-4">
            <div class="relative">
                <label for="filterTanggal" class="mr-2">Pilih Tanggal:</label>
                <input type="date" id="filterTanggal" class="pl-3 pr-4 py-2 rounded-lg bg-white text-gray-700 shadow focus:ring focus:ring-blue-300" value="{{ date('Y-m-d') }}">
            </div>
            <button onclick="cetakRekapan()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow flex items-center">
                <i class="fas fa-print mr-2"></i> Cetak Rekapan
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

    <div class="mt-6 bg-white shadow-md rounded-lg overflow-hidden " id="printArea">
        <h2 class="text-lg font-semibold p-4 bg-gray-700 text-white flex justify-between items-center">
            Data Rekapan
            <span class="text-sm bg-blue-500 px-3 py-1 rounded-lg shadow">PJ Hari {{ $hariIni }}: {{ $pjHariIni }}</span>
        </h2>
        <table class="w-full border-collapse text-sm" id="rekapTable">
            <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="p-2 text-left border">Nama</th>
                    <th class="p-2 text-left border">Kelas</th>
                    <th class="p-2 text-left border">Atribut Tidak Terpenuhi</th>
                </tr>
            </thead>
            <tbody id="rekapBody">
                @foreach ($rekapgds as $rekap)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-2 border">{{ $rekap->nama }}</td>
                    <td class="p-2 border">{{ $rekap->kelas }}</td>
                    <td class="p-2 border">
                        @php
                        $attributes = ['dasi_kacu' => 'Dasi/Kacu', 'kaos_kaki' => 'Kaos Kaki', 'sabuk' => 'Sabuk', 'nametag' => 'NameTag',
                                       'sepatu' => 'Sepatu', 'jas' => 'Jas', 'ring' => 'Ring', 'bros' => 'Bros', 'makeup' => 'Make Up',
                                       'telat' => 'Telat', 'ciput' => 'Ciput', 'hijab' => 'Hijab', 'almamater' => 'Almamater', 'wearpack' => 'WearPack'];
                        $missing = array_filter($attributes, fn($key) => !$rekap->$key, ARRAY_FILTER_USE_KEY);
                        echo implode(', ', $missing) ?: '-';
                        @endphp
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

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
            font-size: 12px; /* Memperkecil ukuran font */
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
                        'dasi_kacu': 'Dasi/Kacu', 'kaos_kaki': 'Kaos Kaki', 'sabuk': 'Sabuk', 'nametag': 'NameTag',
                        'sepatu': 'Sepatu', 'jas': 'Jas', 'ring': 'Ring', 'bros': 'Bros', 'makeup': 'Make Up',
                        'telat': 'Telat', 'ciput': 'Ciput', 'hijab': 'Hijab', 'almamater': 'Almamater', 'wearpack': 'WearPack'
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

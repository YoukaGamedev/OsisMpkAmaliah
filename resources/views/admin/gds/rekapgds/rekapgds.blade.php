@extends('admin.gds.gds')

@section('content2')
<div class="p-6">
    <nav class="bg-gray-700 text-white p-4 flex justify-between items-center rounded-lg shadow-md">
        <h1 class="text-lg font-semibold">Rekap GDS</h1>
        <div class="relative">
            <label for="filterTanggal" class="mr-2">Pilih Tanggal:</label>
            <input type="date" id="filterTanggal" class="pl-3 pr-4 py-2 rounded-lg bg-white text-gray-700 shadow focus:ring focus:ring-blue-300">
        </div>
    </nav>

    <!-- Tabel Rekapan -->
    <div class="mt-6 bg-white shadow-md rounded-lg overflow-hidden">
        <h2 class="text-lg font-semibold p-4 bg-gray-700 text-white">Data Rekapan</h2>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="p-4 text-left">Nama</th>
                    <th class="p-4 text-left">Kelas</th>
                    <th class="p-4 text-left">Atribut Tidak Terpenuhi</th>
                    <th class="p-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody id="rekapBody">
                @foreach ($rekapgds as $rekap)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-4">{{ $rekap->nama }}</td>
                    <td class="p-4">{{ $rekap->kelas }}</td>
                    <td class="p-4">
                        @php
                        $attributes = ['dasi_kacu' => 'Dasi/Kacu', 'kaos_kaki' => 'Kaos Kaki', 'sabuk' => 'Sabuk', 'nametag' => 'NameTag',
                                       'sepatu' => 'Sepatu', 'jas' => 'Jas', 'ring' => 'Ring', 'bros' => 'Bros', 'makeup' => 'Make Up',
                                       'telat' => 'Telat', 'ciput' => 'Ciput', 'hijab' => 'Hijab', 'almamater' => 'Almamater', 'wearpack' => 'WearPack'];
                        $missing = array_filter($attributes, fn($key) => !$rekap->$key, ARRAY_FILTER_USE_KEY);
                        echo implode(', ', $missing) ?: '-';
                        @endphp
                    </td>
                    <td class="p-4">
                        <a href="{{ route('rekapgds.edit', $rekap->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('rekapgds.destroy', $rekap->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
document.getElementById('filterTanggal').addEventListener('change', function () {
    let tanggal = this.value;
    
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
                            <td class="p-4">${rekap.nama}</td>
                            <td class="p-4">${rekap.kelas}</td>
                            <td class="p-4">${missingAttrs.length > 0 ? missingAttrs.join(', ') : '-'}</td>
                            <td class="p-4">
                                <a href="/rekapgds/${rekap.id}/edit" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                                <form action="/rekapgds/${rekap.id}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</button>
                                </form>
                            </td>
                        </tr>`;
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="4" class="p-4 text-center text-gray-500">Tidak ada data untuk tanggal ini.</td></tr>';
            }
        });
});
</script>
@endsection

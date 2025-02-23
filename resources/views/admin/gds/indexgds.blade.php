@extends('admin.gds.gds')

@section('content2')
<div>
    <!-- Header Section -->
    <div class="flex flex-wrap items-center justify-between bg-gray-700 text-white p-4 rounded-lg shadow-md">
        <h1 class="text-lg font-semibold">GDS</h1>
        <form action="{{ route('gds.index') }}" method="GET" class="flex items-center space-x-2">
            <label for="tanggal" class="text-sm font-semibold">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal }}" class="border p-2 rounded text-gray-700">
            <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 transition">Tampilkan</button>
        </form>
        <div class="flex space-x-2">
            <a href="{{ route('siswa.search') }}" class="bg-orange-500 text-white px-3 py-2 rounded hover:bg-orange-600 transition">Cari</a>
            <button onclick="document.getElementById('scanModal').classList.remove('hidden')" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 transition">Scan</button>
            <button onclick="document.getElementById('modal').classList.remove('hidden')" class="bg-green-500 text-white px-3 py-2 rounded hover:bg-green-600 transition">Tambah</button>
        </div>
    </div>

    <!-- PJ Berdasarkan Hari -->
    <div class="mt-4 bg-white p-4 rounded-lg shadow-md">
        <h4 class="text-lg font-semibold">Hari: {{ \Carbon\Carbon::parse($tanggal)->translatedFormat('l') }}</h4>
        <h2 class="text-gray-700">PJ: <strong>{{ $pj }}</strong></h2>
    </div>

    <!-- Tabel Absensi -->
    <div class="mt-6 bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 bg-gray-700 font-bold text-white text-center">Data Absensi: {{ \Carbon\Carbon::parse($tanggal)->format('d-m-Y') }}</div>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-700 text-white text-xs">
                    <th class="py-2 px-3 border-b">No</th>
                    <th class="py-2 px-3 border-b">Nama</th>
                    <th class="py-2 px-3 border-b">Kelas</th>
                    @foreach(['Dasi/Kacu', 'Kaos Kaki', 'Sabuk', 'NameTag', 'Sepatu', 'Jas', 'Ring', 'Bros', 'Make Up', 'Telat', 'Ciput', 'Hijab', 'Almamater', 'WearPack'] as $item)
                        <th class="py-2 px-3 border-b">{{ $item }}</th>
                    @endforeach
                    <th class="py-2 px-3 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($absensi as $data)
                    <tr class="hover:bg-gray-50 text-sm">
                        <td class="py-2 px-3 border-b text-center">{{ $loop->iteration }}</td>
                        <td class="py-2 px-3 border-b">{{ $data->nama }}</td>
                        <td class="py-2 px-3 border-b">{{ $data->kelas }}</td>
                        @foreach(['dasi_kacu', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu', 'jas', 'ring', 'bros', 'makeup', 'telat', 'ciput', 'hijab', 'almamater', 'wearpack'] as $attr)
                            <td class="py-2 px-3 border-b text-center {{ $data->$attr ? '' : 'bg-red-100' }}">{{ $data->$attr ? '✔' : '✘' }}</td>
                        @endforeach
                        <td class="py-2 px-3 border-b text-center flex space-x-2 justify-center">
                            <a href="{{ route('gds.show', $data->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded text-xs hover:bg-blue-600 transition">Lihat</a>
                            <a href="{{ route('siswa.edit', $data->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded text-xs hover:bg-yellow-600 transition">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


<!-- Modal Tambah Absensi -->
<div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-5 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-semibold text-center mb-3">Tambah Absensi</h2>
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="space-y-2">
                <label class="block text-gray-700 text-sm font-medium">Tanggal</label>
                <input type="date" name="tanggal" value="{{ request('tanggal', date('Y-m-d')) }}" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>
            <div class="grid grid-cols-2 gap-2 mt-3">
                @foreach(['Nama' => 'nama', 'Kelas' => 'kelas'] as $label => $name)
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">{{ $label }}</label>
                        <input type="text" name="{{ $name }}" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                    </div>
                @endforeach
            </div>
            <div class="grid grid-cols-3 gap-2 mt-3 text-xs">
                @foreach(['Dasi/Kacu' => 'dasi_kacu', 'Kaos Kaki' => 'kaos_kaki', 'Sabuk' => 'sabuk', 'NameTag' => 'nametag', 'Sepatu' => 'sepatu', 'Jas' => 'jas', 'Ring' => 'ring', 'Bros' => 'bros', 'Make Up' => 'makeup', 'Telat' => 'telat', 'Ciput' => 'ciput', 'Hijab' => 'hijab', 'Almamater' => 'almamater', 'WearPack' => 'wearpack'] as $label => $name)
                    <div>
                        <label class="block text-gray-700 text-xs font-semibold">{{ $label }}</label>
                        <select name="{{ $name }}" class="w-full px-2 py-1 text-xs border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-end mt-4 space-x-2">
                <button type="button" onclick="document.getElementById('modal').classList.add('hidden')" class="bg-gray-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-gray-600 transition">Batal</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600 transition">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Scanner QR Code -->
<div id="scanModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 text-center">
            <h2 class="text-lg font-semibold mb-4">Scan QR Code</h2>
            <video id="preview" class="w-full h-48 bg-black"></video>
            <div class="flex justify-between mt-4">
                <button type="button" onclick="document.getElementById('scanModal').classList.add('hidden')" class="bg-gray-500 text-white px-4 py-2 rounded">Tutup</button>
            </div>
        </div>
    </div>
</div>


<!-- Script Instascan -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/instascan/1.0.0/instascan.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

        scanner.addListener('scan', function (content) {
            alert('QR Code Terbaca: ' + content);
            document.getElementById('scanModal').classList.add('hidden');
        });

        document.querySelector('[onclick*="scanModal"]').addEventListener('click', function () {
            Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    alert('Kamera tidak ditemukan!');
                }
            }).catch(function (e) {
                console.error(e);
                alert('Terjadi kesalahan saat mengakses kamera.');
            });
        });
    });
</script>
@endsection

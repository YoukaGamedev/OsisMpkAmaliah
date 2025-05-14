@extends('user.gds.gds')

@section('content2')
<div>
    <!-- Header Section -->
    <div class="flex flex-wrap items-center justify-between bg-gray-700 text-white p-3 rounded-lg shadow-md">
        <h1 class="text-lg font-semibold flex items-center gap-2">
            <i class="fas fa-clipboard-list"></i> GDS Rekap
        </h1>
        <form action="{{ route('gds.index') }}" method="GET" class="flex items-center gap-2">
            <label for="tanggal" class="text-sm font-semibold">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal ?? now()->toDateString() }}" class="border p-2 rounded text-gray-700">
            <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 transition">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="mt-4 flex justify-end">
    <a href="{{ route('pelanggaran.create') }}"
       class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white text-sm font-medium px-4 py-2 rounded-lg shadow transition duration-200">
        <i class="fas fa-plus-circle text-base"></i>
        Tambah Data
    </a>
</div>



    <!-- PJ Berdasarkan Hari -->
    <div class="mt-4 bg-white p-3 rounded-lg shadow-md">
        <h4 class="text-lg font-semibold">Hari: {{ \Carbon\Carbon::parse($tanggal)->translatedFormat('l') }}</h4>
        <h2 class="text-gray-700">PJ: <strong>{{ $pj ?? 'Tunggu PJ' }}</strong></h2>
    </div>

    <!-- Tabel Absensi -->
    <div class="mt-6 bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="w-full border-collapse text-sm">
            <thead>
                <tr class="bg-gray-700 text-white text-xs">
                    <th class="p-2 border">No</th>
                    <th class="p-2 border">Nama</th>
                    <th class="p-2 border">Kelas</th>
                    @foreach(['Dasi', 'Kacuk', 'Kaos Kaki', 'Sabuk', 'NameTag', 'Sepatu', 'Jas', 'Ring', 'Bros', 'Make Up', 'Telat', 'Ciput', 'Hijab', 'Almamater'] as $item)
                        <th class="p-2 border">{{ $item }}</th>
                    @endforeach
                    <th class="p-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($absensi as $data)
                    <tr class="hover:bg-gray-50 text-xs">
                        <td class="p-2 border text-center">{{ $loop->iteration }}</td>
                        <td class="p-2 border">{{ $data->nama }}</td>
                        <td class="p-2 border">{{ $data->kelas }}</td>
                        @foreach(['dasi', 'kacuk', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu', 'jas', 'ring', 'bros', 'makeup', 'telat', 'ciput', 'hijab', 'almamater'] as $attr)
                            <td class="p-2 border text-center {{ $data->$attr ? 'text-green-600' : 'text-red-500' }}">
                                <i class="fas {{ $data->$attr ? 'fa-check' : 'fa-times' }}"></i>
                            </td>
                        @endforeach
                        <td class="p-2 border text-center flex justify-center gap-2">
    <!-- Tombol Lihat -->
    <a href="{{ route('gds.show', $data->id) }}" class="text-blue-500 hover:text-blue-700">
        <i class="fas fa-eye"></i>
    </a>

    <!-- Tombol Edit Pelanggaran -->
    <a href="{{ route('pelanggaran.edit', $data->id) }}" class="text-yellow-500 hover:text-yellow-700">
        <i class="fas fa-edit"></i>
    </a>

    <!-- Tombol Hapus Pelanggaran -->
    <form action="{{ route('pelanggaran.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data ini?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-500 hover:text-red-700">
            <i class="fas fa-trash"></i>
        </button>
    </form>
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

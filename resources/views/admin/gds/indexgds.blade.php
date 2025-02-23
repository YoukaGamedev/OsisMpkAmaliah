@extends('admin.gds.gds')

@section('content2')
<div class="p-6">
    <h1 class="text-lg font-semibold">Absensi Karyawan</h1>

    <!-- Form untuk memilih tanggal -->
    <form action="{{ route('gds.index') }}" method="GET" class="mt-4 flex items-center space-x-2">
        <label for="tanggal">Pilih Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal }}" class="border p-2 rounded">
        <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded">Tampilkan</button>
    </form>

    <!-- Tombol Tambah Absensi -->
    <button onclick="document.getElementById('modal').classList.remove('hidden')" 
            class="bg-green-500 text-white px-3 py-2 rounded mt-4">
        Tambah Absensi
    </button>

    <!-- Tabel Absensi -->
    <div class="mt-4 bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 bg-gray-200 font-bold text-gray-700">Data Absensi: {{ \Carbon\Carbon::parse($tanggal)->format('d-m-Y') }}</div>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-700 text-white">
                <th class="py-1 px-2 border-b text-sm">No</th>
                        <th class="py-1 px-2 border-b text-sm">Nama</th>
                        <th class="py-1 px-2 border-b text-sm">Kelas</th>
                        <th class="py-1 px-2 border-b text-sm">Dasi/Kacu</th>
                        <th class="py-1 px-2 border-b text-sm">Kaos Kaki</th>
                        <th class="py-1 px-2 border-b text-sm">Sabuk</th>
                        <th class="py-1 px-2 border-b text-sm">NameTag</th>
                        <th class="py-1 px-2 border-b text-sm">Sepatu</th>
                        <th class="py-1 px-2 border-b text-sm">Jas</th>
                        <th class="py-1 px-2 border-b text-sm">Ring</th>
                        <th class="py-1 px-2 border-b text-sm">Bros</th>
                        <th class="py-1 px-2 border-b text-sm">Make Up</th>
                        <th class="py-1 px-2 border-b text-sm">Telat</th>
                        <th class="py-1 px-2 border-b text-sm">Ciput</th>
                        <th class="py-1 px-2 border-b text-sm">Hijab</th>
                        <th class="py-1 px-2 border-b text-sm">Almamater</th>
                        <th class="py-1 px-2 border-b text-sm">WearPack</th>
                        <th class="py-1 px-2 border-b text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($absensi as $data)
                    <tr class="hover:bg-gray-50">
                        <td class="py-1 px-2 border-b text-center text-sm">{{ $loop->iteration }}</td>
                        <td class="py-1 px-2 border-b text-sm">{{ $data->nama }}</td>
                        <td class="py-1 px-2 border-b text-sm">{{ $data->kelas }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->dasi_kacu ? '' : 'bg-red-100' }}">{{ $data->dasi_kacu ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->kaos_kaki ? '' : 'bg-red-100' }}">{{ $data->kaos_kaki ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->sabuk ? '' : 'bg-red-100' }}">{{ $data->sabuk ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->nametag ? '' : 'bg-red-100' }}">{{ $data->nametag ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->sepatu ? '' : 'bg-red-100' }}">{{ $data->sepatu ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->jas ? '' : 'bg-red-100' }}">{{ $data->jas ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->ring ? '' : 'bg-red-100' }}">{{ $data->ring ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->bros ? '' : 'bg-red-100' }}">{{ $data->bros ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->makeup ? '' : 'bg-red-100' }}">{{ $data->makeup ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->telat ? '' : 'bg-red-100' }}">{{ $data->telat ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->ciput ? '' : 'bg-red-100' }}">{{ $data->ciput ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->hijab ? '' : 'bg-red-100' }}">{{ $data->hijab ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->almamater ? '' : 'bg-red-100' }}">{{ $data->almamater ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->wearpack ? '' : 'bg-red-100' }}">{{ $data->wearpack ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm">
                            <a href="{{ route('siswa.edit', $data->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600 text-xs">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 text-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($siswa->isEmpty())
                    <tr>
                        <td colspan="18" class="py-1 px-2 border-b text-center text-sm text-gray-500">Tidak ada data siswa.</td>
                    </tr>
                    @endif
    </div>
</div>

<!-- Modal Tambah Absensi -->
<div id="modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-lg font-semibold">Tambah Absensi</h2>
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <input type="date" name="tanggal" value="{{ request('tanggal', date('Y-m-d')) }}" class="border p-2 w-full" required>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-3">
                    @php
                        $fields = [
                            ['label' => 'Nama', 'name' => 'nama', 'type' => 'text', 'required' => true],
                            ['label' => 'Kelas', 'name' => 'kelas', 'type' => 'text', 'required' => true],
                            ['label' => 'Dasi/Kacu', 'name' => 'dasi_kacu', 'type' => 'select'],
                            ['label' => 'Kaos Kaki', 'name' => 'kaos_kaki', 'type' => 'select'],
                            ['label' => 'Sabuk', 'name' => 'sabuk', 'type' => 'select'],
                            ['label' => 'NameTag', 'name' => 'nametag', 'type' => 'select'],
                            ['label' => 'Sepatu', 'name' => 'sepatu', 'type' => 'select'],
                            ['label' => 'Jas', 'name' => 'jas', 'type' => 'select'],
                            ['label' => 'Ring', 'name' => 'ring', 'type' => 'select'],
                            ['label' => 'Bros', 'name' => 'bros', 'type' => 'select'],
                            ['label' => 'Make Up', 'name' => 'makeup', 'type' => 'select'],
                            ['label' => 'Telat', 'name' => 'telat', 'type' => 'select'],
                            ['label' => 'Ciput', 'name' => 'ciput', 'type' => 'select'],
                            ['label' => 'Hijab', 'name' => 'hijab', 'type' => 'select'],
                            ['label' => 'Almamater', 'name' => 'almamater', 'type' => 'select'],
                            ['label' => 'WearPack', 'name' => 'wearpack', 'type' => 'select'],
                        ];
                    @endphp
                    @foreach($fields as $field)
                        <div class="mb-2">
                            <label class="block text-gray-700 text-xs font-bold mb-1">{{ $field['label'] }}</label>
                            @if($field['type'] === 'text')
                                <input type="text" name="{{ $field['name'] }}" class="w-full px-2 py-1 text-sm border rounded" {{ $field['required'] ? 'required' : '' }}>
                            @elseif($field['type'] === 'select')
                                <select name="{{ $field['name'] }}" class="w-full px-2 py-1 text-sm border rounded">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            @endif
                        </div>
                    @endforeach
                </div>

            <div class="flex justify-end mt-4 space-x-2">
                <button type="button" onclick="document.getElementById('modal').classList.add('hidden')" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

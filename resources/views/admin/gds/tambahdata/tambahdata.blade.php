@extends('admin.gds.gds')

@section('content2')
<div class="container mx-auto px-4 py-8">
    <!-- Form Tambah Data Siswa -->
    <div class="bg-white rounded-lg shadow-md mb-8">
        <div class="bg-gray-700 text-white text-center py-4 rounded-t-lg">
            <h5 class="text-xl font-semibold">Tambah Siswa</h5>
        </div>
        <div class="p-6">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
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
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">{{ $field['label'] }}</label>
                            @if($field['type'] === 'text')
                                <input type="text" name="{{ $field['name'] }}" class="w-full px-3 py-2 border rounded-lg" {{ $field['required'] ? 'required' : '' }}>
                            @elseif($field['type'] === 'select')
                                <select name="{{ $field['name'] }}" class="w-full px-3 py-2 border rounded-lg">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-6">
                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Siswa -->
    <div class="bg-white rounded-lg shadow-md">
        <div class="bg-gray-800 text-white text-center py-4 rounded-t-lg">
            <h5 class="text-xl font-semibold">Daftar Siswa</h5>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b">No</th>
                            <th class="py-2 px-4 border-b">Nama</th>
                            <th class="py-2 px-4 border-b">Kelas</th>
                            @foreach($fields as $field)
                                @if($field['type'] === 'select')
                                    <th class="py-2 px-4 border-b">{{ $field['label'] }}</th>
                                @endif
                            @endforeach
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswa as $data)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b text-center">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border-b">{{ $data->nama }}</td>
                            <td class="py-2 px-4 border-b">{{ $data->kelas }}</td>
                            @foreach($fields as $field)
                                @if($field['type'] === 'select')
                                    <td class="py-2 px-4 border-b text-center">{{ $data->{$field['name']} ? '✔' : '✘' }}</td>
                                @endif
                            @endforeach
                            <td class="py-2 px-4 border-b text-center">
                                <a href="{{ route('siswa.edit', $data->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600" onclick="return confirm('Hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @if($siswa->isEmpty())
                        <tr>
                            <td colspan="{{ count($fields) + 3 }}" class="py-2 px-4 border-b text-center text-gray-500">Tidak ada data siswa.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
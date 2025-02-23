@extends('admin.gds.gds')

@section('content2')
<div class="container mx-auto px-2 py-4">
    <!-- Form Tambah Data Siswa -->
    <div class="bg-white rounded-lg shadow-md mb-4">
        <div class="bg-gray-700 text-white text-center py-2 rounded-t-lg">
            <h5 class="text-lg font-semibold">Tambah Siswa</h5>
        </div>
        <div class="p-4">
            <form action="{{ route('tambahdata.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-3">
                    @php
                        $fields = [
                            ['label' => 'Nama', 'name' => 'nama', 'type' => 'text', 'required' => true],
                            ['label' => 'Kelas', 'name' => 'kelas', 'type' => 'text', 'required' => true],
                            ['label' => 'Tanggal (Opsional)', 'name' => 'tanggal', 'type' => 'date', 'required' => false],
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
                            @if($field['type'] === 'text' || $field['type'] === 'date')
                                <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" class="w-full px-2 py-1 text-sm border rounded" {{ $field['required'] ? 'required' : '' }}>
                            @elseif($field['type'] === 'select')
                                <select name="{{ $field['name'] }}" class="w-full px-2 py-1 text-sm border rounded">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="bg-green-500 text-white px-4 py-1 text-sm rounded hover:bg-green-600">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

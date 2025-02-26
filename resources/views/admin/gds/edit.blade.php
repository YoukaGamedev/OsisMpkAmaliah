@extends('admin.gds.gds')

@section('content2')
<div class="flex justify-center mt-8">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden"> 
        <div class="bg-gray-700 text-white text-center py-3">
            <h5 class="font-bold text-lg">Edit Siswa</h5>
        </div>
        <div class="p-6">
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold">Nama</label>
                    <input type="text" name="nama" class="w-full px-3 py-2 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->nama }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold">Tanggal</label>
                    <input type="date" name="tanggal" class="w-full px-3 py-2 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->tanggal ?? date('Y-m-d') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold">Kelas</label>
                    <input type="text" name="kelas" class="w-full px-3 py-2 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->kelas }}" required>
                </div>
                
                <div class="grid grid-cols-3 gap-4"> 
                    @php
                        $attributes = [
                            'Dasi/Kacu' => 'dasi_kacu', 'Kaos Kaki' => 'kaos_kaki', 'Sabuk' => 'sabuk', 'NameTag' => 'nametag',
                            'Sepatu' => 'sepatu', 'Jas' => 'jas', 'Ring' => 'ring', 'Bros' => 'bros',
                            'Make Up' => 'makeup', 'Telat' => 'telat', 'Ciput' => 'ciput', 'Hijab' => 'hijab',
                            'Almamater' => 'almamater', 'WearPack' => 'wearpack'
                        ];
                    @endphp
                    @foreach ($attributes as $label => $name)
                        <div>
                            <label class="block text-gray-700 font-semibold">{{ $label }}</label>
                            <select name="{{ $name }}" class="w-full px-3 py-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <option value="1" {{ $siswa->$name ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->$name ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                    @endforeach
                </div>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg shadow-md hover:bg-green-700 transition duration-300 font-bold">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

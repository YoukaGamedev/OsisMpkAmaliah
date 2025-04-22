@extends('user.gds.gds')

@section('content2')
<div class="p-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-green-500 to-green-600 p-4">
            <h2 class="text-white text-xl font-semibold text-center">Edit Data Siswa</h2>
        </div>

        <!-- Form Content -->
        <div class="p-6">
            <form method="POST" action="{{ route('siswa.update', $siswa->id) }}" class="space-y-6">
                @csrf
                @method('POST')

                <!-- Personal Information -->
                <div class="bg-gray-50 rounded-lg p-4 space-y-4">
                    <h3 class="text-lg font-medium text-gray-700 mb-4">Informasi Pribadi</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Name Input -->
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                            <input type="text" 
                                   name="nama" 
                                   id="nama" 
                                   value="{{ $siswa->nama }}" 
                                   class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                                   required>
                        </div>

                        <!-- Class Input -->
                        <div>
                            <label for="kelas" class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                            <input type="text" 
                                   name="kelas" 
                                   id="kelas" 
                                   value="{{ $siswa->kelas }}" 
                                   class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                                   required>
                        </div>
                    </div>
                </div>

                <!-- Uniform Items -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="text-lg font-medium text-gray-700 mb-4">Kelengkapan Seragam</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @php
                        $uniformItems = [
                            'dasi_kacu' => 'Dasi/Kacu',
                            'kaos_kaki' => 'Kaos Kaki',
                            'sabuk' => 'Sabuk',
                            'nametag' => 'Nametag',
                            'sepatu' => 'Sepatu',
                            'jas' => 'Jas',
                            'ring' => 'Ring',
                            'bros' => 'Bros',
                            'makeup' => 'Make Up',
                            'telat' => 'Telat',
                            'ciput' => 'Ciput',
                            'hijab' => 'Hijab',
                            'almamater' => 'Almamater',
                            'wearpack' => 'WearPack'
                        ];
                        @endphp

                        @foreach($uniformItems as $key => $label)
                        <div class="relative">
                            <label for="{{ $key }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
                            <select name="{{ $key }}" 
                                    id="{{ $key }}" 
                                    class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm">
                                <option value="1" {{ $siswa->$key ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->$key ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('siswa.index') }}" 
                       class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition duration-150 ease-in-out">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition duration-150 ease-in-out">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
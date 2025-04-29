@extends('user.gds.gds')

@section('content2')
<div class="flex justify-center mt-8">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white text-center py-4">
            <h5 class="font-bold text-xl">Tambah Pelanggaran</h5>
        </div>
        <div class="p-6">
            <form action="{{ route('pelanggaran.store') }}" method="POST">
                @csrf

                <!-- Nama Siswa (select dari tabel siswa) -->
<div class="mb-6">
    <label class="block text-gray-700 font-semibold text-lg mb-2">Nama Siswa</label>
    <select name="siswa_id" class="w-full px-4 py-3 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        <option value="">-- Pilih Siswa --</option>
        @foreach ($siswas as $siswa)
            <option value="{{ $siswa->id }}" {{ old('siswa_id') == $siswa->id ? 'selected' : '' }}>{{ $siswa->nama }}</option>
        @endforeach
    </select>
</div>


<!-- Tanggal Pelanggaran -->
<div class="mb-6">
    <label class="block text-gray-700 font-semibold text-lg mb-2">Tanggal Pelanggaran</label>
    <input type="date" name="tanggal_pelanggaran" class="w-full px-4 py-3 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('tanggal_pelanggaran', now()->toDateString()) }}" required>
</div>


                <!-- Form Atribut Pelanggaran -->
                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <h6 class="text-center font-bold text-gray-700 text-lg mb-4">Atribut Pelanggaran</h6>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        @php
                        $attributes = [
                            'Dasi' => 'dasi',
                            'Kacu' => 'kacuk',
                            'Kaos Kaki' => 'kaos_kaki',
                            'Sabuk' => 'sabuk',
                            'NameTag' => 'nametag',
                            'Sepatu' => 'sepatu',
                            'Jas' => 'jas',
                            'Ring' => 'ring',
                            'Bros' => 'bros',
                            'Make Up' => 'makeup',
                            'Telat' => 'telat',
                            'Ciput' => 'ciput',
                            'Hijab' => 'hijab',
                            'Almamater' => 'almamater'
                        ];
                        @endphp

                        @foreach ($attributes as $label => $name)
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <!-- Hidden input -->
                                <input type="hidden" name="{{ $name }}" value="1">

                                <!-- Checkbox toggle -->
                                <div class="relative inline-block w-10 mr-2 align-middle">
                                    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="checkbox hidden" value="0">
                                    <label for="{{ $name }}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>
                            <span class="text-xs font-medium">{{ $label }}</span>
                        </div>
                        @endforeach
                    </div>
                    <p class="text-sm text-center text-gray-500 mt-4">* Centang jika ada pelanggaran</p>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 rounded-lg shadow-md hover:from-green-600 hover:to-emerald-700 transition duration-300 font-bold text-lg">
                        Simpan Pelanggaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .toggle-label {
        transition: background-color 0.2s ease;
    }
    .checkbox:checked + .toggle-label {
        background-color: #10b981;
    }
    .toggle-label:before {
        content: "";
        display: block;
        width: 18px;
        height: 18px;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        top: 3px;
        left: 3px;
        transition: transform 0.2s ease;
    }
    .checkbox:checked + .toggle-label:before {
        transform: translateX(16px);
    }
</style>
@endsection

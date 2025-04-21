@extends('admin.gds.gds')  

@section('content2')
<div class="flex justify-center mt-8">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white text-center py-4">
            <h5 class="font-bold text-xl">Edit Siswa</h5>
        </div>
        <div class="p-6">
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Nama</label>
                    <input type="text" name="nama" class="w-full px-4 py-3 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->nama }}" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Tanggal</label>
                    <input type="date" name="tanggal" class="w-full px-4 py-3 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->tanggal ?? '' }}">
                </div>
                <div class="mb-8">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Kelas</label>
                    <input type="text" name="kelas" class="w-full px-4 py-3 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->kelas }}" required>
                </div>
                
                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <h6 class="text-center font-bold text-gray-700 text-lg mb-4">Atribut Kelengkapan</h6>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        @php
                        $attributes = [
                            'Dasi/Kacu' => ['dasi_kacu', 'fa-tie', 'bg-red-500'],
                            'Kaos Kaki' => ['kaos_kaki', 'fa-socks', 'bg-blue-500'],
                            'Sabuk' => ['sabuk', 'fa-band-aid', 'bg-yellow-500'],
                            'NameTag' => ['nametag', 'fa-id-badge', 'bg-green-500'],
                            'Sepatu' => ['sepatu', 'fa-shoe-prints', 'bg-purple-500'],
                            'Jas' => ['jas', 'fa-user-tie', 'bg-indigo-500'],
                            'Ring' => ['ring', 'fa-ring', 'bg-pink-500'],
                            'Bros' => ['bros', 'fa-shield-alt', 'bg-pink-400'],
                            'Make Up' => ['makeup', 'fa-paint-brush', 'bg-red-400'],
                            'Telat' => ['telat', 'fa-clock', 'bg-red-600'],
                            'Ciput' => ['ciput', 'fa-hat-wizard', 'bg-gray-500'],
                            'Hijab' => ['hijab', 'fa-user', 'bg-teal-500'],
                            'Almamater' => ['almamater', 'fa-graduation-cap', 'bg-orange-500'],
                            'WearPack' => ['wearpack', 'fa-hard-hat', 'bg-blue-600']
                        ];
                        @endphp
                        
                        @foreach ($attributes as $label => [$name, $icon, $color])
                        <div class="flex flex-col items-center">
                            <div class="mb-2 {{ $color }} text-white p-3 rounded-full">
                                <i class="fas {{ $icon }} text-xl"></i>
                            </div>
                            <div class="relative">
                                <!-- Hidden input to maintain form compatibility -->
                                <input type="hidden" name="{{ $name }}" value="0">
                                
                                <!-- Visible toggle switch -->
                                <div class="relative inline-block w-10 mr-2 align-middle">
                                    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="checkbox hidden" value="1" {{ $siswa->$name ? 'checked' : '' }}>
                                    <label for="{{ $name }}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>
                            <span class="text-xs font-medium">{{ $label }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="mt-6">
                    <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 rounded-lg shadow-md hover:from-green-600 hover:to-emerald-700 transition duration-300 font-bold text-lg">Simpan Perubahan</button>
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

@section('footer')
<footer class="text-center mt-8 py-4 bg-gradient-to-r from-gray-800 to-gray-900 text-white shadow-lg">
    <p class="mb-0">&copy; {{ date('Y') }} <span class="text-yellow-400 font-bold">Rekap GDS</span>. All rights reserved.</p>
</footer>
@endsection
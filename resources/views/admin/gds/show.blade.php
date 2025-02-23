@extends('admin.gds.gds')

@section('content2')
<div class="p-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-gray-500 to-gray-600 p-4">
            <h5 class="text-white text-xl font-semibold text-center">Detail Siswa</h5>
        </div>

        <!-- Content -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Personal Info Section -->
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold text-gray-700 mb-3">Informasi Pribadi</h6>
                    <div class="bg-gray-50 rounded-lg p-4 space-y-3">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-gray-600 font-medium">Nama</div>
                            <div>{{ $siswa->nama }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-gray-600 font-medium">Kelas</div>
                            <div>{{ $siswa->kelas }}</div>
                        </div>
                    </div>
                </div>

                <!-- Uniform Items Section -->
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold text-gray-700 mb-3">Kelengkapan Seragam</h6>
                    <div class="bg-gray-50 rounded-lg p-4 grid grid-cols-2 gap-3">
                        <!-- Uniform Items with Icons -->
                        @php
                            $items = [
                                'Dasi/Kacu' => $siswa->dasi_kacu,
                                'Kaos Kaki' => $siswa->kaos_kaki,
                                'Sabuk' => $siswa->sabuk,
                                'NameTag' => $siswa->nametag,
                                'Sepatu' => $siswa->sepatu,
                                'Jas' => $siswa->jas,
                                'Ring' => $siswa->ring,
                                'Bros' => $siswa->bros,
                                'Make Up' => $siswa->makeup,
                                'Telat' => $siswa->telat,
                                'Ciput' => $siswa->ciput,
                                'Hijab' => $siswa->hijab,
                                'Almamater' => $siswa->almamater,
                                'WearPack' => $siswa->wearpack
                            ];
                        @endphp

                        @foreach($items as $name => $value)
                        <div class="flex items-center space-x-2">
                            @if($value)
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            @else
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            @endif
                            <span class="text-gray-700">{{ $name }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-6">
                <a href="{{ route('gds.index') }}" 
                   class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white font-medium rounded-lg transition duration-150 ease-in-out">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
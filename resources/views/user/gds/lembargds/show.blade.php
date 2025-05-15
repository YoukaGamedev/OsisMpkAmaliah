@extends('user.gds.gds')

@section('content2')
<div class="p-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-gray-500 to-gray-600 p-4">
            <h5 class="text-white text-xl font-semibold text-center">Detail Pelanggaran Siswa</h5>
        </div>

        <!-- Content -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Informasi Pribadi -->
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold text-gray-700 mb-3">Informasi Pribadi</h6>
                    <div class="bg-gray-50 rounded-lg p-4 space-y-3">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-gray-600 font-medium">Nama</div>
                            <div>{{ $pelanggaran->siswa->nama ?? '-' }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-gray-600 font-medium">Kelas</div>
                            <div>{{ $pelanggaran->siswa->kelas ?? '-' }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-gray-600 font-medium">Tanggal Pelanggaran</div>
                            <div>{{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->format('d M Y') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Kelengkapan Seragam -->
                <div class="space-y-4">
                    <h6 class="text-lg font-semibold text-gray-700 mb-3">Kelengkapan Seragam</h6>
                    <div class="bg-gray-50 rounded-lg p-4 grid grid-cols-2 gap-3">
                        @php
                            $items = [
                                'Dasi' => $pelanggaran->dasi ?? 0,
                                'Kacu' => $pelanggaran->kacuk ?? 0,
                                'Kaos Kaki' => $pelanggaran->kaos_kaki ?? 0,
                                'Sabuk' => $pelanggaran->sabuk ?? 0,
                                'NameTag' => $pelanggaran->nametag ?? 0,
                                'Sepatu' => $pelanggaran->sepatu ?? 0,
                                'Jas' => $pelanggaran->jas ?? 0,
                                'Ring' => $pelanggaran->ring ?? 0,
                                'Bros' => $pelanggaran->bros ?? 0,
                                'Make Up' => $pelanggaran->makeup ?? 0,
                                'Telat' => $pelanggaran->telat ?? 0,
                                'Ciput' => $pelanggaran->ciput ?? 0,
                                'Hijab' => $pelanggaran->hijab ?? 0,
                                'Almamater' => $pelanggaran->almamater ?? 0,
                            ];
                        @endphp

                        @foreach($items as $name => $value)
                        <div class="flex items-center space-x-2">
                            @if($value == 0)
                                {{-- Tidak lengkap --}}
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            @else
                                {{-- Lengkap --}}
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            @endif
                            <span class="text-gray-700">{{ $name }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Tombol Kembali -->
            <div class="mt-6">
                <a href="{{ route('pelanggaran.index') }}" 
                   class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white font-medium rounded-lg transition duration-150 ease-in-out">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

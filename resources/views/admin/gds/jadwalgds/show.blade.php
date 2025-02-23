@extends('admin.gds.gds')

@section('content2')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md border border-gray-200">
    <!-- Header -->
    <div class="text-center mb-4">
        <h2 class="text-2xl font-bold text-gray-800">Detail Jadwal GDS</h2>
        <p class="text-sm text-gray-500">Informasi lengkap jadwal piket</p>
    </div>

    <!-- Informasi Jadwal -->
    <div class="space-y-2 text-gray-700">
        <p class="flex justify-between border-b pb-2">
            <span class="font-semibold">Hari:</span> <span>{{ $jadwal->hari }}</span>
        </p>
        <p class="flex justify-between border-b pb-2">
            <span class="font-semibold">PJ:</span> <span>{{ $jadwal->pj }}</span>
        </p>
        <p class="flex justify-between border-b pb-2">
            <span class="font-semibold">Minggu:</span> <span>{{ $jadwal->Minggu }}</span>
        </p>

        <!-- Petugas -->
        @for($i = 1; $i <= 5; $i++)
            <p class="flex justify-between border-b pb-2">
                <span class="font-semibold">Petugas {{ $i }}:</span>
                <span>{{ $jadwal['petugas_'.$i] ?? '-' }}</span>
            </p>
        @endfor
    </div>

    <!-- Tombol Aksi -->
    <div class="mt-4 flex justify-center space-x-3">
        <a href="{{ route('jadwalgds.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-gray-600 transition">
            Kembali
        </a>
    </div>
</div>
@endsection

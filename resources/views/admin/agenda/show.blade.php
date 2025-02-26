@extends('main')

@section('content')

<div class="container mx-auto py-10">
    <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-6 animate__animated animate__fadeIn">
            <h2 class="text-3xl font-bold text-blue-600">Detail Agenda</h2>
            <p class="text-gray-500">Berikut adalah informasi lengkap tentang agenda ini.</p>
        </div>

        <!-- Card Detail -->
        <div class="bg-white shadow-xl rounded-2xl p-6 animate__animated animate__fadeInUp">
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700">Judul Agenda</h3>
                <p class="text-gray-900 text-lg">{{ $agenda->judul }}</p>
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700">Pelaksana</h3>
                <p class="text-gray-900">{{ $agenda->pelaksana }}</p>
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700">Tanggal Pelaksanaan</h3>
                <p class="text-gray-900">{{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('d F Y') }}</p>
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700">Deskripsi</h3>
                <p class="text-gray-900">{{ $agenda->deskripsi }}</p>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('agenda.index') }}" class="text-gray-600 hover:text-gray-800 flex items-center">
                    <i class="bi bi-arrow-left mr-2"></i> Kembali
                </a>
                <div class="flex space-x-2">
                    <a href="{{ route('agenda.edit', $agenda->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md transition">
                        <i class="bi bi-pencil-square mr-2"></i> Edit
                    </a>
                    <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus agenda ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg shadow-md transition">
                            <i class="bi bi-trash mr-2"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('main')

@section('content')

<div class="container mx-auto py-10">
    <div class="max-w-2xl mx-auto">
        <!-- Header dengan animasi -->
        <div class="text-center mb-6 animate__animated animate__fadeIn">
            <h2 class="text-3xl font-bold text-blue-600">Edit Agenda</h2>
            <p class="text-gray-500">Perbarui informasi agenda sesuai kebutuhan.</p>
        </div>

        <!-- Card Form -->
        <div class="bg-white shadow-xl rounded-2xl p-6 animate__animated animate__fadeInUp">
            <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Input Judul -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-semibold">Judul Agenda</label>
                    <input type="text" id="judul" name="judul" value="{{ $agenda->judul }}" class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300" required>
                </div>

                <!-- Input Pelaksana -->
                <div class="mb-4">
                    <label for="pelaksana" class="block text-gray-700 font-semibold">Pelaksana</label>
                    <input type="text" id="pelaksana" name="pelaksana" value="{{ $agenda->pelaksana }}" class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300" required>
                </div>

                <!-- Input Tanggal -->
                <div class="mb-4">
                    <label for="tanggal" class="block text-gray-700 font-semibold">Tanggal Pelaksanaan</label>
                    <input type="date" id="tanggal" name="tanggal" value="{{ $agenda->tanggal }}" class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300" required>
                </div>

                <!-- Input Deskripsi -->
                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-semibold">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300" required>{{ $agenda->deskripsi }}</textarea>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('agenda.index') }}" class="text-gray-600 hover:text-gray-800 flex items-center">
                        <i class="bi bi-arrow-left mr-2"></i> Kembali
                    </a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg shadow-md transition">
                        <i class="bi bi-save mr-2"></i> Perbarui Agenda
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

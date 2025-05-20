@extends('main')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">✏️ Edit Galeri</h1>

    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Foto Lama</label>
            <img src="{{ asset('storage/' . $galeri->foto) }}" alt="Foto Lama" class="w-32 rounded shadow">
        </div>

        <div>
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto Baru (Opsional)</label>
            <input type="file" name="foto" id="foto" class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4
            file:rounded-md file:border-0 file:text-sm file:font-semibold
            file:bg-blue-50 file:text-blue-700
            hover:file:bg-blue-100 transition duration-200">
        </div>

        <div>
            <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ $galeri->judul }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>
        </div>

        <div>
            <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ $galeri->kategori }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>
        </div>

        <div>
            <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>{{ $galeri->deskripsi }}</textarea>
        </div>

        <div class="flex items-center space-x-4">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded shadow">
                Update
            </button>
            <a href="{{ route('galeri.index') }}" class="text-gray-600 hover:text-gray-800 underline">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection

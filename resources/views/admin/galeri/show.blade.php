@extends('main')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">📸 Detail Galeri</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-6 text-center">
            <img src="{{ asset('storage/' . $galeri->foto) }}" alt="{{ $galeri->judul }}" class="w-full max-w-md mx-auto rounded-md shadow">
        </div>

        <div class="space-y-2">
            <h2 class="text-2xl font-semibold text-gray-800">{{ $galeri->judul }}</h2>
            <p class="text-sm text-gray-500"><strong>Kategori:</strong> {{ $galeri->kategori }}</p>
            <p class="text-gray-700">{{ $galeri->deskripsi }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('galeri.index') }}" class="inline-block bg-gray-600 hover:bg-gray-700 text-white font-semibold px-4 py-2 rounded">
                ⬅️ Kembali
            </a>
        </div>
    </div>
</div>
@endsection

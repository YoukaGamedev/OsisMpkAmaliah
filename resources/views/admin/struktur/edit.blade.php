@extends('main')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Anggota</h1>

    <form action="{{ route('structure.update', $structure->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="name" value="{{ old('name', $structure->name) }}" class="border border-gray-300 rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Jabatan</label>
            <input type="text" name="position" value="{{ old('position', $structure->position) }}" class="border border-gray-300 rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Foto Saat Ini</label>
            @if ($structure->photo)
                <img src="{{ asset($structure->photo) }}" alt="Foto Anggota" class="w-24 h-24 rounded-full mb-3">
            @else
                <p class="text-gray-500">Tidak ada foto</p>
            @endif
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Upload Foto Baru (Opsional)</label>
            <input type="file" name="photo" class="border border-gray-300 rounded w-full p-2">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Perbarui</button>
    </form>
</div>
@endsection

@extends('main')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Tambah Anggota</h1>

    <form action="{{ route('structure.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="name" class="border border-gray-300 rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Jabatan</label>
            <input type="text" name="position" class="border border-gray-300 rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Foto</label>
            <input type="file" name="photo" class="border border-gray-300 rounded w-full p-2">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection

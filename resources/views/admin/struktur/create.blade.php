@extends('main')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Tambah Anggota</h1>

    <form action="{{ route('structure.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700" for="name">Nama</label>
            <input type="text" id="name" name="name" class="border border-gray-300 rounded w-full p-2">
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700" for="position">Jabatan</label>
            <select id="position" name="position" class="border border-gray-300 rounded w-full p-2">
                <option value="">Pilih Jabatan</option>
                <option value="Pembina A1">Pembina A1</option>
                <option value="Pembina A2">Pembina A2</option>
                <option value="Ketua MPK A1">Ketua MPK A1</option>
                <option value="Ketua MPK A2">Ketua MPK A2</option>
                <option value="Wakil Ketua MPK A1">Wakil Ketua MPK A1</option>
                <option value="Wakil Ketua MPK A2">Wakil Ketua MPK A2</option>
                <option value="Bendahara MPK A1">Bendahara MPK A1</option>
                <option value="Bendahara MPK A2">Bendahara MPK A2</option>
                <option value="Sekretaris MPK">Sekretaris MPK</option>
                <option value="Ketua OSIS A1">Ketua OSIS A1</option>
                <option value="Ketua OSIS A2">Ketua OSIS A2</option>
                <option value="Wakil Ketua OSIS A1">Wakil Ketua OSIS A1</option>
                <option value="Wakil Ketua OSIS A2">Wakil Ketua OSIS A2</option>
                <option value="Bendahara OSIS A1">Bendahara OSIS A1</option>
                <option value="Bendahara OSIS A2">Bendahara OSIS A2</option>
                <option value="Sekretaris OSIS">Sekretaris OSIS</option>
                <option value="Ketua Divisi">Ketua Divisi</option>
                <option value="Divisi 1">Divisi 1</option>
                <option value="Divisi 2">Divisi 2</option>
                <option value="Divisi 3">Divisi 3</option>
                <option value="Divisi 4">Divisi 4</option>
                <option value="Ketua Sekbid 1">Ketua Sekbid 1</option>
                <option value="Ketua Sekbid 2">Ketua Sekbid 2</option>
                <option value="Ketua Sekbid 3">Ketua Sekbid 3</option>
                <option value="Ketua Sekbid 4">Ketua Sekbid 4</option>
                <option value="Ketua Sekbid 5">Ketua Sekbid 5</option>
                <option value="Ketua Sekbid 6">Ketua Sekbid 6</option>
                <option value="Anggota Sekbid 1">Anggota Sekbid 1</option>
                <option value="Anggota Sekbid 2">Anggota Sekbid 2</option>
                <option value="Anggota Sekbid 3">Anggota Sekbid 3</option>
                <option value="Anggota Sekbid 4">Anggota Sekbid 4</option>
                <option value="Anggota Sekbid 5">Anggota Sekbid 5</option>
                <option value="Anggota Sekbid 6">Anggota Sekbid 6</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700" for="photo">Foto</label>
            <input type="file" id="photo" name="photo" class="border border-gray-300 rounded w-full p-2">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection

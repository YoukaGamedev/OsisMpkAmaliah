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
            <label class="block text-gray-700" for="position">Jabatan</label>
            <select id="position" name="position" class="border border-gray-300 rounded w-full p-2">
                <option value="">Pilih Jabatan</option>
                @php
                    $positions = [
                        'Pembina A1', 'Pembina A2', 'Ketua MPK A1', 'Ketua MPK A2',
                        'Wakil Ketua MPK A1', 'Wakil Ketua MPK A2', 'Bendahara MPK A1', 'Bendahara MPK A2',
                        'Sekretaris MPK', 'Ketua OSIS A1', 'Ketua OSIS A2', 'Wakil Ketua OSIS A1', 'Wakil Ketua OSIS A2',
                        'Bendahara OSIS A1', 'Bendahara OSIS A2', 'Sekretaris OSIS', 'Ketua Divisi',
                        'Divisi 1', 'Divisi 2', 'Divisi 3', 'Divisi 4',
                        'Ketua Sekbid 1', 'Ketua Sekbid 2', 'Ketua Sekbid 3', 'Ketua Sekbid 4', 'Ketua Sekbid 5', 'Ketua Sekbid 6',
                        'Anggota Sekbid 1', 'Anggota Sekbid 2', 'Anggota Sekbid 3', 'Anggota Sekbid 4', 'Anggota Sekbid 5', 'Anggota Sekbid 6'
                    ];
                @endphp
                @foreach ($positions as $pos)
                    <option value="{{ $pos }}" {{ old('position', $structure->position) == $pos ? 'selected' : '' }}>
                        {{ $pos }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Foto Saat Ini</label>
            @if ($structure->photo)
                <img src="{{ asset('storage/' . $structure->photo) }}" alt="Foto Anggota" class="w-24 h-24 rounded-full mb-3">
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

@extends('admin.gds.gds')

@section('content2')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md border border-gray-200">
    <!-- Header -->
    <div class="text-center mb-4">
        <h2 class="text-2xl font-bold text-gray-800">Edit Jadwal GDS</h2>
        <p class="text-sm text-gray-500">Perbarui jadwal piket sesuai kebutuhan</p>
    </div>

    <!-- Form Edit -->
    <form action="{{ route('jadwalgds.update', $jadwal->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Hari -->
        <div>
            <label class="block text-gray-700 font-medium">Hari</label>
            <select name="hari" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                @foreach(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'] as $hari)
                    <option value="{{ $hari }}" {{ $jadwal->hari == $hari ? 'selected' : '' }}>{{ $hari }}</option>
                @endforeach
            </select>
        </div>

        <!-- PJ -->
        <div>
            <label class="block text-gray-700 font-medium">Penanggung Jawab (PJ)</label>
            <input type="text" name="pj" value="{{ $jadwal->pj }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
        </div>

        <!-- Minggu -->
        <div>
            <label class="block text-gray-700 font-medium">Minggu</label>
            <input type="text" name="Minggu" value="{{ $jadwal->Minggu }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
        </div>

        <!-- Petugas -->
        @for($i = 1; $i <= 5; $i++)
            <div>
                <label class="block text-gray-700 font-medium">Petugas {{ $i }}</label>
                <input type="text" name="petugas_{{ $i }}" value="{{ $jadwal['petugas_'.$i] ?? '' }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>
        @endfor

        <!-- Tombol Aksi -->
        <div class="mt-6 flex justify-between">
            <a href="{{ route('jadwalgds.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-gray-600 transition">
                Batal
            </a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600 transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection

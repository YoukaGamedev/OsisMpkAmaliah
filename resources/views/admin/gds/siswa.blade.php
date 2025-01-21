@extends('admin.gds.gds') <!-- Sesuaikan layout yang digunakan -->

@section('content2')
<div class=" mt-4">
    <h2>Edit Data Siswa</h2>
    <form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
        @csrf
        @method('POST')

        <!-- Input Text -->
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas" value="{{ $siswa->kelas }}" class="form-control" required>
        </div>

        <!-- Dropdown Options -->
        <div class="form-group">
            <label for="dasi_kacu">Dasi/Kacu:</label>
            <select name="dasi_kacu" id="dasi_kacu" class="form-control">
                <option value="1" {{ $siswa->dasi_kacu ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$siswa->dasi_kacu ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kaos_kaki">Kaos Kaki:</label>
            <select name="kaos_kaki" id="kaos_kaki" class="form-control">
                <option value="1" {{ $siswa->kaos_kaki ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$siswa->kaos_kaki ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sabuk">Sabuk:</label>
            <select name="sabuk" id="sabuk" class="form-control">
                <option value="1" {{ $siswa->sabuk ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$siswa->sabuk ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nametag">Nametag:</label>
            <select name="nametag" id="nametag" class="form-control">
                <option value="1" {{ $siswa->nametag ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$siswa->nametag ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sepatu">Sepatu:</label>
            <select name="sepatu" id="sepatu" class="form-control">
                <option value="1" {{ $siswa->sepatu ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$siswa->sepatu ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="jas">Jas:</label>
            <select name="jas" id="jas" class="form-control">
                <option value="1" {{ $siswa->jas ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$siswa->jas ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="ring">Ring:</label>
            <select name="ring" id="ring" class="form-control">
                <option value="1" {{ $siswa->ring ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$siswa->ring ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection

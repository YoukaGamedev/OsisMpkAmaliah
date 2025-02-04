@extends('admin.gds.gds')

@section('content2')
<div class="mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-center">
                    <h5>Edit Siswa</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dasi/Kacu</label>
                            <select name="dasi_kacu" class="form-select">
                                <option value="1" {{ $siswa->dasi_kacu ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->dasi_kacu ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kaos Kaki</label>
                            <select name="kaos_kaki" class="form-select">
                                <option value="1" {{ $siswa->kaos_kaki ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->kaos_kaki ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sabuk</label>
                            <select name="sabuk" class="form-select">
                                <option value="1" {{ $siswa->sabuk ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->sabuk ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NameTag</label>
                            <select name="nametag" class="form-select">
                                <option value="1" {{ $siswa->nametag ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->nametag ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sepatu</label>
                            <select name="sepatu" class="form-select">
                                <option value="1" {{ $siswa->sepatu ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->sepatu ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jas</label>
                            <select name="jas" class="form-select">
                                <option value="1" {{ $siswa->jas ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->jas ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ring</label>
                            <select name="ring" class="form-select">
                                <option value="1" {{ $siswa->ring ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->ring ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

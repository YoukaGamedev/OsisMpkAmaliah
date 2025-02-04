@extends('admin.gds.gds')

@section('content2')
<div class="mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-lg bg-gradient-primary text-white">
                <div class="card-header bg-danger text-center text-white">
                    <h5 class="fw-bold">Edit Siswa</h5>
                </div>
                <div class="card-body bg-light">
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold text-primary">Nama</label>
                            <input type="text" name="nama" class="form-control shadow-sm border-primary" value="{{ $siswa->nama }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-primary">Kelas</label>
                            <input type="text" name="kelas" class="form-control shadow-sm border-primary" value="{{ $siswa->kelas }}" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">Dasi/Kacu</label>
                                <select name="dasi_kacu" class="form-select shadow-sm border-secondary">
                                    <option value="1" {{ $siswa->dasi_kacu ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$siswa->dasi_kacu ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">Kaos Kaki</label>
                                <select name="kaos_kaki" class="form-select shadow-sm border-secondary">
                                    <option value="1" {{ $siswa->kaos_kaki ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$siswa->kaos_kaki ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-success">Sabuk</label>
                                <select name="sabuk" class="form-select shadow-sm border-success">
                                    <option value="1" {{ $siswa->sabuk ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$siswa->sabuk ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-success">NameTag</label>
                                <select name="nametag" class="form-select shadow-sm border-success">
                                    <option value="1" {{ $siswa->nametag ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$siswa->nametag ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-danger">Sepatu</label>
                                <select name="sepatu" class="form-select shadow-sm border-danger">
                                    <option value="1" {{ $siswa->sepatu ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$siswa->sepatu ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-danger">Jas</label>
                                <select name="jas" class="form-select shadow-sm border-danger">
                                    <option value="1" {{ $siswa->jas ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$siswa->jas ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">Ring</label>
                            <select name="ring" class="form-select shadow-sm border-warning">
                                <option value="1" {{ $siswa->ring ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->ring ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">Bros</label>
                            <select name="bros" class="form-select shadow-sm border-warning">
                                <option value="1" {{ $siswa->bros ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->bros ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">Make Up</label>
                            <select name="makeup" class="form-select shadow-sm border-warning">
                                <option value="1" {{ $siswa->makeup ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->makeup ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">Telat</label>
                            <select name="telat" class="form-select shadow-sm border-warning">
                                <option value="1" {{ $siswa->telat ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->telat ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">Ciput</label>
                            <select name="ciput" class="form-select shadow-sm border-warning">
                                <option value="1" {{ $siswa->ciput ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->ciput ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">Hijab</label>
                            <select name="hijab" class="form-select shadow-sm border-warning">
                                <option value="1" {{ $siswa->hijab ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->hijab ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">Almamater</label>
                            <select name="almamater" class="form-select shadow-sm border-warning">
                                <option value="1" {{ $siswa->almamater ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->almamater ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">WearPack</label>
                            <select name="wearpack" class="form-select shadow-sm border-warning">
                                <option value="1" {{ $siswa->wearpack ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ !$siswa->wearpack ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-danger w-100 shadow-sm text-white fw-bold">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <footer class="text-center mt-4 py-3 bg-dark text-white shadow-lg">
        <p class="mb-0">&copy; {{ date('Y') }} <span class="text-warning">Rekap GDS</span>. All rights reserved.</p>
    </footer>
@endsection

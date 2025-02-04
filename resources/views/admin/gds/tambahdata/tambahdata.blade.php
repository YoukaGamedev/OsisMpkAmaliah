@extends('admin.gds.gds')

@section('content2')
<div class="container mt-4">
    <div class="row">
        <!-- Tabel Siswa -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white text-center">
                    <h5>Daftar Siswa</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Dasi/Kacu</th>
                                    <th>Kaos Kaki</th>
                                    <th>Sabuk</th>
                                    <th>NameTag</th>
                                    <th>Sepatu</th>
                                    <th>Jas</th>
                                    <th>Ring</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswa as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->kelas }}</td>
                                    <td>{{ $data->dasi_kacu ? 'Ya' : 'Tidak' }}</td>
                                    <td>{{ $data->kaos_kaki ? 'Ya' : 'Tidak' }}</td>
                                    <td>{{ $data->sabuk ? 'Ya' : 'Tidak' }}</td>
                                    <td>{{ $data->nametag ? 'Ya' : 'Tidak' }}</td>
                                    <td>{{ $data->sepatu ? 'Ya' : 'Tidak' }}</td>
                                    <td>{{ $data->jas ? 'Ya' : 'Tidak' }}</td>
                                    <td>{{ $data->ring ? 'Ya' : 'Tidak' }}</td>
                                    <td>
                                        <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @if($siswa->isEmpty())
                                <tr>
                                    <td colspan="11" class="text-center text-muted">Tidak ada data siswa.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Tambah Data Siswa -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Tambah Siswa</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dasi/Kacu</label>
                            <select name="dasi_kacu" class="form-select">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kaos Kaki</label>
                            <select name="kaos_kaki" class="form-select">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sabuk</label>
                            <select name="sabuk" class="form-select">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NameTag</label>
                            <select name="nametag" class="form-select">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sepatu</label>
                            <select name="sepatu" class="form-select">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jas</label>
                            <select name="jas" class="form-select">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ring</label>
                            <select name="ring" class="form-select">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

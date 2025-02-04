@extends('admin.gds.gds')

@section('content2')
<div class="container mt-4">
    <!-- Form Tambah Data Siswa -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white text-center">
            <h5>Tambah Siswa</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Dasi/Kacu</label>
                        <select name="dasi_kacu" class="form-select">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kaos Kaki</label>
                        <select name="kaos_kaki" class="form-select">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Sabuk</label>
                        <select name="sabuk" class="form-select">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">NameTag</label>
                        <select name="nametag" class="form-select">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success w-50">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Siswa -->
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white text-center">
            <h5>Daftar Siswa</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark text-center">
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
                            <th>Bros</th>
                            <th>Make Up</th>
                            <th>Telat</th>
                            <th>Ciput</th>
                            <th>Hijab</th>
                            <th>Almamater</th>
                            <th>WearPack</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswa as $data)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td class="text-center">{{ $data->dasi_kacu ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->kaos_kaki ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->sabuk ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->nametag ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->sepatu ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->jas ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->ring ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->bros ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->makeup ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->telat ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->ciput ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->hijab ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->almamater ? '✔' : '✘' }}</td>
                            <td class="text-center">{{ $data->wearpack ? '✔' : '✘' }}</td>
                            <td class="text-center">
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
                            <td colspan="18" class="text-center text-muted">Tidak ada data siswa.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

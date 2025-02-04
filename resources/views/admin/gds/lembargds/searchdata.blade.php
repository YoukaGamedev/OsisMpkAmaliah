@extends('admin.gds.gds')

@section('content2')
<div class="mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h5>Cari Data Siswa</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('siswa.search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="query" class="form-control" placeholder="Cari berdasarkan nama atau kelas" value="{{ request('query') }}" aria-label="Search query">
                    <button type="submit" class="btn btn-success">Cari</button>
                </div>
            </form>

            @if($siswa->isEmpty())
                <div class="alert alert-warning text-center">
                    Data tidak ditemukan. Silakan coba kata kunci lain.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>
                                    <a href="{{ route('siswa.show', $data->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@extends('admin.gds.gds')

@section('content2')
<div class="mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white text-center">
            <h5>Detail Siswa</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $siswa->nama }}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>{{ $siswa->kelas }}</td>
                </tr>
                <tr>
                    <th>Dasi/Kacu</th>
                    <td>{{ $siswa->dasi_kacu ? 'Ya' : 'Tidak' }}</td>
                </tr>
                <tr>
                    <th>Kaos Kaki</th>
                    <td>{{ $siswa->kaos_kaki ? 'Ya' : 'Tidak' }}</td>
                </tr>
                <tr>
                    <th>Sabuk</th>
                    <td>{{ $siswa->sabuk ? 'Ya' : 'Tidak' }}</td>
                </tr>
                <tr>
                    <th>NameTag</th>
                    <td>{{ $siswa->nametag ? 'Ya' : 'Tidak' }}</td>
                </tr>
                <tr>
                    <th>Sepatu</th>
                    <td>{{ $siswa->sepatu ? 'Ya' : 'Tidak' }}</td>
                </tr>
                <tr>
                    <th>Jas</th>
                    <td>{{ $siswa->jas ? 'Ya' : 'Tidak' }}</td>
                </tr>
                <tr>
                    <th>Ring</th>
                    <td>{{ $siswa->ring ? 'Ya' : 'Tidak' }}</td>
                </tr>
            </table>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection

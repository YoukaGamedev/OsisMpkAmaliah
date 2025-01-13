@extends('admin.gds.gds') <!-- Sesuaikan layout dengan project Anda -->

@section('content2')
    <div class="container mt-4">
        <div class="main-content">
            <h2 class="text-center">Detail Rekap GDS</h2>
            <div class="card mb-4">
                <div class="card-header">Detail Data</div>
                <div class="card-body">
                    <p><strong>PJ:</strong> {{ $rekap->pj }}</p>
                    <p><strong>Hari:</strong> {{ $rekap->hari }}</p>
                    <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($rekap->created_at)->format('d-m-Y') }}</p>
                </div>
            </div>

        <!-- Tambahkan tombol Tambah Siswa -->
        <div class="mb-3">
            <a href="{{ route('lembar-gds.create') }}" class="btn btn-primary">Tambah Siswa</a>
        </div>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Dasi/Kacu</th>
                    <th>Kaos Kaki</th>
                    <th>Sabuk</th>
                    <th>Nametag</th>
                    <th>Sepatu</th>
                    <th>Jas</th>
                    <th>Ring</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data siswa, sesuaikan dengan data dari database -->
                <tr>
                    <td>1</td>
                    <td>Ilham Rai</td>
                    <td>123456</td>
                    <td>XI RPL 1</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>Bogor</td>
                    <td>ilham@example.com</td>
                    <td>08123456789</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

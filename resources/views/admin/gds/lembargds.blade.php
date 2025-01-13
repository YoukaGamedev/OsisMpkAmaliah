@extends('admin.gds.gds') <!-- Sesuaikan layout dengan project Anda -->

@section('content2')
    <div class="container mt-4">
        <h2 class="text-center mb-4">Data Siswa Yang Melanggar GDS</h2>

        <!-- Tambahkan tombol Tambah Siswa -->
        <div class="mb-3">
            <a href="{{ route('lembar-gds.create') }}" class="btn btn-primary">Tambah Siswa</a>
        </div>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
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
                <tr>
                    <td>2</td>
                    <td>Aa Putra</td>
                    <td>789012</td>
                    <td>XI RPL 2</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>Jakarta</td>
                    <td>aa@example.com</td>
                    <td>08987654321</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

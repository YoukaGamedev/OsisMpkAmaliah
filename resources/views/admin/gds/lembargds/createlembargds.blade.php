@extends('admin.gds.gds') <!-- Sesuaikan layout dengan project Anda -->

@section('content2')
    <div class="mt-4">
        <h2 class="text-center mb-4">Tambah Data Siswa Yang Melanggar</h2>

        <!-- Tambahkan tombol  -->
        <div class="mb-3 text-right">
            <button class="btn btn-success"></button>
        </div>

        <!-- Form Input Data Siswa -->
        <div class="card mb-4">
            <div class="card-header">Form Input Data Siswa</div>
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
@endsection

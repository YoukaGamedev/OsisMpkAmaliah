@extends('admin.gds.gds')

@section('content2')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h5>Jadwal Piket GDS</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Kegiatan</th>
                            <th>Petugas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin</td>
                            <td>08:00 - 09:30</td>
                            <td>Membersihkan Kelas</td>
                            <td>
                                John Doe <br>
                                Jane Smith <br>
                                Michael Brown <br>
                                Ilham Haha
                            </td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Lihat</a>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td>09:30 - 11:00</td>
                            <td>Pengawasan Lantai</td>
                            <td>
                                Sarah Lee <br>
                                Chris Evans
                            </td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Lihat</a>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td>11:00 - 12:30</td>
                            <td>Membersihkan Taman</td>
                            <td>
                                Mark Johnson <br>
                                Emily Davis <br>
                                Anna Clark
                            </td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Lihat</a>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin.pemilu')

@section('content1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Lembaga</title>
    <link rel="stylesheet" href="{{ asset('/asset/css/dashboardpemilu.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h2>Identitas Lembaga</h2>
            <form action="{{ ('/admin/dashboard') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="npsn">NPSN</label>
                <input name="npsn" type="text" id="npsn" name="npsn" value="22556622">

                <label for="nama-sekolah">Nama Sekolah</label>
                <input name="nama_sekolah" type="text" id="nama-sekolah" name="nama-sekolah" placeholder="NAMA SEKOLAH">

                <label for="nama-kepala-sekolah">Nama Kepala Sekolah</label>
                <input name="nama_kepsek" type="text" id="nama-kepala-sekolah" name="nama-kepala-sekolah" placeholder="Nama Kepala Sekolah">
        </div>

        <div class="form-section">
            
                <label for="nip">NIP</label>
                <input name="nip" type="text" id="nip" name="nip" value="102841204123809">

                <label for="alamat">Alamat Jalan</label>
                <input name="alamat_jalan" type="text" id="alamat" name="alamat" placeholder="Jl. Alamat">

                <label for="desa">Desa/Kelurahan</label>
                <input name="desa" type="text" id="desa" name="desa" placeholder="Desa">
            
        </div>

        <div class="form-section">
        
                <label for="kecamatan">Kecamatan</label>
                <input name="kecamatan" type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan">

                <label for="kabupaten">Kabupaten/Kota</label>
                <input name="kota" type="text" id="kabupaten" name="kabupaten" placeholder="Kabupaten">
                
        </div>
        
        <div class="form-section">
            <h2>Pengaturan Informasi Kegiatan</h2>

                <label for="tahun-pelajaran">Tahun Pelajaran</label>
                <input name="tahun_pelajaran" type="text" id="tahun-pelajaran" name="tahun-pelajaran" value="2021/2022">
                
                <label for="tanggal-pelaksanaan">Tanggal Pelaksanaan</label>
                <input name="tanggal" type="date" id="tanggal-pelaksanaan" name="tanggal-pelaksanaan" value="2021-08-17">
                
                <button type="submit" class="save-btn">Simpan Data</button>
            </form>
        </div>

        <div class="form-section">
            <h2>Reset Data Pemilih</h2>
            <p>Fitur ini digunakan apabila telah selesai melakukan pemilihan dan ingin menghapus data untuk pemilihan berikutnya.</p>
            <button type="button" class="reset-data-btn">Reset Data Pemilih</button>
        </div>
    </div>
    <br><br>
</body>
</html>


@endsection
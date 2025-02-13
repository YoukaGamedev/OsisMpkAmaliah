@extends('admin.pemilu.pemilu')

@section('content1')

<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Identitas Lembaga</h2>
        <form action="{{ ('/admin/pemilu/dashboard') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="npsn" class="block text-gray-600">NPSN</label>
                    <input name="npsn" type="text" id="npsn" value="22556622" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="nama-sekolah" class="block text-gray-600">Nama Sekolah</label>
                    <input name="nama_sekolah" type="text" id="nama-sekolah" placeholder="NAMA SEKOLAH" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="nama-kepala-sekolah" class="block text-gray-600">Nama Kepala Sekolah</label>
                    <input name="nama_kepsek" type="text" id="nama-kepala-sekolah" placeholder="Nama Kepala Sekolah" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="nip" class="block text-gray-600">NIP</label>
                    <input name="nip" type="text" id="nip" value="102841204123809" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="alamat" class="block text-gray-600">Alamat Jalan</label>
                    <input name="alamat_jalan" type="text" id="alamat" placeholder="Jl. Alamat" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="desa" class="block text-gray-600">Desa/Kelurahan</label>
                    <input name="desa" type="text" id="desa" placeholder="Desa" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="kecamatan" class="block text-gray-600">Kecamatan</label>
                    <input name="kecamatan" type="text" id="kecamatan" placeholder="Kecamatan" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="kabupaten" class="block text-gray-600">Kabupaten/Kota</label>
                    <input name="kota" type="text" id="kabupaten" placeholder="Kabupaten" class="w-full p-2 border rounded-lg">
                </div>
            </div>
            <h2 class="text-2xl font-bold text-gray-700 mt-6">Pengaturan Informasi Kegiatan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div>
                    <label for="tahun-pelajaran" class="block text-gray-600">Tahun Pelajaran</label>
                    <input name="tahun_pelajaran" type="text" id="tahun-pelajaran" value="2021/2022" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="tanggal-pelaksanaan" class="block text-gray-600">Tanggal Pelaksanaan</label>
                    <input name="tanggal" type="date" id="tanggal-pelaksanaan" value="2021-08-17" class="w-full p-2 border rounded-lg">
                </div>
            </div>
            <button type="submit" class="mt-4 w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition">Simpan Data</button>
        </form>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 mt-6">
        <h2 class="text-2xl font-bold text-gray-700">Reset Data Pemilih</h2>
        <p class="text-gray-600 mt-2">Fitur ini digunakan apabila telah selesai melakukan pemilihan dan ingin menghapus data untuk pemilihan berikutnya.</p>
        <button type="button" class="mt-4 w-full bg-red-600 text-white p-3 rounded-lg hover:bg-red-700 transition">Reset Data Pemilih</button>
    </div>
</div>

@endsection

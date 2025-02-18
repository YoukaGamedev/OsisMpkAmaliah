@extends('admin.pemilu.pemilu')

@section('content1')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Identitas Lembaga</h2>
        <form action="{{ route('dashboardpemilu.update', $dashboard->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="npsn" class="block text-gray-600">NPSN</label>
                    <input name="npsn" type="text" id="npsn" value="{{ $dashboard->npsn }}" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="nama-sekolah" class="block text-gray-600">Nama Sekolah</label>
                    <input name="nama_sekolah" type="text" id="nama-sekolah" value="{{ $dashboard->nama_sekolah }}" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="nama-kepala-sekolah" class="block text-gray-600">Nama Kepala Sekolah</label>
                    <input name="nama_kepsek" type="text" id="nama-kepala-sekolah" value="{{ $dashboard->nama_kepsek }}" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="nip" class="block text-gray-600">NIP</label>
                    <input name="nip" type="text" id="nip" value="{{ $dashboard->nip }}" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="alamat" class="block text-gray-600">Alamat Jalan</label>
                    <input name="alamat_jalan" type="text" id="alamat" value="{{ $dashboard->alamat_jalan }}" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="desa" class="block text-gray-600">Desa/Kelurahan</label>
                    <input name="desa" type="text" id="desa" value="{{ $dashboard->desa }}" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="kecamatan" class="block text-gray-600">Kecamatan</label>
                    <input name="kecamatan" type="text" id="kecamatan" value="{{ $dashboard->kecamatan }}" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="kabupaten" class="block text-gray-600">Kabupaten/Kota</label>
                    <input name="kota" type="text" id="kabupaten" value="{{ $dashboard->kota }}" class="w-full p-2 border rounded-lg">
                </div>
            </div>

            <h2 class="text-2xl font-bold text-gray-700 mt-6 mb-4">Pengaturan Informasi Kegiatan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="tahun-pelajaran" class="block text-gray-600">Tahun Pelajaran</label>
                    <input name="tahun_pelajaran" type="text" id="tahun-pelajaran" value="{{ $dashboard->tahun_pelajaran }}" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label for="tanggal-pelaksanaan" class="block text-gray-600">Tanggal Pelaksanaan</label>
                    <input name="tanggal" type="date" id="tanggal-pelaksanaan" value="{{ $dashboard->tanggal }}" class="w-full p-2 border rounded-lg">
                </div>
            </div>

            <button type="submit" class="mt-4 w-full bg-green-600 text-white p-3 rounded-lg hover:bg-green-700 transition">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>
@endsection
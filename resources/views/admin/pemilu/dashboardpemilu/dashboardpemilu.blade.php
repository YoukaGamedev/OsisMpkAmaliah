@extends('admin.pemilu.pemilu')

@section('content1')

<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg p-6">

        <!-- PESAN BERHASIL -->
        @if(session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4">
                {{ session('status') }}
            </div>
        @endif

        <!-- PESAN ERROR -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="text-2xl font-bold text-gray-700 mb-4">Identitas Lembaga</h2>

        @if($dashboard->count() == 0)
            <form action="{{ route('dashboardpemilu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="npsn" class="block text-gray-600 font-semibold">NPSN <span class="text-red-500">*</span></label>
                        <input name="npsn" type="text" id="npsn" value="{{ old('npsn', '22556622') }}" required class="w-full p-2 border rounded-lg">
                    </div>
                    <div>
                        <label for="nama-sekolah" class="block text-gray-600 font-semibold">Nama Sekolah <span class="text-red-500">*</span></label>
                        <input name="nama_sekolah" type="text" id="nama-sekolah" value="{{ old('nama_sekolah') }}" required placeholder="Masukkan Nama Sekolah" class="w-full p-2 border rounded-lg">
                    </div>
                    <div>
                        <label for="nama-kepala-sekolah" class="block text-gray-600 font-semibold">Nama Kepala Sekolah <span class="text-red-500">*</span></label>
                        <input name="nama_kepsek" type="text" id="nama-kepala-sekolah" value="{{ old('nama_kepsek') }}" required placeholder="Masukkan Nama Kepala Sekolah" class="w-full p-2 border rounded-lg">
                    </div>
                    <div>
                        <label for="nip" class="block text-gray-600 font-semibold">NIP</label>
                        <input name="nip" type="text" id="nip" value="{{ old('nip', '10284') }}" class="w-full p-2 border rounded-lg">
                    </div>
                    <div>
                        <label for="alamat" class="block text-gray-600 font-semibold">Alamat Jalan</label>
                        <input name="alamat_jalan" type="text" id="alamat" value="{{ old('alamat_jalan') }}" placeholder="Contoh: Jl. Merdeka No. 10" class="w-full p-2 border rounded-lg">
                    </div>
                    <div>
                        <label for="desa" class="block text-gray-600 font-semibold">Desa/Kelurahan</label>
                        <input name="desa" type="text" id="desa" value="{{ old('desa') }}" placeholder="Masukkan Nama Desa/Kelurahan" class="w-full p-2 border rounded-lg">
                    </div>
                    <div>
                        <label for="kecamatan" class="block text-gray-600 font-semibold">Kecamatan</label>
                        <input name="kecamatan" type="text" id="kecamatan" value="{{ old('kecamatan') }}" placeholder="Masukkan Nama Kecamatan" class="w-full p-2 border rounded-lg">
                    </div>
                    <div>
                        <label for="kabupaten" class="block text-gray-600 font-semibold">Kabupaten/Kota</label>
                        <input name="kota" type="text" id="kabupaten" value="{{ old('kota') }}" placeholder="Masukkan Nama Kabupaten/Kota" class="w-full p-2 border rounded-lg">
                    </div>
                </div>

                <h2 class="text-2xl font-bold text-gray-700 mt-6">Pengaturan Informasi Kegiatan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="tahun-pelajaran" class="block text-gray-600 font-semibold">Tahun Pelajaran <span class="text-red-500">*</span></label>
                        <input name="tahun_pelajaran" type="text" id="tahun-pelajaran" value="{{ old('tahun_pelajaran', '2021/2022') }}" required class="w-full p-2 border rounded-lg">
                    </div>
                    <div>
                        <label for="tanggal-pelaksanaan" class="block text-gray-600 font-semibold">Tanggal Pelaksanaan <span class="text-red-500">*</span></label>
                        <input name="tanggal" type="date" id="tanggal-pelaksanaan" value="{{ old('tanggal', '2021-08-17') }}" required class="w-full p-2 border rounded-lg">
                    </div>
                </div>

                <button type="submit" class="mt-4 w-full bg-green-600 text-white p-3 rounded-lg hover:bg-green-700 transition">Tambah Data</button>
            </form>
        @else
            @foreach($dashboard as $data)
                <div class="flex mt-4 gap-2">
                    <a href="{{ route('dashboardpemilu.edit', $data->id) }}" class="w-1/2 bg-blue-600 text-white p-3 rounded-lg text-center hover:bg-blue-700 transition">Edit</a>
                    <form action="{{ route('dashboardpemilu.destroy', $data->id) }}" method="POST" class="w-1/2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-red-600 text-white p-3 rounded-lg hover:bg-red-700 transition">Hapus</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>

    <!-- HELPFUL TIPS CARD -->
    <div class="mt-6 bg-blue-100 border border-blue-400 text-blue-700 p-4 rounded-lg">
            <h3 class="font-bold text-lg">💡 Helpful Tips</h3>
            <ul class="mt-2 text-sm list-disc list-inside">
                <li>Pastikan data yang dimasukkan sesuai dengan dokumen resmi.</li>
                <li>Gunakan format yang benar, seperti NPSN terdiri dari 8 digit angka.</li>
                <li>Tanggal pelaksanaan harus sesuai dengan jadwal yang telah ditetapkan.</li>
                <li>Jika ada kesalahan, Anda bisa mengedit atau menghapus data setelah disimpan.</li>
            </ul>
        </div>

    <div class="bg-white shadow-md rounded-lg p-6 mt-6">
        <h2 class="text-2xl font-bold text-gray-700">Reset Data Pemilih</h2>
        <p class="text-gray-600 mt-2">Fitur ini digunakan apabila telah selesai melakukan pemilihan dan ingin menghapus data untuk pemilihan berikutnya.</p>
        <button type="button" class="mt-4 w-full bg-red-600 text-white p-3 rounded-lg hover:bg-red-700 transition">Reset Data Pemilih</button>
    </div>
</div>

@endsection

@extends('admin.pemilu.pemilu')

@section('content1')
<div class="container mx-auto p-6 max-w-5xl">
    @php
        $pemiluDimulai = \App\Models\Dashboard::first()?->status_pemilu == 1;
    @endphp

    {{-- Toggle Pemilu Button Card --}}
    <div class="max-w-sm mx-auto mb-8">
        <form action="{{ route('dashboardpemilu.toggle') }}" method="POST" class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center">
            @csrf
            <button type="submit"
                class="w-full rounded-lg px-6 py-3 font-semibold text-white shadow-md
                    transition duration-300 ease-in-out
                    {{ $pemiluDimulai 
                        ? 'bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 active:scale-95' 
                        : 'bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 active:scale-95' }}">
                {{ $pemiluDimulai ? 'Stop Pemilu' : 'Mulai Pemilu' }}
            </button>
        </form>
    </div>

    {{-- Feedback Messages --}}
    @foreach (['status', 'message'] as $msg)
        @if(session($msg))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 max-w-3xl mx-auto shadow-sm">
                {{ session($msg) }}
            </div>
        @endif
    @endforeach

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg mb-6 max-w-3xl mx-auto shadow-sm">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Identitas Lembaga --}}
    <div class="bg-white shadow-md rounded-lg p-8 max-w-5xl mx-auto">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-8 border-b pb-3">Identitas Lembaga</h2>

        @if($dashboard->count() == 0)
            <form action="{{ route('dashboardpemilu.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="npsn" class="block text-gray-700 font-semibold mb-1">NPSN <span class="text-red-500">*</span></label>
                        <input name="npsn" type="number" id="npsn" value="{{ old('npsn', '22556622') }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="nama-sekolah" class="block text-gray-700 font-semibold mb-1">Nama Sekolah <span class="text-red-500">*</span></label>
                        <input name="nama_sekolah" type="text" id="nama-sekolah" value="{{ old('nama_sekolah') }}" required placeholder="Masukkan Nama Sekolah"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="nama-kepala-sekolah" class="block text-gray-700 font-semibold mb-1">Nama Kepala Sekolah <span class="text-red-500">*</span></label>
                        <input name="nama_kepsek" type="text" id="nama-kepala-sekolah" value="{{ old('nama_kepsek') }}" required placeholder="Masukkan Nama Kepala Sekolah"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="nip" class="block text-gray-700 font-semibold mb-1">NIP</label>
                        <input name="nip" type="number" id="nip" value="{{ old('nip', '10284') }}"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="alamat" class="block text-gray-700 font-semibold mb-1">Alamat Jalan</label>
                        <input name="alamat_jalan" type="text" id="alamat" value="{{ old('alamat_jalan') }}" placeholder="Contoh: Jl. Merdeka No. 10"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="desa" class="block text-gray-700 font-semibold mb-1">Desa/Kelurahan</label>
                        <input name="desa" type="text" id="desa" value="{{ old('desa') }}" placeholder="Masukkan Nama Desa/Kelurahan"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="kecamatan" class="block text-gray-700 font-semibold mb-1">Kecamatan</label>
                        <input name="kecamatan" type="text" id="kecamatan" value="{{ old('kecamatan') }}" placeholder="Masukkan Nama Kecamatan"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="kabupaten" class="block text-gray-700 font-semibold mb-1">Kabupaten/Kota</label>
                        <input name="kota" type="text" id="kabupaten" value="{{ old('kota') }}" placeholder="Masukkan Nama Kabupaten/Kota"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                </div>

                <h2 class="text-3xl font-extrabold text-gray-800 mt-12 mb-6 border-b pb-3">Pengaturan Informasi Kegiatan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="tahun-pelajaran" class="block text-gray-700 font-semibold mb-1">Tahun Pelajaran <span class="text-red-500">*</span></label>
                        <input name="tahun_pelajaran" type="text" id="tahun-pelajaran" value="{{ old('tahun_pelajaran', '2021/2022') }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div>
                        <label for="tanggal-pelaksanaan" class="block text-gray-700 font-semibold mb-1">Tanggal Pelaksanaan <span class="text-red-500">*</span></label>
                        <input name="tanggal" type="date" id="tanggal-pelaksanaan" value="{{ old('tanggal', '2021-08-17') }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                </div>

                <button type="submit" class="mt-8 w-full bg-green-600 text-white p-3 rounded-lg hover:bg-green-700 transition font-semibold shadow-lg">Tambah Data</button>
            </form>
        @else
            @foreach($dashboard as $data)
                <div class="flex mt-6 gap-4 max-w-3xl mx-auto">
                    <a href="{{ route('dashboardpemilu.edit', $data->id) }}" class="flex-1 bg-blue-600 text-white p-3 rounded-lg text-center hover:bg-blue-700 transition font-semibold shadow-md">Edit</a>
                    <form action="{{ route('dashboardpemilu.destroy', $data->id) }}" method="POST" class="flex-1 delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="w-full bg-red-600 text-white p-3 rounded-lg hover:bg-red-700 transition delete-btn font-semibold shadow-md">Hapus</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>

    {{-- Reset Data Pemilih Card --}}
    <div class="bg-white shadow-md rounded-lg p-8 mt-10 max-w-5xl mx-auto">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-4">Reset Data Pemilih</h2>
        <p class="text-gray-600 mb-6">Fitur ini digunakan apabila telah selesai melakukan pemilihan dan ingin menghapus data untuk pemilihan berikutnya.</p>
        <form id="resetForm" action="{{ route('reset.data') }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-red-600 text-white p-3 rounded-lg hover:bg-red-700 transition font-semibold shadow-lg">
                Reset Data Pemilih
            </button>
        </form>
    </div>

    {{-- Helpful Tips Card --}}
    <div class="mt-10 bg-blue-50 border border-blue-400 text-blue-700 p-6 rounded-lg max-w-5xl mx-auto shadow-sm">
        <h3 class="font-bold text-xl mb-4 flex items-center gap-2">
            <span>💡</span> Helpful Tips
        </h3>
        <ul class="text-sm list-disc list-inside space-y-2">
            <li>Pastikan data yang dimasukkan sesuai dengan dokumen resmi.</li>
            <li>Gunakan format yang benar, seperti NPSN terdiri dari 8 digit angka.</li>
            <li>Tanggal pelaksanaan harus sesuai dengan jadwal yang telah ditetapkan.</li>
            <li>Jika ada kesalahan, Anda bisa mengedit atau menghapus data setelah disimpan.</li>
        </ul>
    </div>
</div>

{{-- SweetAlert2 Delete Confirmation --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.closest('form').submit();
                }
            });
        });
    });
</script>
@endsection

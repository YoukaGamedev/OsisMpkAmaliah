@extends('admin.gds.gds')

@section('content2')
<div class="container mx-auto px-2 py-4">
    <!-- Form Tambah Data Siswa -->
    <div class="bg-white rounded-lg shadow-md mb-4">
        <div class="bg-gray-700 text-white text-center py-3 rounded-t-lg">
            <h5 class="text-xl font-semibold">Form Tambah Siswa</h5>
        </div>

        <!-- Petunjuk -->
        <div class="bg-blue-100 px-4 py-3 border-l-4 border-blue-500 rounded-b-md text-sm">
            <p><strong>Petunjuk Pengisian:</strong></p>
            <ul class="list-disc list-inside pl-2">
                <li>Isi nama lengkap siswa sesuai data resmi.</li>
                <li>Format kelas: contoh <code class="bg-gray-200 px-1 rounded">X PPLG 3</code>, <code class="bg-gray-200 px-1 rounded">XI MP 2</code>, dll.</li>
                <li>Unggah foto dengan format JPG/PNG, maksimal 2MB.</li>
                <li>QR Code akan terbuat sendiri jika sudah di simpan.</li>
            </ul>
        </div>

        <div class="p-6">
            <form action="{{ route('tambahdata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Nama -->
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-1">Nama</label>
                        <input type="text" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300" placeholder="Contoh: Ahmad Ramadhan" required>
                    </div>

                    <!-- Kelas -->
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-1">Kelas</label>
                        <input type="text" name="kelas" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300" placeholder="Contoh: X PPLG 1" required>
                    </div>

                    <!-- Status OSIS -->
                    <div class="flex items-center space-x-2 mt-6">
                        <input type="checkbox" name="is_osis" value="1" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                        <label class="text-sm text-gray-700">Anggota OSIS</label>
                    </div>

                    <!-- Foto -->
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-1">Foto Siswa</label>
                        <input type="file" name="foto" accept="image/*" class="w-full px-3 py-1.5 border border-gray-300 rounded-md text-sm">
                        <span class="text-xs text-gray-500 mt-1 block">Maks. 2MB. Format: JPG/PNG</span>
                    </div>

                </div>

                <!-- Tombol -->
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-2 rounded-lg shadow-md transition">
                        <i class="fas fa-save mr-2"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

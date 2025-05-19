@extends('admin.gds.gds')  

@section('content2')
<div class="flex justify-center mt-8">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white text-center py-4">
            <h5 class="font-bold text-xl">Edit Siswa</h5>
        </div>

        <!-- Form -->
        <div class="p-6">
            <form action="{{ route('tambahdata.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nama -->
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Nama</label>
                    <input type="text" name="nama" value="{{ $siswa->nama }}" required
                        class="w-full px-4 py-2 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Kelas -->
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Kelas</label>
                    <input type="text" name="kelas" value="{{ $siswa->kelas }}" required
                        class="w-full px-4 py-2 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Foto saat ini -->
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Foto Saat Ini</label>
                    @if($siswa->foto)
                        <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto Siswa" class="w-24 h-24 rounded-full object-cover border mb-2">
                    @else
                        <p class="text-gray-400 italic text-sm">Belum ada foto.</p>
                    @endif
                    <input type="file" name="foto" class="mt-2">
                </div>

                <!-- QR Code saat ini -->
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">QR Code Saat Ini</label>
                    @if($siswa->qr_code)
                        <img src="{{ asset('storage/' . $siswa->qr_code) }}" alt="QR Code" class="w-24 h-24 object-contain border mb-2">
                    @else
                        <p class="text-gray-400 italic text-sm">Belum ada QR code.</p>
                    @endif
                    <input type="file" name="qr_code" class="mt-2">
                </div>

                <!-- Submit -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 rounded-lg shadow-md hover:from-green-600 hover:to-emerald-700 transition font-bold text-lg">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="text-center mt-8 py-4 bg-gradient-to-r from-gray-800 to-gray-900 text-white shadow-lg">
    <p class="mb-0">&copy; {{ date('Y') }} <span class="text-yellow-400 font-bold">Rekap GDS</span>. All rights reserved.</p>
</footer>
@endsection

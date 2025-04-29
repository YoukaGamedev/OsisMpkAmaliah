@extends('admin.gds.gds')  

@section('content2')
<div class="flex justify-center mt-8">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white text-center py-4">
            <h5 class="font-bold text-xl">Edit Siswa</h5>
        </div>
        <div class="p-6">
            <form action="{{ route('tambahdata.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Nama</label>
                    <input type="text" name="nama" class="w-full px-4 py-3 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->nama }}" required>
                </div>
                
                <div class="mb-8">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Kelas</label>
                    <input type="text" name="kelas" class="w-full px-4 py-3 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->kelas }}" required>
                </div>
                
                <div class="mt-6">
                    <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 rounded-lg shadow-md hover:from-green-600 hover:to-emerald-700 transition duration-300 font-bold text-lg">Simpan Perubahan</button>
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

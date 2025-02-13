@extends('admin.gds.gds')

@section('content2')
    <div class="mt-6 max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-center text-2xl font-bold mb-6 text-gray-700">Tambah Rekap GDS</h2>

        <!-- Form Input Data Siswa -->
        <form action="{{ route('rekapgds.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="pj" class="block text-gray-600 font-medium">PJ</label>
                <input type="text" id="pj" name="pj" placeholder="Masukkan nama PJ" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
            </div>
            
            <div>
                <label for="hari" class="block text-gray-600 font-medium">Hari</label>
                <input type="text" id="hari" name="hari" placeholder="Masukkan hari" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </form>
    </div>
@endsection

@section('footer')
    <footer class="text-center mt-6 py-4 bg-gray-200 text-gray-600">
        <p class="mb-0">&copy; {{ date('Y') }} Rekap GDS. All rights reserved.</p>
    </footer>
@endsection

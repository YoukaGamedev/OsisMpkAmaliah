@extends('admin.gds.gds')

@section('content2')
<div class="container mx-auto px-2 py-4">
    <!-- Form Tambah Data Siswa -->
    <div class="bg-white rounded-lg shadow-md mb-4">
        <div class="bg-gray-700 text-white text-center py-2 rounded-t-lg">
            <h5 class="text-lg font-semibold">Tambah Siswa</h5>
        </div>
        <div class="p-4">
            <form action="{{ route('tambahdata.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                    <div>
                        <label class="block text-gray-700 text-xs font-bold mb-1">Nama</label>
                        <input type="text" name="nama" class="w-full px-2 py-1 text-sm border rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 text-xs font-bold mb-1">Kelas</label>
                        <input type="text" name="kelas" class="w-full px-2 py-1 text-sm border rounded" required>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="bg-green-500 text-white px-4 py-1 text-sm rounded hover:bg-green-600">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

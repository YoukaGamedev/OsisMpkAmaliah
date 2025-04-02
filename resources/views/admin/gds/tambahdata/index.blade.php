@extends('admin.gds.gds')

@section('content2')
<!-- Header dan Search Bar -->
<div class="mb-6 flex justify-between items-center">
    <h2 class="text-xl font-semibold text-gray-800">Daftar Siswa</h2>
    <div class="flex space-x-2">
        <form action="{{ route('tambahdata.index') }}" method="GET" class="flex items-center space-x-2">
            <input type="text" name="search" placeholder="Cari Nama/Kelas" value="{{ request('search') }}"
                class="border px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                <i class="fas fa-search"></i> Cari
            </button>
        </form>
        <a href="{{ route('tambahdata.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>
</div>

<!-- Tabel Siswa -->
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="bg-gray-800 text-white text-center py-4 rounded-t-lg font-bold text-lg">Daftar Siswa</div>
    <div class="p-6 overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 text-gray-700">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-3 px-4 border">No</th>
                    <th class="py-3 px-4 border">Nama</th>
                    <th class="py-3 px-4 border">Kelas</th>
                    <th class="py-3 px-4 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $uniqueNames = [];
                    $no = 1;
                @endphp
                @foreach($siswa as $data)
                    @if(!in_array($data->nama, $uniqueNames))
                        @php $uniqueNames[] = $data->nama; @endphp
                        <tr class="hover:bg-gray-50 transition duration-200 ease-in-out">
                            <td class="py-3 px-4 border text-center">{{ $no++ }}</td>
                            <td class="py-3 px-4 border">{{ $data->nama }}</td>
                            <td class="py-3 px-4 border">{{ $data->kelas }}</td>
                            <td class="py-3 px-4 border text-center flex justify-center space-x-2">
                                <a href="{{ route('tambahdata.edit', $data->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 transition">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ route('tambahdata.show', $data->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <form action="{{ route('tambahdata.destroy', $data->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
                @if(empty($uniqueNames))
                <tr>
                    <td colspan="4" class="py-3 px-4 border text-center text-gray-500">Tidak ada data siswa.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

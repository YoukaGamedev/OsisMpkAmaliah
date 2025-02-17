@extends('admin.gds.gds')

@section('content2')
<div class="container mx-auto px-4 py-8">
    <!-- Form Tambah Data Siswa -->
    <div class="bg-white rounded-lg shadow-md mb-8">
        <div class="bg-blue-600 text-white text-center py-4 rounded-t-lg">
            <h5 class="text-xl font-semibold">Tambah Siswa</h5>
        </div>
        <div class="p-6">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                        <input type="text" name="nama" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Kelas</label>
                        <input type="text" name="kelas" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Dasi/Kacu</label>
                        <select name="dasi_kacu" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Kaos Kaki</label>
                        <select name="kaos_kaki" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Sabuk</label>
                        <select name="sabuk" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">NameTag</label>
                        <select name="nametag" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Sepatu</label>
                        <select name="sepatu" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Jas</label>
                        <select name="jas" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Ring</label>
                        <select name="ring" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Bros</label>
                        <select name="bros" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Make Up</label>
                        <select name="makeup" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Telat</label>
                        <select name="telat" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Ciput</label>
                        <select name="ciput" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Hijab</label>
                        <select name="hijab" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Almamater</label>
                        <select name="almamater" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">WearPack</label>
                        <select name="wearpack" class="w-full px-3 py-2 border rounded-lg">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Siswa -->
    <div class="bg-white rounded-lg shadow-md">
        <div class="bg-gray-800 text-white text-center py-4 rounded-t-lg">
            <h5 class="text-xl font-semibold">Daftar Siswa</h5>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b">No</th>
                            <th class="py-2 px-4 border-b">Nama</th>
                            <th class="py-2 px-4 border-b">Kelas</th>
                            <th class="py-2 px-4 border-b">Dasi/Kacu</th>
                            <th class="py-2 px-4 border-b">Kaos Kaki</th>
                            <th class="py-2 px-4 border-b">Sabuk</th>
                            <th class="py-2 px-4 border-b">NameTag</th>
                            <th class="py-2 px-4 border-b">Sepatu</th>
                            <th class="py-2 px-4 border-b">Jas</th>
                            <th class="py-2 px-4 border-b">Ring</th>
                            <th class="py-2 px-4 border-b">Bros</th>
                            <th class="py-2 px-4 border-b">Make Up</th>
                            <th class="py-2 px-4 border-b">Telat</th>
                            <th class="py-2 px-4 border-b">Ciput</th>
                            <th class="py-2 px-4 border-b">Hijab</th>
                            <th class="py-2 px-4 border-b">Almamater</th>
                            <th class="py-2 px-4 border-b">WearPack</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswa as $data)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b text-center">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border-b">{{ $data->nama }}</td>
                            <td class="py-2 px-4 border-b">{{ $data->kelas }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->dasi_kacu ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->kaos_kaki ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->sabuk ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->nametag ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->sepatu ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->jas ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->ring ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->bros ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->makeup ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->telat ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->ciput ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->hijab ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->almamater ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $data->wearpack ? '✔' : '✘' }}</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="{{ route('siswa.edit', $data->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600" onclick="return confirm('Hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @if($siswa->isEmpty())
                        <tr>
                            <td colspan="18" class="py-2 px-4 border-b text-center text-gray-500">Tidak ada data siswa.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin.pemilu.pemilu')

@section('content1')

<div class="mt-6 px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Table Section -->
        <div class="md:col-span-2 bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Data Kelas</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">No</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Kelas</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Jumlah Siswa</th>
                            <th class="border border-gray-300 px-4 py-2 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datakelas as $item)
                        @csrf
                        <tr class="border border-gray-300">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{$loop->iteration}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->kelas }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->no_kelas }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">
                                <form action="{{ url('admin/pemilu/datakelas/'.$item->id) }}" method="POST" class="inline-block"
                                    onsubmit="return confirm('Apakah data akan dihapus?')">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Form Section -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-lg font-semibold mb-4">Form Input Data Kelas</h3>
            <form action="{{ url('admin/pemilu/datakelas') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                    <input name="kelas" type="text" id="kelas" class="mt-1 p-2 w-full border rounded-md" placeholder="Kelas">
                </div>
                <div class="mb-4">
                    <label for="no_kelas" class="block text-sm font-medium text-gray-700">Jumlah Siswa</label>
                    <input name="no_kelas" type="text" id="no_kelas" class="mt-1 p-2 w-full border rounded-md" placeholder="Jumlah Siswa">
                </div>
                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection

@extends('admin.gds.gds')

@section('content2')
<div class="p-6">
    <nav class="bg-gray-700 text-white p-4 flex justify-between items-center rounded-lg shadow-md">
        <h1 class="text-lg font-semibold">Rekap GDS</h1>
        <div class="relative">
            <input type="text" class="pl-10 pr-4 py-2 rounded-lg bg-white text-gray-700 shadow focus:ring focus:ring-blue-300" placeholder="Cari karyawan">
            <i class="bi bi-search absolute left-3 top-2 text-gray-500"></i>
        </div>
    </nav>
    
    <div class="mt-6 bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="p-4 text-left">PJ</th>
                    <th class="p-4 text-left">Hari</th>
                    <th class="p-4 text-left">Tanggal</th>
                    <th class="p-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekapgds as $rekap)
                <tr class="border-b hover:bg-gray-100 cursor-pointer">
                    <td class="p-4">{{ $rekap->pj }}</td>
                    <td class="p-4">{{ $rekap->hari }}</td>
                    <td class="p-4">{{ \Carbon\Carbon::parse($rekap->created_at)->format('d-m-Y') }}</td>
                    <td class="p-4 flex space-x-2">
                        <a href="{{ route('rekapgds.edit', $rekap->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('rekapgds.destroy', $rekap->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

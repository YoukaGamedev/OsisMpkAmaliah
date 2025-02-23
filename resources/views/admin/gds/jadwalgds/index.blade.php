@extends('admin.gds.gds')

@section('content2')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header -->
        <div class="bg-gray-800 text-white text-center py-4 flex justify-between px-6 items-center">
            <h5 class="text-xl font-semibold">Jadwal GDS</h5>
            <a href="{{ route('jadwalgds.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                + Tambah Jadwal
            </a>
        </div>

        <!-- Table -->
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr class="text-left">
                            <th class="py-3 px-4 border-b">Hari</th>
                            <th class="py-3 px-4 border-b">Minggu</th>
                            <th class="py-3 px-4 border-b">PJ</th>
                            <th class="py-3 px-4 border-b">Petugas</th>
                            <th class="py-3 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwal as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">{{ $item->hari }}</td>
                            <td class="py-3 px-4 border-b">{{ $item->Minggu }}</td>
                            <td class="py-3 px-4 border-b">{{ $item->pj }}</td>
                            <td class="py-3 px-4 border-b">
                                <ul class="list-disc list-inside">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if(!empty($item["petugas_$i"]))
                                            <li>{{ $item["petugas_$i"] }}</li>
                                        @endif
                                    @endfor
                                </ul>
                            </td>
                            <td class="py-3 px-4 border-b">
                                <div class="flex space-x-2">
                                    <a href="{{ route('jadwalgds.show', $item->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600">Lihat</a>
                                    <a href="{{ route('jadwalgds.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Edit</a>
                                    <form action="{{ route('jadwalgds.destroy', $item->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        @if($jadwal->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center py-4 text-gray-500">Tidak ada data jadwal.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

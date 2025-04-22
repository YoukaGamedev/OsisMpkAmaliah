@extends('user.gds.gds')

@section('content2')
<div class="p-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-gray-600 to-gray-700 p-4">
            <h5 class="text-white text-xl font-semibold text-center">Cari Data Siswa</h5>
        </div>

        <!-- Search Form -->
        <div class="p-6">
            <form action="{{ route('siswa.search') }}" method="GET" class="mb-4">
                <input type="text" name="nama" placeholder="Cari berdasarkan Nama" value="{{ request()->input('nama') }}" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
                <button type="submit" class="w-full mt-2 bg-green-600 text-white p-2 rounded-lg hover:bg-green-700">Cari Data</button>
            </form>

            @php
                $uniqueNames = [];
            @endphp

            @if($siswa->isEmpty())
                <div class="mt-4 p-4 bg-yellow-50 border-l-4 border-yellow-400 text-yellow-700">
                    <p class="text-center">Data tidak ditemukan. Silakan coba kata kunci lain.</p>
                </div>
            @else
                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nama</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Kelas</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @php $no = 1; @endphp
                            @foreach($siswa as $data)
                                @if(!in_array($data->nama, $uniqueNames))
                                    @php $uniqueNames[] = $data->nama; @endphp
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $no++ }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $data->nama }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $data->kelas }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                            <a href="{{ route('lembargds.edit', $data->id) }}" 
                                               class="inline-flex items-center px-3 py-1 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-md transition duration-150 ease-in-out">
                                                Tambah
                                            </a>
                                            <a href="{{ route('siswa.show', $data->id) }}" 
                                               class="inline-flex items-center px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md transition duration-150 ease-in-out">
                                                Lihat
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

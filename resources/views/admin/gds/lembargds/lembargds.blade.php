@extends('admin.gds.gds')

@section('content2')
@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-3 py-2 rounded text-sm" role="alert">
    {{ session('success') }}
</div>
@endif

@if(session('warning'))
<div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-3 py-2 rounded text-sm" role="alert">
    {{ session('warning') }}
</div>
@endif

<div class="p-4">
    <!-- Header Info -->
    <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-2">
            <h2 class="text-lg font-semibold">Detail Data</h2>
            @if($rekapgds->isNotEmpty())
            <div class="text-sm">
                <span class="inline-flex items-center gap-1">
                    <span class="font-medium">PJ:</span> {{ $rekapgds->first()->pj }}
                </span>
                <span class="mx-2">|</span>
                <span class="inline-flex items-center gap-1">
                    <span class="font-medium">Hari:</span> {{ $rekapgds->first()->hari }}
                </span>
                <span class="mx-2">|</span>
                <span class="inline-flex items-center gap-1">
                    <span class="font-medium">Tanggal:</span> {{ \Carbon\Carbon::parse($rekapgds->first()->created_at)->format('d-m-Y') }}
                </span>
            </div>
            @endif
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex gap-2 mb-4">
        <a href="{{ route('siswa.index') }}" class="inline-flex items-center px-3 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm font-medium">
            <i class="fas fa-search mr-2"></i> Cari Siswa
        </a>
        <a href="#" class="inline-flex items-center px-3 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm font-medium">
            <i class="fas fa-qrcode mr-2"></i> Scan
        </a>
    </div>

    <!-- Table Section -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <h3 class="text-lg font-semibold p-4 border-b">Siswa Yang Melanggar</h3>
        
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead class="bg-gray-800 text-white text-sm">
                    <tr>
                        <th class="px-2 py-2">No</th>
                        <th class="px-2 py-2">Nama</th>
                        <th class="px-2 py-2">Kelas</th>
                        <th class="px-2 py-2">D/K</th>
                        <th class="px-2 py-2">KK</th>
                        <th class="px-2 py-2">SB</th>
                        <th class="px-2 py-2">NT</th>
                        <th class="px-2 py-2">SP</th>
                        <th class="px-2 py-2">JS</th>
                        <th class="px-2 py-2">RG</th>
                        <th class="px-2 py-2">BR</th>
                        <th class="px-2 py-2">MU</th>
                        <th class="px-2 py-2">TL</th>
                        <th class="px-2 py-2">CP</th>
                        <th class="px-2 py-2">HJ</th>
                        <th class="px-2 py-2">AM</th>
                        <th class="px-2 py-2">WP</th>
                        <th class="px-2 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @foreach($siswas as $data)
                        @if(!$data->dasi_kacu || !$data->kaos_kaki || !$data->sabuk || !$data->nametag || !$data->sepatu || !$data->jas || !$data->ring || !$data->bros || !$data->makeup || !$data->telat || !$data->ciput || !$data->hijab || !$data->almamater || !$data->wearpack)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-2 py-2 text-center">{{ $loop->iteration }}</td>
                                <td class="px-2 py-2">{{ $data->nama }}</td>
                                <td class="px-2 py-2">{{ $data->kelas }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->dasi_kacu ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->kaos_kaki ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->sabuk ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->nametag ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->sepatu ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->jas ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->ring ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->bros ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->makeup ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->telat ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->ciput ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->hijab ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->almamater ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2 text-center">{{ $data->wearpack ? '✓' : '✗' }}</td>
                                <td class="px-2 py-2">
                                    <div class="flex gap-1">
                                        <a href="{{ route('siswa.edit', $data->id) }}" class="p-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded">
                                            <i class="fas fa-edit text-xs"></i>
                                        </a>
                                        <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-1 bg-red-500 hover:bg-red-600 text-white rounded" onclick="return confirm('Yakin ingin menghapus?')">
                                                <i class="fas fa-trash text-xs"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
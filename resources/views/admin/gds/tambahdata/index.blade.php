@extends('admin.gds.gds')

@section('content2')
<!-- Tombol Tambah Data -->
<div class="mb-4">
    <a href="{{ route('tambahdata.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
        <i class="fas fa-plus"></i> Tambah Data
    </a>
</div>

<!-- Tabel Siswa -->
<div class="bg-white rounded-lg shadow-md">
    <div class="bg-gray-800 text-white text-center py-2 rounded-t-lg">
        <h5 class="text-lg font-semibold">Daftar Siswa</h5>
    </div>
    <div class="p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-1 px-2 border-b text-sm">No</th>
                        <th class="py-1 px-2 border-b text-sm">Nama</th>
                        <th class="py-1 px-2 border-b text-sm">Kelas</th>
                        <th class="py-1 px-2 border-b text-sm">Dasi/Kacu</th>
                        <th class="py-1 px-2 border-b text-sm">Kaos Kaki</th>
                        <th class="py-1 px-2 border-b text-sm">Sabuk</th>
                        <th class="py-1 px-2 border-b text-sm">NameTag</th>
                        <th class="py-1 px-2 border-b text-sm">Sepatu</th>
                        <th class="py-1 px-2 border-b text-sm">Jas</th>
                        <th class="py-1 px-2 border-b text-sm">Ring</th>
                        <th class="py-1 px-2 border-b text-sm">Bros</th>
                        <th class="py-1 px-2 border-b text-sm">Make Up</th>
                        <th class="py-1 px-2 border-b text-sm">Telat</th>
                        <th class="py-1 px-2 border-b text-sm">Ciput</th>
                        <th class="py-1 px-2 border-b text-sm">Hijab</th>
                        <th class="py-1 px-2 border-b text-sm">Almamater</th>
                        <th class="py-1 px-2 border-b text-sm">WearPack</th>
                        <th class="py-1 px-2 border-b text-sm">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $data)
                    <tr class="hover:bg-gray-50">
                        <td class="py-1 px-2 border-b text-center text-sm">{{ $loop->iteration }}</td>
                        <td class="py-1 px-2 border-b text-sm">{{ $data->nama }}</td>
                        <td class="py-1 px-2 border-b text-sm">{{ $data->kelas }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->dasi_kacu ? '' : 'bg-red-100' }}">{{ $data->dasi_kacu ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->kaos_kaki ? '' : 'bg-red-100' }}">{{ $data->kaos_kaki ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->sabuk ? '' : 'bg-red-100' }}">{{ $data->sabuk ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->nametag ? '' : 'bg-red-100' }}">{{ $data->nametag ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->sepatu ? '' : 'bg-red-100' }}">{{ $data->sepatu ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->jas ? '' : 'bg-red-100' }}">{{ $data->jas ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->ring ? '' : 'bg-red-100' }}">{{ $data->ring ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->bros ? '' : 'bg-red-100' }}">{{ $data->bros ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->makeup ? '' : 'bg-red-100' }}">{{ $data->makeup ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->telat ? '' : 'bg-red-100' }}">{{ $data->telat ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->ciput ? '' : 'bg-red-100' }}">{{ $data->ciput ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->hijab ? '' : 'bg-red-100' }}">{{ $data->hijab ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->almamater ? '' : 'bg-red-100' }}">{{ $data->almamater ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm {{ $data->wearpack ? '' : 'bg-red-100' }}">{{ $data->wearpack ? '✔' : '✘' }}</td>
                        <td class="py-1 px-2 border-b text-center text-sm">
                            <a href="{{ route('siswa.edit', $data->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600 text-xs">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 text-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($siswa->isEmpty())
                    <tr>
                        <td colspan="18" class="py-1 px-2 border-b text-center text-sm text-gray-500">Tidak ada data siswa.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
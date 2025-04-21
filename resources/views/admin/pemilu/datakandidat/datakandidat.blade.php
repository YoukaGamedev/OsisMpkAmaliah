@extends('admin.pemilu.pemilu') 

@section('content1') 
    <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Data Kandidat</h2>
            <a href="{{ route('datakandidat.create') }}" 
               class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-200 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Tambah Data
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300 text-sm">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="border p-2 text-white">No</th>
                        <th class="border p-2 text-white">NISN</th>
                        <th class="border p-2 text-white">Nomor Paslon</th>
                        <th class="border p-2 text-white">Nama Paslon</th>
                        <th class="border p-2 text-white">Sekolah</th>
                        <th class="border p-2 text-white">Visi Misi</th>
                        <th class="border p-2 text-white">Foto</th>
                        <th class="border p-2 text-white">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kandidat as $kandi)
                    <tr class="bg-white hover:bg-gray-100">
                        <td class="border p-2 text-center">{{$loop->iteration}}</td>
                        <td class="border p-2">{{ $kandi->nisn }}</td>
                        <td class="border p-2">{{ $kandi->nomor_pasangan_calon }}</td>
                        <td class="border p-2">{{ $kandi->nama_pasangan_calon }}</td>
                        <td class="border p-2">{{ $kandi->sekolah }}</td>
                        <td class="border p-2">{{ $kandi->visi_misi }}</td>
                        <td class="border p-2 text-center">
                            @if($kandi->foto)
                                <img src="{{ asset('storage/' . $kandi->foto) }}" 
                                     class="w-12 h-12 object-cover rounded-md inline-block">
                            @endif
                        </td>
                        <td class="border p-2 text-center">
                            <div class="flex gap-2 justify-center">
                                <a href="{{ url('datakandidat/'.$kandi->id.'/edit') }}" 
                                   class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition-colors duration-200 inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                    Edit
                                </a>
                                <button onclick="confirmDelete({{ $kandi->id }})" 
                                        class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition-colors duration-200 inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                    Hapus
                                </button>
                                <form id="delete-form-{{ $kandi->id }}" action="{{ url('datakandidat/'.$kandi->id) }}" method="POST" class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection

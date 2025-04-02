@extends('admin.pemilu.pemilu')

@section('content1')
<div class="md:col-span-2 bg-white shadow-lg rounded-lg p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Data Kelas</h2>
        <a href="{{ route('datakelas.create') }}" 
           class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-colors duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            Tambah Data
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-800">
                    <th class="border border-gray-300 px-4 py-3 text-sm font-semibold text-white">No</th>
                    <th class="border border-gray-300 px-4 py-3 text-left text-sm font-semibold text-white">Kelas</th>
                    <th class="border border-gray-300 px-4 py-3 text-left text-sm font-semibold text-white">Jumlah Siswa</th>
                    <th class="border border-gray-300 px-4 py-3 text-center text-sm font-semibold text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datakelas as $item)
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="border border-gray-300 px-4 py-3 text-center text-sm">{{$loop->iteration}}</td>
                    <td class="border border-gray-300 px-4 py-3 text-sm">{{ $item->kelas }}</td>
                    <td class="border border-gray-300 px-4 py-3 text-sm">{{ $item->no_kelas }}</td>
                    <td class="border border-gray-300 px-4 py-3">
                        <div class="flex justify-center gap-2">
                            <a href="{{ route('datakelas.edit', $item->id) }}" 
                               class="inline-flex items-center px-3 py-1.5 bg-blue-500 hover:bg-blue-600 text-white rounded-md transition-colors duration-200">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                Edit
                            </a>

                            <button onclick="confirmDelete({{ $item->id }})" 
                                    class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white rounded-md transition-colors duration-200">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Hapus
                            </button>
                            <form id="delete-form-{{ $item->id }}" action="{{ url('datakelas/'.$item->id) }}" method="POST" class="hidden">
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

<!-- SweetAlert Script -->
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

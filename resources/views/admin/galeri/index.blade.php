@extends('main')

@section('content')
<div class="max-w-6xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">📷 Daftar Galeri</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4">
        <a href="{{ route('galeri.create') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
            + Tambah Galeri
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead class="bg-gray-100 text-left text-gray-700 uppercase text-sm">
                <tr>
                    <th class="py-3 px-4">Foto</th>
                    <th class="py-3 px-4">Judul</th>
                    <th class="py-3 px-4">Kategori</th>
                    <th class="py-3 px-4">Deskripsi</th>
                    <th class="py-3 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 divide-y">
                @forelse($galeri as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" class="w-24 h-auto rounded">
                        </td>
                        <td class="py-3 px-4">{{ $item->judul }}</td>
                        <td class="py-3 px-4">{{ $item->kategori }}</td>
                        <td class="py-3 px-4">{{ $item->deskripsi }}</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="{{ route('galeri.show', $item->id) }}"
                               class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white px-3 py-1 rounded text-sm shadow">
                                Detail
                            </a>
                            <a href="{{ route('galeri.edit', $item->id) }}"
                               class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm shadow">
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
                            <form id="delete-form-{{ $item->id }}" action="{{ url('galeri/'.$item->id) }}" method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">Belum ada data galeri.</td>
                    </tr>
                @endforelse
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

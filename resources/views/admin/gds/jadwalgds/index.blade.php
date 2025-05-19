@extends('admin.gds.gds')

@section('content2')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gray-800 text-white py-4 px-6 flex justify-between items-center rounded-t-xl">
            <h5 class="text-xl font-semibold flex items-center gap-2">
                <i class="fas fa-calendar-alt"></i> Jadwal GDS
            </h5>
            <a href="{{ route('jadwalgds.create') }}"
               class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-lg shadow flex items-center gap-2 transition">
                <i class="fas fa-plus-circle"></i> Tambah Jadwal
            </a>
        </div>

        <!-- Table -->
        <div class="p-6 overflow-x-auto">
            <table class="min-w-full table-auto bg-white border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4 border-b">Hari</th>
                        <th class="py-3 px-4 border-b">Minggu</th>
                        <th class="py-3 px-4 border-b">PJ</th>
                        <th class="py-3 px-4 border-b">Petugas</th>
                        <th class="py-3 px-4 border-b text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jadwal as $item)
                    <tr class="hover:bg-gray-50 text-gray-700">
                        <td class="py-3 px-4 border-b">{{ $item->hari }}</td>
                        <td class="py-3 px-4 border-b">{{ $item->Minggu }}</td>
                        <td class="py-3 px-4 border-b font-medium">{{ $item->pj }}</td>
                        <td class="py-3 px-4 border-b">
                            <ul class="list-disc list-inside space-y-1 text-sm">
                                @for($i = 1; $i <= 5; $i++)
                                    @if(!empty($item["petugas_$i"]))
                                        <li>{{ $item["petugas_$i"] }}</li>
                                    @endif
                                @endfor
                            </ul>
                        </td>
                        <td class="py-3 px-4 border-b text-center">
                            <div class="flex justify-center flex-wrap gap-2">
                                <a href="{{ route('jadwalgds.show', $item->id) }}"
                                   class=" bg-blue-500 hover:bg-blue-600 text-white px-3 py-1.5 rounded-full text-sm flex items-center gap-1 transition shadow">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <a href="{{ route('jadwalgds.edit', $item->id) }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1.5 rounded-full text-sm flex items-center gap-1 transition shadow">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button onclick="confirmDelete({{ $item->id }})"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded-full text-sm flex items-center gap-1 transition shadow">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                                <form id="delete-form-{{ $item->id }}" action="{{ url('jadwalgds/'.$item->id) }}" method="POST" class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-4 text-center text-gray-500 italic">Tidak ada data jadwal.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
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

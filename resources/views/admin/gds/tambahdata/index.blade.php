@extends('admin.gds.gds')

@section('content2')
<!-- Header dan Search Bar -->
<div class="mb-6 flex justify-between items-center">
    <h2 class="text-xl font-semibold text-gray-800">Daftar Siswa</h2>
    <div class="flex space-x-2">
        <form action="{{ route('tambahdata.index') }}" method="GET" class="flex items-center space-x-2">
    <input type="text" name="search" placeholder="Cari Nama/Kelas" value="{{ request('search') }}"
        class="border px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">


    <!-- Filter Kelas -->
    <select name="kelas" class="border px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="">Semua Kelas</option>
        @foreach($daftarKelas as $kelas)
            <option value="{{ $kelas }}" {{ request('kelas') == $kelas ? 'selected' : '' }}>{{ $kelas }}</option>
        @endforeach
    </select>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
        <i class="fas fa-search"></i> Cari
    </button>
</form>

        <a href="{{ route('tambahdata.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>
</div>

<!-- Status Message -->
                @if(session()->has('success'))
                    <div class="mt-4 p-4 bg-green-100 border border-green-200 text-green-700 rounded-lg flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('success') }}
                    </div>
                @endif

<!-- Tabel Siswa -->
<div class="bg-white rounded-xl shadow-lg overflow-hidden">
    <div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white text-center py-4 rounded-t-xl font-bold text-lg">
        Daftar Siswa
    </div>
    <div class="p-6 overflow-x-auto">
        <table class="min-w-full table-auto border border-gray-300 text-gray-700 rounded-xl overflow-hidden">
            <thead class="bg-gray-100 text-gray-800 text-sm uppercase tracking-wider">
                <tr>
                    <th class="py-3 px-4 border">No</th>
                    <th class="py-3 px-4 border">Nama</th>
                    <th class="py-3 px-4 border">Kelas</th>
                    <th class="py-3 px-4 border">Foto</th>
                    <th class="py-3 px-4 border">QR Code</th>
                    <th class="py-3 px-4 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($siswa as $data)
                <tr class="hover:bg-gray-50 transition duration-150">
                    <td class="py-3 px-4 text-center text-sm font-semibold">{{ $loop->iteration }}</td>
                    <td class="py-3 px-4 text-center">{{ $data->nama }}</td>
                    <td class="py-3 px-4 text-center">{{ $data->kelas }}</td>

                    <!-- Foto -->
                    <td class="py-3 px-4 text-center">
                        @if($data->foto)
                            <img src="{{ asset('storage/' . $data->foto) }}" alt="Foto Siswa"
                                class="w-14 h-14 object-cover rounded-full border border-gray-300 mx-auto shadow">
                        @else
                            <span class="text-gray-400 text-xs italic">Tidak ada</span>
                        @endif
                    </td>

                    <!-- QR Code + Download -->
                    <td class="py-3 px-4 text-center">
                        @if($data->qr_code)
                        <div class="flex flex-col items-center space-y-2">
                            <img src="{{ asset('storage/' . $data->qr_code) }}" alt="QR Code"
                                class="w-20 h-20 border border-gray-300 rounded shadow">
                            <a href="{{ asset('storage/' . $data->qr_code) }}" download
                                class="text-xs bg-blue-100 text-blue-600 font-semibold px-3 py-1 rounded-full hover:bg-blue-200 transition">
                                <i class="fas fa-download mr-1"></i>Download
                            </a>
                        </div>
                        @else
                            <span class="text-gray-400 text-xs italic">Tidak ada</span>
                        @endif
                    </td>

                    <!-- Aksi -->
                    <td class="py-3 px-4 text-center">
                        <div class="flex justify-center flex-wrap gap-2">
                            <a href="{{ route('tambahdata.edit', $data->id) }}"
                                class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-full text-sm shadow transition flex items-center gap-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('tambahdata.show', $data->id) }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-full text-sm shadow transition flex items-center gap-1">
                                <i class="fas fa-eye"></i> Lihat
                            </a>
                            <button onclick="confirmDelete({{ $data->id }})" 
                                    class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white rounded-md transition-colors duration-200">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Hapus
                            </button>
                            <form id="delete-form-{{ $data->id }}" action="{{ url('tambahdata/'.$data->id) }}" method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="py-4 text-center text-gray-500 italic">Tidak ada data siswa.</td>
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

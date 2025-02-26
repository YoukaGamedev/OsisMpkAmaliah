@extends('main')

@section('content')

<div class="container mx-auto mt-8 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Main Content Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Header Section -->
            <div class="bg-gray-50 border-b px-6 py-4">
                <h2 class="text-xl font-bold text-gray-800">Data Daftar User Dan Admin</h2>
            </div>

            <!-- Search Section -->
            <div class="p-6">
                <form action="{{ route('useradmin.index') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <input 
                            type="text" 
                            name="name" 
                            placeholder="Cari berdasarkan Nama..." 
                            value="{{ request()->input('name') }}" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                        >
                    </div>
                    <button type="submit" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Cari Data
                    </button>
                </form>

                <!-- Status Message -->
                @if(session()->has('status'))
                    <div class="mt-4 p-4 bg-green-100 border border-green-200 text-green-700 rounded-lg flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Add Data Button -->
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('useradmin.create') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah Data
                    </a>
                </div>

                <!-- Table Section -->
                <div class="mt-6 overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 border-b font-medium text-gray-700">No</th>
                                <th class="px-4 py-3 border-b font-medium text-gray-700">Nama</th>
                                <th class="px-4 py-3 border-b font-medium text-gray-700">Email</th>
                                <th class="px-4 py-3 border-b font-medium text-gray-700">Role</th>
                                <th class="px-4 py-3 border-b font-medium text-gray-700">Kepengurusan</th>
                                <th class="px-4 py-3 border-b font-medium text-gray-700">Sekolah</th>
                                <th class="px-4 py-3 border-b font-medium text-gray-700 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $dpt)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3">{{ $dpt->name }}</td>
                                    <td class="px-4 py-3">{{ $dpt->email }}</td>
                                    <td class="px-4 py-3">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full {{ $dpt->role === 'admin' ? 'bg-purple-100 text-purple-700' : 'bg-blue-100 text-blue-700' }}">
                                            {{ ucfirst($dpt->role) }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">{{ $dpt->kepengurusan ?? '-' }}</td>
                                    <td class="px-4 py-3">{{ $dpt->sekolah }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex justify-center gap-3">
                                            <a href="{{ route('useradmin.edit', $dpt->id) }}" 
                                               class="text-yellow-600 hover:text-yellow-800 transition">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('useradmin.destroy', $dpt->id) }}" 
                                                  method="POST" 
                                                  class="inline-block" 
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800 transition">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-6">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
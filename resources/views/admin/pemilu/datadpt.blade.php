@extends('admin.pemilu.pemilu')

@section('content1')
<div class="container mx-auto mt-8 px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Form Input -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold mb-4">Tambah DPT</h2>
            <form action="{{ route('datadpt.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                    <select id="role" name="role" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Tambah User</button>
            </form>
        </div>

        <!-- Data Table -->
        <div class="col-span-2 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold mb-4 text-center">Data DPT</h2>
            <form action="{{ route('datadpt.index') }}" method="GET" class="mb-4">
                <input type="text" name="name" placeholder="Cari berdasarkan Nama" value="{{ request()->input('name') }}" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
                <button type="submit" class="w-full mt-2 bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Cari Data</button>
            </form>
            
            @if(session()->has('status'))
                <div class="bg-green-100 text-green-700 p-2 rounded-lg mb-4">{{ session('status') }}</div>
            @endif

            <table class="w-full text-sm text-left border border-gray-300 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2 border">No</th>
                        <th class="p-2 border">Nama</th>
                        <th class="p-2 border">Email</th>
                        <th class="p-2 border">Role</th>
                        <th class="p-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $dpt)
                        <tr class="border-t">
                            <td class="p-2 border">{{ $loop->iteration }}</td>
                            <td class="p-2 border">{{ $dpt->name }}</td>
                            <td class="p-2 border">{{ $dpt->email }}</td>
                            <td class="p-2 border">{{ ucfirst($dpt->role) }}</td>
                            <td class="p-2 border text-center">
                                <a href="{{ route('datadpt.edit', $dpt->id) }}" class="text-yellow-500 hover:text-yellow-700">Edit</a>
                                <form action="{{ route('datadpt.destroy', $dpt->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah data akan dihapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-4 flex justify-center">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

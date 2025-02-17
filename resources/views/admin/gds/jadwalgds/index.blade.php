@extends('admin.gds.gds')

@section('content2')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header -->
        <div class="bg-gray-800 text-white text-center py-4">
            <h5 class="text-xl font-semibold">Jadwal Piket GDS</h5>
        </div>

        <!-- Table -->
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 border-b text-left">Hari</th>
                            <th class="py-3 px-4 border-b text-left">Jam</th>
                            <th class="py-3 px-4 border-b text-left">Kegiatan</th>
                            <th class="py-3 px-4 border-b text-left">Petugas</th>
                            <th class="py-3 px-4 border-b text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">Senin</td>
                            <td class="py-3 px-4 border-b">08:00 - 09:30</td>
                            <td class="py-3 px-4 border-b">Membersihkan Kelas</td>
                            <td class="py-3 px-4 border-b">
                                <ul class="list-disc list-inside">
                                    <li>John Doe</li>
                                    <li>Jane Smith</li>
                                    <li>Michael Brown</li>
                                    <li>Ilham Haha</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4 border-b">
                                <div class="flex space-x-2">
                                    <a href="#" class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600">Lihat</a>
                                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Edit</a>
                                    <form action="#" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">Selasa</td>
                            <td class="py-3 px-4 border-b">09:30 - 11:00</td>
                            <td class="py-3 px-4 border-b">Pengawasan Lantai</td>
                            <td class="py-3 px-4 border-b">
                                <ul class="list-disc list-inside">
                                    <li>Sarah Lee</li>
                                    <li>Chris Evans</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4 border-b">
                                <div class="flex space-x-2">
                                    <a href="#" class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600">Lihat</a>
                                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Edit</a>
                                    <form action="#" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">Rabu</td>
                            <td class="py-3 px-4 border-b">11:00 - 12:30</td>
                            <td class="py-3 px-4 border-b">Membersihkan Taman</td>
                            <td class="py-3 px-4 border-b">
                                <ul class="list-disc list-inside">
                                    <li>Mark Johnson</li>
                                    <li>Emily Davis</li>
                                    <li>Anna Clark</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4 border-b">
                                <div class="flex space-x-2">
                                    <a href="#" class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600">Lihat</a>
                                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">Edit</a>
                                    <form action="#" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
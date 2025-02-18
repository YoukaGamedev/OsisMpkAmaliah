@extends('admin.pemilu.pemilu')

@section('content1')
<div class="mt-4 p-6 space-y-6">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gray-800 text-white py-4 px-6 text-center text-xl font-semibold">
            HASIL PEROLEHAN SUARA
        </div>
        <div class="p-6">
            <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">No Urut</th>
                        <th class="border border-gray-300 px-4 py-2">Foto</th>
                        <th class="border border-gray-300 px-4 py-2">Nama Kandidat</th>
                        <th class="border border-gray-300 px-4 py-2">Jumlah Suara</th>
                        <th class="border border-gray-300 px-4 py-2">Persentase</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hasilpemilihan as $hasil)
                    <tr class="odd:bg-gray-100 even:bg-white hover:bg-gray-50 transition-colors duration-150">
                        <td class="border border-gray-300 px-4 py-3 text-center font-semibold">
                            {{ $hasil->kandidat->nomor_pasangan_calon }}
                        </td>
                        <td class="border border-gray-300 px-4 py-3 text-center">
                            <img src="{{ asset('storage/' . $hasil->kandidat->foto) }}" class="w-16 h-16 object-cover rounded-full">
                        </td>
                        <td class="border border-gray-300 px-4 py-3">
                            <div class="font-medium">{{ $hasil->kandidat->nama_pasangan_calon }}</div>
                        </td>
                        <td class="border border-gray-300 px-4 py-3 text-center font-semibold text-blue-600">
                            {{ $hasil->jumlah_suara }}
                        </td>
                        <td class="border border-gray-300 px-4 py-3 text-center">
                            <div class="inline-flex items-center">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2" style="width: 100px;">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $hasil->persentase }}%"></div>
                                </div>
                                <span class="text-sm font-medium">{{ number_format($hasil->persentase, 1) }}%</span>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

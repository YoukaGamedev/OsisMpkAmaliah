@extends('admin.pemilu.pemilu')

@section('content1')
<div class="mt-4 p-6 space-y-6">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-gray-800 to-gray-900 text-white py-4 px-6 text-center text-xl font-semibold">
            HASIL PEROLEHAN SUARA
        </div>
        <div class="p-6">
            <!-- Chart Overview Section -->
            <div class="mb-8 p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 text-center">Persentase Suara</h3>
                <div class="space-y-4">
                    @foreach($hasilpemilihan as $hasil)
                    <div class="bg-white rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                    {{ $hasil->kandidat->nomor_pasangan_calon }}
                                </div>
                                <span class="font-medium text-gray-800">{{ $hasil->kandidat->nama_pasangan_calon }}</span>
                            </div>
                            <div class="text-right">
                                <div class="text-xl font-bold text-blue-600">{{ number_format($hasil->persentase, 1) }}%</div>
                                <div class="text-sm text-gray-500">{{ number_format($hasil->jumlah_suara) }} suara</div>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000 ease-out shadow-sm" 
                                 style="width: {{ $hasil->persentase }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Detailed Table -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                <div class="bg-gray-50 px-6 py-3">
                    <h3 class="text-lg font-semibold text-gray-800">Detail Hasil Pemilihan</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No Urut</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Kandidat</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Suara</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visualisasi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($hasilpemilihan as $hasil)
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-full flex items-center justify-center text-lg font-bold shadow-md">
                                        {{ $hasil->kandidat->nomor_pasangan_calon }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <img src="{{ asset('storage/' . $hasil->kandidat->foto) }}" 
                                         class="w-16 h-16 object-cover rounded-full border-4 border-white shadow-lg">
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-lg font-semibold text-gray-900">
                                        {{ $hasil->kandidat->nama_pasangan_calon }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-2xl font-bold text-blue-600">
                                        {{ number_format($hasil->jumlah_suara) }}
                                    </div>
                                    <div class="text-sm text-gray-500">suara</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between mb-1">
                                                <span class="text-sm font-medium text-gray-700">Persentase</span>
                                                <span class="text-lg font-bold text-blue-600">{{ number_format($hasil->persentase, 1) }}%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden">
                                                <div class="bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 h-4 rounded-full transition-all duration-1000 ease-out shadow-inner relative" 
                                                     style="width: {{ $hasil->persentase }}%">
                                                    <div class="absolute inset-0 bg-gradient-to-t from-transparent to-white opacity-30 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-16 h-16 relative">
                                            <!-- Mini Circular Progress -->
                                            <div class="w-16 h-16 rounded-full border-4 border-gray-200 relative overflow-hidden">
                                                <div class="absolute inset-0 rounded-full border-4 border-blue-500 transform -rotate-90 origin-center"
                                                     style="clip-path: polygon(50% 0%, 100% 0%, 100% 50%, 50% 50%); 
                                                            transform: rotate({{ ($hasil->persentase * 3.6) - 90 }}deg);"></div>
                                                <div class="absolute inset-2 bg-white rounded-full flex items-center justify-center">
                                                    <span class="text-xs font-bold text-blue-600">{{ number_format($hasil->persentase, 0) }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes slideIn {
    from {
        width: 0%;
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.bg-gradient-to-r.from-blue-400.via-blue-500.to-blue-600 {
    animation: slideIn 2s ease-out;
}
</style>
@endsection
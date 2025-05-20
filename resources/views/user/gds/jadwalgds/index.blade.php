@extends('user.gds.gds')

@section('content2')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-gray-700 to-gray-800 text-white text-center py-5 px-6 rounded-t-2xl">
            <h5 class="text-2xl font-bold tracking-wide">Jadwal GDS</h5>
        </div>

        <!-- Table -->
        <div class="p-6">
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-sm font-semibold tracking-wider">
                        <tr>
                            <th class="py-3 px-6 text-left">Hari</th>
                            <th class="py-3 px-6 text-left">Minggu</th>
                            <th class="py-3 px-6 text-left">PJ</th>
                            <th class="py-3 px-6 text-left">Petugas</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm divide-y divide-gray-100">
                        @forelse($jadwal as $item)
                        <tr class="hover:bg-gray-50 even:bg-gray-50/50">
                            <td class="py-3 px-6">{{ $item->hari }}</td>
                            <td class="py-3 px-6">{{ $item->Minggu }}</td>
                            <td class="py-3 px-6 font-semibold text-indigo-700">{{ $item->pj }}</td>
                            <td class="py-3 px-6">
                                <ul class="space-y-1 list-none">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if(!empty($item["petugas_$i"]))
                                            <li class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span>{{ $item["petugas_$i"] }}</span>
                                            </li>
                                        @endif
                                    @endfor
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-6 text-gray-500">Tidak ada data jadwal.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

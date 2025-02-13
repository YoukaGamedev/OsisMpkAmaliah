@extends('admin.pemilu.pemilu')

@section('content1')
<div class="mt-4 p-6">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gray-800 text-white py-4 px-6 text-center text-xl font-semibold">
            HASIL PEROLEHAN SUARA
        </div>
        <div class="p-6">
            <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Jenis Data</th>
                        <th class="border border-gray-300 px-4 py-2">Angka</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-gray-100 even:bg-white">
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">JUMLAH TOTAL DPT</td>
                        <td class="border border-gray-300 px-4 py-2 text-center font-semibold text-blue-600">0</td>
                    </tr>
                    <tr class="odd:bg-gray-100 even:bg-white">
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">JUMLAH DPT MEMILIH</td>
                        <td class="border border-gray-300 px-4 py-2 text-center font-semibold text-green-600">0</td>
                    </tr>
                    <tr class="odd:bg-gray-100 even:bg-white">
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">JUMLAH DPT TIDAK MEMILIH</td>
                        <td class="border border-gray-300 px-4 py-2 text-center font-semibold text-red-600">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
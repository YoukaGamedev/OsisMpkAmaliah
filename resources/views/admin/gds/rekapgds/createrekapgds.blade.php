@extends('admin.gds.gds')

@section('content2')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-2xl mx-auto px-4">
        <!-- Main Card -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-gray-600 to-gray-700 p-6">
                <h2 class="text-2xl font-semibold text-white text-center">
                    Tambah Rekap GDS
                </h2>
            </div>

            <!-- Form Section -->
            <div class="p-6">
                <form action="{{ route('rekapgds.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- PJ Input -->
                    <div class="space-y-2">
                        <label for="pj" class="block text-sm font-medium text-gray-700">
                            PJ (Penanggung Jawab)
                        </label>
                        <input 
                            type="text" 
                            id="pj" 
                            name="pj" 
                            placeholder="Masukkan nama PJ"
                            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition duration-150 ease-in-out"
                            required
                        >
                    </div>

                    <!-- Hari Input -->
                    <div class="space-y-2">
                        <label for="hari" class="block text-sm font-medium text-gray-700">
                            Hari
                        </label>
                        <input 
                            type="text" 
                            id="hari" 
                            name="hari" 
                            placeholder="Masukkan hari"
                            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition duration-150 ease-in-out"
                            required
                        >
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end space-x-3 pt-4">
                        <a 
                            href="{{ route('rekapgds.index') }}" 
                            class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-medium rounded-lg transition duration-150 ease-in-out"
                        >
                            Batal
                        </a>
                        <button 
                            type="submit" 
                            class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition duration-150 ease-in-out"
                        >
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="bg-gray-800 text-white py-6">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col items-center justify-center space-y-2">
            <p class="text-sm text-gray-300">
                &copy; {{ date('Y') }} Rekap GDS. All rights reserved.
            </p>
            <p class="text-xs text-gray-400">
                Sistem Pencatatan Kedisiplinan Siswa
            </p>
        </div>
    </div>
</footer>
@endsection
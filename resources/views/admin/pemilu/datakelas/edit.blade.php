@extends('admin.pemilu.pemilu')

@section('content1')
<div class="max-w-2xl mx-auto">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Header Section -->
        <div class="bg-gray-50 border-b border-gray-100 px-6 py-4 flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">Form Edit Data Kelas</h3>
            <a href="{{ route('datakelas.index') }}" 
               class="inline-flex items-center text-gray-600 hover:text-gray-800 transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali
            </a>
        </div>

        <!-- Form Section -->
        <div class="p-6">
            <form action="{{ route('datakelas.update', $kelas->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <!-- Kelas Field -->
                <div class="form-group">
                    <label for="kelas" class="block text-sm font-medium text-gray-700 mb-1">
                        Kelas <span class="text-red-500">*</span>
                    </label>
                    <input name="kelas" 
                           type="text" 
                           id="kelas" 
                           class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('kelas') border-red-500 @enderror" 
                           placeholder="Masukkan nama kelas"
                           value="{{ old('kelas', $kelas->kelas) }}"
                           required>
                    @error('kelas')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-sm text-gray-500">Contoh: X IPA 1, XI IPS 2, XII MIPA 3</p>
                </div>

                <!-- Jumlah Siswa Field -->
                <div class="form-group">
                    <label for="no_kelas" class="block text-sm font-medium text-gray-700 mb-1">
                        Jumlah Siswa <span class="text-red-500">*</span>
                    </label>
                    <input name="no_kelas" 
                           type="number" 
                           id="no_kelas" 
                           class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('no_kelas') border-red-500 @enderror" 
                           placeholder="Masukkan jumlah siswa"
                           value="{{ old('no_kelas', $kelas->no_kelas) }}"
                           min="1"
                           required>
                    @error('no_kelas')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-end space-x-4 pt-4">
                    <button type="reset" 
                            class="px-4 py-2 bg-red-500 border border-gray-300 rounded-lg text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-colors duration-200">
                        Reset
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200">
                        Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>

<!-- Success Alert -->
@if(session('success'))
<div class="fixed bottom-4 right-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow-lg" 
     role="alert">
    <p class="font-medium">Sukses!</p>
    <p>{{ session('success') }}</p>
</div>
@endif
@endsection
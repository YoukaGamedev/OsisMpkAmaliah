@extends('admin.pemilu.pemilu')

@section('content1')
<div class="max-w-4xl mx-auto">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Tambah Kandidat Calon Pemilihan</h2>
            <a href="{{ route('datakandidat.index') }}" 
               class="flex items-center text-gray-600 hover:text-gray-800 transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali
            </a>
        </div>

        <!-- Helpful Tips Card -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg mb-6">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="text-lg font-semibold text-blue-800">Tips Pengisian Form</h3>
            </div>
            <ul class="mt-2 text-sm text-gray-700 list-disc list-inside">
                <li>Pastikan semua field yang ditandai dengan <span class="text-red-500">*</span> diisi.</li>
                <li>NISN harus berupa angka dan unik (tidak boleh sama dengan kandidat lain).</li>
                <li>Nomor pasangan calon harus berupa angka dan unik.</li>
                <li>Foto harus dalam format PNG, JPG, atau JPEG dengan ukuran maksimal 2MB.</li>
                <li>Visi dan misi harus jelas dan deskriptif.</li>
            </ul>
        </div>

        <!-- Form Section -->
        <form action="{{ route('datakandidat.store') }}" 
              method="POST" 
              enctype="multipart/form-data" 
              class="space-y-6">
            @csrf
            
            <!-- NISN Field -->
            <div class="form-group">
                <label for="nisn" class="block text-sm font-medium text-gray-700 mb-1">NISN <span class="text-red-500">*</span></label>
                <input name="nisn" 
                       type="text" 
                       id="nisn" 
                       class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('nisn') border-red-500 @enderror" 
                       placeholder="Masukkan NISN"
                       value="{{ old('nisn') }}"
                       required>
                @error('nisn')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Nomor Pasangan Field -->
            <div class="form-group">
                <label for="nomorPasangan" class="block text-sm font-medium text-gray-700 mb-1">Nomor Pasangan Calon <span class="text-red-500">*</span></label>
                <input name="nomor_pasangan_calon" 
                       type="text" 
                       id="nomorPasangan" 
                       class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('nomor_pasangan_calon') border-red-500 @enderror" 
                       placeholder="Masukkan Nomor Pasangan Calon"
                       value="{{ old('nomor_pasangan_calon') }}"
                       required>
                @error('nomor_pasangan_calon')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Nama Pasangan Field -->
            <div class="form-group">
                <label for="namaPasangan" class="block text-sm font-medium text-gray-700 mb-1">Nama Pasangan Calon <span class="text-red-500">*</span></label>
                <input name="nama_pasangan_calon" 
                       type="text" 
                       id="namaPasangan" 
                       class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('nama_pasangan_calon') border-red-500 @enderror" 
                       placeholder="Masukkan Nama Pasangan Calon"
                       value="{{ old('nama_pasangan_calon') }}"
                       required>
                @error('nama_pasangan_calon')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Sekolah Field -->
            <div class="form-group">
    <label for="sekolah" class="block text-sm font-medium text-gray-700 mb-1">
        Sekolah <span class="text-red-500">*</span>
    </label>
    <select name="sekolah" 
            id="sekolah" 
            class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('sekolah') border-red-500 @enderror"
            required>
        <option value="" disabled {{ old('sekolah') ? '' : 'selected' }}>Pilih Sekolah</option>
        <option value="A1" {{ old('sekolah') == 'A1' ? 'selected' : '' }}>A1</option>
        <option value="A2" {{ old('sekolah') == 'A2' ? 'selected' : '' }}>A2</option>
    </select>
    @error('sekolah')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>


            <!-- Visi Misi Field -->
            <div class="form-group">
                <label for="visiMisi" class="block text-sm font-medium text-gray-700 mb-1">Visi Misi <span class="text-red-500">*</span></label>
                <textarea name="visi_misi" 
                          id="visiMisi" 
                          class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('visi_misi') border-red-500 @enderror" 
                          rows="6" 
                          placeholder="Masukkan Visi dan Misi"
                          required>{{ old('visi_misi') }}</textarea>
                @error('visi_misi')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Foto Field -->
            <div class="form-group">
                <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto <span class="text-red-500">*</span></label>
                <div class="mt-1 flex items-center">
                    <div class="w-full">
                        <div class="flex items-center justify-center w-full">
                            <label for="foto" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 @error('foto') border-red-500 @enderror">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Klik untuk upload</span> atau drag and drop</p>
                                    <p class="text-xs text-gray-500">PNG, JPG atau JPEG (MAX. 2MB)</p>
                                </div>
                                <input name="foto" 
                                       type="file" 
                                       id="foto" 
                                       class="hidden" 
                                       accept="image/*"
                                       onchange="previewImage(event)"
                                       required>
                            </label>
                        </div>
                        <img id="preview" class="mt-4 max-w-xs mx-auto rounded-lg shadow-md hidden" alt="Preview foto"/>
                    </div>
                </div>
                @error('foto')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Buttons -->
            <div class="flex items-center justify-end space-x-4 mt-8">
                <button type="reset" 
                        class="px-6 py-2.5 bg-red-500 border border-gray-300 rounded-lg text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-colors duration-200">
                    Reset
                </button>
                <button type="submit" 
                        class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('preview');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.classList.add('hidden');
        }
    }
</script>
@endsection
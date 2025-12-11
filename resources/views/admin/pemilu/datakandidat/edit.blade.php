@extends('admin.pemilu.pemilu')

@section('content1')
<div class="max-w-4xl mx-auto">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Edit Kandidat Calon Pemilihan</h2>
            <a href="{{ route('datakandidat.index') }}" 
               class="flex items-center text-gray-600 hover:text-gray-800 transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali
            </a>
        </div>

        <!-- Form Section -->
        <form action="{{ route('datakandidat.update', $kandidat->id) }}" 
              method="POST" 
              enctype="multipart/form-data" 
              class="space-y-6">
            @csrf
            @method('PUT')
            
            <!-- NISN Field -->
            <div class="form-group">
                <label for="nisn" class="block text-sm font-medium text-gray-700 mb-1">NISN <span class="text-red-500">*</span></label>
                <input name="nisn" 
                       type="text" 
                       id="nisn" 
                       class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('nisn') border-red-500 @enderror" 
                       value="{{ old('nisn', $kandidat->nisn) }}"
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
                       value="{{ old('nomor_pasangan_calon', $kandidat->nomor_pasangan_calon) }}"
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
                       value="{{ old('nama_pasangan_calon', $kandidat->nama_pasangan_calon) }}"
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
                    <option value="" disabled {{ old('sekolah', $kandidat->sekolah) ? '' : 'selected' }}>Pilih Sekolah</option>
                    <option value="A1" {{ old('sekolah', $kandidat->sekolah) == 'A1' ? 'selected' : '' }}>A1</option>
                    <option value="A2" {{ old('sekolah', $kandidat->sekolah) == 'A2' ? 'selected' : '' }}>A2</option>
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
                          rows="6" required>{{ old('visi_misi', $kandidat->visi_misi) }}</textarea>
                @error('visi_misi')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Foto Field -->
            <div class="form-group">
                <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto</label>
                <div class="mt-1 flex items-center">
                    <input name="foto" type="file" id="foto" accept="image/*" onchange="previewImage(event)">
                    <img id="preview" class="mt-4 max-w-xs mx-auto rounded-lg shadow-md" src="{{ asset('storage/' . $kandidat->foto) }}" alt="Preview foto" />
                </div>
                @error('foto')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Buttons -->
            <div class="flex items-center justify-end space-x-4 mt-8">
                <button type="submit" 
                        class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200">
                    Update Data
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
        }
    }
</script>
@endsection

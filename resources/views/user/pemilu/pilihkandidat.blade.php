@extends('main')

@section('content')

<div class="min-h-screen bg-gray-100 flex flex-col items-center py-12 px-4 sm:px-6 lg:px-8">
    <h3 class="text-3xl font-bold text-gray-800 mb-10 text-center animate-fade-in">
        📢 DAFTAR CALON KANDIDAT KETUA & WAKIL OSIS
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl justify-center">
        @foreach ($kandidat as $kandi)
        <div class="bg-white shadow-2xl rounded-2xl p-6 flex flex-col items-center transition-all transform hover:scale-105 hover:shadow-3xl animate-slide-up 
                    @if($loop->index == floor(count($kandidat) / 2)) scale-110 @endif">
            
            <!-- Nomor Paslon -->
            <div class="text-4xl font-extrabold text-blue-600 my-3 bg-blue-200 px-5 py-2 rounded-full shadow-md text-center">
                {{ $kandi->nomor_pasangan_calon }}
            </div>

            <!-- Foto Kandidat lebih besar di tengah -->
            <img class="w-full h-96 object-cover rounded-xl border-4 border-gray-300 shadow-lg mb-6 
                        @if($loop->index == floor(count($kandidat) / 2)) w-full h-[450px] border-8 border-blue-400 @endif" 
                 src="{{ $kandi->foto ? asset('storage/' . $kandi->foto) : 'https://via.placeholder.com/600x400' }}" 
                 alt="Paslon {{ $kandi->nomor_pasangan_calon }}">

            <h5 class="text-lg font-semibold text-gray-800">Calon Ketua & Wakil Osis</h5>
            <p class="text-gray-600 text-center text-sm">{{ $kandi->nama_pasangan_calon }}</p>
            
            <!-- Tombol untuk menampilkan Visi Misi -->
            <button class="mt-4 px-5 py-2 bg-blue-500 text-white text-sm rounded-lg shadow-lg hover:bg-blue-700 hover:scale-105 transform transition-all duration-300"
                    onclick="toggleVisiMisi(this)">
                📜 Tampilkan Visi Misi
            </button>
            
            <!-- Kotak Visi Misi -->
            <div class="hidden mt-3 p-4 bg-gray-100 rounded-lg text-gray-700 text-center shadow-inner border-l-4 border-blue-500 text-sm leading-relaxed">
                {{ $kandi->visi_misi }}
            </div>

            <!-- Form untuk memilih kandidat -->
            <form action="{{ route('vote.store') }}" method="POST" class="w-full mt-4">
                @csrf
                <input type="hidden" name="kandidat_id" value="{{ $kandi->id }}">
                <button type="submit" class="w-full px-5 py-3 bg-green-500 text-white font-semibold text-sm rounded-lg shadow-lg hover:bg-green-700 hover:scale-105 transform transition-all duration-300">
                    ✅ Pilih Pasangan No {{ $kandi->nomor_pasangan_calon }}
                </button>
            </form>

        </div>
        @endforeach
    </div>
</div>

<!-- Animasi dan Script -->
<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slideUp {
        from { transform: translateY(30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    .animate-fade-in { animation: fadeIn 1s ease-out; }
    .animate-slide-up { animation: slideUp 0.8s ease-out; }
</style>

<script>
    function toggleVisiMisi(button) {
        const visiMisiDiv = button.nextElementSibling;
        visiMisiDiv.classList.toggle("hidden");
        button.textContent = visiMisiDiv.classList.contains("hidden") ? "📜 Tampilkan Visi Misi" : "🔽 Sembunyikan Visi Misi";
    }
</script>

@endsection

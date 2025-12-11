@extends('main')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12 px-4 sm:px-6 lg:px-8">
    
    <!-- Header Section -->
    <!-- <div class="max-w-7xl mx-auto mb-12 text-center">
        <div class="inline-block animate-bounce-slow mb-4">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full shadow-2xl">
                <span class="text-2xl">🗳️</span>
            </div>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-4 animate-fade-in">
            PEMILIHAN KETUA & WAKIL OSIS
        </h1>
        <p class="text-gray-600 text-lg animate-fade-in-delay">Pilih pemimpin masa depan dengan bijak</p>
        <div class="mt-6 flex items-center justify-center gap-2 text-sm text-gray-500">
            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
            <span>Pemilihan sedang berlangsung</span>
        </div>
    </div> -->

    {{-- Notifikasi --}}
    @if (session('success'))
        <div class="mb-8 max-w-2xl mx-auto bg-green-50 border-l-4 border-green-500 text-green-800 px-6 py-4 rounded-r-xl shadow-lg animate-slide-down flex items-center gap-3">
            <span class="text-2xl">✅</span>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    @if (session('error'))
        <div class="mb-8 max-w-2xl mx-auto bg-red-50 border-l-4 border-red-500 text-red-800 px-6 py-4 rounded-r-xl shadow-lg animate-slide-down flex items-center gap-3">
            <span class="text-2xl">⚠️</span>
            <span class="font-medium">{{ session('error') }}</span>
        </div>
    @endif

    <!-- Cards Grid -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 px-4 justify-items-center" id="kandidat-grid">
    @php
        $user = auth()->user();
        $delay = 0;

        $hideSekolah = session('hide_sekolah');

        // Ambil kandidat yang sudah user pilih (jika ada)
        $kandidatDipilih = $user->vote->kandidat_id ?? null;
    @endphp


    
    @foreach ($kandidat as $kandi)

        {{-- Jika sekolah kandidat sama dengan sekolah yang sudah dipilih → hide --}}
        @if ($hideSekolah && $kandi->sekolah == $hideSekolah)
            @continue
        @endif

        {{-- Filter sekolah untuk user siswa/guru --}}
        @if ($user->sekolah == $kandi->sekolah || $user->sekolah == 'Guru')
            <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up" 
                 style="animation-delay: {{ $delay * 0.1 }}s">
                
                <!-- Nomor Paslon Badge -->
                <div class="absolute top-4 left-4 z-10">
                    <div class="bg-gradient-to-br from-blue-600 to-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg transform group-hover:rotate-12 transition-transform duration-300">
                        <span class="text-2xl font-bold">{{ $kandi->nomor_pasangan_calon }}</span>
                    </div>
                </div>

                <!-- Foto dengan Overlay -->
                <div class="relative overflow-hidden h-72">
                    <img class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" 
                         src="{{ $kandi->foto ? asset('storage/' . $kandi->foto) : 'https://via.placeholder.com/500x400' }}" 
                         alt="Paslon {{ $kandi->nomor_pasangan_calon }}">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Hover Info -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                        <p class="text-sm font-medium">Calon Ketua & Wakil OSIS</p>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-2">
                        {{ $kandi->nama_pasangan_calon }}
                    </h3>

                    <!-- Tambahan: Status Sekolah -->
                    <div class="flex items-center gap-2 text-indigo-600 mb-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a1 1 0 01.894.553l7 14A1 1 0 0117 18H3a1 1 0 01-.894-1.447l7-14A1 1 0 0110 2zM10 4.618L4.618 16h10.764L10 4.618zM9 14a1 1 0 102 0 1 1 0 00-2 0z" />
                        </svg>
                        <span class="text-sm font-semibold uppercase">SEKOLAH: {{ $kandi->sekolah }}</span>
                    </div>

                    <div class="flex items-center gap-2 text-gray-600 mb-4">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                        </svg>
                        <span class="text-sm">Ketua & Wakil OSIS</span>
                    </div>

                    <!-- Visi Misi Toggle -->
                    <button onclick="toggleVisiMisi(this)" 
                            class="w-full mb-4 px-4 py-2 bg-blue-300 hover:bg-blue-400 text-grays-700 text-sm font-medium rounded-lg transition-all duration-300 flex items-center justify-center gap-2 group/btn">
                        <svg class="w-4 h-4 transform group-hover/btn:rotate-180 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                        <span>Lihat Visi & Misi</span>
                    </button>

                    <!-- Visi Misi Content -->
                    <div class="hidden mb-4 p-4 bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg border-l-4 border-blue-500 transform origin-top transition-all duration-300 visi-misi">
                        <p class="text-sm text-gray-700 leading-relaxed">{{ $kandi->visi_misi }}</p>
                    </div>

                    <!-- Tombol Pilih -->
                    <form action="{{ route('vote.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="kandidat_id" value="{{ $kandi->id }}">
                        <button type="submit" 
                                class="w-full px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2 group/vote">
                            <svg class="w-5 h-5 transform group-hover/vote:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>PILIH PASLON {{ $kandi->nomor_pasangan_calon }}</span>
                        </button>
                    </form>
                </div>

                <!-- Decorative Corner -->
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-purple-400/20 to-transparent rounded-bl-full"></div>
            </div>
            @php $delay++; @endphp
        @endif
    @endforeach
    </div>

    <!-- Footer Info -->
    <div class="max-w-4xl mx-auto mt-16 text-center">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4">📋 Petunjuk Pemilihan</h3>
            <div class="grid md:grid-cols-3 gap-6 text-sm text-gray-600">
                <div class="flex flex-col items-center gap-2">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">1️⃣</span>
                    </div>
                    <p class="font-medium">Baca visi & misi setiap kandidat</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">2️⃣</span>
                    </div>
                    <p class="font-medium">Pilih kandidat terbaik</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">3️⃣</span>
                    </div>
                    <p class="font-medium">Klik tombol PILIH untuk vote</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes bounceSlow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-fade-in {
        animation: fadeIn 0.8s ease-out;
    }
    
    .animate-fade-in-delay {
        animation: fadeIn 0.8s ease-out 0.2s both;
    }
    
    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out both;
    }
    
    .animate-slide-down {
        animation: slideDown 0.5s ease-out;
    }
    
    .animate-bounce-slow {
        animation: bounceSlow 2s ease-in-out infinite;
    }
    
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<!-- Script -->
<script>
    function toggleVisiMisi(button) {
        const visiMisiDiv = button.nextElementSibling;
        const isHidden = visiMisiDiv.classList.contains('hidden');
        
        if (isHidden) {
            visiMisiDiv.classList.remove('hidden');
            setTimeout(() => {
                visiMisiDiv.style.maxHeight = visiMisiDiv.scrollHeight + 'px';
            }, 10);
            button.querySelector('span').textContent = 'Sembunyikan Visi & Misi';
        } else {
            visiMisiDiv.style.maxHeight = '0';
            setTimeout(() => {
                visiMisiDiv.classList.add('hidden');
            }, 300);
            button.querySelector('span').textContent = 'Lihat Visi & Misi';
        }
    }
    
    // Smooth scroll animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.group');
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });
    });
</script>

@endsection
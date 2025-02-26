@extends('main')

@section('content')

<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-4">
    
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-2xl w-full text-center animate-fade-in">
        
        <!-- Tombol Kembali -->
        <div class="mb-6 text-left">
            <a href="{{ url('/user') }}" 
               class="inline-flex items-center px-5 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali
            </a>
        </div>

        @foreach ($dashboard as $dash)
            @csrf 
            <h1 class="text-3xl font-bold text-gray-800 mb-4 animate-slide-up">
                Selamat Datang di Pemilu Tahun {{ $dash->tahun_pelajaran }}
            </h1>

            <div class="mb-6">
                <h4 class="text-xl text-blue-600 font-semibold mb-2 animate-slide-up delay-100">Identitas Lembaga</h4>
                <p class="text-gray-600 text-lg leading-relaxed animate-fade-in delay-200">
                    <strong class="text-gray-800">{{ $dash->nama_sekolah }}</strong> - Kepala Sekolah <strong>{{ $dash->nama_kepsek }}</strong> <br>
                    <span class="text-gray-500">
                        Alamat: {{ $dash->alamat_jalan }}, {{ $dash->desa }}, {{ $dash->kecamatan }}, {{ $dash->kota }}
                    </span> <br>
                    <span class="text-gray-700 font-medium">Pemilu dilaksanakan pada tanggal {{ $dash->tanggal }}</span>
                </p>
            </div>
        @endforeach

        <!-- Tombol Pilih Kandidat -->
        <a href="{{ url('/user/pemilu/pilihkandidat') }}" 
           class="bg-blue-600 text-white py-3 px-6 rounded-lg text-lg font-semibold shadow-md hover:bg-blue-700 hover:scale-105 transform transition duration-300 animate-bounce-in">
            Pilih Kandidat
        </a>

    </div>
</div>

<!-- Tailwind Animations -->
<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes bounceIn {
        0% { transform: scale(0.8); opacity: 0; }
        60% { transform: scale(1.1); opacity: 1; }
        100% { transform: scale(1); }
    }

    .animate-fade-in { animation: fadeIn 0.8s ease-out; }
    .animate-slide-up { animation: slideUp 0.8s ease-out; }
    .animate-bounce-in { animation: bounceIn 0.8s ease-out; }
</style>

@endsection

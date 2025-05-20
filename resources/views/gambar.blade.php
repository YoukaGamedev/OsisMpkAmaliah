@extends('footer')

@section('content')
<div class="bg-gradient-to-br from-blue-50 via-blue-100 to-blue-900 min-h-screen">
    <!-- Header -->
    <div class="bg-blue-900/90 backdrop-blur-sm border-b border-blue-700/50">
        <div class="container mx-auto px-4 py-6">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-200 to-white bg-clip-text text-transparent">
                    Galeri OSIS Dan MPK
                </h1>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-10">
        <!-- Stats bar -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
            <div class="bg-blue-800/60 backdrop-blur-sm rounded-lg p-4 border border-blue-600/40 shadow-lg">
                <div class="text-2xl font-bold text-blue-100">{{ $galeri->count() }}</div>
                <div class="text-sm text-blue-200">Total Images</div>
            </div>
            <div class="bg-blue-800/60 backdrop-blur-sm rounded-lg p-4 border border-blue-600/40 shadow-lg">
                <div class="text-2xl font-bold text-blue-100">{{ $galeri->groupBy('kategori')->count() }}</div>
                <div class="text-sm text-blue-200">Categories</div>
            </div>
            <div class="bg-blue-800/60 backdrop-blur-sm rounded-lg p-4 border border-blue-600/40 shadow-lg">
                <div class="text-2xl font-bold text-blue-100">100%</div>
                <div class="text-sm text-blue-200">Quality</div>
            </div>
        </div>

        <!-- Gallery -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($galeri as $item)
            <div class="group bg-blue-800/50 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-600/30 hover:border-blue-400/60 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-600/30 hover:transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-blue-800/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-blue-600/90 text-white px-3 py-1 rounded-full text-xs font-semibold border border-blue-400/50">
                        {{ $loop->iteration }}
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-50 mb-2 group-hover:text-white transition-colors">{{ $item->judul }}</h3>
                    <p class="text-blue-200 text-sm mb-3 group-hover:text-blue-100 transition-colors">{{ Str::limit($item->deskripsi, 80) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-blue-700/70 text-blue-100 px-3 py-1 rounded-full border border-blue-500/50">{{ $item->kategori }}</span>
                        <!-- <a href="{{ route('galeri.show', $item->id) }}" class="text-blue-300 hover:text-blue-100 transition-colors duration-300 p-2 rounded-full hover:bg-blue-700/50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </a> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
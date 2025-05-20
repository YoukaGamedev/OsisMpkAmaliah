    <script src="https://cdn.tailwindcss.com"></script>
<div class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 text-white min-h-screen">

    <!-- Header -->
    <div class="bg-blue-950/50 backdrop-blur-sm border-b border-blue-800/30">
        <div class="container mx-auto px-4 py-6">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">
                    Galeri OSIS Dan MPK
                </h1>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-10">
        <!-- Stats bar (optional, bisa dinamis juga) -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
            <div class="bg-blue-900/40 backdrop-blur-sm rounded-lg p-4 border border-blue-800/30">
                <div class="text-2xl font-bold text-blue-300">{{ $galeri->count() }}</div>
                <div class="text-sm text-blue-200">Total Images</div>
            </div>
            <div class="bg-blue-900/40 backdrop-blur-sm rounded-lg p-4 border border-blue-800/30">
                <div class="text-2xl font-bold text-cyan-300">{{ $galeri->groupBy('kategori')->count() }}</div>
                <div class="text-sm text-blue-200">Categories</div>
            </div>
            <div class="bg-blue-900/40 backdrop-blur-sm rounded-lg p-4 border border-blue-800/30">
                <div class="text-2xl font-bold text-indigo-300">100%</div>
                <div class="text-sm text-blue-200">Quality</div>
            </div>
        </div>

        <!-- Gallery -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($galeri as $item)
            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        {{ $loop->iteration }}
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">{{ $item->judul }}</h3>
                    <p class="text-blue-300 text-sm mb-3">{{ Str::limit($item->deskripsi, 80) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-blue-800/50 text-blue-200 px-2 py-1 rounded-full">{{ $item->kategori }}</span>
                        <a href="{{ route('galeri.show', $item->id) }}" class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="w-full mt-8">
        <div class="bg-blue-950/30 backdrop-blur-sm rounded-lg mx-4 mb-4 p-4 border border-blue-800/20">
            <h3 class="text-lg font-semibold text-blue-100 mb-2 text-center">Professional Gallery Management</h3>
            <p class="text-blue-300 text-xs text-center">Curated collection of high-quality professional imagery for OSIS dan MPK</p>
        </div>
    </footer>

</div>


@extends('footer')

@section('content')
<body class="bg-gradient-to-br from-slate-100 via-blue-100 to-slate-800 text-white min-h-screen">
    <!-- Header with professional styling -->
    <div class="bg-blue-950/50 backdrop-blur-sm border-b border-blue-800/30">
        <div class="container mx-auto px-4 py-6">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">
                    Professional Gallery
                </h1>
                <div class="flex items-center space-x-4">
                    <span class="text-blue-300 text-sm">Gallery Manager</span>
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-sm">MG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-10">
        <!-- Stats bar -->
        <div class="grid grid-cols-3 gap-4 mb-10">
            <div class="bg-blue-900/40 backdrop-blur-sm rounded-lg p-4 border border-blue-800/30">
                <div class="text-2xl font-bold text-blue-300">9</div>
                <div class="text-sm text-blue-200">Total Images</div>
            </div>
            <div class="bg-blue-900/40 backdrop-blur-sm rounded-lg p-4 border border-blue-800/30">
                <div class="text-2xl font-bold text-cyan-300">3</div>
                <div class="text-sm text-blue-200">Categories</div>
            </div>
            <div class="bg-blue-900/40 backdrop-blur-sm rounded-lg p-4 border border-blue-800/30">
                <div class="text-2xl font-bold text-indigo-300">100%</div>
                <div class="text-sm text-blue-200">Quality</div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Individual photo cards -->
            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="asset/img/magnum.jpg" alt="/img/magnum.jpg" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #1
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
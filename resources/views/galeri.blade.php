<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 text-white min-h-screen">
    
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
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Professional Shot 1</h3>
                    <p class="text-blue-300 text-sm mb-3">High-quality professional photography with excellent composition and lighting.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-blue-800/50 text-blue-200 px-2 py-1 rounded-full">Professional</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="asset/img/kacang.jpg" alt="/asset/img/kacang.jpg" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-cyan-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #2
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Corporate Image 2</h3>
                    <p class="text-blue-300 text-sm mb-3">Strategic visual content designed for corporate communications and branding.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-cyan-800/50 text-cyan-200 px-2 py-1 rounded-full">Corporate</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="/api/placeholder/800/600" alt="Photo 3" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-indigo-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #3
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Executive Portfolio 3</h3>
                    <p class="text-blue-300 text-sm mb-3">Premium executive-level photography for leadership and management profiles.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-indigo-800/50 text-indigo-200 px-2 py-1 rounded-full">Executive</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="/api/placeholder/800/600" alt="Photo 4" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #4
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Strategic Vision 4</h3>
                    <p class="text-blue-300 text-sm mb-3">Visionary content capturing the essence of strategic planning and execution.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-blue-800/50 text-blue-200 px-2 py-1 rounded-full">Strategic</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="/api/placeholder/800/600" alt="Photo 5" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-cyan-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #5
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Leadership Focus 5</h3>
                    <p class="text-blue-300 text-sm mb-3">Dynamic leadership imagery for modern management and team development.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-cyan-800/50 text-cyan-200 px-2 py-1 rounded-full">Leadership</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="/api/placeholder/800/600" alt="Photo 6" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-indigo-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #6
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Innovation Hub 6</h3>
                    <p class="text-blue-300 text-sm mb-3">Cutting-edge innovation spaces and technology-driven management solutions.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-indigo-800/50 text-indigo-200 px-2 py-1 rounded-full">Innovation</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="/api/placeholder/800/600" alt="Photo 7" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #7
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Excellence Standard 7</h3>
                    <p class="text-blue-300 text-sm mb-3">Premium quality standards and excellence in management practices and outcomes.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-blue-800/50 text-blue-200 px-2 py-1 rounded-full">Excellence</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="/api/placeholder/800/600" alt="Photo 8" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-cyan-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #8
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Growth Strategy 8</h3>
                    <p class="text-blue-300 text-sm mb-3">Strategic growth initiatives and scalable management frameworks for success.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-cyan-800/50 text-cyan-200 px-2 py-1 rounded-full">Growth</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="group bg-blue-950/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-blue-800/20 hover:border-blue-600/40 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="relative overflow-hidden">
                    <img src="/api/placeholder/800/600" alt="Photo 9" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4 bg-indigo-600 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        #9
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-blue-100 mb-2">Future Vision 9</h3>
                    <p class="text-blue-300 text-sm mb-3">Forward-thinking vision and next-generation management capabilities.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-indigo-800/50 text-indigo-200 px-2 py-1 rounded-full">Future</span>
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="w-full mt-8">
        <div class="bg-blue-950/30 backdrop-blur-sm rounded-lg mx-4 mb-4 p-4 border border-blue-800/20">
            <h3 class="text-lg font-semibold text-blue-100 mb-2 text-center">Professional Gallery Management</h3>
            <p class="text-blue-300 text-xs text-center">Curated collection of high-quality professional imagery for corporate and executive use</p>
        </div>
    </footer>
    </div>
</body>
</html>
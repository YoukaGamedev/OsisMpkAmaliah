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
        <footer>
            <div class="bg-gradient-to-t from-blue-900/90 to-blue-900/60 pt-8 pb-4 px-4 backdrop-blur-sm">
                <div class="max-w-6xl mx-auto">
                    <!-- Footer Main Content -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 text-center md:text-left">
                        <!-- Column 1: About -->
                        <div class="md:pr-8">
                            <div class="flex justify-center md:justify-start items-center mb-4">
                                <div class="w-10 h-10 mr-3 rounded-full bg-blue-500/30 flex items-center justify-center">
                                    <img src="{{ asset('/asset/img/logo osis.png') }}" alt="Mini Logo" class="w-8 h-8">
                                </div>
                                <h3 class="text-xl font-bold text-white">OSIS SMK Amaliah</h3>
                            </div>
                            <p class="text-gray-300 mb-5 text-sm leading-relaxed">Mewujudkan siswa yang berkarakter, kreatif, dan berprestasi melalui organisasi yang inovatif dan inspiratif.</p>
                            
                            <!-- Social Media Icons -->
                            <div class="flex justify-center md:justify-start space-x-3">
                                <a href="https://www.instagram.com/official_osismpksmkamaliah?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-600 to-purple-600 flex items-center justify-center group hover:from-pink-500 hover:to-purple-500 transition-all duration-300 shadow-lg">
                                    <i class="fab fa-instagram text-white group-hover:scale-110 transition-transform"></i>
                                </a>
                                <a href="https://www.tiktok.com/@osismpk_smkamaliah?is_from_webapp=1&sender_device=pc" class="w-10 h-10 rounded-full bg-gradient-to-br from-black to-gray-800 flex items-center justify-center group hover:from-black hover:to-gray-700 transition-all duration-300 shadow-lg">
                                    <i class="fab fa-tiktok text-white group-hover:scale-110 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Column 2: Links -->
                        <div>
                            <h3 class="text-xl font-bold text-white mb-5 flex items-center justify-center md:justify-start">
                                <i class="fas fa-link text-blue-400 mr-2"></i>
                                Tautan Cepat
                            </h3>
                            <ul class="space-y-3 text-sm">
                                <li>
                                    <a href="{{ url('/') }}" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                        <i class="fas fa-home text-blue-400 w-5 mr-2"></i>
                                        <span>Beranda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('profilosis') }}" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                        <i class="fas fa-users text-blue-400 w-5 mr-2"></i>
                                        <span>Profil OSIS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('programkerja') }}" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                        <i class="fas fa-tasks text-blue-400 w-5 mr-2"></i>
                                        <span>Program Kerja</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('galeri') }}" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                        <i class="fas fa-images text-blue-400 w-5 mr-2"></i>
                                        <span>Galeri</span>
                                    </a>
                                </li>
                                <li>
    <a href="{{ route('developer') }}" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
        <i class="fas fa-phone-alt text-blue-400 w-5 mr-2"></i>
        <span>Developer</span>
    </a>
</li>
                            </ul>
                        </div>
                        
                        <!-- Column 3: Contact -->
                        <div>
                            <h3 class="text-xl font-bold text-white mb-5 flex items-center justify-center md:justify-start">
                                <i class="fas fa-id-card text-blue-400 mr-2"></i>
                                Kontak Kami
                            </h3>
                            <ul class="space-y-4 text-sm">
                                <li class="flex items-start text-gray-300 group">
                                    <div class="mt-1 w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center shrink-0 mr-3 group-hover:bg-blue-500/30 transition-colors">
                                        <i class="fas fa-map-marker-alt text-blue-400"></i>
                                    </div>
                                    <span>Jalan Tol Ciawi No. 1<br>Kecamatan Ciawi<br>Kabupaten Bogor 16720</span>
                                </li>
                                <li class="flex items-center text-gray-300 group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center shrink-0 mr-3 group-hover:bg-blue-500/30 transition-colors">
                                        <i class="fas fa-phone text-blue-400"></i>
                                    </div>
                                    <span>(0251) 8241986</span>
                                </li>
                                <li class="flex items-center text-gray-300 group">
                                    <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center shrink-0 mr-3 group-hover:bg-blue-500/30 transition-colors">
                                        <i class="fas fa-envelope text-blue-400"></i>
                                    </div>
                                    <span>osis@smkamaliah.sch.id</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="relative">
                        <div class="absolute left-1/2 transform -translate-x-1/2 -top-3 bg-blue-900 px-4">
                            <div class="h-6 w-16 relative flex justify-center">
                                <div class="w-2 h-2 rounded-full bg-blue-400 absolute animate-pulse"></div>
                                <div class="w-16 h-0.5 bg-gradient-to-r from-transparent via-blue-400 to-transparent absolute top-1/2 -translate-y-1/2"></div>
                            </div>
                        </div>
                        <div class="border-t border-gray-700/50 my-8"></div>
                    </div>
                    
                    <!-- Copyright -->
                    <div class="flex flex-col md:flex-row justify-center md:justify-between items-center text-gray-400 text-sm">
                        <p class="mb-2 md:mb-0 flex items-center">
                            <i class="far fa-copyright mr-1"></i>
                            <span>2025 OSIS SMK Amaliah. All rights reserved.</span>
                        </p>
                        <p class="flex items-center">
                            <span class="bg-blue-500/20 text-xs px-2 py-1 rounded-full text-blue-300 mr-2">v1.0.0</span>
                            <span>Aplikasi Resmi OSIS dan MPK</span>
                        </p>
                    </div>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -bottom-6 left-0 w-full overflow-hidden z-0">
                    <div class="w-96 h-96 rounded-full bg-blue-600/10 absolute -bottom-80 -left-20 blur-3xl"></div>
                    <div class="w-96 h-96 rounded-full bg-blue-600/10 absolute -bottom-80 -right-20 blur-3xl"></div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
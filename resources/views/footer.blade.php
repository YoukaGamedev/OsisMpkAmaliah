<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APK OSIS MPK SMK Amaliah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body>
    <div class="flex flex-1">
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
    <!-- Footer -->
        <footer>
            <div class="bg-gradient-to-t from-blue-400/70 to-blue-600/40 pt-8 pb-4 px-4 backdrop-blur-sm">
                <div class="max-w-6xl mx-auto">
                    <!-- Footer Main Content -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 text-center md:text-left">
                        <!-- Column 1: About -->
                        <div class="md:pr-8">
                            <div class="flex justify-center md:justify-start items-center mb-4">
                                <div class="w-10 h-10 mr-3 rounded-full bg-blue-500/30 flex items-center justify-center">
                                    <img src="{{ asset('/asset/img/logo osis.png') }}" alt="Mini Logo" class="w-8 h-8">
                                </div>
                                <h3 class="text-xl font-bold text-white">OSIS MPK SMK Amaliah</h3>
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
                                 <a href="mailto:osismpksmkamaliah@gmail.com" class="w-10 h-10 rounded-full bg-gradient-to-br from-red-600 to-red-400 flex items-center justify-center group hover:from-red-500 hover:to-red-300 transition-all duration-300 shadow-lg">
                                    <i class="fas fa-envelope text-white group-hover:scale-110 transition-transform"></i>
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
                                    <a href="{{ ('/programkerja') }}" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                        <i class="fas fa-tasks text-blue-400 w-5 mr-2"></i>
                                        <span>Program Kerja</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ ('/gambar') }}" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                        <i class="fas fa-images text-blue-400 w-5 mr-2"></i>
                                        <span>Galeri</span>
                                    </a>
                                </li>
                                <li>
   <a href="{{ route('developer') }}" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
    <!-- Heroicon Code Icon (developer-themed) -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
    </svg>
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
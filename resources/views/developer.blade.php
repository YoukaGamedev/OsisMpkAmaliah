<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Team | OSIS SMK Amaliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .gradient-mesh {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
        }
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Simple Back Button Header -->
    <div class="absolute top-8 left-8 z-10">
        <a href="{{ url('/') }}" class="group inline-flex items-center px-6 py-3 bg-white shadow-lg hover:shadow-xl rounded-2xl transition-all duration-300 border border-gray-100">
            <div class="h-10 w-10 bg-primary-50 rounded-xl flex items-center justify-center mr-3 group-hover:bg-primary-100 transition-colors">
                <i class="fas fa-arrow-left text-primary-600 group-hover:text-primary-700"></i>
            </div>
            <span class="text-gray-700 font-semibold group-hover:text-gray-900">Kembali ke Beranda</span>
        </a>
    </div>

    <!-- Main Content with Top Padding -->
    <main class="container mx-auto px-6 pt-28 pb-16">
        <!-- Hero Section with Better Typography -->
        <section class="text-center mb-20">
            <div class="flex justify-center mb-6">
                <div class="relative">
                    <div class="h-24 w-24 bg-gradient-to-r from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center shadow-lg">
                        <img src="{{ asset('/asset/img/logo osis.png') }}" alt="Logo OSIS" class="h-16 w-16 object-contain">
                    </div>
                    <div class="absolute -top-2 -right-2 h-6 w-6 bg-green-500 rounded-full border-2 border-white"></div>
                </div>
            </div>
            <h2 class="text-5xl font-bold text-gray-900 mb-6">Tim Pengembang</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Tim profesional di balik pengembangan aplikasi OSIS SMK Amaliah yang inovatif dan modern
            </p>
            <div class="flex justify-center mt-8">
                <div class="grid grid-cols-3 gap-8 text-center">
                    <div>
                        <div class="text-3xl font-bold text-primary-600">3</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Developers</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary-600">6+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Technologies</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary-600">100%</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Dedication</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Developer Cards -->
        <section class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
           
<div class="group">
    <div class="bg-white rounded-2xl shadow-lg card-hover overflow-hidden border border-gray-100">
        <div class="relative h-64 bg-cover bg-center overflow-hidden" style="background-image: url('/asset/img/jul.png');">
            <div class="absolute inset-0 bg-black/20"></div> <!-- Overlay gelap agar teks tetap terbaca -->
            <div class="absolute top-4 right-4">
                <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">
                    System Expert
                </span>
            </div>
        </div>
        <div class="p-8">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Rizal Abdulrahman</h3>
                    <p class="text-blue-600 font-semibold">Back end</p>
                </div>
                <div class="h-12 w-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-chart-line text-blue-600 text-lg"></i>
                </div>
            </div>
            <p class="text-gray-600 mb-6 leading-relaxed">
            </p>
            <div class="flex items-center justify-between">
                <div class="flex space-x-3">
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-purple-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-github text-gray-600 hover:text-purple-600"></i>
                    </a>
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-purple-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-linkedin text-gray-600 hover:text-purple-600"></i>
                    </a>
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-pink-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-instagram text-gray-600 hover:text-pink-600"></i>
                    </a>
                </div>
                <span class="text-sm text-gray-400">UML Specialist</span>
            </div>
        </div>
    </div>
</div>



<div class="group">
    <div class="bg-white rounded-2xl shadow-lg card-hover overflow-hidden border border-gray-100">
        <div class="relative h-64 bg-cover bg-center overflow-hidden" style="background-image: url('/asset/img/niswa.jpg');">
            <div class="absolute inset-0 bg-black/20"></div> <!-- Overlay gelap agar teks tetap terbaca -->
            <div class="absolute top-4 right-4">
                <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">
                    System Expert
                </span>
            </div>
        </div>
        <div class="p-8">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Niswatul Hasanah</h3>
                    <p class="text-blue-600 font-semibold">System Analyst</p>
                </div>
                <div class="h-12 w-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-chart-line text-blue-600 text-lg"></i>
                </div>
            </div>
            <p class="text-gray-600 mb-6 leading-relaxed">
            </p>
            <div class="flex items-center justify-between">
                <div class="flex space-x-3">
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-purple-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-github text-gray-600 hover:text-purple-600"></i>
                    </a>
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-purple-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-linkedin text-gray-600 hover:text-purple-600"></i>
                    </a>
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-pink-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-instagram text-gray-600 hover:text-pink-600"></i>
                    </a>
                </div>
                <span class="text-sm text-gray-400">UML Specialist</span>
            </div>
        </div>
    </div>
</div>


<div class="group">
    <div class="bg-white rounded-2xl shadow-lg card-hover overflow-hidden border border-gray-100">
        <div class="relative h-64 bg-cover bg-center overflow-hidden" style="background-image: url('/asset/img/bagja.jpg');">
            <div class="absolute inset-0 bg-black/20"></div> <!-- Overlay gelap agar teks tetap terbaca -->
            <div class="absolute top-4 right-4">
                <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">
                    System Expert
                </span>
            </div>
        </div>
        <div class="p-8">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">M.ILHAM RAI' SUBAGJA</h3>
                    <p class="text-blue-600 font-semibold">Front End</p>
                </div>
                <div class="h-12 w-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-chart-line text-blue-600 text-lg"></i>
                </div>
            </div>
            <p class="text-gray-600 mb-6 leading-relaxed">
            </p>
            <div class="flex items-center justify-between">
                <div class="flex space-x-3">
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-purple-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-github text-gray-600 hover:text-purple-600"></i>
                    </a>
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-purple-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-linkedin text-gray-600 hover:text-purple-600"></i>
                    </a>
                    <a href="#" class="h-10 w-10 bg-gray-100 hover:bg-pink-100 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-instagram text-gray-600 hover:text-pink-600"></i>
                    </a>
                </div>
                <span class="text-sm text-gray-400">UML Specialist</span>
            </div>
        </div>
    </div>
</div>
     

        </section>

        <!-- Enhanced Tech Stack Section -->
        <section class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Technology Stack</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Teknologi modern dan terpercaya yang kami gunakan untuk membangun aplikasi berkualitas tinggi
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center border border-gray-100">
                    <div class="h-16 w-16 mx-auto mb-4 bg-red-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-laravel text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Laravel</h3>
                    <p class="text-sm text-gray-500">PHP Framework</p>
                </div>
                
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center border border-gray-100">
                    <div class="h-16 w-16 mx-auto mb-4 bg-indigo-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-php text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">PHP</h3>
                    <p class="text-sm text-gray-500">Backend Language</p>
                </div>
                
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center border border-gray-100">
                    <div class="h-16 w-16 mx-auto mb-4 bg-yellow-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-js text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">JavaScript</h3>
                    <p class="text-sm text-gray-500">Frontend Logic</p>
                </div>
                
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center border border-gray-100">
                    <div class="h-16 w-16 mx-auto mb-4 bg-blue-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-css3-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">CSS</h3>
                    <p class="text-sm text-gray-500">Styling</p>
                </div>
                
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center border border-gray-100">
                    <div class="h-16 w-16 mx-auto mb-4 bg-orange-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-html5 text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">HTML5</h3>
                    <p class="text-sm text-gray-500">Markup</p>
                </div>
                
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center border border-gray-100">
                    <div class="h-16 w-16 mx-auto mb-4 bg-blue-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-database text-blue-700 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">MySQL</h3>
                    <p class="text-sm text-gray-500">Database</p>
                </div>
            </div>
        </section>

        <!-- Additional Features Section -->
        <section class="bg-gradient-to-r from-primary-50 to-blue-50 rounded-3xl p-12 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Mengapa Memilih Tim Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="text-center">
                    <div class="h-16 w-16 bg-primary-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Inovasi Terdepan</h3>
                    <p class="text-gray-600">Menggunakan teknologi terbaru untuk solusi yang efektif dan modern</p>
                </div>
                <div class="text-center">
                    <div class="h-16 w-16 bg-primary-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Keamanan Terjamin</h3>
                    <p class="text-gray-600">Implementasi keamanan berlapis untuk melindungi data pengguna</p>
                </div>
                <div class="text-center">
                    <div class="h-16 w-16 bg-primary-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">User-Centric</h3>
                    <p class="text-gray-600">Desain yang berfokus pada kemudahan penggunaan dan pengalaman pengguna</p>
                </div>
            </div>
        </section>
    </main>
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
   
</body>
</html>
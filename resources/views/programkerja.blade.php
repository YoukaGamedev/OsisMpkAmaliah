<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kerja OSIS & MPK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-100 min-h-screen">
    
    <!-- Header with Gradient -->
    <header class="gradient-bg shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 bg-white opacity-10"></div>
        <div class="container mx-auto text-center py-16 px-4 relative z-10">
            <div class="animate-fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                    Program Kerja
                </h1>
                <div class="flex items-center justify-center mb-4">
                    <div class="w-16 h-1 bg-yellow-400 rounded-full mr-4"></div>
                    <p class="text-white text-2xl md:text-3xl font-semibold">
                        OSIS & MPK
                    </p>
                    <div class="w-16 h-1 bg-yellow-400 rounded-full ml-4"></div>
                </div>
                <p class="text-blue-100 text-xl mb-2">SMK Amaliah 1 Ciawi</p>
                <div class="inline-flex items-center bg-white bg-opacity-20 rounded-full px-6 py-2">
                    <i class="fas fa-calendar-alt text-yellow-400 mr-2"></i>
                    <span class="text-white font-medium">Periode 2024/2025</span>
                </div>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-y-32 translate-x-32"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full translate-y-24 -translate-x-24"></div>
    </header>

    <!-- Navigation/Back Button -->
    <div class="container mx-auto px-4 -mt-6 relative z-20">
        <div class="flex justify-between items-center">
            <a href="/user" class="inline-flex items-center px-6 py-3 bg-white text-gray-700 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group">
                <i class="fas fa-arrow-left mr-3 text-blue-600 group-hover:text-blue-700"></i>
                <span class="font-semibold">Kembali ke Dashboard</span>
            </a>
            
            <div class="hidden md:flex items-center bg-white rounded-full px-6 py-3 shadow-lg">
                <i class="fas fa-tasks text-blue-600 mr-2"></i>
                <span class="text-gray-700 font-semibold">6 Program Kerja</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="container mx-auto px-4 py-12">
        <div class="text-center mb-12 animate-slide-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Daftar Program Kerja
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Berikut adalah program-program kerja yang telah disusun untuk menciptakan lingkungan sekolah yang lebih baik dan mengembangkan potensi siswa.
            </p>
        </div>

        <!-- Program Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg card-hover border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-red-500 to-red-600 h-2"></div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-flag text-red-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-red-100 text-red-800 text-sm font-medium rounded-full">Program Nasional</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Peringatan Hari Kemerdekaan</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Mengadakan lomba antar kelas seperti tarik tambang, makan kerupuk, dan lainnya untuk memperingati kemerdekaan Indonesia.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>Agustus 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg card-hover border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 to-green-600 h-2"></div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-broom text-green-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Program Rutin</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Program Jumat Bersih</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Membersihkan lingkungan sekolah secara rutin setiap hari Jumat untuk menciptakan lingkungan belajar yang nyaman.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Setiap Jumat</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg card-hover border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2"></div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-hand-holding-heart text-purple-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm font-medium rounded-full">Program Sosial</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Bakti Sosial</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Kegiatan sosial berupa donasi dan kunjungan ke panti asuhan untuk menumbuhkan rasa empati dan kepedulian sosial.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-heart mr-2"></i>
                        <span>Trimester</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow-lg card-hover border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 h-2"></div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-shield-alt text-orange-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-orange-100 text-orange-800 text-sm font-medium rounded-full">Program Edukasi</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Seminar Anti Bullying</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Menghadirkan pembicara ahli untuk membahas isu bullying di sekolah dan cara mencegahnya.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-microphone mr-2"></i>
                        <span>Semester</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-2xl shadow-lg card-hover border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2"></div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm font-medium rounded-full">Program Pelatihan</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">LDKS (Latihan Dasar Kepemimpinan Siswa)</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Pelatihan untuk pengurus OSIS & MPK dalam membangun kepemimpinan dan kerja tim yang efektif.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-graduation-cap mr-2"></i>
                        <span>Tahunan</span>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-2xl shadow-lg card-hover border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-pink-500 to-pink-600 h-2"></div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-theater-masks text-pink-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-pink-100 text-pink-800 text-sm font-medium rounded-full">Program Seni</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pensi (Pentas Seni)</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Ajang menampilkan kreativitas siswa dalam bidang seni dan hiburan untuk mengembangkan bakat dan minat.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-star mr-2"></i>
                        <span>Semester</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="bg-white rounded-2xl shadow-lg p-8 max-w-4xl mx-auto border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Mari Berpartisipasi!</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Setiap program kerja ini membutuhkan dukungan dan partisipasi aktif dari seluruh warga sekolah. 
                    Bersama-sama kita dapat menciptakan lingkungan sekolah yang lebih baik.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="px-6 py-3 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                        <i class="fas fa-hands-helping mr-2"></i>
                        Daftar Volunteer
                    </button>
                    <button class="px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-gray-200 transition-colors duration-300">
                        <i class="fas fa-download mr-2"></i>
                        Download Jadwal
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer with Tailwind CSS -->
    <footer class="mt-20 relative overflow-hidden">
        <div class="bg-gradient-to-t from-indigo-900/90 to-indigo-900/30 pt-8 pb-4 px-4 backdrop-blur-sm relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Footer Main Content -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 text-center md:text-left">
                    <!-- Column 1: About -->
                    <div class="md:pr-8">
                        <div class="flex justify-center md:justify-start items-center mb-4">
                            <div class="w-10 h-10 mr-3 rounded-full bg-blue-500/30 flex items-center justify-center">
                                <img src="/api/placeholder/32/32" alt="Mini Logo" class="w-8 h-8 rounded-full">
                            </div>
                            <h3 class="text-xl font-bold text-white">OSIS SMK Amaliah</h3>
                        </div>
                        <p class="text-gray-300 mb-5 text-sm leading-relaxed">Mewujudkan siswa yang berkarakter, kreatif, dan berprestasi melalui organisasi yang inovatif dan inspiratif.</p>
                        
                        <!-- Social Media Icons - Enhanced -->
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
                        <ul class="space-y-3 text-sm grid grid-cols-2 gap-x-2 md:block">
                            <li>
                                <a href="/" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                    <i class="fas fa-home w-5 text-blue-400 mr-2"></i>
                                    <span>Beranda</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                    <i class="fas fa-users w-5 text-blue-400 mr-2"></i>
                                    <span>Profil OSIS</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                    <i class="fas fa-tasks w-5 text-blue-400 mr-2"></i>
                                    <span>Program Kerja</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                    <i class="fas fa-images w-5 text-blue-400 mr-2"></i>
                                    <span>Galeri</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center justify-center md:justify-start">
                                    <i class="fas fa-phone-alt w-5 text-blue-400 mr-2"></i>
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
                            <li class="flex items-start justify-center md:justify-start text-gray-300 group">
                                <div class="mt-1 w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center shrink-0 mr-3 group-hover:bg-blue-500/30 transition-colors">
                                    <i class="fas fa-map-marker-alt text-blue-400"></i>
                                </div>
                                <span class="text-left">Jl. Raya Amaliah No. 25,<br>Bogor, Jawa Barat</span>
                            </li>
                            <li class="flex items-center justify-center md:justify-start text-gray-300 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center shrink-0 mr-3 group-hover:bg-blue-500/30 transition-colors">
                                    <i class="fas fa-phone text-blue-400"></i>
                                </div>
                                <span>+62 812-3456-7890</span>
                            </li>
                            <li class="flex items-center justify-center md:justify-start text-gray-300 group">
                                <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center shrink-0 mr-3 group-hover:bg-blue-500/30 transition-colors">
                                    <i class="fas fa-envelope text-blue-400"></i>
                                </div>
                                <span>osis@smkamaliah.sch.id</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Divider with decorative element -->
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 -top-3 bg-indigo-900 px-4">
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

    <script>
        // Set current year
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        
        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = '0s';
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, observerOptions);

        // Observe all cards
        const cards = document.querySelectorAll('.card-hover');
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
            observer.observe(card);
        });
    </script>

</body>
</html>
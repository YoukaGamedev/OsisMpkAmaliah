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
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    },
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
            background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%);
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
<body class="bg-gradient-to-br from-gray-50 via-blue-50 to-primary-100 min-h-screen">
    
    <!-- Header with Gradient -->
    <header class="gradient-bg shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 bg-white opacity-10"></div>
        <div class="container mx-auto text-center py-16 px-4 relative z-10">
            <div class="animate-fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                    Program Kerja
                </h1>
                <div class="flex items-center justify-center mb-4">
                    <div class="w-16 h-1 bg-primary-300 rounded-full mr-4"></div>
                    <p class="text-white text-2xl md:text-3xl font-semibold">
                        OSIS & MPK
                    </p>
                    <div class="w-16 h-1 bg-primary-300 rounded-full ml-4"></div>
                </div>
                <p class="text-primary-100 text-xl mb-2">SMK Amaliah 1 Ciawi</p>
                <div class="inline-flex items-center bg-white bg-opacity-20 rounded-full px-6 py-2">
                    <i class="fas fa-calendar-alt text-primary-300 mr-2"></i>
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
            <a href="/" class="inline-flex items-center px-6 py-3 bg-white text-gray-700 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group">
                <i class="fas fa-arrow-left mr-3 text-primary-600 group-hover:text-primary-700"></i>
                <span class="font-semibold">Kembali</span>
            </a>
            
            <div class="hidden md:flex items-center bg-white rounded-full px-6 py-3 shadow-lg">
                <i class="fas fa-tasks text-primary-600 mr-2"></i>
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
                    <button class="px-6 py-3 bg-primary-600 text-white rounded-full font-semibold hover:bg-primary-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
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
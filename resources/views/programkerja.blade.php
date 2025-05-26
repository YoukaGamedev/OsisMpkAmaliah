@extends('footer')

@section('content')
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
    <span class="text-gray-700 font-semibold">{{ $agendas->count() }} Program Kerja</span>
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
            @php
    $colors = [
        'sekbid 1' => ['bg' => 'bg-green-100', 'text' => 'text-green-800', 'from' => 'from-green-500', 'to' => 'to-green-600', 'iconBg' => 'bg-green-100', 'iconText' => 'text-green-600'],
        'sekbid 2' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-800', 'from' => 'from-blue-500', 'to' => 'to-blue-600', 'iconBg' => 'bg-blue-100', 'iconText' => 'text-blue-600'],
        'sekbid 3' => ['bg' => 'bg-red-100', 'text' => 'text-red-800', 'from' => 'from-red-500', 'to' => 'to-red-600', 'iconBg' => 'bg-red-100', 'iconText' => 'text-red-600'],
        'sekbid 4' => ['bg' => 'bg-yellow-100', 'text' => 'text-yellow-800', 'from' => 'from-yellow-600', 'to' => 'to-yellow-700', 'iconBg' => 'bg-yellow-100', 'iconText' => 'text-yellow-600'], // coklat tidak default tailwind, pakai kuning sebagai pendekatan
        'sekbid 5' => ['bg' => 'bg-yellow-100', 'text' => 'text-yellow-800', 'from' => 'from-yellow-400', 'to' => 'to-yellow-500', 'iconBg' => 'bg-yellow-100', 'iconText' => 'text-yellow-600'],
        'sekbid 6' => ['bg' => 'bg-purple-100', 'text' => 'text-purple-800', 'from' => 'from-purple-500', 'to' => 'to-purple-600', 'iconBg' => 'bg-purple-100', 'iconText' => 'text-purple-600'],
    ];

    // Default warna jika pelaksana tidak ada di daftar
    $defaultColor = ['bg' => 'bg-gray-100', 'text' => 'text-gray-800', 'from' => 'from-gray-500', 'to' => 'to-gray-600', 'iconBg' => 'bg-gray-100', 'iconText' => 'text-gray-600'];
@endphp

@foreach ($agendas as $agenda)
    @php
        // Ambil warna berdasarkan pelaksana (lowercase untuk pencocokan case-insensitive)
        $pelaksanaKey = strtolower($agenda->pelaksana);
        $color = $colors[$pelaksanaKey] ?? $defaultColor;
    @endphp

    <div class="bg-white rounded-2xl shadow-lg card-hover border border-gray-100 overflow-hidden">
        <div class="bg-gradient-to-r {{ $color['from'] }} {{ $color['to'] }} h-2"></div>
        <div class="p-8">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 {{ $color['iconBg'] }} rounded-full flex items-center justify-center mr-4">
                    <i class="fas fa-flag {{ $color['iconText'] }} text-xl"></i>
                </div>
                <span class="px-3 py-1 {{ $color['bg'] }} {{ $color['text'] }} text-sm font-medium rounded-full">
                    {{ $agenda->pelaksana }}
                </span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $agenda->judul }}</h3>
            <p class="text-gray-600 mb-4 leading-relaxed">{{ $agenda->deskripsi }}</p>
            <div class="flex items-center text-sm text-gray-500">
                <i class="fas fa-calendar mr-2"></i>
                <span>{{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('D M Y') }}</span>
            </div>
        </div>
    </div>
 @endforeach

            </div>
        </div>
    </section>
    
    @endsection

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

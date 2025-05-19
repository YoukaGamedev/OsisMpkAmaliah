<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APK OSIS SMK Amaliah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: white;
            position: relative;
            overflow-y: auto;
            background-image: url('/asset/img/amaliah.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(20, 20, 50, 0.8));
            z-index: 1;
        }
        
        .content-wrapper {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            min-height: 120vh;
            width: 100%;
        }
        
        .top-section, .middle-section {
            width: 100%;
            text-align: center;
        }
        
        .top-section {
            padding-top: 40px;
            animation: fadeIn 1.2s forwards ease-out;
        }
        
        .middle-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
        }
        
        .app-title {
            font-size: 1.875rem;
            font-weight: bold;
            margin-bottom: 5px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .school-name {
            font-size: 1.125rem;
            color: rgba(255, 255, 255, 0.85);
        }
        
        .logo-container {
            position: relative;
            margin-bottom: 24px;
            animation: float 3s infinite ease-in-out;
        }
        
        .logo-glow {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #3b82f6;
            border-radius: 50%;
            filter: blur(25px);
            opacity: 0.2;
        }
        
        .logo-img {
            position: relative;
            width: 160px;
            height: 160px;
            animation: pulse 3s infinite;
        }
        
        @media (min-width: 768px) {
            .logo-img {
                width: 192px;
                height: 192px;
            }
        }
        
        .osis-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 8px;
            animation: fadeIn 1.2s forwards ease-out;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        @media (min-width: 768px) {
            .osis-title {
                font-size: 2.5rem;
            }
        }
        
        .osis-description {
            font-size: 1.125rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 32px;
            animation: fadeIn 1.2s 0.5s forwards ease-out;
            opacity: 0;
        }
        
        .login-button {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, #4f46e5, #2563eb);
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            font-size: 1.125rem;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
            transition: all 0.3s ease;
            animation: fadeIn 1.2s 0.5s forwards ease-out;
            opacity: 0;
        }
        
        .login-button:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 15px 25px rgba(37, 99, 235, 0.4);
            background: linear-gradient(135deg, #4338ca, #1d4ed8);
        }
        
        .login-button:active {
            transform: translateY(-1px) scale(0.99);
        }
        
        /* Footer styling */
        footer {
            position: relative;
            z-index: 2;
            width: 100%;
            margin-top: auto;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { 
                opacity: 0; 
                transform: translateY(20px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        /* Particles background */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            pointer-events: none;
        }
        
        @keyframes moveParticles {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-100vh);
            }
        }
    </style>
</head>
<body>
    <!-- Overlay -->
    <div class="bg-overlay"></div>
    
    <!-- Particles -->
    <div class="particles" id="particles"></div>
    
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Top section with school logo -->
        <div class="top-section">
            <h1 class="app-title">APK OSIS MPK</h1>
            <p class="school-name">SMK Amaliah</p>
        </div>
        
        <!-- Middle section with OSIS logo -->
        <div class="middle-section">
            <div class="logo-container">
                <div class="logo-glow"></div>
                <img src="{{ asset('/asset/img/logo osis.png') }}" alt="Logo OSIS" class="logo-img">
            </div>
            <h2 class="osis-title">OSIS MPK Amaliah</h2>
            <p class="osis-description">Aplikasi Resmi OSIS MPK SMK Amaliah</p>
            
            <!-- Login button -->
            <a href="{{ route('login') }}" class="login-button">
                <span>Masuk Sekarang</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Footer -->
        <footer>
            <div class="bg-gradient-to-t from-blue-900/90 to-blue-900/30 pt-8 pb-4 px-4 backdrop-blur-sm">
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

    <script>
        // Create floating particles in the background
        document.addEventListener('DOMContentLoaded', function() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                createParticle();
            }
            
            function createParticle() {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 2-6px
                const size = Math.random() * 4 + 2;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                
                // Random opacity
                particle.style.opacity = Math.random() * 0.5 + 0.1;
                
                // Random animation duration
                const duration = Math.random() * 60 + 30;
                particle.style.animation = `moveParticles ${duration}s linear infinite`;
                
                // Random delay
                particle.style.animationDelay = `${Math.random() * 30}s`;
                
                particlesContainer.appendChild(particle);
            }
        });
    </script>
</body>
</html>
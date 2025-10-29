@extends('footer')

@section('content')
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
            min-height: 100vh;
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
            padding: 40px 0;
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
            <h2 class="osis-title">OSIS SMK Amaliah</h2>
            <p class="osis-description">Aplikasi Resmi OSIS MPK SMK Amaliah</p>
            
            <!-- Login button -->
            <a href="{{ route('login') }}" class="login-button">
                <span>Masuk Sekarang</span>
                <i class="fas fa-arrow-right"></i>
            </a>
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
@endsection
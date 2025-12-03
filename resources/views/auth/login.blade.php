<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login OSIS SMK Amaliah</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .bg-overlay {
            background-color: rgba(0, 0, 0, 0.65);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .input-focus:focus-within {
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.4);
        }
    </style>
</head>
<body class="min-h-screen bg-cover bg-center flex items-center justify-center text-white relative overflow-hidden transition-all"
      style="background-image: url('{{ asset('asset/img/amaliah.jpg') }}');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-overlay backdrop-blur-sm"></div>

    <!-- Flash Message -->
    @if(session('success'))
        <div class="absolute top-5 bg-green-600/90 text-white px-4 py-2 rounded-lg shadow-lg z-50 animate-fade-in">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="absolute top-5 bg-red-600/90 text-white px-4 py-2 rounded-lg shadow-lg z-50 animate-fade-in">
            {{ session('error') }}
        </div>
    @endif

    <!-- Login Card -->
    <div class="z-10 w-full max-w-md px-6">
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-xl animate-fade-in">
            <div class="text-center mb-6">
                <div class="relative inline-block animate-float">
                    <div class="absolute inset-0 bg-blue-500 rounded-full blur-xl opacity-30"></div>
                    <img src="{{ asset('asset/img/logo osis.png') }}" alt="Logo OSIS" class="relative w-24 h-24 rounded-full shadow-md">
                </div>
                <h1 class="text-3xl font-bold mt-3">OSIS Amaliah</h1>
                <p class="text-sm text-gray-200">Aplikasi Resmi OSIS SMK Amaliah</p>
                @if($pemiluDimulai)
                    <p class="mt-2 text-sm text-yellow-300 font-semibold animate-pulse">⚠️ Pemilu sedang berlangsung!</p>
                @endif
            </div>

            <h2 class="text-xl font-semibold text-center text-white mb-6">Masuk ke Akun</h2>

            <form action="{{ route('login.submit') }}" method="POST">
                @csrf

                @if($pemiluDimulai)
                    <!-- =============================== -->
                    <!-- MODE PEMILU → LOGIN PAKAI NIS SAJA -->
                    <!-- =============================== -->
                    <div class="mb-6">
                        <label for="nis" class="block text-gray-300 text-sm mb-2">NIS</label>
                        <div class="flex items-center bg-white/10 border border-white/20 rounded-lg input-focus p-3">
                            <i class="fas fa-id-card text-yellow-400 mr-3"></i>
                            <input type="text" name="nis" id="nis"
                                placeholder="Masukkan NIS kamu"
                                required
                                class="w-full bg-transparent outline-none text-white placeholder-gray-400">
                        </div>
                    </div>
                @else
                    <!-- =============================== -->
                    <!-- MODE NORMAL (BELUM PEMILU) -->
                    <!-- EMAIL + PASSWORD -->
                    <!-- =============================== -->

                    <!-- Email -->
                    <div class="mb-5">
                        <label for="email" class="block text-gray-300 text-sm mb-2">Email</label>
                        <div class="flex items-center bg-white/10 border border-white/20 rounded-lg input-focus p-3">
                            <i class="fas fa-envelope text-blue-400 mr-3"></i>
                            <input type="email" name="email" id="email" placeholder="Masukkan email kamu" required
                                class="w-full bg-transparent outline-none text-white placeholder-gray-400">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-gray-300 text-sm mb-2">Password</label>
                        <div class="flex items-center bg-white/10 border border-white/20 rounded-lg input-focus p-3">
                            <i class="fas fa-lock text-blue-400 mr-3"></i>
                            <input type="password" id="password" name="password" required
                                class="w-full bg-transparent outline-none text-white placeholder-gray-400"
                                placeholder="Masukkan password">
                            <button type="button" onclick="togglePassword()" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-eye" id="eye-icon"></i>
                            </button>
                        </div>
                    </div>
                @endif

                <!-- Tombol login -->
                <button type="submit"
                        class="w-full py-3 rounded-lg font-medium shadow-lg transition duration-300 flex items-center justify-center gap-2
                        {{ $pemiluDimulai ? 'bg-gradient-to-r from-yellow-500 to-orange-600' : 'bg-gradient-to-r from-blue-600 to-indigo-700' }}
                        hover:opacity-90">
                    <span>{{ $pemiluDimulai ? 'Login & Pilih Kandidat' : 'Masuk Sekarang' }}</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>

        </div>
    </div>

    <script>
        function togglePassword() {
            const field = document.getElementById('password');
            const icon = document.getElementById('eye-icon');
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</body>
</html>

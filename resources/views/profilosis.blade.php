<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-16">
        <h1 class="text-5xl font-bold text-gray-800 mb-4">Struktur Organisasi</h1>
        <div class="flex justify-center items-center gap-4">
            <h2 class="text-3xl font-semibold text-blue-600">OSIS</h2>
            <span class="text-2xl text-gray-400">&</span>
            <h2 class="text-3xl font-semibold text-blue-600">MPK</h2>
        </div>
        <p class="text-gray-600 text-xl mt-4">Periode {{ now()->year }}/{{ now()->year + 1 }}</p>
    </div>

    <!-- Main Structure Container -->
    <div class="max-w-8xl mx-auto">
        <!-- Pembina Section -->
        <section class="mb-20">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-10">Pembina</h2>
            <div class="flex justify-center gap-16">
                @foreach(['Pembina', 'Pembina A1', 'Pembina A2'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <div class="relative group w-72 h-96 overflow-hidden rounded-lg shadow-xl">
                            <img src="{{ asset('storage/' . $person->photo) }}" 
                                 alt="{{ $role }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-2xl font-bold">{{ $person->name }}</h3>
                                <p class="text-blue-300 font-semibold">{{ $role }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- OSIS Leadership Section -->
        <section class="mb-20">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-10">Pengurus OSIS</h2>
            <!-- Ketua & Wakil OSIS -->
            <div class="flex flex-wrap justify-center gap-8 mb-12">
                @foreach(['Ketua OSIS A1', 'Ketua OSIS A2', 'Wakil Ketua OSIS A1', 'Wakil Ketua OSIS A2'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <div class="relative group w-64 h-80 overflow-hidden rounded-lg shadow-xl">
                            <img src="{{ asset('storage/' . $person->photo) }}" 
                                 alt="{{ $role }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-xl font-bold">{{ $person->name }}</h3>
                                <p class="text-blue-300 font-semibold">{{ $role }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Sekretaris & Bendahara OSIS -->
            <div class="flex flex-wrap justify-center gap-8">
                @foreach(['Sekretaris Osis', 'Bendahara Osis A1', 'Bendahara Osis A2'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <div class="relative group w-56 h-72 overflow-hidden rounded-lg shadow-xl">
                            <img src="{{ asset('storage/' . $person->photo) }}" 
                                 alt="{{ $role }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-lg font-bold">{{ $person->name }}</h3>
                                <p class="text-blue-300 font-semibold">{{ $role }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- MPK Leadership Section -->
        <section class="mb-20">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-10">Pengurus MPK</h2>
            <!-- Ketua & Wakil MPK -->
            <div class="flex flex-wrap justify-center gap-8 mb-12">
                @foreach(['Ketua MPK A1', 'Ketua MPK A2', 'Wakil Ketua MPK A1', 'Wakil Ketua MPK A2'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <div class="relative group w-64 h-80 overflow-hidden rounded-lg shadow-xl">
                            <img src="{{ asset('storage/' . $person->photo) }}" 
                                 alt="{{ $role }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-xl font-bold">{{ $person->name }}</h3>
                                <p class="text-blue-300 font-semibold">{{ $role }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Sekretaris & Bendahara MPK -->
            <div class="flex flex-wrap justify-center gap-8">
                @foreach(['Sekretaris MPK', 'Bendahara MPK A1', 'Bendahara MPK A2'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <div class="relative group w-56 h-72 overflow-hidden rounded-lg shadow-xl">
                            <img src="{{ asset('storage/' . $person->photo) }}" 
                                 alt="{{ $role }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-lg font-bold">{{ $person->name }}</h3>
                                <p class="text-blue-300 font-semibold">{{ $role }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Divisi & Sekbid Section -->
        <section class="mb-20">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-10">Divisi & Seksi Bidang</h2>
            
            <!-- Ketua Divisi -->
            <div class="flex justify-center mb-12">
                @foreach(['Ketua Divisi'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <div class="relative group w-64 h-80 overflow-hidden rounded-lg shadow-xl">
                            <img src="{{ asset('storage/' . $person->photo) }}" 
                                 alt="{{ $role }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-xl font-bold">{{ $person->name }}</h3>
                                <p class="text-blue-300 font-semibold">{{ $role }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Ketua Sekbid -->
            <div class="flex justify-center gap-12 mb-16">
                @foreach(['Ketua Sekbid 1', 'Ketua Sekbid 2', 'Ketua Sekbid 3', 'Ketua Sekbid 4', 'Ketua Sekbid 5', 'Ketua Sekbid 6'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <div class="relative group w-64 h-80 overflow-hidden rounded-lg shadow-xl">
                            <img src="{{ asset('storage/' . $person->photo) }}" 
                                 alt="{{ $role }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-xl font-bold">{{ $person->name }}</h3>
                                <p class="text-blue-300 font-semibold">{{ $role }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Sekbid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @foreach($structures as $structure)
                    @if(!in_array($structure->position, ['Pembina A1','Pembina A2','Sekretaris MPK', 'Bendahara MPK A1', 'Bendahara MPK A2','Sekretaris Osis', 'Bendahara Osis A1', 'Bendahara Osis A2','Ketua Divisi', 'Ketua OSIS A1', 'Ketua OSIS A2', 'Wakil Ketua OSIS A1', 'Wakil Ketua OSIS A2', 'Ketua MPK A1', 'Ketua MPK A2', 'Wakil Ketua MPK A1', 'Wakil Ketua MPK A2','Ketua Sekbid 1', 'Ketua Sekbid 2', 'Ketua Sekbid 3', 'Ketua Sekbid 4', 'Ketua Sekbid 5', 'Ketua Sekbid 6']))
                        <div class="relative group w-full h-64 overflow-hidden rounded-lg shadow-xl">
                            <img src="{{ asset('storage/' . $structure->photo) }}" 
                                 alt="{{ $structure->name }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-lg font-bold">{{ $structure->name }}</h3>
                                <p class="text-blue-300 font-semibold">{{ $structure->position }}</p>
                            </div>
                        </div>
                    @endif
                    
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
                @endforeach
        
       
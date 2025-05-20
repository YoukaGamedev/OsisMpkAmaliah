@extends('main')

@section('content')
<!-- Advanced Background with Animated Patterns -->
<div class="min-h-screen relative overflow-hidden">
    <!-- Animated Background Shapes -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-950">
        <!-- Floating Circles -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 bg-opacity-20 rounded-full blur-xl animate-float"></div>
        <div class="absolute top-40 right-20 w-48 h-48 bg-purple-500 bg-opacity-15 rounded-full blur-2xl animate-float-slow"></div>
        <div class="absolute bottom-20 left-1/4 w-40 h-40 bg-cyan-500 bg-opacity-25 rounded-full blur-xl animate-float-reverse"></div>
        <div class="absolute top-1/2 right-1/4 w-56 h-56 bg-indigo-500 bg-opacity-10 rounded-full blur-3xl animate-float-slow"></div>
        
        <!-- Geometric Patterns -->
        <svg class="absolute inset-0 w-full h-full opacity-30" viewBox="0 0 100 100">
            <defs>
                <pattern id="geometric" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <polygon points="10,0 20,10 10,20 0,10" fill="none" stroke="rgba(99,102,241,0.3)" stroke-width="0.5"/>
                </pattern>
                <linearGradient id="patternGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:rgba(59,130,246,0.2)"/>
                    <stop offset="100%" style="stop-color:rgba(139,92,246,0.2)"/>
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#geometric)"/>
        </svg>
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-slate-900/40"></div>
    </div>
    
    <!-- Additional Styles for Animation -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            33% { transform: translateY(-15px) translateX(10px); }
            66% { transform: translateY(10px) translateX(-10px); }
        }
        @keyframes float-reverse {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(15px) rotate(5deg); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-float-slow { animation: float-slow 8s ease-in-out infinite; }
        .animate-float-reverse { animation: float-reverse 7s ease-in-out infinite; }
    </style>
    <!-- Hero Section with Advanced Background -->
    <div class="relative bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 text-white overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Moving Gradient Orbs -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full filter blur-3xl opacity-20 animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full filter blur-3xl opacity-25 animate-pulse" style="animation-delay: 2s;"></div>
            
            <!-- Hexagonal Pattern -->
            <svg class="absolute inset-0 w-full h-full opacity-10" viewBox="0 0 100 100">
                <defs>
                    <pattern id="hexagons" x="0" y="0" width="10" height="8.66" patternUnits="userSpaceOnUse">
                        <polygon points="5,0 9.33,2.5 9.33,7.5 5,10 0.67,7.5 0.67,2.5" 
                                fill="none" stroke="rgba(255,255,255,0.3)" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#hexagons)"/>
            </svg>
            
            <!-- Particles Effect -->
            <div class="absolute inset-0">
                <div class="absolute w-2 h-2 bg-white rounded-full opacity-60 animate-ping" style="top: 20%; left: 15%; animation-delay: 0s;"></div>
                <div class="absolute w-1 h-1 bg-blue-300 rounded-full opacity-80 animate-ping" style="top: 60%; left: 80%; animation-delay: 1s;"></div>
                <div class="absolute w-1.5 h-1.5 bg-purple-300 rounded-full opacity-70 animate-ping" style="top: 80%; left: 30%; animation-delay: 3s;"></div>
                <div class="absolute w-1 h-1 bg-cyan-300 rounded-full opacity-90 animate-ping" style="top: 40%; left: 70%; animation-delay: 2s;"></div>
                <div class="absolute w-2 h-2 bg-indigo-300 rounded-full opacity-50 animate-ping" style="top: 25%; left: 60%; animation-delay: 4s;"></div>
            </div>
        </div>
        
        <!-- Content -->
        <div class="relative container mx-auto px-4 py-20">
            <div class="text-center">
                <h1 class="text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
                    Struktur Organisasi
                </h1>
                <div class="flex justify-center items-center gap-6 mb-6">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm px-8 py-3 rounded-full">
                        <h2 class="text-4xl font-semibold text-yellow-300">OSIS</h2>
                    </div>
                    <span class="text-3xl text-blue-200">&</span>
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm px-8 py-3 rounded-full">
                        <h2 class="text-4xl font-semibold text-yellow-300">MPK</h2>
                    </div>
                </div>
                <p class="text-blue-100 text-2xl">Periode {{ now()->year }}/{{ now()->year + 1 }}</p>
            </div>
        </div>
    </div>

    <!-- Main Content with Glass Effect -->
    <div class="relative container mx-auto px-4 py-16">
        <!-- Background Glass Effect -->
        <div class="absolute inset-0 backdrop-blur-sm bg-white/5 rounded-3xl border border-white/10"></div>
        <!-- Pembina Section -->
        <section class="relative mb-24 z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Pembina</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 mx-auto rounded-full"></div>
            </div>
            <div class="flex justify-center gap-8 flex-wrap">
                @foreach(['Pembina', 'Pembina A1', 'Pembina A2'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                            <div class="relative w-80 h-96 bg-white rounded-xl shadow-lg overflow-hidden">
                                <img src="{{ asset('storage/' . $person->photo) }}" 
                                     alt="{{ $role }}" 
                                     class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                    <h3 class="text-2xl font-bold mb-2">{{ $person->name }}</h3>
                                    <p class="text-yellow-300 font-semibold text-lg">{{ $role }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- OSIS Leadership Section -->
        <section class="relative mb-24 z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Pengurus OSIS</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-blue-400 mx-auto rounded-full"></div>
            </div>
            
            <!-- Ketua & Wakil OSIS -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-2xl mb-12 border border-white/20">
                <h3 class="text-2xl font-semibold text-white mb-8 text-center">Pimpinan OSIS</h3>
                <div class="flex flex-wrap justify-center gap-8">
                    @foreach(['Ketua OSIS A1', 'Ketua OSIS A2', 'Wakil Ketua OSIS A1', 'Wakil Ketua OSIS A2'] as $role)
                        @php $person = $structures->where('position', $role)->first(); @endphp
                        @if($person)
                            <div class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-green-500 to-blue-500 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative w-72 h-80 bg-white rounded-xl shadow-lg overflow-hidden">
                                    <img src="{{ asset('storage/' . $person->photo) }}" 
                                         alt="{{ $role }}" 
                                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-xl font-bold mb-2">{{ $person->name }}</h3>
                                        <p class="text-yellow-300 font-semibold">{{ $role }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Sekretaris & Bendahara OSIS -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-2xl border border-white/20">
                <h3 class="text-2xl font-semibold text-white mb-8 text-center">Sekretaris & Bendahara OSIS</h3>
                <div class="flex flex-wrap justify-center gap-8">
                    @foreach(['Sekretaris Osis', 'Bendahara Osis A1', 'Bendahara Osis A2'] as $role)
                        @php $person = $structures->where('position', $role)->first(); @endphp
                        @if($person)
                            <div class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative w-64 h-72 bg-white rounded-xl shadow-lg overflow-hidden">
                                    <img src="{{ asset('storage/' . $person->photo) }}" 
                                         alt="{{ $role }}" 
                                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-lg font-bold mb-2">{{ $person->name }}</h3>
                                        <p class="text-yellow-300 font-semibold">{{ $role }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <!-- MPK Leadership Section -->
        <section class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Pengurus MPK</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full"></div>
            </div>
            
            <!-- Ketua & Wakil MPK -->
            <div class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-lg mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-8 text-center">Pimpinan MPK</h3>
                <div class="flex flex-wrap justify-center gap-8">
                    @foreach(['Ketua MPK A1', 'Ketua MPK A2', 'Wakil Ketua MPK A1', 'Wakil Ketua MPK A2'] as $role)
                        @php $person = $structures->where('position', $role)->first(); @endphp
                        @if($person)
                            <div class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative w-72 h-80 bg-white rounded-xl shadow-lg overflow-hidden">
                                    <img src="{{ asset('storage/' . $person->photo) }}" 
                                         alt="{{ $role }}" 
                                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-xl font-bold mb-2">{{ $person->name }}</h3>
                                        <p class="text-yellow-300 font-semibold">{{ $role }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Sekretaris & Bendahara MPK -->
            <div class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800 mb-8 text-center">Sekretaris & Bendahara MPK</h3>
                <div class="flex flex-wrap justify-center gap-8">
                    @foreach(['Sekretaris MPK', 'Bendahara MPK A1', 'Bendahara MPK A2'] as $role)
                        @php $person = $structures->where('position', $role)->first(); @endphp
                        @if($person)
                            <div class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative w-64 h-72 bg-white rounded-xl shadow-lg overflow-hidden">
                                    <img src="{{ asset('storage/' . $person->photo) }}" 
                                         alt="{{ $role }}" 
                                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-lg font-bold mb-2">{{ $person->name }}</h3>
                                        <p class="text-yellow-300 font-semibold">{{ $role }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Divisi & Sekbid Section -->
        <section class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Divisi & Seksi Bidang</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-orange-500 to-red-500 mx-auto rounded-full"></div>
            </div>
            
            <!-- Ketua Divisi -->
            <div class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-lg mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-8 text-center">Ketua Divisi</h3>
                <div class="flex justify-center">
                    @foreach(['Ketua Divisi'] as $role)
                        @php $person = $structures->where('position', $role)->first(); @endphp
                        @if($person)
                            <div class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative w-72 h-80 bg-white rounded-xl shadow-lg overflow-hidden">
                                    <img src="{{ asset('storage/' . $person->photo) }}" 
                                         alt="{{ $role }}" 
                                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-xl font-bold mb-2">{{ $person->name }}</h3>
                                        <p class="text-yellow-300 font-semibold">{{ $role }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Ketua Sekbid -->
            <div class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-lg mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-8 text-center">Ketua Seksi Bidang</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach(['Ketua Sekbid 1', 'Ketua Sekbid 2', 'Ketua Sekbid 3', 'Ketua Sekbid 4', 'Ketua Sekbid 5', 'Ketua Sekbid 6'] as $role)
                        @php $person = $structures->where('position', $role)->first(); @endphp
                        @if($person)
                            <div class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative w-full h-80 bg-white rounded-xl shadow-lg overflow-hidden">
                                    <img src="{{ asset('storage/' . $person->photo) }}" 
                                         alt="{{ $role }}" 
                                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-xl font-bold mb-2">{{ $person->name }}</h3>
                                        <p class="text-yellow-300 font-semibold">{{ $role }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Anggota Sekbid -->
            <div class="bg-white bg-opacity-70 backdrop-blur-sm rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800 mb-8 text-center">Anggota Seksi Bidang</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($structures as $structure)
                        @if(!in_array($structure->position, ['Pembina','Pembina A1','Pembina A2','Sekretaris MPK', 'Bendahara MPK A1', 'Bendahara MPK A2','Sekretaris Osis', 'Bendahara Osis A1', 'Bendahara Osis A2','Ketua Divisi', 'Ketua OSIS A1', 'Ketua OSIS A2', 'Wakil Ketua OSIS A1', 'Wakil Ketua OSIS A2', 'Ketua MPK A1', 'Ketua MPK A2', 'Wakil Ketua MPK A1', 'Wakil Ketua MPK A2','Ketua Sekbid 1', 'Ketua Sekbid 2', 'Ketua Sekbid 3', 'Ketua Sekbid 4', 'Ketua Sekbid 5', 'Ketua Sekbid 6']))
                            <div class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-green-500 to-teal-500 rounded-lg blur opacity-60 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative w-full h-64 bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('storage/' . $structure->photo) }}" 
                                         alt="{{ $structure->name }}" 
                                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                                        <h3 class="text-lg font-bold mb-1">{{ $structure->name }}</h3>
                                        <p class="text-yellow-300 font-semibold text-sm">{{ $structure->position }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
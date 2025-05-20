@extends('footer')

@section('content')
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
                @endforeach
                </div>
                @endsection
                
        
       
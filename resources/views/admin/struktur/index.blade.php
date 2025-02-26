@extends('main')

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

    <!-- Tombol Kembali -->
    <div class="mb-4">
            <a href="{{ url('/admin') }}" class="inline-flex items-center px-5 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali
            </a>
        </div>


    <!-- Admin Controls -->
    <div class="mb-12 text-right">
        <a href="{{ route('structure.create') }}" 
           class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-all duration-200 inline-flex items-center gap-3 shadow-lg hover:shadow-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Tambah Anggota
        </a>
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
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3 mt-4">
                                    <a href="{{ route('structure.edit', $person->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('structure.destroy', $person->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $person->name }}?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
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
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3 mt-4">
                                    <a href="{{ route('structure.edit', $person->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('structure.destroy', $person->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $person->name }}?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
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
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3 mt-4">
                                    <a href="{{ route('structure.edit', $person->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('structure.destroy', $person->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $person->name }}?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
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
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3 mt-4">
                                    <a href="{{ route('structure.edit', $person->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('structure.destroy', $person->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $person->name }}?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
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
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3 mt-4">
                                    <a href="{{ route('structure.edit', $person->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('structure.destroy', $person->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $person->name }}?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
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
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3 mt-4">
                                    <a href="{{ route('structure.edit', $person->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('structure.destroy', $person->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $person->name }}?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
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
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3 mt-4">
                                    <a href="{{ route('structure.edit', $person->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('structure.destroy', $person->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $person->name }}?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
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
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3 mt-4">
                                    <a href="{{ route('structure.edit', $structure->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('structure.destroy', $structure->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 shadow hover:shadow-md"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $structure->name }}?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection
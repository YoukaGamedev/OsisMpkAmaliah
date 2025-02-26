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
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                            <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                                <img src="{{ asset('storage/' . $person->photo) }}" 
                                     alt="{{ $role }}" 
                                     class="w-48 h-48 rounded-full border-4 border-blue-500 mb-4 object-cover shadow-lg">
                                <h3 class="text-2xl font-bold text-gray-800">{{ $person->name }}</h3>
                                <p class="text-blue-600 font-semibold mb-4">{{ $role }}</p>
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3">
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
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                            <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                                <img src="{{ asset('storage/' . $person->photo) }}" 
                                     alt="{{ $role }}" 
                                     class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover shadow-lg">
                                <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                                <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3">
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
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-400 to-blue-500 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                            <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                                <img src="{{ asset('storage/' . $person->photo) }}" 
                                     alt="{{ $role }}" 
                                     class="w-36 h-36 rounded-full border-4 border-blue-300 mb-4 object-cover shadow-lg">
                                <h3 class="text-lg font-bold text-gray-800">{{ $person->name }}</h3>
                                <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3">
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
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                            <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                                <img src="{{ asset('storage/' . $person->photo) }}" 
                                     alt="{{ $role }}" 
                                     class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover shadow-lg">
                                <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                                <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3">
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
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-400 to-blue-500 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                            <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                                <img src="{{ asset('storage/' . $person->photo) }}" 
                                     alt="{{ $role }}" 
                                     class="w-36 h-36 rounded-full border-4 border-blue-300 mb-4 object-cover shadow-lg">
                                <h3 class="text-lg font-bold text-gray-800">{{ $person->name }}</h3>
                                <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                                
                                <!-- Admin Controls -->
                                <div class="flex gap-3">
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
                        <div class="relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue--500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $role }}" class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover">
                        <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                        <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>

                        <!-- Admin Controls -->
                        <div class="flex gap-3">
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
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $role }}" class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover">
                        <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                        <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>

                        <!-- Admin Controls -->
                        <div class="flex gap-3">
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
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-200 to-blue-300 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $structure->photo) }}" alt="{{ $structure->name }}" class="w-32 h-32 rounded-full border-4 border-blue-200 mb-4 object-cover">
                        <h3 class="text-lg font-bold text-gray-800">{{ $structure->name }}</h3>
                        <p class="text-blue-400 font-semibold mb-4">{{ $structure->position }}</p>

                        <div class="flex gap-4">
                        <a href="{{ route('structure.edit', $structure->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('structure.destroy', $structure->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Hapus</button>
                        </form>
                    </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
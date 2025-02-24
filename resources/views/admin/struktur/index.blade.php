@extends('main')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Struktur Organisasi OSIS Dan MPK</h1>
        <p class="text-gray-600 text-lg">Periode {{ now()->year }}/{{ now()->year + 1 }}</p>
    </div>

    <!-- Admin Controls -->
    <div class="mb-8 text-right">
        <a href="{{ route('structure.create') }}" 
           class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 inline-flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Tambah Anggota
        </a>
    </div>

    <!-- Organizational Structure -->
<div class="max-w-7xl mx-auto">
    <!-- Pembina -->
    <div class="flex justify-center mb-16">
        <div class="relative group">
            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
            <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                @foreach(['Pembina', 'Pembina A1', 'Pembina A2'] as $role)
                    @php $person = $structures->where('position', $role)->first(); @endphp
                    @if($person)
                        <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $role }}" class="w-48 h-48 rounded-full border-4 border-blue-500 mb-4 object-cover">
                        <h3 class="text-2xl font-bold text-gray-800">{{ $person->name }}</h3>
                        <p class="text-blue-600 font-semibold mb-4">{{ $role }}</p>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <!-- Ketua & Wakil Ketua OSIS -->
    <div class="flex justify-center gap-12 mb-16">
        @foreach(['Ketua OSIS A1', 'Ketua OSIS A2', 'Wakil Ketua OSIS A1', 'Wakil Ketua OSIS A2'] as $role)
            @php $person = $structures->where('position', $role)->first(); @endphp
            @if($person)
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $role }}" class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover">
                        <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                        <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Ketua MPK & Wakil Ketua MPK -->
    <div class="flex justify-center gap-12 mb-16">
        @foreach(['Ketua MPK A1', 'Ketua MPK A2', 'Wakil Ketua MPK A1', 'Wakil Ketua MPK A2'] as $role)
            @php $person = $structures->where('position', $role)->first(); @endphp
            @if($person)
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $role }}" class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover">
                        <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                        <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Ketua MPK & Wakil Ketua MPK -->
    <div class="flex justify-center gap-12 mb-16">
        @foreach(['Sekretaris MPK', 'Bendahara MPK A1', 'Bendahara MPK A2'] as $role)
            @php $person = $structures->where('position', $role)->first(); @endphp
            @if($person)
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $role }}" class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover">
                        <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                        <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Ketua MPK & Wakil Ketua MPK -->
    <div class="flex justify-center gap-12 mb-16">
        @foreach(['Sekretaris Osis', 'Bendahara Osis A1', 'Bendahara Osis A2'] as $role)
            @php $person = $structures->where('position', $role)->first(); @endphp
            @if($person)
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $role }}" class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover">
                        <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                        <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Ketua MPK & Wakil Ketua MPK -->
    <div class="flex justify-center gap-12 mb-16">
        @foreach(['Ketua Divisi'] as $role)
            @php $person = $structures->where('position', $role)->first(); @endphp
            @if($person)
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-8 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $role }}" class="w-40 h-40 rounded-full border-4 border-blue-400 mb-4 object-cover">
                        <h3 class="text-xl font-bold text-gray-800">{{ $person->name }}</h3>
                        <p class="text-blue-500 font-semibold mb-4">{{ $role }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Ketua MPK & Wakil Ketua MPK -->
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
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Divisi & Sekbid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
        @foreach($structures as $structure)
            @if(!in_array($structure->position, ['Pembina','Sekretaris MPK', 'Bendahara MPK A1', 'Bendahara MPK A2','Sekretaris Osis', 'Bendahara Osis A1', 'Bendahara Osis A2','Ketua Divisi', 'Ketua OSIS A1', 'Ketua OSIS A2', 'Wakil Ketua OSIS A1', 'Wakil Ketua OSIS A2', 'Ketua MPK A1', 'Ketua MPK A2', 'Wakil Ketua MPK A1', 'Wakil Ketua MPK A2','Ketua Sekbid 1', 'Ketua Sekbid 2', 'Ketua Sekbid 3', 'Ketua Sekbid 4', 'Ketua Sekbid 5', 'Ketua Sekbid 6']))
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-200 to-blue-300 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $structure->photo) }}" alt="{{ $structure->name }}" class="w-32 h-32 rounded-full border-4 border-blue-200 mb-4 object-cover">
                        <h3 class="text-lg font-bold text-gray-800">{{ $structure->name }}</h3>
                        <p class="text-blue-400 font-semibold mb-4">{{ $structure->position }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
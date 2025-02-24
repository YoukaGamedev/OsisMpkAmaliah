@extends('main')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Struktur Organisasi OSIS</h1>
        <p class="text-gray-600 text-lg">Periode 2024/2025</p>
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
        <div class="flex justify-center mb-12">
            <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                    @if(isset($structures->where('position', 'Pembina')->first()->photo))
                    <img src="{{ asset('storage/' . $structures->where('position', 'Pembina')->first()->photo) }}" 
                         alt="Pembina" 
                         class="w-32 h-32 rounded-full border-4 border-blue-500 mb-4">
                    @endif
                    <h3 class="text-xl font-bold text-gray-800">{{ $structures->where('position', 'Pembina')->first()->name ?? 'Pembina' }}</h3>
                    <p class="text-blue-600 font-semibold">Pembina OSIS</p>
                </div>
            </div>
        </div>

        <!-- Ketua & Wakil -->
        <div class="flex justify-center gap-8 mb-12">
            <!-- Ketua -->
            <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                    @if(isset($structures->where('position', 'Ketua')->first()->photo))
                    <img src="{{ asset('storage/' . $structures->where('position', 'Ketua')->first()->photo) }}" 
                         alt="Ketua" 
                         class="w-28 h-28 rounded-full border-4 border-blue-400 mb-4">
                    @endif
                    <h3 class="text-lg font-bold text-gray-800">{{ $structures->where('position', 'Ketua')->first()->name ?? 'Ketua' }}</h3>
                    <p class="text-blue-500 font-semibold">Ketua OSIS</p>
                </div>
            </div>

            <!-- Wakil Ketua -->
            <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-400 to-blue-500 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                    @if(isset($structures->where('position', 'Wakil Ketua')->first()->photo))
                    <img src="{{ asset('storage/' . $structures->where('position', 'Wakil Ketua')->first()->photo) }}" 
                         alt="Wakil Ketua" 
                         class="w-28 h-28 rounded-full border-4 border-blue-400 mb-4">
                    @endif
                    <h3 class="text-lg font-bold text-gray-800">{{ $structures->where('position', 'Wakil Ketua')->first()->name ?? 'Wakil Ketua' }}</h3>
                    <p class="text-blue-500 font-semibold">Wakil Ketua</p>
                </div>
            </div>
        </div>

        <!-- Sekretaris & Bendahara -->
        <div class="flex justify-center gap-8 mb-12">
            <!-- Sekretaris -->
            <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-300 to-blue-400 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                    @if(isset($structures->where('position', 'Sekretaris')->first()->photo))
                    <img src="{{ asset('storage/' . $structures->where('position', 'Sekretaris')->first()->photo) }}" 
                         alt="Sekretaris" 
                         class="w-24 h-24 rounded-full border-4 border-blue-300 mb-4">
                    @endif
                    <h3 class="text-lg font-bold text-gray-800">{{ $structures->where('position', 'Sekretaris')->first()->name ?? 'Sekretaris' }}</h3>
                    <p class="text-blue-400 font-semibold">Sekretaris</p>
                </div>
            </div>

            <!-- Bendahara -->
            <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-300 to-blue-400 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                    @if(isset($structures->where('position', 'Bendahara')->first()->photo))
                    <img src="{{ asset('storage/' . $structures->where('position', 'Bendahara')->first()->photo) }}" 
                         alt="Bendahara" 
                         class="w-24 h-24 rounded-full border-4 border-blue-300 mb-4">
                    @endif
                    <h3 class="text-lg font-bold text-gray-800">{{ $structures->where('position', 'Bendahara')->first()->name ?? 'Bendahara' }}</h3>
                    <p class="text-blue-400 font-semibold">Bendahara</p>
                </div>
            </div>
        </div>

        <!-- Koordinator Seksi -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @foreach($structures as $structure)
                @if(!in_array($structure->position, ['Pembina', 'Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara']))
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-200 to-blue-300 rounded-lg blur opacity-50 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-white p-6 rounded-lg shadow-xl flex flex-col items-center">
                        <img src="{{ asset('storage/' . $structure->photo) }}" 
                             alt="{{ $structure->name }}" 
                             class="w-20 h-20 rounded-full border-4 border-blue-200 mb-3">
                        <h3 class="text-lg font-bold text-gray-800">{{ $structure->name }}</h3>
                        <p class="text-blue-400 font-semibold">{{ $structure->position }}</p>
                        
                        <!-- Admin Controls -->
                        <div class="mt-4 flex gap-2">
                            <a href="{{ route('structure.edit', $structure->id) }}" 
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded transition-colors duration-200">
                                Edit
                            </a>
                            <form action="{{ route('structure.destroy', $structure->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded transition-colors duration-200"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
@extends('main2')

@section('content')

<div class="min-h-screen bg-gray-100 flex flex-col items-center py-12 px-4 sm:px-6 lg:px-8">
    <h3 class="text-3xl font-bold text-gray-700 mb-8 text-center">DAFTAR CALON KANDIDAT KETUA & WAKIL OSIS</h3>

    <!-- Status Message -->
                @if(session()->has('success'))
                    <div class="mt-4 p-4 bg-green-100 border border-green-200 text-green-700 rounded-lg flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="mt-4 p-4 bg-red-100 border border-green-200 text-red-700 rounded-lg flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('error') }}
                    </div>
                @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-6xl">
        @foreach ($kandidat as $kandi)
        <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center transition-transform transform hover:scale-105">
            <h5 class="text-xl font-semibold text-gray-900">PASLON {{ $kandi->nomor_pasangan_calon }}</h5>
            <div class="text-4xl font-bold text-blue-600 my-3">{{ $kandi->nomor_pasangan_calon }}</div>
            <img class="w-full h-52 object-cover rounded-lg border mb-4" src="{{ $kandi->foto ? asset('storage/' . $kandi->foto) : 'https://via.placeholder.com/350x200' }}" alt="Paslon {{ $kandi->nomor_pasangan_calon }}">

            <h5 class="text-lg font-medium text-gray-800">Calon Ketua & Wakil Osis</h5>
            <p class="text-gray-600 text-center">{{ $kandi->nama_pasangan_calon }}</p>
            
            <!-- Tombol untuk menampilkan Visi Misi -->
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-700 transition" onclick="toggleVisiMisi(this)">Tampilkan Visi Misi</button>
            <div class="hidden mt-3 p-4 bg-gray-100 rounded-lg text-gray-700">{{ $kandi->visi_misi }}</div>

            <!-- Form untuk memilih kandidat -->
            <form action="{{ route('vote.store') }}" method="POST" class="w-full mt-4">
                @csrf
                <input type="hidden" name="kandidat_id" value="{{ $kandi->id }}">
                <button type="submit" class="w-full px-6 py-3 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition">Pilih Pasangan No {{ $kandi->nomor_pasangan_calon }}</button>
            </form>

        </div>
        @endforeach
    </div>
</div>

<script>
    function toggleVisiMisi(button) {
        const visiMisiDiv = button.nextElementSibling;
        visiMisiDiv.classList.toggle("hidden");
        button.textContent = visiMisiDiv.classList.contains("hidden") ? "Tampilkan Visi Misi" : "Sembunyikan Visi Misi";
    }
</script>

@endsection

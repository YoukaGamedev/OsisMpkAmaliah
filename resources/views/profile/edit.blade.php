@extends('main')

@section('content')
    <!-- Edit Profil Container -->
    <div class="container mx-auto px-6 py-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Edit Profil</h2>
            
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Foto Profil -->
                <div class="flex flex-col items-center">
                    <div class="relative">
                        <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('asset/img/default-avatar.png') }}" 
                             alt="User Avatar" 
                             class="w-32 h-32 rounded-full border-4 border-gray-300 shadow-md">
                    </div>
                    <label class="mt-4 text-gray-600 font-medium">Ganti Foto Profil:</label>
                    <input type="file" name="avatar" class="border border-gray-300 p-2 rounded-lg w-full text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                </div>

                <!-- Nama -->
                <div>
                    <label class="font-semibold text-gray-700">Nama:</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" 
                           class="border border-gray-300 p-3 w-full rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                </div>

                <!-- Tombol Simpan & Kembali -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('profile.show') }}" 
                       class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition flex items-center">
                        <i class="bi bi-arrow-left mr-2"></i> Kembali
                    </a>

                    <button type="submit" 
                            class="bg-blue-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-blue-600 transition flex items-center">
                        <i class="bi bi-save mr-2"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
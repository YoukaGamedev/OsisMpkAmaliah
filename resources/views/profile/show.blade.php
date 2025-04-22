@extends('main')

@section('content')
    <!-- Profil Container -->
    <div class="container mx-auto px-6 py-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <div class="flex flex-col items-center">
                <!-- Foto Profil -->
                <div class="relative">
                    <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('asset/img/default-avatar.png') }}" 
                         alt="User Avatar" class="w-32 h-32 rounded-full border-4 border-gray-300 shadow-md">
                </div>

                <!-- Nama & Role -->
                <h2 class="mt-4 text-2xl font-semibold text-gray-800">{{ Auth::user()->name }}</h2>
                <p class="text-gray-500 capitalize">{{ Auth::user()->role }}</p>

                <!-- Detail User -->
                <div class="mt-6 w-full text-gray-700 space-y-4">
                    <div class="flex justify-between bg-gray-100 p-3 rounded">
                        <span class="font-semibold">Email:</span>
                        <span>{{ Auth::user()->email }}</span>
                    </div>

                    <div class="flex justify-between bg-gray-100 p-3 rounded">
                        <span class="font-semibold">Bergabung Sejak:</span>
                        <span>{{ Auth::user()->created_at->format('d M Y') }}</span>
                    </div>

                    <div class="flex justify-between bg-gray-100 p-3 rounded">
                        <span class="font-semibold">Kepengurusan:</span>
                        <span>{{ Auth::user()->kepengurusan ?? '-' }}</span>
                    </div>

                    <div class="flex justify-between bg-gray-100 p-3 rounded">
                        <span class="font-semibold">Sekolah:</span>
                        <span>{{ Auth::user()->sekolah }}</span>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="mt-6 flex space-x-4">
                <a href="{{ url()->previous() }}" 
   class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition flex items-center">
    <i class="bi bi-arrow-left mr-2"></i> Kembali
</a>

                    <a href="{{ route('profile.edit') }}" 
                       class="bg-blue-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-blue-600 transition flex items-center">
                        <i class="bi bi-pencil-square mr-2"></i> Edit Profil
                    </a>

                    <a href="{{ url('/logout') }}" 
                       class="bg-red-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-red-600 transition flex items-center">
                        <i class="bi bi-box-arrow-right mr-2"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

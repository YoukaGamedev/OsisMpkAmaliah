@extends('main2')

@section('content')
    <div class="flex flex-col items-center p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 w-full max-w-5xl">
            <a href="{{ url('/user/pemilu/home') }}" class="relative flex flex-col items-center justify-center p-8 bg-pink-500 text-white font-bold rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 opacity-30 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" viewBox="0 0 24 24">
                    <path d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z"></path>
                </svg>
                <h3 class="z-10 text-lg">Pemilu Ketua OSIS</h3>
            </a>

            <a href="{{ url('/admin/gds/indexgds') }}" class="relative flex flex-col items-center justify-center p-8 bg-blue-500 text-white font-bold rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 opacity-30 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" viewBox="0 0 24 24">
                    <path d="M20 3H4c-1.103 0-2 .897-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V5c0-1.103-.897-2-2-2zm-1 9h-3.142c-.446 1.722-1.997 3-3.858 3s-3.412-1.278-3.858-3H4V5h16v7h-1z"></path>
                </svg>
                <h3 class="z-10 text-lg">Gerakan Disiplin Siswa</h3>
            </a>

            <a href="#" class="relative flex flex-col items-center justify-center p-8 bg-gray-500 text-white font-bold rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 opacity-30 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" viewBox="0 0 24 24">
                    <path d="M10 4v4H3v10c0 1.103.s897 2 2 2h14c1.103 0 2-.897 2-2V8h-7V4h-4zm2 12h-2v-2h2v2zm0-4h-2v-2h2v2z"></path>
                </svg>
                <h3 class="z-10 text-lg">Coming Soon</h3>
            </a>
        </div>
    </div>
@endsection

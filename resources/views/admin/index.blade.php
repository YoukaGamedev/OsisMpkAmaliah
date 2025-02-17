@extends('main')

@section('content')
<div class="container mx-auto px-6 py-8">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <a href="{{ url('/admin/pemilu/dashboard') }}" class="transition-transform transform hover:scale-105">
            <div class="bg-pink-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-vote-yea text-4xl mb-4 opacity-80"></i>
                <h3 class="text-lg font-semibold">Pemilu Ketua OSIS</h3>
            </div>
        </a>

        <a href="{{ url('/admin/gds/indexgds') }}" class="transition-transform transform hover:scale-105">
            <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-database text-4xl mb-4 opacity-80"></i>
                <h3 class="text-lg font-semibold">Gerakan Disiplin Siswa</h3>
            </div>
        </a>

        <a href="#" class="transition-transform transform hover:scale-105">
            <div class="bg-gray-500 text-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-hourglass-half text-4xl mb-4 opacity-80"></i>
                <h3 class="text-lg font-semibold">Coming Soon</h3>
            </div>
        </a>
    </div>
</div>
@endsection

@extends('admin.gds.gds')

@section('content2')

<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 text-center">
        <h1 class="text-2xl font-bold text-gray-700 mb-6">Buat Lembar GDS Baru</h1>
        <a href="{{ route('rekapgds.create') }}" class="bg-gray-700 text-white px-6 py-3 rounded-lg shadow-md hover:bg-gray-800 transition flex items-center justify-center">
            <i class="bi bi-file-earmark-plus mr-2"></i> Lembar GDS Baru
        </a>
    </div>
</div>

@endsection

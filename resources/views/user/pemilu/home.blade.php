@extends('main2')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-4">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-2xl w-full text-center">
        @foreach ($dashboard as $dash)
            @csrf 
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Selamat Datang di Pemilu Tahun {{ $dash->tahun_pelajaran }}</h1>
            <h4 class="text-xl text-blue-600 font-semibold mb-2">Identitas Lembaga</h4>
            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                {{ $dash->nama_sekolah }} - Kepala Sekolah {{ $dash->nama_kepsek }} <br>
                Alamat: {{ $dash->alamat_jalan }}, {{ $dash->desa }}, {{ $dash->kecamatan }}, {{ $dash->kota }} <br>
                Pemilu dilaksanakan pada tanggal {{ $dash->tanggal }}
            </p>
        @endforeach
        <a href="{{ url('/user/pemilu/pilihkandidat') }}" class="bg-blue-600 text-white py-3 px-6 rounded-lg text-lg font-semibold shadow-md hover:bg-blue-700 transition">Pilih Kandidat</a>
    </div>
</div>

@endsection

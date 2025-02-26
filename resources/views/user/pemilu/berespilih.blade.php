@extends('main')

@section('content')

<div class="flex items-center justify-center min-h-screen bg-gray-100 px-6">
  <div class="bg-white p-8 rounded-lg shadow-xl text-center w-full max-w-md">
    
    <!-- Status Message -->
    @if(session()->has('success'))
      <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-700 rounded-lg flex items-center">
        <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>{{ session('success') }}</span>
      </div>
      
      <!-- Pesan jika sukses memilih -->
      <h2 class="text-2xl font-bold text-gray-900 mb-4">Terima Kasih!</h2>
      <p class="text-gray-700 mb-6">
        Anda telah berhasil memberikan suara dalam pemilihan. Silakan logout untuk menyelesaikan proses dengan menekan tombol <strong class="text-blue-600">Keluar</strong> di bawah.
      </p>

    @elseif(session()->has('error'))
      <div class="mb-4 p-4 bg-red-100 border border-red-300 text-red-700 rounded-lg flex items-center">
        <svg class="w-6 h-6 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>{{ session('error') }}</span>
      </div>

      <!-- Pesan jika gagal memilih atau sudah memilih -->
      <h2 class="text-2xl font-bold text-gray-900 mb-4">Maaf, Anda Sudah Memilih</h2>
      <p class="text-gray-700 mb-6">
        Anda hanya dapat memberikan suara sekali. Jika ada kesalahan atau kendala, silakan hubungi panitia pemilihan.
      </p>
    @endif

    <!-- Tombol kembali atau logout -->
    <a href="{{ url('/user/pemilu/home') }}" 
       class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-semibold text-lg rounded-full shadow-md hover:bg-blue-700 transition duration-300">
      <i class="bi bi-box-arrow-right mr-2"></i> Keluar / Logout
    </a>

  </div>
</div>

@endsection

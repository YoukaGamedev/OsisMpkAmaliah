@extends('admin.pemilu.pemilu')

@section('content1')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 max-w-6xl">
        @php
            $pemiluDimulai = \App\Models\Dashboard::first()?->status_pemilu == 1;
        @endphp

        {{-- Header Section --}}
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Dashboard Pemilu</h1>
            <p class="text-gray-600">Kelola pengaturan dan informasi pemilihan umum</p>
        </div>

                {{-- Feedback Messages --}}
        @foreach (['status', 'message'] as $msg)
            @if(session($msg))
                <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6 flex items-center">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    {{ session($msg) }}
                </div>
            @endif
        @endforeach

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-6">
                <div class="flex items-center mb-2">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-medium">Terdapat kesalahan:</span>
                </div>
                <ul class="list-disc list-inside space-y-1 ml-7 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Control Panel --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">

            {{-- Toggle Pemilu --}}
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Status Pemilu</h3>
                    <div class="flex items-center">
                        <div class="w-3 h-3 rounded-full {{ $pemiluDimulai ? 'bg-green-500' : 'bg-red-500' }} mr-2"></div>
                        <span class="text-sm text-gray-600">
                            {{ $pemiluDimulai ? 'Aktif' : 'Nonaktif' }}
                        </span>
                    </div>
                </div>

                <form action="{{ route('dashboardpemilu.toggle') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full px-4 py-2.5 text-sm font-medium text-white rounded-md transition-all duration-200
                        {{ $pemiluDimulai 
                            ? 'bg-red-600 hover:bg-red-700 focus:ring-red-500' 
                            : 'bg-green-600 hover:bg-green-700 focus:ring-green-500' }}
                        focus:ring-2 focus:ring-offset-2 transform hover:scale-[1.02] active:scale-[0.98]">
                        {{ $pemiluDimulai ? 'Hentikan Pemilu' : 'Mulai Pemilu' }}
                    </button>
                </form>
            </div>

            {{-- Quick Stats --}}
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">📊 Statistik Cepat</h3>

                <div class="space-y-3">

                    {{-- Total DPT --}}
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Total DPT</span>
                        <span class="text-sm font-medium text-gray-900">
                            {{ number_format($totalDPT) }}
                        </span>
                    </div>

                    {{-- Sudah Memilih --}}
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Sudah Memilih</span>
                        <span class="text-sm font-medium text-green-600">
                            {{ number_format($sudahMemilih) }}
                        </span>
                    </div>

                    {{-- Belum Memilih --}}
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Belum Memilih</span>
                        <span class="text-sm font-medium text-red-600">
                            {{ number_format($totalDPT - $sudahMemilih) }}
                        </span>
                    </div>

                </div>
            </div>

            {{-- Per Kategori --}}
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">📑 Per Kategori</h3>

                <div class="space-y-3">

                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600">Guru</span>
                        <span class="text-sm font-medium">
                            {{ $guruSudahVote }} / {{ $totalGuru }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600">A1</span>
                        <span class="text-sm font-medium">
                            {{ $a1SudahVote }} / {{ $totalA1 }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600">A2</span>
                        <span class="text-sm font-medium">
                            {{ $a2SudahVote }} / {{ $totalA2 }}
                        </span>
                    </div>

                </div>
            </div>
        </div>

        {{-- Reset Data --}}
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Reset Data</h3>
                <p class="text-sm text-gray-600 mb-4">Hapus semua data pemilihan</p>

                <form id="resetForm" action="{{ route('reset.data') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full px-4 py-2.5 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-md
                        transition-all duration-200 focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transform 
                        hover:scale-[1.02] active:scale-[0.98]">
                        Reset Data Pemilih
                    </button>
                </form>
            </div><br>


        {{-- Main Content --}}
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900">Identitas Lembaga</h2>
                <p class="text-sm text-gray-600 mt-1">Kelola informasi dasar sekolah dan pengaturan pemilu</p>
            </div>

            <div class="p-6">
                @if($dashboard->count() == 0)
                    <form action="{{ route('dashboardpemilu.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf
                        
                        {{-- Informasi Sekolah --}}
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-100">Informasi Sekolah</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="npsn" class="block text-sm font-medium text-gray-700 mb-2">NPSN <span class="text-red-500">*</span></label>
                                    <input name="npsn" type="number" id="npsn" value="{{ old('npsn', '22556622') }}" required
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="nama-sekolah" class="block text-sm font-medium text-gray-700 mb-2">Nama Sekolah <span class="text-red-500">*</span></label>
                                    <input name="nama_sekolah" type="text" id="nama-sekolah" value="{{ old('nama_sekolah') }}" required placeholder="Masukkan nama sekolah"
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="nama-kepala-sekolah" class="block text-sm font-medium text-gray-700 mb-2">Nama Kepala Sekolah <span class="text-red-500">*</span></label>
                                    <input name="nama_kepsek" type="text" id="nama-kepala-sekolah" value="{{ old('nama_kepsek') }}" required placeholder="Masukkan nama kepala sekolah"
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="nip" class="block text-sm font-medium text-gray-700 mb-2">NIP</label>
                                    <input name="nip" type="number" id="nip" value="{{ old('nip', '10284') }}" placeholder="Masukkan NIP"
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>
                        </div>

                        {{-- Alamat --}}
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-100">Alamat</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">Alamat Jalan</label>
                                    <input name="alamat_jalan" type="text" id="alamat" value="{{ old('alamat_jalan') }}" placeholder="Contoh: Jl. Merdeka No. 10"
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="desa" class="block text-sm font-medium text-gray-700 mb-2">Desa/Kelurahan</label>
                                    <input name="desa" type="text" id="desa" value="{{ old('desa') }}" placeholder="Masukkan desa/kelurahan"
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-2">Kecamatan</label>
                                    <input name="kecamatan" type="text" id="kecamatan" value="{{ old('kecamatan') }}" placeholder="Masukkan kecamatan"
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="kabupaten" class="block text-sm font-medium text-gray-700 mb-2">Kabupaten/Kota</label>
                                    <input name="kota" type="text" id="kabupaten" value="{{ old('kota') }}" placeholder="Masukkan kabupaten/kota"
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>
                        </div>

                        {{-- Pengaturan Kegiatan --}}
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-100">Pengaturan Kegiatan</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="tahun-pelajaran" class="block text-sm font-medium text-gray-700 mb-2">Tahun Pelajaran <span class="text-red-500">*</span></label>
                                    <input name="tahun_pelajaran" type="text" id="tahun-pelajaran" value="{{ old('tahun_pelajaran', '2021/2022') }}" required placeholder="Contoh: 2023/2024"
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="tanggal-pelaksanaan" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Pelaksanaan <span class="text-red-500">*</span></label>
                                    <input name="tanggal" type="date" id="tanggal-pelaksanaan" value="{{ old('tanggal', '2021-08-17') }}" required
                                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end pt-6 border-t border-gray-100">
                            <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                                Simpan Data
                            </button>
                        </div>
                    </form>
                @else
                    {{-- Display existing data --}}
                    @foreach($dashboard as $data)
                        <div class="bg-gray-50 rounded-lg p-6 mb-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-sm">
                                <div>
                                    <span class="font-medium text-gray-600">NPSN:</span>
                                    <span class="text-gray-900 block">{{ $data->npsn ?? '-' }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-600">Nama Sekolah:</span>
                                    <span class="text-gray-900 block">{{ $data->nama_sekolah ?? '-' }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-600">Kepala Sekolah:</span>
                                    <span class="text-gray-900 block">{{ $data->nama_kepsek ?? '-' }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-600">Tahun Pelajaran:</span>
                                    <span class="text-gray-900 block">{{ $data->tahun_pelajaran ?? '-' }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-600">Tanggal Pelaksanaan:</span>
                                    <span class="text-gray-900 block">{{ $data->tanggal ? date('d M Y', strtotime($data->tanggal)) : '-' }}</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex justify-end space-x-3 pt-6 border-t border-gray-100">
                            <a href="{{ route('dashboardpemilu.edit', $data->id) }}" 
                               class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                                Edit Data
                            </a>
                            <form action="{{ route('dashboardpemilu.destroy', $data->id) }}" method="POST" class="delete-form inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all duration-200 delete-btn transform hover:scale-[1.02] active:scale-[0.98]">
                                    Hapus Data
                                </button>
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        {{-- Help Section --}}
        <div class="mt-8 bg-blue-50 border border-blue-200 rounded-lg p-6">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium text-blue-900 mb-2">Panduan Penggunaan</h3>
                    <div class="text-sm text-blue-800 space-y-1">
                        <p>• Pastikan semua data yang dimasukkan sesuai dengan dokumen resmi sekolah</p>
                        <p>• NPSN harus terdiri dari 8 digit angka yang valid</p>
                        <p>• Tanggal pelaksanaan harus sesuai dengan jadwal yang telah ditetapkan</p>
                        <p>• Gunakan tombol "Reset Data Pemilih" hanya setelah pemilihan selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- SweetAlert2 Delete Confirmation --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Delete confirmation
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Konfirmasi Hapus",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc2626",
                cancelButtonColor: "#6b7280",
                confirmButtonText: "Ya, Hapus",
                cancelButtonText: "Batal",
                buttonsStyling: false,
                customClass: {
                    confirmButton: 'px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 mr-2',
                    cancelButton: 'px-4 py-2 bg-gray-500 text-white text-sm font-medium rounded-md hover:bg-gray-600'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    this.closest('form').submit();
                }
            });
        });
    });

    // Reset data confirmation
    document.getElementById('resetForm').addEventListener('submit', function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Reset Data Pemilih",
            text: "Semua data pemilih akan dihapus. Lanjutkan?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#dc2626",
            cancelButtonColor: "#6b7280",
            confirmButtonText: "Ya, Reset",
            cancelButtonText: "Batal",
            buttonsStyling: false,
            customClass: {
                confirmButton: 'px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 mr-2',
                cancelButton: 'px-4 py-2 bg-gray-500 text-white text-sm font-medium rounded-md hover:bg-gray-600'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });
</script>
@endsection
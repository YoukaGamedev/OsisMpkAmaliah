@extends('user.gds.gds')

@section('content2')
<div class="flex justify-center mt-8">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white text-center py-4">
            <h5 class="font-bold text-xl">Tambah Pelanggaran</h5>
        </div>
        <div class="p-6">
            <form action="{{ route('pelanggaran.store') }}" method="POST">
                @csrf

                <!-- Filter & Search Siswa -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Nama Siswa</label>
                    <div class="flex flex-wrap gap-2 mb-2">
                        <select id="filterKelas" class="border px-3 py-2 rounded text-sm">
                            <option value="">Semua Kelas</option>
                            @foreach ($siswas->pluck('kelas')->unique()->sort() as $kelas)
                                <option value="{{ $kelas }}">{{ $kelas }}</option>
                            @endforeach
                        </select>

                        <select id="filterHuruf" class="border px-3 py-2 rounded text-sm">
                            <option value="">Semua Huruf</option>
                            @foreach (range('A', 'Z') as $huruf)
                                <option value="{{ $huruf }}">{{ $huruf }}</option>
                            @endforeach
                        </select>

                        <input type="text" id="searchSiswa" placeholder="Cari nama..." class="flex-1 border px-3 py-2 rounded text-sm w-full sm:w-auto" />
                    </div>

                    <select id="selectSiswa" name="siswa_id" class="w-full px-4 py-3 border border-blue-400 rounded-lg" required>
                        <option value="">-- Pilih Siswa --</option>
                        @foreach ($siswas as $siswa)
                            <option value="{{ $siswa->id }}" data-kelas="{{ $siswa->kelas }}" data-nama="{{ $siswa->nama }}">
                                {{ $siswa->nama }} ({{ $siswa->kelas }})
                            </option>
                        @endforeach
                    </select>

                    <!-- Tombol Scan -->
                    <div class="mt-3">
                        <button onclick="scanIdentitas()" type="button" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            <i class="fas fa-qrcode mr-2"></i> Scan Identitas
                        </button>
                    </div>
                </div>

                <!-- Scanner Modal -->
<div id="scannerModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-4 max-w-md w-full">
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-lg font-semibold">Scan Identitas</h2>
            <button onclick="closeScanner()" class="text-red-600 font-bold text-xl">&times;</button>
        </div>
        <div id="qr-reader" style="width: 100%;"></div>
    </div>
</div>


                <!-- Tanggal Pelanggaran -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Tanggal Pelanggaran</label>
                    <input type="date" name="tanggal_pelanggaran" class="w-full px-4 py-3 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('tanggal_pelanggaran', now()->toDateString()) }}" required>
                </div>

                <!-- Form Atribut Pelanggaran -->
                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <h6 class="text-center font-bold text-gray-700 text-lg mb-4">Atribut Pelanggaran</h6>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        @php
                        $attributes = [
                            'Dasi' => 'dasi',
                            'Kacu' => 'kacuk',
                            'Kaos Kaki' => 'kaos_kaki',
                            'Sabuk' => 'sabuk',
                            'NameTag' => 'nametag',
                            'Sepatu' => 'sepatu',
                            'Jas' => 'jas',
                            'Ring' => 'ring',
                            'Bros' => 'bros',
                            'Make Up' => 'makeup',
                            'Telat' => 'telat',
                            'Ciput' => 'ciput',
                            'Hijab' => 'hijab',
                            'Almamater' => 'almamater'
                        ];
                        @endphp

                        @foreach ($attributes as $label => $name)
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <input type="hidden" name="{{ $name }}" value="1">
                                <div class="relative inline-block w-10 mr-2 align-middle">
                                    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="checkbox hidden" value="0">
                                    <label for="{{ $name }}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>
                            <span class="text-xs font-medium">{{ $label }}</span>
                        </div>
                        @endforeach
                    </div>
                    <p class="text-sm text-center text-gray-500 mt-4">* Centang jika ada pelanggaran</p>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 rounded-lg shadow-md hover:from-green-600 hover:to-emerald-700 transition duration-300 font-bold text-lg">
                        Simpan Pelanggaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .toggle-label {
        transition: background-color 0.2s ease;
    }
    .checkbox:checked + .toggle-label {
        background-color: #10b981;
    }
    .toggle-label:before {
        content: "";
        display: block;
        width: 18px;
        height: 18px;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        top: 3px;
        left: 3px;
        transition: transform 0.2s ease;
    }
    .checkbox:checked + .toggle-label:before {
        transform: translateX(16px);
    }
</style>

<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>


<script>
    const searchInput = document.getElementById('searchSiswa');
    const filterKelas = document.getElementById('filterKelas');
    const filterHuruf = document.getElementById('filterHuruf');
    const siswaSelect = document.getElementById('selectSiswa');
    let html5QrCode;

    function filterSiswa() {
        const keyword = searchInput.value.toLowerCase();
        const kelas = filterKelas.value;
        const huruf = filterHuruf.value;

        for (const option of siswaSelect.options) {
            if (!option.value) continue;

            const nama = option.dataset.nama.toLowerCase();
            const kelasSiswa = option.dataset.kelas;
            const firstChar = nama.charAt(0).toUpperCase();

            const matchKelas = !kelas || kelas === kelasSiswa;
            const matchHuruf = !huruf || huruf === firstChar;
            const matchNama = !keyword || nama.includes(keyword);

            option.style.display = (matchKelas && matchHuruf && matchNama) ? 'block' : 'none';
        }
    }

    searchInput.addEventListener('input', filterSiswa);
    filterKelas.addEventListener('change', filterSiswa);
    filterHuruf.addEventListener('change', filterSiswa);

    function scanIdentitas() {
        const scannerModal = document.getElementById('scannerModal');
        scannerModal.classList.remove('hidden');

        html5QrCode = new Html5Qrcode("qr-reader");
        const config = { fps: 10, qrbox: 250 };

        Html5Qrcode.getCameras().then(devices => {
            if (devices && devices.length) {
                const frontCamera = devices.find(device => device.label.toLowerCase().includes('front')) || devices[0];

                html5QrCode.start(
                    frontCamera.id,
                    config,
                    qrCodeMessage => {
                        isiSiswaDariScan(qrCodeMessage);
                        closeScanner();
                    },
                    errorMessage => {
                        // Optional: console.warn(errorMessage);
                    }
                );
            } else {
                alert("Kamera tidak tersedia.");
                closeScanner();
            }
        }).catch(err => {
            alert("Gagal mengakses kamera: " + err);
            closeScanner();
        });
    }

    function closeScanner() {
        const scannerModal = document.getElementById('scannerModal');
        scannerModal.classList.add('hidden');
        if (html5QrCode) {
            html5QrCode.stop().then(() => {
                html5QrCode.clear();
            });
        }
    }

    function isiSiswaDariScan(data) {
        const siswaSelect = document.getElementById('selectSiswa');
        const options = Array.from(siswaSelect.options);
        const match = options.find(opt => opt.dataset.nama.toLowerCase().includes(data.toLowerCase()));
        if (match) {
            siswaSelect.value = match.value;
        } else {
            alert('Siswa tidak ditemukan: ' + data);
        }
    }
</script>
@endsection

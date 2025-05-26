@extends('user.gds.gds')

@section('content2')
<!-- Tom Select CSS -->
<link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Tom Select JS -->
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-8">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-100">
            <!-- Header -->
            <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 text-white text-center py-6 relative overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-10"></div>
                <div class="relative z-10">
                    <i class="fas fa-exclamation-triangle text-3xl mb-2"></i>
                    <h1 class="font-bold text-2xl md:text-3xl">Tambah Pelanggaran Siswa</h1>
                    <p class="text-indigo-100 mt-2">Sistem Pencatatan Pelanggaran GDS</p>
                </div>
            </div>

            <div class="p-8">
                <!-- Validation errors -->
                @if ($errors->any())
                    <div class="mb-6 p-5 bg-red-50 border-l-4 border-red-400 rounded-lg shadow-sm">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-exclamation-circle text-red-500 mr-2"></i>
                            <strong class="text-red-700">Oops! Ada kesalahan:</strong>
                        </div>
                        <ul class="list-disc pl-6 mt-2 text-red-600">
                            @foreach ($errors->all() as $error)
                                <li class="mb-1">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pelanggaran.store') }}" method="POST" id="pelanggaranForm">
                    @csrf

                    <!-- Student Selection Section -->
                    <div class="mb-11 bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-200">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-user-graduate text-blue-600 mr-3"></i>
                            Pilih Siswa
                        </h2>
                        
                        <!-- Filter Section -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="relative">
                                <i class="fas fa-school absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <select id="filterKelas" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white shadow-sm">
                                    <option value="">Semua Kelas</option>
                                    @foreach ($siswas->pluck('kelas')->unique()->sort() as $kelas)
                                        <option value="{{ $kelas }}">{{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="relative">
                                <i class="fas fa-font absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <select id="filterHuruf" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white shadow-sm">
                                    <option value="">Semua Huruf</option>
                                    @foreach (range('A', 'Z') as $huruf)
                                        <option value="{{ $huruf }}">{{ $huruf }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="relative hidden">
                                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input type="text" id="searchSiswa" placeholder="Cari nama siswa..." 
                                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm" />
                            </div>

                                                    <!-- Scan Button -->
                        <div class="flex justify-center">
                            <button onclick="scanIdentitas()" type="button" 
                                    class="bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white px-6 py-3 rounded-lg font-semibold shadow-lg transform transition hover:scale-105 flex items-center">
                                <i class="fas fa-qrcode mr-2"></i> 
                                Scan QR Code Identitas
                            </button>
                        </div>
                        </div>

                        <!-- Student Select -->
                        <div class="mb-4">
                            <select id="selectSiswa" name="siswa_id" placeholder="Pilih siswa..." 
                                    class="w-full px-4 py-4 border-2 border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white shadow-sm text-lg" required>
                                <option value=""></option>
                                @foreach ($siswas as $siswa)
                                    <option value="{{ $siswa->id }}" 
                                        data-kelas="{{ $siswa->kelas }}" 
                                        data-nama="{{ $siswa->nama }}"
                                        data-osis="{{ $siswa->is_osis ? '1' : '0' }}">
                                        {{ $siswa->nama }} ({{ $siswa->kelas }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- OSIS Status Indicator -->
                        <div id="osisIndicator" class="mb-4 hidden">
                            <div class="bg-yellow-100 border border-yellow-300 text-yellow-800 px-4 py-3 rounded-lg flex items-center shadow-sm">
                                <i class="fas fa-user-tie text-yellow-600 mr-2"></i>
                                <span class="font-semibold">Pengurus OSIS</span>
                            </div>
                        </div>

                    </div>

                    <!-- Scanner Modal -->
                    <div id="scannerModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
                        <div class="bg-white rounded-2xl shadow-2xl p-6 max-w-md w-full mx-4">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-bold text-gray-800 flex items-center">
                                    <i class="fas fa-qrcode text-blue-600 mr-2"></i>
                                    Scan QR Code
                                </h2>
                                <button onclick="closeScanner()" class="text-red-500 hover:text-red-700 text-2xl font-bold">&times;</button>
                            </div>
                            <div id="qr-reader" class="rounded-lg overflow-hidden"></div>
                        </div>
                    </div>

                    <!-- Date Section -->
                    <div class="mb-8 bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-xl border border-green-200">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-calendar-alt text-green-600 mr-3"></i>
                            Tanggal Pelanggaran
                        </h2>
                        <div class="relative">
                            <i class="fas fa-calendar absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="date" name="tanggal_pelanggaran" 
                                   class="w-full pl-10 pr-4 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent shadow-sm text-lg" 
                                   value="{{ old('tanggal_pelanggaran', now()->toDateString()) }}" required>
                        </div>
                    </div>

                    <!-- Violations Section -->
                    <div class="mb-8 bg-gradient-to-r from-red-50 to-pink-50 p-6 rounded-xl border border-red-200">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-red-600 mr-3"></i>
                            Jenis Pelanggaran
                        </h2>
                        
                        <!-- Alert untuk minimal satu pelanggaran -->
                        <div id="violationAlert" class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg hidden shadow-sm">
                            <div class="flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                <strong>Perhatian!</strong> Pilih minimal satu pelanggaran.
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-6">
                            @php
                                $attributes = [
                                    'Dasi' => [
                                        'name' => 'dasi',
                                        'icon' => 'fas fa-thumbtack',
                                        'color' => 'blue',
                                        'label' => 'Dasi Sekolah'
                                    ],
                                    'Kacu' => [
                                        'name' => 'kacuk',
                                        'icon' => 'fas fa-flag', // ikon pramuka
                                        'color' => 'brown',
                                        'label' => 'Atribut Pramuka (Kacu)'
                                    ],
                                    'Kaos Kaki' => [
                                        'name' => 'kaos_kaki',
                                        'icon' => 'fas fa-socks',
                                        'color' => 'purple',
                                        'label' => 'Kaos Kaki'
                                    ],
                                    'Sabuk' => [
                                        'name' => 'sabuk',
                                        'icon' => 'fas fa-grip-lines-vertical',
                                        'color' => 'yellow',
                                        'label' => 'Sabuk'
                                    ],
                                    'NameTag' => [
                                        'name' => 'nametag',
                                        'icon' => 'fas fa-id-badge',
                                        'color' => 'indigo',
                                        'label' => 'Name Tag'
                                    ],
                                    'Sepatu' => [
                                        'name' => 'sepatu',
                                        'icon' => 'fas fa-shoe-prints',
                                        'color' => 'gray',
                                        'label' => 'Sepatu'
                                    ],
                                    'Jas' => [
                                        'name' => 'jas',
                                        'icon' => 'fas fa-user-tie',
                                        'color' => 'blue',
                                        'label' => 'Jas Almamater'
                                    ],
                                    'Ring' => [
                                        'name' => 'ring',
                                        'icon' => 'fas fa-ring',
                                        'color' => 'pink',
                                        'label' => 'Perhiasan (Cincin)'
                                    ],
                                    'Bros' => [
                                        'name' => 'bros',
                                        'icon' => 'fas fa-gem',
                                        'color' => 'purple',
                                        'label' => 'Bros/Jepit'
                                    ],
                                    'Make Up' => [
                                        'name' => 'makeup',
                                        'icon' => 'fas fa-palette',
                                        'color' => 'pink',
                                        'label' => 'Make Up / Alat Kecantikan'
                                    ],
                                    'Telat' => [
                                        'name' => 'telat',
                                        'icon' => 'fas fa-clock',
                                        'color' => 'red',
                                        'label' => 'Terlambat'
                                    ],
                                    'Ciput' => [
                                        'name' => 'ciput',
                                        'icon' => 'fas fa-hat-cowboy', // atau fas fa-scarf jika tersedia
                                        'color' => 'green',
                                        'label' => 'Ciput / Kain Dalaman Hijab'
                                    ],
                                    'Hijab' => [
                                        'name' => 'hijab',
                                        'icon' => 'fas fa-user-nurse', // tidak ada fas fa-hijab, ini bisa jadi opsi
                                        'color' => 'teal',
                                        'label' => 'Hijab'
                                    ],
                                    'Almamater' => [
                                        'name' => 'almamater',
                                        'icon' => 'fas fa-graduation-cap',
                                        'color' => 'indigo',
                                        'label' => 'Jas Almamater'
                                    ],
                                ];
                                @endphp

                            @foreach ($attributes as $label => $data)
                            <div class="violation-item bg-white p-4 rounded-xl border-2 border-gray-200 hover:border-{{ $data['color'] }}-300 transition-all duration-300 shadow-sm hover:shadow-md">
                                <div class="flex flex-col items-center text-center">
                                    <div class="mb-3">
                                        <i class="{{ $data['icon'] }} text-3xl text-{{ $data['color'] }}-500"></i>
                                    </div>
                                    
                                    <span class="text-sm font-semibold text-gray-700 mb-3">{{ $label }}</span>
                                    
                                    <div class="relative">
                                        <input type="hidden" name="{{ $data['name'] }}" value="1">
                                        <input type="checkbox" name="{{ $data['name'] }}" id="{{ $data['name'] }}" 
                                               class="violation-checkbox sr-only" value="0">
                                        <label for="{{ $data['name'] }}" 
                                               class="toggle-switch flex items-center cursor-pointer">
                                            <div class="toggle-bg bg-gray-300 w-12 h-7 rounded-full shadow-inner transition-all duration-300"></div>
                                            <div class="toggle-dot absolute w-5 h-5 bg-white rounded-full shadow-md transform transition-all duration-300 left-1"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <p class="text-sm text-center text-gray-500 mb-6">
                            <i class="fas fa-info-circle mr-1"></i>
                            Aktifkan toggle untuk menandai pelanggaran
                        </p>

                        <!-- Quick Select Buttons -->
                        <div class="flex flex-wrap justify-center gap-3">
                            <button type="button" 
                                    class="px-4 py-2 bg-gradient-to-r from-red-400 to-red-500 text-white rounded-lg hover:from-red-500 hover:to-red-600 font-medium shadow-md transform transition hover:scale-105 flex items-center" 
                                    onclick="selectCommonViolation('seragam')">
                                <i class="fas fa-tshirt mr-2"></i>
                                Seragam Tidak Lengkap
                            </button>
                            <button type="button" 
                                    class="px-4 py-2 bg-gradient-to-r from-green-400 to-green-500 text-white rounded-lg hover:from-green-500 hover:to-green-600 font-medium shadow-md transform transition hover:scale-105 flex items-center" 
                                    onclick="selectCommonViolation('atribut')">
                                <i class="fas fa-id-badge mr-2"></i>
                                Atribut Lengkap
                            </button>
                            <button type="button" 
                                    class="px-4 py-2 bg-gradient-to-r from-orange-400 to-orange-500 text-white rounded-lg hover:from-orange-500 hover:to-orange-600 font-medium shadow-md transform transition hover:scale-105 flex items-center" 
                                    onclick="selectCommonViolation('telat')">
                                <i class="fas fa-clock mr-2"></i>
                                Telat
                            </button>
                            <button type="button" 
                                    class="px-4 py-2 bg-gradient-to-r from-gray-400 to-gray-500 text-white rounded-lg hover:from-gray-500 hover:to-gray-600 font-medium shadow-md transform transition hover:scale-105 flex items-center" 
                                    onclick="clearViolations()">
                                <i class="fas fa-undo mr-2"></i>
                                Reset Semua
                            </button>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" id="submitButton" 
                                class="bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 hover:from-blue-700 hover:via-purple-700 hover:to-indigo-700 text-white px-12 py-4 rounded-xl shadow-xl font-bold text-lg transform transition hover:scale-105 flex items-center mx-auto">
                            <i class="fas fa-save mr-3"></i>
                            Simpan Pelanggaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Enhanced Toggle Switch Styles */
    .toggle-switch {
        position: relative;
    }
    
    .violation-checkbox:checked + .toggle-switch .toggle-bg {
        background: linear-gradient(135deg, #10b981, #059669);
    }
    
    .violation-checkbox:checked + .toggle-switch .toggle-dot {
        transform: translateX(20px);
        background: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    .toggle-bg {
        transition: all 0.3s ease;
    }
    
    .toggle-dot {
        transition: all 0.3s ease;
        top: 4px;
    }
    
    /* Violation Item Hover Effects */
    .violation-item:hover {
        transform: translateY(-2px);
    }
    
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #667eea, #764ba2);
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, #5a67d8, #6b46c1);
    }
    
    /* Animation for form sections */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .mb-8 {
        animation: fadeInUp 0.6s ease-out;
    }
    
    /* Tom Select Custom Styling */
    .ts-control {
        border: 2px solid #cbd5e1 !important;
        border-radius: 0.5rem !important;
        padding: 0.5rem !important;
        font-size: 1rem !important;
    }
    
    .ts-control.focus {
        border-color: #3b82f6 !important;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1) !important;
    }
</style>

<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

<script>
    const searchInput = document.getElementById('searchSiswa');
    const filterKelas = document.getElementById('filterKelas');
    const filterHuruf = document.getElementById('filterHuruf');
    const siswaSelect = document.getElementById('selectSiswa');
    const osisIndicator = document.getElementById('osisIndicator');
    const violationAlert = document.getElementById('violationAlert');
    const violationCheckboxes = document.querySelectorAll('.violation-checkbox');
    const pelanggaranForm = document.getElementById('pelanggaranForm');
    let html5QrCode;

    // Filter siswa based on search criteria
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

    // Show OSIS status when a student is selected
    siswaSelect.addEventListener('change', function() {
        const selectedOption = siswaSelect.options[siswaSelect.selectedIndex];
        if (selectedOption && selectedOption.value) {
            const isOsis = selectedOption.dataset.osis === '1';
            osisIndicator.classList.toggle('hidden', !isOsis);
        } else {
            osisIndicator.classList.add('hidden');
        }
    });

    // Check if at least one violation is selected
    function hasViolationSelected() {
        for (const checkbox of violationCheckboxes) {
            if (checkbox.checked) {
                return true;
            }
        }
        return false;
    }

    // Form validation before submit
    pelanggaranForm.addEventListener('submit', function(e) {
        if (!hasViolationSelected()) {
            e.preventDefault();
            violationAlert.classList.remove('hidden');
            violationAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return false;
        }
        violationAlert.classList.add('hidden');
        
        // Show loading state
        const submitBtn = document.getElementById('submitButton');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Menyimpan...';
        submitBtn.disabled = true;
        
        return true;
    });

    // Hide violation alert when a checkbox is checked
    violationCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (hasViolationSelected()) {
                violationAlert.classList.add('hidden');
            }
        });
    });

    // Quick select common violations
    function selectCommonViolation(type) {
        clearViolations();
        
        if (type === 'seragam') {
            document.getElementById('dasi').checked = true;
            document.getElementById('sabuk').checked = true;
            document.getElementById('sepatu').checked = true;
        } else if (type === 'atribut') {
            document.getElementById('nametag').checked = true;
            document.getElementById('jas').checked = true;
            document.getElementById('almamater').checked = true;
        } else if (type === 'telat') {
            document.getElementById('telat').checked = true;
        }
        
        violationAlert.classList.add('hidden');
    }

    // Clear all violations
    function clearViolations() {
        violationCheckboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
    }

    // Search and filter event listeners
    searchInput.addEventListener('input', filterSiswa);
    filterKelas.addEventListener('change', filterSiswa);
    filterHuruf.addEventListener('change', filterSiswa);

    // QR Code Scanner
    function scanIdentitas() {
        const scannerModal = document.getElementById('scannerModal');
        scannerModal.classList.remove('hidden');

        html5QrCode = new Html5Qrcode("qr-reader");
        const config = { fps: 10, qrbox: 250 };

        Html5Qrcode.getCameras().then(devices => {
            if (devices && devices.length) {
                const backCamera = devices.find(device => device.label.toLowerCase().includes('back'));
                const cameraId = backCamera ? backCamera.id : devices[0].id;

                html5QrCode.start(
                    cameraId,
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
    try {
        // Cek jika data mengandung format ID:|Siswa:
        if (data.includes('ID:') || data.includes('Siswa:')) {
            const parts = data.split('|');
            let siswaId = null;
            let siswaName = null;
            
            for (const part of parts) {
                if (part.trim().startsWith('ID:')) {
                    siswaId = part.trim().replace('ID:', '').trim();
                } else if (part.trim().startsWith('Siswa:')) {
                    siswaName = part.trim().replace('Siswa:', '').trim();
                }
            }
            
            const tomSelect = siswaSelect.tomselect;
            
            // Cari berdasarkan ID terlebih dahulu
            if (siswaId) {
                const option = tomSelect.options[siswaId];
                if (option) {
                    tomSelect.setValue(siswaId);
                    siswaSelect.dispatchEvent(new Event('change'));
                    return;
                }
            }
            
            // Jika tidak ketemu, cari berdasarkan nama
            if (siswaName) {
                const options = Object.values(tomSelect.options);
                const match = options.find(opt => 
                    opt.text.toLowerCase().includes(siswaName.toLowerCase())
                );
                
                if (match) {
                    tomSelect.setValue(match.value);
                    siswaSelect.dispatchEvent(new Event('change'));
                    return;
                }
            }
        }
        
        // Jika format tidak sesuai, coba cari langsung di options
        const tomSelect = siswaSelect.tomselect;
        const options = Object.values(tomSelect.options);
        
        // Cari berdasarkan ID
        const idMatch = options.find(opt => opt.value === data);
        if (idMatch) {
            tomSelect.setValue(data);
            siswaSelect.dispatchEvent(new Event('change'));
            return;
        }
        
        // Cari berdasarkan nama
        const nameMatch = options.find(opt => 
            opt.text.toLowerCase().includes(data.toLowerCase())
        );
        
        if (nameMatch) {
            tomSelect.setValue(nameMatch.value);
            siswaSelect.dispatchEvent(new Event('change'));
        } else {
            alert('Siswa tidak ditemukan dari QR code: ' + data);
        }
    } catch (error) {
        console.error('Error parsing QR data:', error);
        alert('Format QR code tidak sesuai atau terjadi kesalahan.');
    }
}

    // Initialize Tom Select
    document.addEventListener('DOMContentLoaded', function () {
        new TomSelect("#selectSiswa", {
            placeholder: "Ketik untuk mencari siswa...",
            allowEmptyOption: true,
            maxOptions: 1000,
            sortField: {
                field: "text",
                direction: "asc"
            },
            render: {
                option: function(data, escape) {
                    return `<div class="flex items-center p-2">
                        <i class="fas fa-user-graduate text-blue-500 mr-3"></i>
                        <div>
                            <div class="font-semibold text-gray-800">${escape(data.text.split(' (')[0])}</div>
                            <div class="text-sm text-gray-500">${escape(data.text.split(' (')[1]?.replace(')', '') || '')}</div>
                        </div>
                    </div>`;
                },
                item: function(data, escape) {
                    return `<div class="flex items-center">
                        <i class="fas fa-user-graduate text-blue-500 mr-2"></i>
                        ${escape(data.text)}
                    </div>`;
                }
            }
        });
    });
</script>
@endsection
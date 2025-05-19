@extends('user.gds.gds')

@section('content2')
<div class="flex justify-center mt-8">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-yellow-600 to-yellow-800 text-white text-center py-4">
            <h5 class="font-bold text-xl">Edit Pelanggaran</h5>
        </div>
        <div class="p-6">
            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    <strong>Oops! Ada kesalahan:</strong>
                    <ul class="list-disc pl-5 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pelanggaran.update', $pelanggaran->id_pelanggaran) }}" method="POST" id="pelanggaranForm">
                @csrf
                @method('PUT')

                <!-- Siswa (readonly) -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Nama Siswa</label>
                    <input type="text" value="{{ $pelanggaran->siswa->nama }} ({{ $pelanggaran->siswa->kelas }})" class="w-full px-4 py-3 border border-blue-400 rounded-lg bg-gray-100 cursor-not-allowed" readonly>
                </div>

                <!-- Tanggal -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold text-lg mb-2">Tanggal Pelanggaran</label>
                    <input type="date" name="tanggal_pelanggaran" class="w-full px-4 py-3 border border-blue-400 rounded-lg" value="{{ old('tanggal_pelanggaran', $pelanggaran->tanggal_pelanggaran) }}" required>
                </div>

                <!-- Atribut Pelanggaran -->
                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <h6 class="text-center font-bold text-gray-700 text-lg mb-4">Atribut Pelanggaran</h6>

                    <div id="violationAlert" class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg hidden">
                        <strong>Perhatian!</strong> Pilih minimal satu pelanggaran.
                    </div>

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

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        @foreach ($attributes as $label => $name)
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <input type="hidden" name="{{ $name }}" value="1">
                                <div class="relative inline-block w-10 mr-2 align-middle">
                                    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="violation-checkbox checkbox hidden" value="0"
                                        {{ $pelanggaran->$name == 0 ? 'checked' : '' }}>
                                    <label for="{{ $name }}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>
                            <span class="text-xs font-medium">{{ $label }}</span>
                        </div>
                        @endforeach
                    </div>

                    <p class="text-sm text-center text-gray-500 mt-4">* Centang jika ada pelanggaran</p>
                </div>

                <!-- Tombol Reset & Simpan -->
                <div class="mb-6 flex flex-wrap justify-center gap-2">
                    <button type="button" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300" onclick="clearViolations()">Reset</button>
                </div>

                <div class="mt-6">
                    <button type="submit" id="submitButton" class="w-full bg-gradient-to-r from-yellow-500 to-yellow-600 text-white py-3 rounded-lg shadow-md hover:from-yellow-600 hover:to-yellow-700 transition duration-300 font-bold text-lg">
                        Update Pelanggaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tambahkan style dan script toggle checkbox sama seperti halaman create -->
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
            // Scroll to violation alert
            violationAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return false;
        }
        violationAlert.classList.add('hidden');
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
                // Try to use back camera first (better for scanning)
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
            // Try to parse the QR code data (expected format: "Siswa: Name | Kelas: Class | ID: ID")
            const parts = data.split('|');
            
            let siswaId = null;
            let siswaName = null;
            
            // Extract the ID
            for (const part of parts) {
                if (part.trim().startsWith('ID:')) {
                    siswaId = part.trim().replace('ID:', '').trim();
                } else if (part.trim().startsWith('Siswa:')) {
                    siswaName = part.trim().replace('Siswa:', '').trim();
                }
            }
            
            const siswaSelect = document.getElementById('selectSiswa');
            
            // Try to find by ID first (most accurate)
            if (siswaId) {
                for (const option of siswaSelect.options) {
                    if (option.value === siswaId) {
                        siswaSelect.value = option.value;
                        siswaSelect.dispatchEvent(new Event('change'));
                        return;
                    }
                }
            }
            
            // If ID not found, try to find by name
            if (siswaName) {
                const options = Array.from(siswaSelect.options);
                const match = options.find(opt => opt.dataset.nama && opt.dataset.nama.toLowerCase().includes(siswaName.toLowerCase()));
                if (match) {
                    siswaSelect.value = match.value;
                    siswaSelect.dispatchEvent(new Event('change'));
                    return;
                }
            }
            
            // If still no match, try using the entire data string
            const options = Array.from(siswaSelect.options);
            const match = options.find(opt => opt.dataset.nama && data.toLowerCase().includes(opt.dataset.nama.toLowerCase()));
            if (match) {
                siswaSelect.value = match.value;
                siswaSelect.dispatchEvent(new Event('change'));
            } else {
                alert('Siswa tidak ditemukan dari QR code: ' + data);
            }
        } catch (error) {
            console.error('Error parsing QR data:', error);
            alert('Format QR code tidak sesuai.');
        }
    }
</script>

<script>
    const violationAlert = document.getElementById('violationAlert');
    const violationCheckboxes = document.querySelectorAll('.violation-checkbox');
    const pelanggaranForm = document.getElementById('pelanggaranForm');

    pelanggaranForm.addEventListener('submit', function(e) {
        if (!Array.from(violationCheckboxes).some(cb => cb.checked)) {
            e.preventDefault();
            violationAlert.classList.remove('hidden');
            violationAlert.scrollIntoView({ behavior: 'smooth' });
        } else {
            violationAlert.classList.add('hidden');
        }
    });

    violationCheckboxes.forEach(cb => {
        cb.addEventListener('change', () => {
            if (violationCheckboxes.some(c => c.checked)) {
                violationAlert.classList.add('hidden');
            }
        });
    });

    function clearViolations() {
        violationCheckboxes.forEach(cb => cb.checked = false);
    }
</script>
@endsection

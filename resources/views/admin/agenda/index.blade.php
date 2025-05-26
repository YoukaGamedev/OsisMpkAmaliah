@extends('main')

@section('content')
<div class="container mx-auto py-5 px-4">
    <div class="flex justify-center">
        <div class="w-full lg:w-10/12">
            <!-- Header dengan animasi fade-in -->
            <div class="text-center mb-4 animate-fade-in">
                <h2 class="text-2xl font-bold text-blue-600">Agenda Kegiatan OSIS</h2>
                <div class="text-sm text-gray-500">Sistem Informasi Organisasi Siswa Intra Sekolah</div>
            </div>
            
            <!-- Tombol Kembali -->
        <div class="mb-4">
            <a href="{{ url('/admin') }}" class="inline-flex items-center px-5 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali
            </a>
        </div>

            <!-- Card utama dengan desain calendar -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden animate-fade-in-up">
                <div class="bg-blue-600 px-4 py-3 flex justify-between items-center">
                    <div class="flex items-center">
                        <button id="prevMonth" class="p-2 text-white hover:bg-blue-700 rounded">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <h5 id="currentMonth" class="mx-2 text-white font-bold">Februari 2025</h5>
                        <button id="nextMonth" class="p-2 text-white hover:bg-blue-700 rounded">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('agenda.create') }}" class="bg-green-600 text-white px-3 py-1 rounded flex items-center hover:bg-green-400">
                            <i class="bi bi-plus-circle mr-1"></i> Tambah Agenda
                        </a>
                        <button id="toggleView" class="bg-transparent border border-white text-white px-3 py-1 rounded hover:bg-blue-700">
                            <i class="bi bi-list"></i> Tampilan List
                        </button>
                    </div>
                </div>
                
                <!-- Calendar View -->
                <div id="calendarView" class="p-0 bg-white">
                    <!-- Header Hari -->
                    <div class="grid grid-cols-7 text-center font-bold bg-gray-100 border-b py-2">
                        <div>Min</div>
                        <div>Sen</div>
                        <div>Sel</div>
                        <div>Rab</div>
                        <div>Kam</div>
                        <div>Jum</div>
                        <div>Sab</div>
                    </div>
                    
                    <!-- Grid Kalender -->
                    <div id="calendarGrid" class="calendar-grid">
                        <!-- Contoh baris kalender (akan diisi oleh JavaScript) -->
                        <div class="grid grid-cols-7 calendar-row h-full">
                            <!-- Ini akan diisi dinamis oleh JavaScript -->
                        </div>
                    </div>
                </div>
                
                <!-- List View (tersembunyi secara default) -->
                <div id="listView" class="p-0 bg-white hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full mb-0">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2">No</th>
                                    <th class="px-4 py-2">Judul</th>
                                    <th class="px-4 py-2">Tanggal</th>
                                    <th class="px-4 py-2">Deskripsi</th>
                                    <th class="px-4 py-2 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($agendas as $index => $agenda)
                                    <tr class="animate-fade-in" style="--animate-duration: 0.{{ $index + 3 }}s">
                                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2 font-semibold text-blue-600">{{ $agenda->judul }}</td>
                                        <td class="px-4 py-2">
                                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-sm">
                                                <i class="bi bi-calendar-event mr-1"></i>
                                                {{ \Carbon\Carbon::parse($agenda->tanggal)->format('d M Y') }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-2">{{ Str::limit($agenda->deskripsi, 50) }}</td>
                                        <td class="px-4 py-2 text-center">
                                            <div class="flex justify-center gap-2">
                                                <a href="{{ route('agenda.show', $agenda->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </a>
                                                <a href="{{ route('agenda.edit', $agenda->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                                <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus agenda ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <div class="flex flex-col items-center animate-fade-in">
                                                <i class="bi bi-calendar-x text-gray-400 text-5xl"></i>
                                                <p class="text-gray-500 mt-3">Belum ada agenda yang tersedia.</p>
                                                <a href="{{ route('agenda.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded mt-2 hover:bg-blue-600">
                                                    <i class="bi bi-plus-circle"></i> Tambah Agenda Baru
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Event -->
<div class="modal hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="eventModal">
    <div class="modal-dialog relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="modal-content">
            <div class="modal-header bg-blue-600 text-white p-3 rounded-t-md">
                <h5 class="modal-title" id="eventModalLabel">Detail Agenda</h5>
                <button type="button" class="close text-white" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-3" id="eventModalBody">
                <div class="text-center py-3" id="noEventsMessage">
                    <i class="bi bi-calendar-x text-gray-400 text-5xl"></i>
                    <p class="mt-3 text-gray-500">Tidak ada agenda pada tanggal ini</p>
                    <a href="{{ route('agenda.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded mt-2 hover:bg-blue-600">
                        <i class="bi bi-plus-circle"></i> Tambah Agenda Baru
                    </a>
                </div>
                <div id="eventList" class="hidden">
                    <!-- Event items will be added here dynamically -->
                </div>
            </div>
            <!-- Modal Footer dengan Tombol Tutup -->
            <div class="modal-footer p-3 border-t">
                <button type="button" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600" onclick="closeModal()">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan link CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<style>
    .calendar-grid {
        min-height: 75vh;
    }
    
    .calendar-row {
        min-height: 16.66%;
    }
    
    .calendar-day {
        position: relative;
        height: 100%;
        min-height: 100px;
        cursor: pointer;
        transition: all 0.2s;
        border: 1px solid #f0f0f0;
    }
    
    .calendar-day:hover {
        background-color: #f8f9fa;
    }
    
    .calendar-day.active {
        background-color: #e9f5ff !important;
        border-color: #3b82f6;
    }
    
    .calendar-day.other-month {
        background-color: #f8f9fa;
        color: #adb5bd;
    }
    
    .calendar-day .date {
        position: absolute;
        top: 5px;
        right: 10px;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    
    .calendar-day.today .date {
        background-color: #3b82f6;
        color: white;
        border-radius: 50%;
    }
    
    .event-indicator {
        display: block;
        margin: 2px;
        padding: 2px 5px;
        font-size: 0.75rem;
        border-radius: 3px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        background-color: #e2f0ff;
        color: #3b82f6;
        border-left: 3px solid #3b82f6;
    }
    
    /* Untuk indikator multi-event */
    .more-events {
        display: block;
        text-align: center;
        font-size: 0.75rem;
        color: #6c757d;
        margin-top: 2px;
    }
    
    /* Media queries untuk responsivitas */
    @media (max-width: 768px) {
        .calendar-day {
            min-height: 80px;
        }
        
        .event-indicator {
            font-size: 0.65rem;
            padding: 1px 3px;
            margin: 1px;
        }
    }
    
    /* Animasi untuk hover */
    .pulse-animate {
        animation: pulse 1s;
    }
    
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sample data untuk demo - dalam implementasi nyata, data ini dapat diambil dari backend
    const events = @json($agendas ?? []);
    
    // Set tanggal hari ini
    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    
    // DOM Elements
    const calendarGrid = document.getElementById('calendarGrid');
    const currentMonthEl = document.getElementById('currentMonth');
    const prevMonthBtn = document.getElementById('prevMonth');
    const nextMonthBtn = document.getElementById('nextMonth');
    const toggleViewBtn = document.getElementById('toggleView');
    const calendarView = document.getElementById('calendarView');
    const listView = document.getElementById('listView');
    
    // Render kalender saat halaman dimuat
    renderCalendar(currentMonth, currentYear);
    
    // Event listeners untuk navigasi kalender
    prevMonthBtn.addEventListener('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear);
    });
    
    nextMonthBtn.addEventListener('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear);
    });
    
    // Toggle antara tampilan kalender dan list
    toggleViewBtn.addEventListener('click', function() {
        if (calendarView.style.display !== 'none') {
            calendarView.style.display = 'none';
            listView.style.display = 'block';
            toggleViewBtn.innerHTML = '<i class="bi bi-calendar"></i> Tampilan Kalender';
        } else {
            calendarView.style.display = 'block';
            listView.style.display = 'none';
            toggleViewBtn.innerHTML = '<i class="bi bi-list"></i> Tampilan List';
        }
    });
    
    // Fungsi untuk render kalender
    function renderCalendar(month, year) {
        // Update judul bulan
        const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        currentMonthEl.textContent = `${monthNames[month]} ${year}`;
        
        // Mendapatkan tanggal pertama dari bulan
        const firstDay = new Date(year, month, 1);
        // Mendapatkan hari dari tanggal pertama (0 = Minggu, 1 = Senin, dst)
        const startingDay = firstDay.getDay();
        
        // Mendapatkan jumlah hari dalam bulan
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        // Mendapatkan jumlah hari di bulan sebelumnya
        const prevMonthDays = new Date(year, month, 0).getDate();
        
        // Clear grid
        calendarGrid.innerHTML = '';
        
        // Variabel untuk jumlah hari yang sudah ditampilkan
        let date = 1;
        let nextMonthDate = 1;
        
        // Membuat rows kalender (biasanya 6 baris cukup untuk semua bulan)
        for (let i = 0; i < 6; i++) {
            // Buat row
            const row = document.createElement('div');
            row.className = 'grid grid-cols-7 calendar-row';
            
            // Buat cells untuk setiap hari dalam seminggu
            for (let j = 0; j < 7; j++) {
                // Buat cell
                const cell = document.createElement('div');
                cell.className = 'calendar-day';
                
                // Isi cell dengan tanggal
                const dateSpan = document.createElement('span');
                dateSpan.className = 'date';
                
                // Tentukan tanggal mana yang ditampilkan
                if (i === 0 && j < startingDay) {
                    // Tanggal dari bulan sebelumnya
                    const prevDate = prevMonthDays - (startingDay - j - 1);
                    dateSpan.textContent = prevDate;
                    cell.classList.add('other-month');
                    cell.setAttribute('data-date', `${month === 0 ? 12 : month}/${prevDate}/${month === 0 ? year - 1 : year}`);
                } else if (date > daysInMonth) {
                    // Tanggal dari bulan berikutnya
                    dateSpan.textContent = nextMonthDate;
                    cell.classList.add('other-month');
                    cell.setAttribute('data-date', `${month === 11 ? 1 : month + 2}/${nextMonthDate}/${month === 11 ? year + 1 : year}`);
                    nextMonthDate++;
                } else {
                    // Tanggal dari bulan ini
                    dateSpan.textContent = date;
                    cell.setAttribute('data-date', `${month + 1}/${date}/${year}`);
                    
                    // Tandai hari ini
                    if (date === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                        cell.classList.add('today');
                    }
                    
                    // Tambahkan events jika ada
                    const eventsForThisDay = events.filter(event => {
                        const eventDate = new Date(event.tanggal);
                        return eventDate.getDate() === date && eventDate.getMonth() === month && eventDate.getFullYear() === year;
                    });
                    
                    if (eventsForThisDay.length > 0) {
                        // Tampilkan maksimal 3 event
                        const maxEventsToShow = 2;
                        const eventsContainer = document.createElement('div');
                        eventsContainer.className = 'events-container mt-4 pt-2';
                        
                        eventsForThisDay.slice(0, maxEventsToShow).forEach(event => {
                            const eventDiv = document.createElement('div');
                            eventDiv.className = 'event-indicator';
                            eventDiv.textContent = event.judul;
                            eventsContainer.appendChild(eventDiv);
                        });
                        
                        // Jika ada lebih dari yang ditampilkan
                        if (eventsForThisDay.length > maxEventsToShow) {
                            const moreDiv = document.createElement('div');
                            moreDiv.className = 'more-events';
                            moreDiv.textContent = `+${eventsForThisDay.length - maxEventsToShow} lainnya`;
                            eventsContainer.appendChild(moreDiv);
                        }
                        
                        cell.appendChild(eventsContainer);
                    }
                    
                    date++;
                }
                
                cell.appendChild(dateSpan);
                
                // Event listener untuk cell
                cell.addEventListener('click', function() {
                    showEvents(this.getAttribute('data-date'));
                    
                    // Tambahkan efek aktif
                    document.querySelectorAll('.calendar-day').forEach(day => {
                        day.classList.remove('active');
                    });
                    this.classList.add('active');
                    this.classList.add('pulse-animate');
                    setTimeout(() => {
                        this.classList.remove('pulse-animate');
                    }, 1000);
                });
                
                // Tambahkan cell ke row
                row.appendChild(cell);
            }
            
            // Tambahkan row ke grid
            calendarGrid.appendChild(row);
            
            // Jika sudah menampilkan semua tanggal, keluar dari loop
            if (date > daysInMonth && i > 3) {
                break;
            }
        }
    }
    
    // Fungsi untuk menampilkan events di modal
    function showEvents(dateStr) {
        const [month, day, year] = dateStr.split('/').map(Number);
        const selectedDate = new Date(year, month - 1, day);
        
        // Format tanggal untuk tampilan
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = selectedDate.toLocaleDateString('id-ID', options);
        
        // Update judul modal
        document.getElementById('eventModalLabel').textContent = `Agenda: ${formattedDate}`;
        
        // Cari events untuk tanggal yang dipilih
        const eventsForDate = events.filter(event => {
            const eventDate = new Date(event.tanggal);
            return eventDate.getDate() === day && 
                   eventDate.getMonth() === month - 1 && 
                   eventDate.getFullYear() === year;
        });
        
        const eventList = document.getElementById('eventList');
        const noEventsMessage = document.getElementById('noEventsMessage');
        
        // Update isi modal
        if (eventsForDate.length > 0) {
            eventList.innerHTML = '';
            eventList.style.display = 'block';
            noEventsMessage.style.display = 'none';
            
            eventsForDate.forEach(event => {
                const eventItem = document.createElement('div');
                eventItem.className = 'card mb-2 border-l-4 border-blue-500 animate-fade-in';
                eventItem.innerHTML = `
                    <div class="card-body p-3">
                        <h5 class="card-title">${event.judul}</h5>
                        <div class="flex justify-end gap-2 mt-2">
                            <a href="{{ route('agenda.show', '') }}/${event.id}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </div>
                    </div>
                `;
                eventList.appendChild(eventItem);
            });
        } else {
            eventList.style.display = 'none';
            noEventsMessage.style.display = 'block';
            
            // Set nilai default untuk form tambah cepat
            document.getElementById('tanggal').value = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
        }
        
        // Tampilkan modal
        const eventModal = document.getElementById('eventModal');
        eventModal.classList.remove('hidden');
        
        // Tambahkan event listener untuk tombol tambah agenda
        document.querySelector('#noEventsMessage .bg-blue-500').addEventListener('click', function(e) {
            e.preventDefault();
            eventModal.classList.add('hidden');
            
            // Buka modal tambah agenda cepat
            const quickAddModal = document.getElementById('quickAddModal');
            quickAddModal.classList.remove('hidden');
        });
    }
    
    // Double click pada calendar day untuk quick add
    document.addEventListener('dblclick', function(e) {
        if (e.target.closest('.calendar-day')) {
            const cellDate = e.target.closest('.calendar-day').getAttribute('data-date');
            const [month, day, year] = cellDate.split('/').map(Number);
            
            // Set nilai default untuk form tambah cepat
            document.getElementById('tanggal').value = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
            
            // Buka modal tambah agenda cepat
            const quickAddModal = document.getElementById('quickAddModal');
            quickAddModal.classList.remove('hidden');
        }
    });
});
// Fungsi untuk menutup modal
function closeModal() {
    const eventModal = document.getElementById('eventModal');
    eventModal.classList.add('hidden'); // Menyembunyikan modal
}

// Fungsi untuk menampilkan modal
function showModal() {
    const eventModal = document.getElementById('eventModal');
    eventModal.classList.remove('hidden'); // Menampilkan modal
}

// Contoh penggunaan:
// Saat ingin menampilkan modal, panggil showModal()
// Saat ingin menutup modal, panggil closeModal()
</script>
@endsection
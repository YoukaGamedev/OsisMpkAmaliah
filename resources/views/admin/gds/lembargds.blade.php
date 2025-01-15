@extends('admin.gds.gds')

@section('content2')
<style>
    /* Styling yang sama */
</style>
<div class="mt-4">
    <div class="main-content">
        <h2 class="text-center">Detail Rekap GDS</h2>
        <div class="card mb-4">
            <div class="card-header">Detail Data</div>
            <div class="card-body">
                @if(isset($rekapgds) && count($rekapgds) > 0)
                    @foreach($rekapgds as $rekap)
                        <p><strong>PJ:</strong> {{ $rekap->pj }}</p>
                        <p><strong>Hari:</strong> {{ $rekap->hari }}</p>
                        <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($rekap->created_at)->format('d-m-Y') }}</p>
                    @endforeach
                @else
                    <p class="text-center">Data rekap tidak tersedia.</p>
                @endif
            </div>
        </div>

         <!-- Search and Scan -->
         <div class="d-flex justify-content-start align-items-center mt-4">
            <form method="GET" action="{{ route('siswa.search') }}" class="input-group" style="max-width: 300px;">
                <input type="text" name="query" class="form-control" placeholder="Cari..." aria-label="Cari">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <form method="POST" action="{{ route('siswa.scan') }}" class="ml-3">
                @csrf
                <input type="hidden" name="qr_data" id="qr_data">
                <button type="submit" class="btn btn-scan">
                    <i class="fas fa-qrcode"></i> Scan
                </button>
            </form>
        </div>
        <br>

        <!-- Tabel -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Dasi/Kacu</th>
                    <th>Kaos Kaki</th>
                    <th>Sabuk</th>
                    <th>Nametag</th>
                    <th>Sepatu</th>
                    <th>Jas</th>
                    <th>Ring</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($siswa ?? [] as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->dasi_kacu ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->kaos_kaki ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->sabuk ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->nametag ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->sepatu ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->jas ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->ring ? 'Ya' : 'Tidak' }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11" class="text-center">Data tidak ditemukan.</td>
                </tr>
                @endforelse
            </tbody>            
        </table>
    </div>
</div>
@endsection

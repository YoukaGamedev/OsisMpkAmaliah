@extends('admin.gds.gds')

@section('content2')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('warning'))
<div class="alert alert-warning">
    {{ session('warning') }}
</div>
@endif

<style>
    .small-card {
        max-width: 500px;
        margin: 0 auto;
    }
    .table-edited {
        margin-top: 20px;
    }
</style>

<div class="mt-4">
    <div class="main-content">
        <h2 class="text-center">Detail Rekap GDS</h2>

        <!-- Detail Data -->
<div class="card mb-4 small-card">
    <div class="card-header">Detail Data</div>
    <div class="card-body">
        <!-- Check if there is at least one rekapgds -->
        @if($rekapgds->isNotEmpty())
            <p><strong>PJ:</strong> {{ $rekapgds->first()->pj }}</p>
            <p><strong>Hari:</strong> {{ $rekapgds->first()->hari }}</p>
            <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($rekapgds->first()->created_at)->format('d-m-Y') }}</p>
        @else
            <p>Data Rekap GDS tidak ditemukan.</p>
        @endif
    </div>
</div>


        <!-- Search Form -->
        <div class="d-flex justify-content-start align-items-center mt-4">
            <form method="GET" action="{{ route('siswa.search') }}" class="input-group" style="max-width: 300px;">
                <input type="text" name="query" class="form-control" placeholder="Cari..." aria-label="Cari">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <br>

        <!-- Tabel Data -->
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
                        <a href="{{ route('siswa.edit', $item->id) }}" 
                           class="btn btn-warning">
                           Edit
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11" class="text-center">Data tidak ditemukan.</td>
                </tr>
                @endforelse
            </tbody>            
        </table>

        <!-- Tabel Data yang Telah Diedit -->
        <div class="table-edited">
            <h4 class="text-center">Data yang Telah Diedit</h4>
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
                        <th>Tanggal Diedit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $data)
                        <!-- Only show edited data with "Tidak" in any of the fields -->
                        @if($data->dasi_kacu == false || $data->kaos_kaki == false || $data->sabuk == false || $data->nametag == false || $data->sepatu == false || $data->jas == false || $data->ring == false)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->dasi_kacu ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->kaos_kaki ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->sabuk ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->nametag ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->sepatu ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->jas ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->ring ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->updated_at)->format('d-m-Y H:i') }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

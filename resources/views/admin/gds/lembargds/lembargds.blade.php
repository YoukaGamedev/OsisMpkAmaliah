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
    .navbar-custom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa;
        padding: 10px 20px;
        border-radius: 10px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }
    .navbar-title {
        font-size: 18px;
        font-weight: bold;
    }
</style>

<div class="mt-4">
    <div class="main-content">
        <div class="navbar-custom">
            <div class="navbar-title">Detail Data</div>
            <div>
                @if($rekapgds->isNotEmpty())
                    <span><strong>PJ:</strong> {{ $rekapgds->first()->pj }}</span> |
                    <span><strong>Hari:</strong> {{ $rekapgds->first()->hari }}</span> |
                    <span><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($rekapgds->first()->created_at)->format('d-m-Y') }}</span>
                @else
                    <span>Data Rekap GDS tidak ditemukan.</span>
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-start align-items-center mt-4">
            <a href="{{ route('siswa.index') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-search"></i> Cari Data Siswa
            </a>
            <a href="#" class="btn btn-primary">
                <i class="fas fa-qrcode"></i> Scan
            </a>
        </div>
        <br>

        <!-- Tabel dengan Scroll Bar -->
        <div class="table-responsive">
            <h4 class="text-center">Siswa Yang Melanggar</h4>
            <table class="table table-bordered table-sm">
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
                        <th>Bros</th>
                        <th>Make Up</th>
                        <th>Telat</th>
                        <th>Ciput</th>
                        <th>Hijab</th>
                        <th>Almamater</th>
                        <th>WearPack</th>
                        <th>Tanggal Diedit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswas as $data)
                        @if(!$data->dasi_kacu || !$data->kaos_kaki || !$data->sabuk || !$data->nametag || !$data->sepatu || !$data->jas || !$data->ring || !$data->bros || !$data->makeup || !$data->telat || !$data->ciput || !$data->hijab || !$data->almamater || !$data->wearpack)
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
                                <td>{{ $data->bros ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->makeup ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->telat ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->ciput ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->hijab ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->almamater ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $data->wearpack ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->updated_at)->format('d-m-Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
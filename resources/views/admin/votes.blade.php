@extends('main')

@section('content')
<div class="container mt-5">
    <h3 class="text-center">Hasil Voting Kandidat</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nomor Paslon</th>
                <th>Nama Paslon</th>
                <th>Jumlah Voting</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datakandidat as $kandidat)
            <tr>
                <td>{{ $kandidat->nomor_pasangan_calon }}</td>
                <td>{{ $kandidat->nama_pasangan_calon }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

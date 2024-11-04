@extends('admin.pemilu')

@section('content1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kandidat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #f4f4f4;">
    <div class="mt-4">
        <div class="row">
            <!-- Input Form - Positioned to the Left with Card -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4">TAMBAH KANDIDAT CALON PEMILIHAN</h5>
                        <form action="{{ ('/admin/datakandidat') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input name="nisn" type="text" class="form-control" id="nisn" placeholder="NISN">
                            </div>
                            <div class="form-group">
                                <label for="nomorPasangan">Nomor Pasangan Calon</label>
                                <input name="nomor_pasangan_calon" type="text" class="form-control" id="nomorPasangan" placeholder="Nomor Pasangan Calon">
                            </div>
                            <div class="form-group">
                                <label for="namaPasangan">Nama Pasangan Calon</label>
                                <input name="nama_pasangan_calon" type="text" class="form-control" id="namaPasangan" placeholder="Nama Pasangan Calon">
                            </div>
                            <div class="form-group">
                                <label for="visiMisi">Visi Misi</label>
                                <textarea name="visi_misi" class="form-control" id="visiMisi" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input name="foto" type="file" class="form-control-file" id="foto">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Data Table - Positioned to the Right -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4">Data Kandidat</h2>
                        <table class="table table-sm table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col" class="text-start">NISN</th>
                                    <th scope="col">Nomor Paslon</th>
                                    <th scope="col">Nama Paslon</th>
                                    <th scope="col">Visi Misi</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col" class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($datakandidat as $kandidat)
                            @csrf 
                                <tr>
                                    <th scope="row">{{$loop -> iteration}}</th>
                                    <td class="text-start">{{ $kandidat->nisn }}</td>
                                    <td>{{ $kandidat->nomor_pasangan_calon }}</td>
                                    <td>{{ $kandidat->nama_pasangan_calon }}</td>
                                    <td>{{ $kandidat->visi_misi }}</td>
                                    @if($kandidat->foto)
                                    <td><img src="{{ asset('storage/' . $kandidat->foto) }}" alt="" width="50"></td>
                                    @endif
                                    <td class="text-end"><form action="{{ url('admin/datakandidat/'.$kandidat->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah data akan di hapus?')">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                            </form></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection

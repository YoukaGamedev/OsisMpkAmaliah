@extends('admin.gds.gds') <!-- Sesuaikan layout dengan project Anda -->

@section('content2')
    <div class="mt-4">
        <h2 class="text-center mb-4">Tambah Rekap GDS</h2>

        <!-- Form Input Data Siswa -->
        <div class="card mb-4">
            <div class="card-header">Form Input</div>
            <div class="card-body">
                <form action="{{ route('rekapgds.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pj">PJ</label>
                        <input type="text" class="form-control" id="pj" name="pj" placeholder="PJ" required>
                    </div>
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>                
            </div>
        </div>
@endsection

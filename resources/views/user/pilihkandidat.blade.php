@extends('main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Calon Kandidat Ketua & Wakil OSIS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .candidate-card {
      border: 2px solid #ddd;
      border-radius: 10px;
      padding: 10px;
      background-color: #fff;
      margin: 10px 0;
    }
    .candidate-card img {
      width: 100%;
      height: auto;
      border-bottom: 2px solid #ddd;
      padding-bottom: 10px;
    }
    .candidate-card h4, .candidate-card h5, .candidate-card p {
      text-align: center;
    }
    .candidate-number {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin: 10px 0;
    }
    .vote-btn {
      width: 100%;
      margin-top: 10px;
    }
    .visi-misi {
      max-height: 150px;
      overflow-y: auto;
      padding: 10px;
      border-top: 1px solid #ddd;
      margin-top: 10px;
      display: none;
    }
  </style>
</head>
<body>

  <div class="mt-3">
    <h3 class="text-center mb-4">DAFTAR CALON KANDIDAT KETUA & WAKIL OSIS</h3>
    
    <div class="row">
      @foreach ($datakandidat as $kandidat)
      <div class="col-md-5">
        <div class="candidate-card">
          <h5>PASLON {{ $kandidat->nomor_pasangan_calon }}</h5>
          <div class="candidate-number">{{ $kandidat->nomor_pasangan_calon }}</div>
          @if($kandidat->foto)
          <img src="{{ asset('storage/' . $kandidat->foto) }}" alt="Paslon {{ $kandidat->nomor_pasangan_calon }}">
          @endif
          <div class="row mt-3">
            <div class="col-12 text-center">
              <h5>Calon Ketua & Wakil Osis</h5>
              <p>{{ $kandidat->nama_pasangan_calon }}</p>
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-info mt-2" onclick="toggleVisiMisi(this)">Tampilkan Visi Misi</button>
          </div>
          <div class="visi-misi">
            <p>{{ $kandidat->visi_misi }}</p>
          </div>

          <!-- Voting Form -->
          <form action="{{ url('/user/berespilih') }}">
            <button type="submit" class="btn btn-success vote-btn">Pilih Pasangan No {{ $kandidat->nomor_pasangan_calon }}</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function toggleVisiMisi(button) {
      const visiMisiDiv = button.closest('.candidate-card').querySelector('.visi-misi');
      if (visiMisiDiv.style.display === "none" || visiMisiDiv.style.display === "") {
        visiMisiDiv.style.display = "block";
        button.innerText = "Sembunyikan Visi Misi";
      } else {
        visiMisiDiv.style.display = "none";
        button.innerText = "Tampilkan Visi Misi";
      }
    }
  </script>
</body>
</html>

@endsection

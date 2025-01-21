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
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      padding-top: 50px;
      padding-bottom: 70px;
    }
    .candidate-card {
      width: 100%;
      max-width: 400px; /* Maximum width of the card */
      border: 2px solid #ddd;
      border-radius: 15px;
      background-color: #fff;
      margin-bottom: 20px;
      padding: 15px;  /* Reduced padding to make the card shorter */
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-left: auto;
      margin-right: auto;
    }
    .candidate-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }
    .candidate-card img {
      width: 100%;
      height: auto;
      max-height: 200px; /* Limiting height of the image */
      object-fit: cover;
      border-bottom: 2px solid #ddd;
      padding-bottom: 15px;
      border-radius: 10px;
    }
    .candidate-card h5, .candidate-card p {
      text-align: center;
      color: #333;
      font-size: 1.1rem; /* Reduced font size to save space */
    }
    .candidate-number {
      font-size: 28px;  /* Reduced size for candidate number */
      font-weight: bold;
      color: #007bff;
      text-align: center;
      margin: 10px 0;  /* Reduced margin */
    }
    .card-title {
      font-size: 1.3rem;
      font-weight: 700;
      color: #343a40;
      margin-bottom: 10px;
    }
    .card-subtitle {
      font-size: 1rem;
      font-weight: 500;
      color: #6c757d;
      margin-bottom: 10px;  /* Reduced margin */
    }
    .btn-info {
      font-size: 1rem;  /* Reduced button font size */
      padding: 6px 12px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .btn-info:hover {
      background-color: #0056b3;
    }
    .vote-btn {
      width: 100%;
      padding: 15px;  /* Reduced padding to make the button shorter */
      font-size: 1.2rem;  /* Slightly smaller text */
      border-radius: 5px;
      margin-top: 15px;  /* Reduced margin */
      background-color: #28a745;
      color: #fff;
      transition: background-color 0.3s ease;
    }
    .vote-btn:hover {
      background-color: #218838;
    }
    .visi-misi {
      max-height: 150px;  /* Reduced max-height */
      overflow-y: auto;
      padding: 10px;  /* Reduced padding */
      border-top: 2px solid #ddd;
      margin-top: 10px;  /* Reduced margin */
      display: none;
      background-color: #f8f9fa;
      border-radius: 8px;
    }
    h3 {
      color: rgb(0, 0, 0);
      font-size: 2rem;  /* Reduced the size of the title */
      font-weight: 700;
      margin-bottom: 40px;
      text-align: center;
    }
    .row {
      display: flex;
      justify-content: space-around;
      gap: 20px;
      flex-wrap: wrap;
    }
    .col-md-4, .col-lg-3 {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    @media (max-width: 768px) {
      .candidate-card {
        width: 80%;
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h3 class="text-center mb-5">DAFTAR CALON KANDIDAT KETUA & WAKIL OSIS</h3>
    
    <div class="row">
      @foreach ($datakandidat as $kandidat)
      <div class="mb-4">
        <div class="candidate-card">
          <h5 class="card-title">PASLON {{ $kandidat->nomor_pasangan_calon }}</h5>
          <div class="candidate-number">{{ $kandidat->nomor_pasangan_calon }}</div>
          @if($kandidat->foto)
          <img src="{{ asset('storage/' . $kandidat->foto) }}" alt="Paslon {{ $kandidat->nomor_pasangan_calon }}">
          @else
          <img src="https://via.placeholder.com/350x200" alt="Paslon {{ $kandidat->nomor_pasangan_calon }}">
          @endif
          <div class="mt-3">
            <h5 class="card-title">Calon Ketua & Wakil Osis</h5>
            <p>{{ $kandidat->nama_pasangan_calon }}</p>
          </div>
          <div class="text-center">
            <button class="btn btn-info" onclick="toggleVisiMisi(this)">Tampilkan Visi Misi</button>
          </div>
          <div class="visi-misi">
            <p>{{ $kandidat->visi_misi }}</p>
          </div>

          <!-- Voting Form -->
          <form action="{{ url('/user/berespilih') }}">
            <button type="submit" class="btn vote-btn">Pilih Pasangan No {{ $kandidat->nomor_pasangan_calon }}</button>
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

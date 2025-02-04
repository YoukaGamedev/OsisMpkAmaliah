@extends('main2')

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
      max-width: 450px; /* Increased card width */
      border: 2px solid #ddd;
      border-radius: 15px;
      background-color: #fff;
      margin-bottom: 20px;
      padding: 20px;  /* Increased padding for better content spacing */
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
      max-height: 250px; /* Increased image height */
      object-fit: cover;
      border-bottom: 2px solid #ddd;
      padding-bottom: 15px;
      border-radius: 10px;
    }
    .candidate-card h5, .candidate-card p {
      text-align: center;
      color: #333;
      font-size: 1.1rem; /* Kept font size */
    }
    .candidate-number {
      font-size: 32px;  /* Increased size for candidate number */
      font-weight: bold;
      color: #007bff;
      text-align: center;
      margin: 15px 0;  /* Increased margin */
    }
    .card-title {
      font-size: 1.5rem;  /* Increased title font size */
      font-weight: 700;
      color: #343a40;
      margin-bottom: 10px;
    }
    .card-subtitle {
      font-size: 1.1rem; /* Increased font size for subtitle */
      font-weight: 500;
      color: #6c757d;
      margin-bottom: 10px;
    }
    .btn-info {
      font-size: 1.1rem;  /* Slightly bigger button text */
      padding: 8px 16px;  /* Slightly bigger padding */
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .btn-info:hover {
      background-color: #0056b3;
    }
    .vote-btn {
      width: 100%;
      padding: 18px;  /* Increased padding */
      font-size: 1.4rem;  /* Bigger button text */
      border-radius: 5px;
      margin-top: 20px;  /* Increased margin */
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
      font-size: 2.5rem;  /* Increased title size */
      font-weight: 700;
      margin-bottom: 40px;
      text-align: center;
    }
    .row {
      display: flex;
      justify-content: center;  /* Centered cards */
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
          <form action="{{ url('/user/pemilu/berespilih') }}">
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

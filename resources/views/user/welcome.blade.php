@extends('main')

@section('content')
    <style>
        /* General Style */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fafb;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .welcome-message {
            text-align: center;
            padding: 50px;
            background-color: #6200ea;
            color: white;
            font-size: 26px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        a {
            text-decoration: none;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }

        /* Box Styles */
        .box {
            background-color: #ffffff;
            padding: 30px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .box h3 {
            font-size: 20px;
            margin: 0;
            color: #fffdfd;
            font-weight: bold;
        }

        .box:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Box Highlight Colors */
        .highlight {
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        .pink {
            background-color: #e91e63;
        }

        .blue {
            background-color: #2196f3;
        }

        .green {
            background-color: #4caf50;
        }

        .purple {
            background-color: #9c27b0;
        }

        /* Large Box (covers full width) */
        .large-box {
            grid-column: span 3; /* Membuat box ini lebih besar */
            background-color: #673ab7;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            padding: 40px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .box-container {
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr 1fr; /* 2 kolom pada perangkat kecil */
            }
        }

        @media (max-width: 480px) {
            .container {
                grid-template-columns: 1fr; /* 1 kolom pada perangkat sangat kecil */
            }
        }
    </style>

    <div class="container">
        <a href="{{ url('/user/home') }}" class="box-container">
            <div class="box highlight pink">
                <h3>Pemilu Ketua OSIS</h3>
            </div>
        </a>

        <a href="{{ url('/admin/gds/indexgds') }}" class="box-container">
            <div class="box highlight blue">
                <h3>Gerakan Disiplin Siswa</h3>
            </div>
        </a>

        <a href="#" class="box-container">
            <div class="box highlight grey">
                <h3>Coming Soon</h3>
            </div>
        </a>

@endsection

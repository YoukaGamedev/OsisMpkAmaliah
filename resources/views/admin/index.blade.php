@extends('main')

@section('content')
    <style>
        /* General Style */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
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

        .container a {
            text-decoration: none;
        }

        /* Box Styles */
        .box {
            background-color:  #f4f4f4;
            padding: 30px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
            position: relative;
        }

        .box h3 {
            font-size: 20px;
            margin: 0;
            color: #fffdfd;
            font-weight: bold;
            text-decoration: none;
            z-index: 2;
        }

        .box:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .box svg {
            width: 80px;
            height: 80px;
            fill: rgba(255, 255, 255, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            opacity: 0.3;
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
        <a href="{{ url('/admin/dashboard') }}" class="box-container">
            <div class="box highlight pink">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z"></path>
                </svg>
                <h3>Pemilu Ketua OSIS</h3>
            </div>
        </a>

        <a href="{{ url('/admin/gds/indexgds') }}" class="box-container">
            <div class="box highlight blue">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20 3H4c-1.103 0-2 .897-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V5c0-1.103-.897-2-2-2zm-1 9h-3.142c-.446 1.722-1.997 3-3.858 3s-3.412-1.278-3.858-3H4V5h16v7h-1z"></path>
                </svg>
                <h3>Gerakan Disiplin Siswa</h3>
            </div>
        </a>

        <a href="#" class="box-container">
            <div class="box highlight grey">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10 4v4H3v10c0 1.103.s897 2 2 2h14c1.103 0 2-.897 2-2V8h-7V4h-4zm2 12h-2v-2h2v2zm0-4h-2v-2h2v2z"></path>
                </svg>
                <h3>Coming Soon</h3>
            </div>
        </a>
    </div>
@endsection

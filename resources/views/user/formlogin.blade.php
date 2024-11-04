<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osis & MPK Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General styles */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(rgb(232, 231, 231), rgb(203, 219, 246));
        }

        /* Container to make sure content takes full viewport height */
        .full-height {
            height: 100vh;
        }

        /* Left image section styling */
        .login-image {
            background-image: url('{{ asset('asset/img/amaliah.jpg') }}'); /* Replace with the actual image URL */
            background-size: cover;
            background-position: center;
            filter: brightness(70%); /* Darken the background image */
        }

        /* Form styling */
        .login-form {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 2rem;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Reduced shadow for a softer effect */
            background-color: #fff; /* Set card background to white */
            color: #000; /* Set text color to black for contrast */
        }

        .form-box {
            width: 100%;
            max-width: 400px;
            position: relative; /* For absolute positioning of pseudo-element */
        }

        .form-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #3498db; /* Color for the title */
            margin-bottom: 1rem;
            text-align: center;
            letter-spacing: 1px;
        }

        /* Input and button styling */
        .form-control {
            height: 45px;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ced4da;
            transition: 0.3s;
            background-color: #f0f0f0; /* Light background for input */
            color: #000; /* Black text color for input */
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            border-color: #3498db;
            background-color: #e0e0e0; /* Slightly darker background on focus */
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
            padding: 12px;
            border-radius: 5px;
            transition: 0.3s;
            font-size: 1.1rem;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .text-center a {
            color: #3498db;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .login-image {
                display: none;
            }
        }

        /* Custom background triangle shape for the form */
        .form-box:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-top: 80px solid #3498db;
            border-left: 80px solid transparent;
        }
    </style>
</head>
<body>

    <div class="container-fluid full-height">
        <div class="row h-100">
            <!-- Left Image Section -->
            <div class="col-md-6 login-image d-none d-md-block full-height">
                <!-- The background image will be applied here -->
            </div>

            <!-- Right Form Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center full-height">
                <div class="form-box">
                    <!-- Bootstrap Card with form content -->
                    <div class="card p-4">
                        <h2 class="form-title">Login Untuk Pilih Kandidat</h2>
                        <form action="{{ ('/user/pilihkandidat') }}">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input name="nama" type="text" class="form-control" id="username" placeholder="Nama">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Kelas</label>
                                <input name="kelas" type="text" class="form-control" id="username" placeholder="Kelas">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
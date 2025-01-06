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
            background: linear-gradient(120deg, #3498db, #8e44ad);
            color: #fff;
        }

        /* Full Height Container */
        .full-height {
            height: 100vh;
        }

        /* Left Image Section styling */
        .login-image {
            background-image: url('{{ asset('asset/img/amaliah.jpg') }}'); /* Replace with the actual image URL */
            background-size: cover;
            background-position: center;
            filter: brightness(60%); /* Darken the background image */
        }

        /* Form Section Styling */
        .login-form {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 3rem;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
            color: #333;
            width: 100%;
            max-width: 420px;
            padding: 30px;
        }

        .form-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #3498db;
            text-align: center;
            margin-bottom: 1.5rem;
            letter-spacing: 1px;
        }

        .form-control {
            height: 45px;
            padding: 10px;
            font-size: 1.1rem;
            border-radius: 10px;
            border: 1px solid #ced4da;
            transition: 0.3s;
            background-color: #f7f7f7;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            border-color: #3498db;
            background-color: #ffffff;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
            padding: 12px;
            border-radius: 5px;
            transition: 0.3s;
            font-size: 1.2rem;
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

        /* Custom triangle shape on the form */
        .form-box:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-top: 70px solid #3498db;
            border-left: 70px solid transparent;
        }

        /* Gradient Background Effect */
        .gradient-background {
            background: linear-gradient(120deg, #8e44ad, #3498db);
            height: 100%;
        }
    </style>
</head>
<body>

    <div class="container-fluid full-height gradient-background">
        <div class="row h-100">
            <!-- Left Image Section -->
            <div class="col-md-6 login-image d-none d-md-block full-height"></div>

            <!-- Right Form Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center full-height">
                <div class="form-box">
                    <div class="card p-4">
                        <h2 class="form-title">Login Untuk Pilih Kandidat</h2>
                        <form action="{{ ('/user/pilihkandidat') }}">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input name="nama" type="text" class="form-control" id="username" placeholder="Nama">
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input name="kelas" type="text" class="form-control" id="kelas" placeholder="Kelas">
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

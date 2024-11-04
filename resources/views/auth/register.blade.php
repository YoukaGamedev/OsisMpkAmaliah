<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osis & MPK - Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(rgb(232, 231, 231), rgb(203, 219, 246));
        }
        .full-height {
            height: 100vh;
        }
        .login-image {
            background-image: url('{{ asset('asset/img/amaliah.jpg') }}');
            background-size: cover;
            background-position: center;
            filter: brightness(70%);
        }
        .form-box {
            width: 100%;
            max-width: 400px;
            position: relative;
        }
        .form-title {
            font-size: 2rem;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 1rem;
            text-align: center;
            letter-spacing: 1px;
        }
        .form-control {
            height: 45px;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ced4da;
            transition: 0.3s;
            background-color: #f0f0f0;
            color: #000;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            border-color: #3498db;
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
        @media (max-width: 767px) {
            .login-image {
                display: none;
            }
        }
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
        <div class="col-md-6 login-image d-none d-md-block full-height"></div>

        <div class="col-md-6 d-flex align-items-center justify-content-center full-height">
            <div class="form-box">
                <div class="card p-4">
                    <!-- Tabbed navigation for Login and Register -->
                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Register</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <!-- Login Form -->
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                            <h2 class="form-title">Login Untuk Pilih Kandidat</h2>
                            <form action="{{ url('/user/pilihkandidat') }}">
                                <div class="mb-3">
                                    <label for="login-username" class="form-label">Username</label>
                                    <input name="nama" type="text" class="form-control" id="login-username" placeholder="Nama">
                                </div>
                                <div class="mb-3">
                                    <label for="login-kelas" class="form-label">Kelas</label>
                                    <input name="kelas" type="text" class="form-control" id="login-kelas" placeholder="Kelas">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                        <!-- Register Form -->
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <h2 class="form-title">Register</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="register-name" class="form-label">Name</label>
                                    <input id="register-name" type="text" class="form-control" name="name" required placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <label for="register-kelas" class="form-label">Kelas</label>
                                    <input id="register-kelas" type="text" class="form-control" name="kelas" required placeholder="Kelas">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

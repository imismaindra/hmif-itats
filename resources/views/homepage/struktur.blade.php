<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF ITATS - Struktur Organisasi</title>
    <link rel="icon" type="image/png" href="{{ asset('image/icon-hmif.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif !important;
            background-color: #f8f9fa;
        }
        .hero-structure {
            background: url("{{ asset('image/hmif-pmo.jpg') }}") no-repeat center center;
            background-size: cover;
            height: 40vh;
            color: white;
            position: relative;
        }
        .hero-structure .overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.6);
        }
        .card-custom {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .card-custom:hover {
            transform: translateY(-5px);
        }
        .card-custom img {
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('include.navbarHome')

    <!-- Hero Section -->
    <section class="hero-structure text-center d-flex align-items-center position-relative">
        <div class="overlay"></div>
        <div class="container text-white position-relative">
            <h1 class="display-4 fw-bold">Struktur Organisasi</h1>
            <p class="lead mt-3">Himpunan Mahasiswa Teknik Informatika ITATS</p>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">Struktur Kepengurusan Periode 2025/2026</h2>
                    <p class="text-muted">Berikut adalah susunan pengurus inti HMIF ITATS.</p>
                </div>
            </div>

            <div class="row text-center mb-4 justify-content-center">
                <!-- Ketua -->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-custom text-center p-4 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="120" height="120" alt="Ketua HMIF">
                        </div>
                        <h6 class="fw-bold mb-1">R. Abiyyu Ardi Lian Permadi</h6>
                        <p class="text-muted mb-1"><small>06.2023.1.07661</small></p>
                        <p class="text-muted mb-0">
                            Ketua HMIF <br>
                            <small>Periode 2025/2026</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row text-center mb-4 justify-content-center">
                <!-- Wakil Ketua -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-custom text-center p-4 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="120" height="120" alt="Wakil Ketua HMIF">
                        </div>
                        <h6 class="fw-bold mb-1">Nur Layli Ramadhani Sufyan</h6>
                        <p class="text-muted mb-1"><small>06.2024.1.07832</small></p>
                        <p class="text-muted mb-0">
                            Wakil Ketua HMIF <br>
                            <small>Periode 2025/2026</small>
                        </p>
                    </div>
                </div>

                <!-- Sekretaris -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-custom text-center p-4 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="120" height="120" alt="Sekretaris HMIF">
                        </div>
                        <h6 class="fw-bold mb-1">Ridho Pangestu</h6>
                        <p class="text-muted mb-1"><small>06.2024.1.07805</small></p>
                        <p class="text-muted mb-0">
                            Sekretaris HMIF <br>
                            <small>Periode 2025/2026</small>
                        </p>
                    </div>
                </div>

                <!-- Bendahara -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-custom text-center p-4 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="120" height="120" alt="Bendahara HMIF">
                        </div>
                        <h6 class="fw-bold mb-1">Rizka Amalia</h6>
                        <p class="text-muted mb-1"><small>06.2024.1.07825</small></p>
                        <p class="text-muted mb-0">
                            Bendahara HMIF <br>
                            <small>Periode 2025/2026</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">Struktur Kepengurusan Divisi Periode 2025/2026</h2>
                    <p class="text-muted">Berikut adalah susunan pengurus Divisi HMIF ITATS.</p>
                </div>
            </div>

            <div class="row text-center mb-4 justify-content-center">
                <!-- Wakil Ketua -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-custom text-center p-4 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="120" height="120" alt="Wakil Ketua HMIF">
                        </div>
                        <h6 class="fw-bold mb-1">Nur Layli Ramadhani Sufyan</h6>
                        <p class="text-muted mb-1"><small>06.2024.1.07832</small></p>
                        <p class="text-muted mb-0">
                            Wakil Ketua HMIF <br>
                            <small>Periode 2025/2026</small>
                        </p>
                    </div>
                </div>

                <!-- Sekretaris -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-custom text-center p-4 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="120" height="120" alt="Sekretaris HMIF">
                        </div>
                        <h6 class="fw-bold mb-1">Ridho Pangestu</h6>
                        <p class="text-muted mb-1"><small>06.2024.1.07805</small></p>
                        <p class="text-muted mb-0">
                            Sekretaris HMIF <br>
                            <small>Periode 2025/2026</small>
                        </p>
                    </div>
                </div>

                <!-- Bendahara -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-custom text-center p-4 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="120" height="120" alt="Bendahara HMIF">
                        </div>
                        <h6 class="fw-bold mb-1">Rizka Amalia</h6>
                        <p class="text-muted mb-1"><small>06.2024.1.07825</small></p>
                        <p class="text-muted mb-0">
                            Bendahara HMIF <br>
                            <small>Periode 2025/2026</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('include.footerUser')
    @include('services.LogoutModalUser')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

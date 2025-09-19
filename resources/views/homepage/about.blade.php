<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF ITATS - Tentang</title>
    <link rel="icon" type="image/png" href="{{ asset('image/icon-hmif.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif !important;
            background-color: #f8f9fa;
        }
        #aboutCarousel .carousel-inner img {
            height: 350px;
            object-fit: cover;
            width: 100%;
            border-radius: 10px;
        }
        .about-hero {
            background: url("{{ asset('image/hmif-gemini-futsal.jpg') }}") no-repeat center center;
            background-size: cover;
            height: 50vh;
            color: white;
            position: relative;
        }
        .about-hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        .about-section {
            padding: 60px 0;
        }
        .about-icon {
            font-size: 3rem;
            color: #17a2b8;
            margin-bottom: 1rem;
        }
        .card-custom {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .card-custom ul {
            padding-left: 1.2rem;
            margin-bottom: 0;
        }

        .card-custom ul li {
            margin-bottom: 0.75rem;
            line-height: 1.6;
        }
        .card-custom:hover {
            transform: translateY(-5px);
        }
        @media (max-width: 768px) {
            #aboutCarousel .carousel-inner img {
                height: 250px;
            }
        }

        @media (max-width: 576px) {
            #aboutCarousel .carousel-inner img {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('include.navbarHome')

    <!-- Hero Section -->
    <section class="about-hero text-center d-flex align-items-center position-relative">
        <div class="overlay"></div>
        <div class="container text-white position-relative">
            <h1 class="display-4 fw-bold">Tentang HMIF ITATS</h1>
            <p class="lead mt-3">
                Himpunan Mahasiswa Teknik Informatika <br>
                Institut Teknologi Adhi Tama Surabaya
            </p>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!-- Slider Gambar -->
                    <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="{{ asset('image/hmif-pmo.jpg') }}" class="d-block w-100" alt="Kegiatan HMTIF 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/hmif-webinar.jpg') }}" class="d-block w-100" alt="Kegiatan HMTIF 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/hmif-gemini-futsal.jpg') }}" class="d-block w-100" alt="Kegiatan HMTIF 3">
                            </div>
                        </div>
                        <!-- Kontrol Navigasi -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Apa itu HMIF ITATS?</h2>
                    <p class="text-muted">
                        HMIF (Himpunan Mahasiswa Teknik Informatika) adalah organisasi mahasiswa yang berfungsi sebagai wadah aspirasi, pengembangan diri, dan pemberdayaan mahasiswa Teknik Informatika ITATS.
                    </p>
                    <p class="text-muted">
                        Melalui berbagai kegiatan akademik, sosial, dan kemahasiswaan, HMIF berkomitmen untuk membangun generasi mahasiswa yang berprestasi, inovatif, dan berkarakter.
                    </p>
                </div>
            </div>

            <!-- Visi & Misi -->
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold mb-4">Visi & Misi</h2>
                </div>
                <div class="col-md-6">
                    <div class="card card-custom p-4">
                        <div class="about-icon"><i class="fas fa-eye"></i></div>
                        <h5 class="fw-bold mb-3">Visi</h5>
                        <p class="text-muted">Mewujudkan Himpunan Mahasiswa Teknik Informatika ITATS sebagai wadah yang aktif, adaptif, dan profesional dalam mengembangkan sumber daya manusia yang unggul, kolaboratif, dan siap menghadapi tantangan dunia teknologi.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-custom p-4">
                        <div class="about-icon"><i class="fas fa-bullseye"></i></div>
                        <h5 class="fw-bold mb-3">Misi</h5>
                        <ul class="text-muted text-start">
                            <li>Fokus pada pengembangan kapasitas anggota himpunan, melalui pelatihan, mentoring, dan kegiatan peningkatan soft-skill serta hard-skill secara terstruktur dan berkelanjutan.</li>
                            <li>Membentuk budaya profesionalisme di lingkungan internal himpunan, dengan penerapan nilai tanggung jawab, integritas, dan etika organisasi dalam setiap kegiatan.</li>
                            <li>Menjalin kolaborasi dengan pihak eksternal seperti alumni, industri, dan komunitas IT, guna membuka ruang pembelajaran dan jaringan karir bagi anggota.</li>
                            <li>Mengelola program kerja secara efektif dan terukur, dengan prioritas utama pada kegiatan yang memberikan dampak nyata terhadap peningkatan kualitas SDM himpunan.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tim Pengurus -->
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h2 class="fw-bold">Struktur Kepengurusan</h2>
                </div>

                <!-- Ketua -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-custom text-center p-4 shadow-sm border-0 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="100" height="100" alt="Ketua HMIF">
                        </div>
                        <h6 class="fw-bold mb-1">R. Abiyyu Ardi Lian Permadi</h6>
                        <p class="text-muted mb-1"><small>06.2023.1.07661</small></p>
                        <p class="text-muted mb-0">
                            Ketua HMIF <br>
                            <small>Periode 2025/2026</small>
                        </p>
                    </div>
                </div>

                <!-- Wakil -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-custom text-center p-4 shadow-sm border-0 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="100" height="100" alt="Wakil Ketua">
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
                    <div class="card card-custom text-center p-4 shadow-sm border-0 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="100" height="100" alt="Sekretaris">
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
                    <div class="card card-custom text-center p-4 shadow-sm border-0 rounded-3 h-100">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('image/default.png') }}"
                                class="rounded-circle shadow-sm"
                                width="100" height="100" alt="Bendahara">
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

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF ITATS - divisi</title>
    <link rel="icon" type="image/png" href="{{ asset('image/itats-1080.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif !important;
            background-color: #f8f9fa;
        }
        .divisi-section {
            padding: 0;
            margin-bottom: 60px;
        }
        .divisi-icon {
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
        .card-custom:hover {
            transform: translateY(-5px);
        }
        .tab-divisi {
            margin: 15px auto 30px;
            margin-bottom: 30px;
            text-align: center;
        }
        .card-anggota{
            background-color: #f8f9fa;
        }
        .title-divisi{
            color:#1e3d9f;
        }
        /* waves */
        .ocean {
        height: 47px;
        width: 100%;
        position: absolute;
        bottom: 54px;
        left: 0;
        right: 0;
        overflow-x: hidden;
        }
        .wave {
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 800 88.7'%3E%3Cpath d='M800 56.9c-155.5 0-204.9-50-405.5-49.9-200 0-250 49.9-394.5 49.9v31.8h800v-.2-31.6z' fill='%231e3a8c'/%3E%3C/svg%3E");
        position: absolute;
        width: 200%;
        height: 100%;
        animation: wave 10s -3s linear infinite;
        transform: translate3d(0, 0, 0);
        opacity: 0.8;
        }

        .wave:nth-of-type(2) {
        bottom: 0;
        animation: wave 18s linear reverse infinite;
        opacity: 0.7;
        }

        .wave:nth-of-type(3) {
        bottom: 0;
        animation: wave 20s -1s linear infinite;
        opacity: 0.6;
        }

@keyframes wave {
    0% {transform: translateX(0);}
    50% {transform: translateX(-25%);}
    100% {transform: translateX(-50%);}
}
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('include.navbarHome')

    <!-- Hero Section -->
    <!-- <section class="divisi-hero text-center d-flex align-items-center position-relative">
        <div class="overlay"></div>
        <div class="container text-white position-relative">
            <h1 class="display-4 fw-bold">divisi Himpunan Mahasiswa</h1>
            <p class="lead mt-3">
               Ikuti berbagai divisi menarik yang diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika
            </p>
        </div>
    </section> -->

    <!-- divisi Content -->
    <section class="divisi-section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container tab-divisi">
            <div class="d-flex justify-content-between align-items-center p-2 rounded">
                <!-- Tab Nav -->
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item ms-2" role="presentation">
                        <a class="nav-link active border border-primary rounded-pill" id="pills-psdm-tab" data-bs-toggle="pill" href="#pills-psdm" role="tab">
                            Pengembangan SDM
                        </a>
                    </li>
                    <li class="nav-item ms-2" role="presentation">
                        <a class="nav-link border border-primary rounded-pill" id="pills-humas-tab" data-bs-toggle="pill" href="#pills-humas" role="tab">
                        Hubungan Masyarakat
                        </a>
                    </li>
                    <li class="nav-item ms-2" role="presentation">
                        <a class="nav-link border border-primary rounded-pill" id="pills-litbang-tab" data-bs-toggle="pill" href="#pills-litbang" role="tab">
                        Lintas Bangunan
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-psdm" role="tabpanel">
                <div class="row align-items-start">
                    <!-- Title -->
                    <div class="col-md-6">
                        <div class="title-divisi">
                        <h5 class="mt-2 fs-1 text fw-bold">
                            Pengembangan Sumber Daya Manusia
                        </h5>
                        </div>
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-6">
                        <div class="deskripsi-divisi">
                        <p class="text-muted small">
                            Divisi PSDM (Pengembangan Sumber Daya Manusia) bertujuan untuk
                            mengembangkan potensi dan keterampilan anggota Himpunan
                            Mahasiswa Teknik Informatika melalui berbagai pelatihan,
                            workshop, dan kegiatan pengembangan diri lainnya. Divisi ini
                            berfokus pada peningkatan kompetensi teknis dan soft skills
                            anggota agar siap menghadapi tantangan di dunia kerja dan
                            kehidupan profesional.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex mx-3">
                    <div class="col-md-3 text-center">
                        <div class="card border-0 mb-4 card-anggota">
                            <!-- Foto -->
                            <img src="{{ asset('image/contoh_2.avif') }}" class="card-img-top img-fluid" alt="Foto" style="max-height: 300px; object-fit: contain;">

                            <!-- Nama & Jabatan -->
                            <div class="card-body">
                                <h5 class="card-title mb-2">
                                    <span class="fs-5 text d-inline-block border border-primary rounded-pill px-5 py-1" style="cursor: pointer;">
                                    My Pacar awokawoa
                                    </span>
                                </h5>
                                <p class="card-text text-primary fw-semibold" style="cursor: pointer;">Ketua Hatiku</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="card border-0 mb-4 card-anggota">
                            <!-- Foto -->
                            <img src="{{ asset('image/briliant_gantenk.png') }}" class="card-img-top img-fluid mx-auto d-block" style="width: 176px;height: 209px;object-fit: cover;" alt="Foto" style="max-height: 300px; object-fit: contain;">

                            <!-- Nama & Jabatan -->
                            <div class="card-body">
                            <h5 class="card-title mb-2">
                                <span class="fs-5 text d-inline-block border border-primary rounded-pill px-5 py-1">
                                Bakul Sate Kampus
                                </span>
                            </h5>
                            <p class="card-text text-primary fw-semibold">CEO, Mafia, Ustad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-humas" role="tabpanel">
                <div class="row align-items-start">
                    <!-- Title -->
                    <div class="col-md-6">
                        <div class="title-divisi">
                        <h5 class="mt-3 fs-1 text fw-bold">
                            Hubungan Masyarakat
                        </h5>
                        </div>
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-6">
                        <div class="deskripsi-divisi">
                        <p class="text-muted small">
                            Divisi Humas (Hubungan Masyarakat) bertugas untuk membangun
                            dan memelihara citra positif Himpunan Mahasiswa Teknik
                            Informatika di mata publik, baik di lingkungan kampus
                            maupun masyarakat luas. Divisi ini bertanggung jawab atas
                            komunikasi eksternal, pengelolaan media sosial, serta
                            penyelenggaraan acara yang melibatkan pihak luar.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex mx-3">
                    <div class="col-md-3 text-center">
                        <div class="card border-0 mb-4 card-anggota">
                            <!-- Foto -->
                            <img src="{{ asset('image/contoh_2.avif') }}" class="card-img-top img-fluid" alt="Foto" style="max-height: 300px; object-fit: contain;">

                            <!-- Nama & Jabatan -->
                            <div class="card-body">
                                <h5 class="card-title mb-2">
                                    <span class="fs-5 text d-inline-block border border-primary rounded-pill px-5 py-1" style="cursor: pointer;">
                                    My Pacar awokawoa
                                    </span>
                                </h5>
                                <p class="card-text text-primary fw-semibold">Ketua Hatiku</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="card border-0 mb-4 card-anggota">
                            <!-- Foto -->
                            <img src="{{ asset('image/briliant_gantenk.png') }}" class="card-img-top img-fluid mx-auto d-block" style="width: 176px;height: 209px;object-fit: cover;" alt="Foto" style="max-height: 300px; object-fit: contain;">

                            <!-- Nama & Jabatan -->
                            <div class="card-body">
                            <h5 class="card-title mb-2">
                                <span class="fs-5 text d-inline-block border border-primary rounded-pill px-5 py-1">
                                Bakul Sate Kampus
                                </span>
                            </h5>
                            <p class="card-text text-primary fw-semibold">CEO, Mafia, Ustad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-litbang" role="tabpanel">
                k
            </div>
        </div>

    </section>

    <!-- Footer -->
    @include('include.footerUser')
    @include('services.LogoutModalUser')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

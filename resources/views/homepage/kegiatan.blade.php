<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF ITATS - Kegiatan</title>
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
        .kegiatan-hero {
            background: url("{{ asset('image/d1-crop.jpg') }}") no-repeat center center;
            background-size: cover;
            height: 50vh;
            color: white;
            position: relative;
        }
        .kegiatan-hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        .kegiatan-section {
            padding: 60px 0;
        }
        .kegiatan-icon {
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
        .tab-kegiatan {
            margin: 15px auto 30px;
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('include.navbarHome')

    <!-- Hero Section -->
    <!-- <section class="kegiatan-hero text-center d-flex align-items-center position-relative">
        <div class="overlay"></div>
        <div class="container text-white position-relative">
            <h1 class="display-4 fw-bold">Kegiatan Himpunan Mahasiswa</h1>
            <p class="lead mt-3">
               Ikuti berbagai kegiatan menarik yang diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika
            </p>
        </div>
    </section> -->

    <!-- kegiatan Content -->
    <section class="kegiatan-section" data-aos="fade-up" data-aos-duration="1000">
         <!-- Search Input -->
        <form class="container" role="search">
            <input class="form-control" type="search" placeholder="Cari kegiatan..." aria-label="Search">
        </form>
        <div class="container tab-kegiatan">
            <div class="d-flex justify-content-between align-items-center bg-white p-2 rounded">
                <!-- Tab Nav -->
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-semua-tab" data-bs-toggle="pill" href="#pills-semua" role="tab">
                        <i class="fa-regular fa-calendar-days"></i> Semua</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-akan-datang-tab" data-bs-toggle="pill" href="#pills-akan-datang" role="tab">
                    Akan Datang <span class="badge rounded-pill text-white bg-info">4</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-berlangsung-tab" data-bs-toggle="pill" href="#pills-berlangsung" role="tab">
                    Berlangsung <span class="badge rounded-pill text-white bg-info">14</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-selesai-tab" data-bs-toggle="pill" href="#pills-selesai" role="tab">
                    Selesai <span class="badge rounded-pill text-white bg-info">50+</span>
                    </a>
                </li>
                </ul>
            </div>
        </div>

        <div class="container tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-semua" role="tabpanel">
                <p>Seluruh kegiatan ditampilkan di sini!</p>
            </div>
            <div class="tab-pane fade" id="pills-akan" role="tabpanel">
                p
            </div>
            <div class="tab-pane fade d-flex " id="pills-berlangsung" role="tabpanel">
                <div class="card-berlangsung mx-5">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 420px;">
                        <!-- Header -->
                        <div class="bg-primary bg-gradient text-white p-3">
                            <div class="d-flex gap-2">
                            <span class="badge bg-light text-primary fw-semibold">Akan Datang</span>
                            <span class="badge bg-warning text-dark fw-semibold">Workshop</span>
                            </div>
                            <h5 class="mt-3 fw-bold">Workshop Web Development: Build Your First Website</h5>
                        </div>

                        <!-- Body -->
                        <div class="card-body" >
                            <p class="card-text text-muted small">
                            Belajar membuat website dari nol menggunakan HTML, CSS, dan JavaScript.
                            Workshop ini cocok...
                            </p>

                            <ul class="list-unstyled small mb-3">
                            <li class="mb-2">
                                <i class="bi bi-calendar-event text-primary me-2"></i>
                                <span>25 Oktober 2024</span>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-clock text-primary me-2"></i>
                                <span>09:00 - 15:00 WIB</span>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <span>Lab Komputer Gedung A Lt. 3</span>
                            </li>
                            <li>
                                <i class="bi bi-people text-primary me-2"></i>
                                <span>25 peserta / 40 maks</span>
                            </li>
                            </ul>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer bg-light d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                            Diselenggarakan oleh <span class="fw-semibold">Himpunan Mahasiswa Teknik Informatika</span>
                            </small>
                            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold" style="display:flex;"  data-bs-toggle="modal" data-bs-target="#modalWebDev">
                            Detail <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-berlangsung">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 420px;">
                        <!-- Header -->
                        <div class="bg-primary bg-gradient text-white p-3">
                            <div class="d-flex gap-2">
                            <span class="badge bg-light text-primary fw-semibold">Akan Datang</span>
                            <span class="badge bg-warning text-dark fw-semibold">Workshop</span>
                            </div>
                            <h5 class="mt-3 fw-bold">Workshop Web Development: Build Your First Website</h5>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <p class="card-text text-muted small">
                            Belajar membuat website dari nol menggunakan HTML, CSS, dan JavaScript.
                            Workshop ini cocok...
                            </p>

                            <ul class="list-unstyled small mb-3">
                            <li class="mb-2">
                                <i class="bi bi-calendar-event text-primary me-2"></i>
                                <span>25 Oktober 2024</span>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-clock text-primary me-2"></i>
                                <span>09:00 - 15:00 WIB</span>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <span>Lab Komputer Gedung A Lt. 3</span>
                            </li>
                            <li>
                                <i class="bi bi-people text-primary me-2"></i>
                                <span>25 peserta / 40 maks</span>
                            </li>
                            </ul>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer bg-light d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                            Diselenggarakan oleh <span class="fw-semibold">Himpunan Mahasiswa Teknik Informatika</span>
                            </small>
                            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold" style="display:flex;"  data-bs-toggle="modal" data-bs-target="#modalWebDev">
                            Detail <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-selesai" role="tabpanel">
                k
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalWebDev" tabindex="-1" aria-labelledby="modalWebDevLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 rounded-4 shadow-lg">
                <div class="modal-header border-0">
                    <div class="d-flex gap-2">
                    <span class="badge bg-info text-white fw-semibold">Akan Datang</span>
                    <span class="badge bg-secondary text-dark fw-semibold">Workshop</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <h4 class="fw-bold mb-4">Workshop Web Development: Build Your First Website</h4>

                    <!-- Banner/Thumbnail -->
                    <div class="p-5 bg-light rounded-3 text-center mb-4">
                    <i class="bi bi-calendar2-week" style="font-size: 3rem; color:#0d6efd;"></i>
                    </div>

                    <!-- Info Grid -->
                    <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted"><i class="bi bi-calendar-event me-2"></i>Tanggal</small>
                        <div class="fw-semibold">25 Oktober 2024</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted"><i class="bi bi-clock me-2"></i>Waktu</small>
                        <div class="fw-semibold">09:00 - 15:00 WIB</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted"><i class="bi bi-geo-alt me-2"></i>Lokasi</small>
                        <div class="fw-semibold">Lab Komputer Gedung A Lt. 3</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted"><i class="bi bi-people me-2"></i>Peserta</small>
                        <div class="fw-semibold">25 / 40 orang</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted"><i class="bi bi-building me-2"></i>Penyelenggara</small>
                        <div class="fw-semibold">Himpunan Mahasiswa Teknik Informatika</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted"><i class="bi bi-tags me-2"></i>Kategori</small>
                        <div class="fw-semibold">Workshop</div>
                        </div>
                    </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mt-4">
                    <h6 class="fw-bold">Deskripsi Kegiatan</h6>
                    <p class="text-muted">
                        Workshop ini membahas dasar-dasar HTML, CSS, dan JavaScript dari nol.
                        Cocok untuk mahasiswa yang ingin memulai karir di bidang web development.
                    </p>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

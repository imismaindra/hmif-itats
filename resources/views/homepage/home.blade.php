<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF - Home</title>
    <link rel="icon" type="image/png" href="{{ asset('image/itats-1080.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif !important;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            padding: 80px 0;
        }
        .feature-card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 1rem;
        }
        .stats-section {
            background-color: white;
            padding: 60px 0;
        }
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 12px 30px;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* ✅ Fix ukuran gambar carousel */
        .carousel-inner img {
            height: 400px;       /* semua gambar tinggi sama */
            object-fit: cover;   /* isi frame tanpa mengubah proporsi */
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('include.navbarHome')

    <!-- Hero Section -->
    <section id="beranda" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text -->
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Himpunan Mahasiswa Teknik Informatika</h1>
                    <p class="lead mb-4">
                        Wadah kreativitas, kolaborasi, dan pengembangan diri bagi mahasiswa Teknik Informatika.
                        Bersama kita ciptakan inovasi dan prestasi.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-light btn-lg">
                            <i class="fas fa-plus me-2"></i>Bergabung dengan HMIF
                        </a>
                    </div>
                </div>

                <!-- Slider Gambar -->
                <div class="col-lg-6">
                    <div id="heroCarousel" class="carousel slide rounded shadow" data-bs-ride="carousel">
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="{{ asset('image/hmif-pmo.jpg') }}" class="d-block w-100" alt="Foto 1 HMIF">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/hmif-wisuda72.jpg') }}" class="d-block w-100" alt="Foto 2 HMIF">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/hmif-outbound.jpg') }}" class="d-block w-100" alt="Foto 3 HMIF">
                            </div>
                        </div>
                        <!-- Kontrol Navigasi -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold mb-3">Fitur Unggulan HMIF</h2>
                    <p class="text-muted">Dukung kegiatan, kolaborasi, dan inovasi mahasiswa Teknik Informatika</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Komunitas Aktif</h5>
                        <p class="text-muted">Bergabung dengan himpunan yang solid, saling mendukung, dan penuh kolaborasi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Kegiatan & Inovasi</h5>
                        <p class="text-muted">Ikuti berbagai program, workshop, dan event untuk mengembangkan potensi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Pengembangan Teknologi</h5>
                        <p class="text-muted">Kolaborasi dalam proyek teknologi dan riset untuk mencetak inovasi baru.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">300+</div>
                        <p class="text-muted mb-0">Anggota Aktif</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <p class="text-muted mb-0">Kegiatan & Event</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">20+</div>
                        <p class="text-muted mb-0">Prestasi Mahasiswa</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <p class="text-muted mb-0">Kolaborasi & Partner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('include.footerUser')
    @include('services.LogoutModalUser')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active nav link highlighting
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>

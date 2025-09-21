<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF ITATS - divisi</title>
    <link rel="icon" type="image/png" href="{{ asset('image/icon-hmif.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body{
            background-color: #f5f4f0;
        }

        .divisi-section {
            padding: 0;
            margin-bottom: 60px;
        }
        .card-anggota{
            background-color: #f5f4f0;
        }

        .tab-divisi {
            margin: 15px auto 30px;
            margin-bottom: 30px;
            text-align: center;
        }
        .title-divisi{
            color:#1e3d9f;
        }
        .card-title{
            font-size: 1rem;
        }
        .fs-0_85rem {
            font-size: 0.85rem !important;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('include.navbarHome')
    @php
        use Illuminate\Support\Str;

        $psdm = [
            [
                'nama' => 'Firman Ardiansyah',
                'jabatan' => 'Koordinator Divisi PSDM',
                'jeniskelamin' => 'L',
            ],
            [
                'nama' => 'Hasan Abdulatif',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'L',
            ],
            [
                'nama' => 'Raesyita Elga Rolobessy',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'P',
            ],
            [
                'nama' => 'Madadina Adilah Pamuji',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'P',
            ],
            [
                'nama' => 'Maria Yesinta Fernanda',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'p',
            ],
        ];
        $humas = [
             [
                'nama' => 'Tarisha Aridhah Zafirah',
                'jabatan' => 'Koordinator Divisi Humas',
                'jeniskelamin' => 'P',
            ],
            [
                'nama' => 'A Maulana Ismaindra',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'L',
            ],
            [
                'nama' => 'Timy Kakeru',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'L',
            ],
            [
                'nama' => 'Rafly Rizky Pratama',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'L',
            ],
        ];
        $litbang = [
            [
                'nama' => 'Haza Satria Nagari',
                'jabatan' => 'Koordinator Divisi Litbang',
                'jeniskelamin' => 'L',
            ],
            [
                'nama' => 'Amelia Sofia A',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'P',
            ],
            [
                'nama' => 'Nazwa Zahira E.A',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'P',
            ],
            [
                'nama' => 'Khalifullah Rafiuddin L',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'L',
            ],
            [
                'nama' => 'M Naufal Rizky .A',
                'jabatan' => 'Anggota',
                'jeniskelamin' => 'L',
            ],
        ];
    @endphp
    <!-- divisi Content -->
    <section class="divisi-section" >
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
                        Penelitian dan Pengembangan
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-psdm" role="tabpanel">
                <div class="row align-items-start">
                    <!-- Title -->
                    <div class="col-md-6" data-aos="fade-in" data-aos-duration="1000">
                        <div class="title-divisi">
                        <h5 class="mt-2 fs-1 text fw-bold">
                            Pengembangan Sumber Daya Manusia
                        </h5>
                        </div>
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-6" data-aos="fade-in" data-aos-duration="1000">
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
                <div class="row mx-3 justify-content-center">
                   @foreach ($psdm as $orang)
                        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card border-0 mb-4 card-anggota">
                                <!-- Foto -->
                                <img
                                    src="{{ $orang['jeniskelamin'] === 'L'
                                        ? asset('image/preview_foto.png')
                                        : asset('image/preview_foto_cwk1.png') }}"
                                    class="card-img-top img-fluid mx-auto d-block"
                                    alt="Foto"
                                    style="width: 176px;height: 209px;object-fit: cover;">

                                <!-- Nama & Jabatan -->
                                <div class="card-body">
                                    <h5 class="card-title mb-2">
                                        <span class="text d-inline-block border border-primary rounded-pill px-5 py-1
                                            {{ Str::length($orang['nama']) > 20 ? 'fs-0_85rem' : '' }}">
                                            {{ $orang['nama'] }}
                                        </span>
                                    </h5>
                                    <p class="card-text text-primary fw-semibold">{{ $orang['jabatan'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                <div class="row mx-3 justify-content-center">
                    @foreach ($humas as $orang)
                        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card border-0 mb-4 card-anggota">
                                <!-- Foto -->
                                <img
                                    src="{{ $orang['jeniskelamin'] === 'L'
                                        ? asset('image/preview_foto.png')
                                        : asset('image/preview_foto_cwk1.png') }}"
                                    class="card-img-top img-fluid mx-auto d-block"
                                    alt="Foto"
                                    style="width: 176px;height: 209px;object-fit: cover;">

                                <!-- Nama & Jabatan -->
                                <div class="card-body">
                                    <h5 class="card-title mb-2">
                                        <span class="text d-inline-block border border-primary rounded-pill px-5 py-1
                                            {{ Str::length($orang['nama']) > 19 ? 'fs-0_85rem' : '' }}">
                                            {{ $orang['nama'] }}
                                        </span>
                                    </h5>
                                    <p class="card-text text-primary fw-semibold">{{ $orang['jabatan'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-litbang" role="tabpanel">
                <div class="row align-items-start">
                    <!-- Title -->
                    <div class="col-md-6">
                        <div class="title-divisi">
                        <h5 class="mt-3 fs-1 text fw-bold">
                            Penelitian dan Pengembangan
                        </h5>
                        </div>
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-6">
                        <div class="deskripsi-divisi">
                        <p class="text-muted small">
                            Divisi Penelitian dan Pengembangan bertugas untuk melakukan
                            riset dan pengembangan dalam bidang teknologi informasi,
                            serta mengimplementasikan hasil penelitian tersebut
                            dalam program kerja Himpunan Mahasiswa Teknik Informatika.
                            Divisi ini berfokus pada inovasi, pengembangan produk,
                            dan peningkatan kualitas layanan yang berbasis teknologi.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="row mx-3 justify-content-center">
                    @foreach ($litbang as $orang)
                        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card border-0 mb-4 card-anggota">
                                <!-- Foto -->
                                <img
                                    src="{{ $orang['jeniskelamin'] === 'L'
                                        ? asset('image/preview_foto.png')
                                        : asset('image/preview_foto_cwk1.png') }}"
                                    class="card-img-top img-fluid mx-auto d-block"
                                    alt="Foto"
                                    style="width: 176px;height: 209px;object-fit: cover;">

                                <!-- Nama & Jabatan -->
                                <div class="card-body">
                                    <h5 class="card-title mb-2">
                                        <span class="text d-inline-block border border-primary rounded-pill px-5 py-1
                                            {{ Str::length($orang['nama']) > 19 ? 'fs-0_85rem' : '' }}">
                                            {{ $orang['nama'] }}
                                        </span>
                                    </h5>
                                    <p class="card-text text-primary fw-semibold">{{ $orang['jabatan'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

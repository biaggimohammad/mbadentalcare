<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MBA Dental Care</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('/landingpage/assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('/landingpage/assets/img/logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/landingpage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/landingpage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/landingpage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/landingpage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/landingpage/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Invent
  * Template URL: https://bootstrapmade.com/invent-bootstrap-business-template/
  * Updated: May 12 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('/landingpage/assets/img/logombapanjang.png') }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#portfolio">Layanan</a></li>
                    <li><a href="#pricing">Harga</a></li>
                    <li><a href="#team">Tim Dokter</a></li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#about">Mulai Konsultasi</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="badge-wrapper mb-3">
                            <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                                <div class="icon-circle me-2">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <span class="badge-text me-3">Pelayanan Terbaik, Harga Termurah</span>
                            </div>
                        </div>

                        <h1 class="hero-title mb-4">Klinik Gigi Termurah Se Indonesia!</h1>

                        <p class="hero-description mb-4">Kami berkomitmen memberikan perawatan gigi berkualitas tinggi
                            dengan biaya yang terjangkau. Wujudkan senyum impian Anda bersama kami.</p>

                        <div class="cta-wrapper">
                            <a href="#pricing" class="btn btn-primary">Lihat Paket Harga</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="{{ asset('/landingpage/assets/img/illustration/timdokter.png') }}"
                                alt="Business Growth" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row feature-boxes">
                    <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-gear"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Peralatan Modern</h3>
                                <p class="feature-text">Menggunakan teknologi terkini untuk hasil perawatan yang
                                    maksimal dan nyaman.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Sterilisasi Terjamin</h3>
                                <p class="feature-text">Kami mengutamakan kebersihan dan sterilisasi alat untuk keamanan
                                    pasien.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Konsultasi Gratis</h3>
                                <p class="feature-text">Hubungi kami untuk mendapatkan jadwal konsultasi gratis dengan
                                    dokter ahli kami selama perawatan.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p class="who-we-are">Tentang Kami</p>
                        <h3>Klinik Gigi Terpercaya Pilihan Keluarga</h3>
                        <p class="fst-italic">
                            Di M. Budi A. Dental Care, kami percaya bahwa setiap orang berhak memiliki senyum yang sehat
                            dan menawan tanpa harus khawatir dengan biaya.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Ditangani oleh dokter gigi profesional dan
                                    berpengalaman.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Menyediakan lingkungan yang nyaman dan ramah
                                    untuk semua usia.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Berkomitmen pada pelayanan terbaik dengan
                                    harga
                                    paling kompetitif di kota Anda.</span></li>
                        </ul>
                        <a href="#contact" class="read-more"><span>Hubungi Kami</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <img src="{{ asset('/landingpage/assets/img/about/praktek1.jpg') }}"
                                    class="img-fluid" alt="Dokter Gigi">
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('/landingpage/assets/img/about/praktek2.jpg') }}"
                                    class="img-fluid" alt="Dokter Gigi">
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('/landingpage/assets/img/about/praktek4.jpg') }}"
                                    class="img-fluid" alt="Dokter Gigi">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- /About Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Kami</h2>
                <p>Lihat transformasi senyum para pasien kami yang puas dengan pelayanan M. Budi A. Dental Care.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
                        <ul class="portfolio-filters isotope-filters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-perawatan">Perawatan</li>
                            <li data-filter=".filter-behel">Behel</li>
                            <li data-filter=".filter-gipal">Gigi Palsu</li>
                        </ul>
                    </div>

                    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-behel">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/aesteticbreket1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Behel</span>
                                    <h3>Aestetic Bracket</h3>
                                    <p>Tampil percaya diri merapikan gigi dengan behel sewarna gigi yang membuat senyum
                                        Anda tetap terlihat alami selama perawatan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-behel">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/ceramicbreket1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Behel</span>
                                    <h3>Ceramic Bracket</h3>
                                    <p>Wujudkan senyum sempurna secara elegan dengan behel keramik premium yang menyatu
                                        dengan warna gigi dan tahan noda.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-behel">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/selfligatingbreket1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Behel</span>
                                    <h3>Self Ligating Bracket</h3>
                                    <p>Rasakan keajaiban perawatan behel yang lebih cepat, nyaman, dan efisien berkat
                                        teknologi klip canggih tanpa karet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-behel">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/premiumbreket1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Behel</span>
                                    <h3>Premium Bracket</h3>
                                    <p>Pilihlah pengalaman ortodontik paling eksklusif dengan behel berteknologi
                                        superior yang dirancang untuk hasil presisi dan kenyamanan maksimal.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-gipal">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/gipal1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Gigi Palsu</span>
                                    <h3>Gigi Palsu Valplast</h3>
                                    <p>Rasakan kenyamanan tak tertandingi dengan gigi palsu Valplast yang lentur,
                                        ringan, dan tidak mudah patah, memberikan Anda senyum alami tanpa rasa sakit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-gipal">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/gipal2.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Gigi Palsu</span>
                                    <h3>Gigi Palsu Thermosen</h3>
                                    <p>Tampilkan senyum percaya diri Anda dengan gigi palsu Thermosens yang memiliki
                                        warna transparan serupa gusi, tidak menyerap bau, dan bebas dari bahan pemicu
                                        alergi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-gipal">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/crown1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Gigi Palsu</span>
                                    <h3>Crown Zirconia</h3>
                                    <p>Dapatkan mahkota gigi sekuat berlian dengan estetika sempurna dari Crown Zirconia
                                        yang tembus cahaya seperti gigi asli dan memiliki ketahanan sangat lama.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-gipal">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/crown2.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Gigi Palsu</span>
                                    <h3>Crown PFM</h3>
                                    <p>Pilih kekuatan dan keindahan yang teruji oleh waktu dengan Crown PFM, solusi
                                        andal yang menggabungkan fondasi logam kokoh dengan lapisan porselen sewarna
                                        gigi.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-perawatan">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/scaling1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Perawatan</span>
                                    <h3>Scaling Gigi</h3>
                                    <p>Kembalikan kesehatan dan kesegaran napas Anda dengan scaling, pembersihan karang
                                        gigi mendalam untuk senyum yang bersih dan gusi yang sehat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-perawatan">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/bleaching1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Perawatan</span>
                                    <h3>Bleaching Gigi</h3>
                                    <p>Pancarkan pesona senyum indah yang lebih putih dan cemerlang hanya dalam satu
                                        kunjungan klinik dengan perawatan bleaching gigi profesional kami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-perawatan">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/tambal1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Perawatan</span>
                                    <h3>Tambal Gigi</h3>
                                    <p>Lindungi dan perbaiki gigi berlubang Anda dengan perawatan tambal gigi yang cepat
                                        dan efektif, mengembalikan kekuatan serta fungsi kunyah secara optimal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-perawatan">
                            <div class="portfolio-card">
                                <div class="portfolio-image">
                                    <img src="{{ asset('/landingpage/assets/img/portfolio/veneer1.jpg') }}"
                                        class="img-fluid" alt="Before After Behel" loading="lazy">
                                </div>
                                <div class="portfolio-content">
                                    <span class="category">Perawatan</span>
                                    <h3>Veneer Gigi</h3>
                                    <p>Dapatkan senyum impian Anda secara instan dengan veneer gigi, solusi sempurna
                                        untuk membentuk, meratakan, dan mencerahkan tampilan gigi Anda.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section><!-- /Portfolio Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section light-background">

            <div class="container section-title" data-aos="fade-up">
                <h2>Paket Harga Terbaik</h2>
                <p>Kami menawarkan transparansi harga dengan paket-paket yang dirancang sesuai kebutuhan dan budget
                    Anda.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 justify-content-center">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-card">
                            <h3>Paket Scaling</h3>
                            <div class="price">
                                <span class="currency">Rp</span>
                                <span class="amount">100 ribu</span>
                                <span class="period"></span>
                            </div>
                            <p class="description">Rasakan sensasi mulut bersih, segar, dan bebas karang gigi secara
                                menyeluruh dengan perawatan scaling profesional untuk senyum yang lebih sehat dan
                                percaya diri.
                            </p>

                            <h4>Termasuk:</h4>
                            <ul class="features-list">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Konsultasi dengan Dokter
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Pembersihan Karang Gigi Ringan hingga Berat
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Sudah termasuk Rahang Atas dan Bawah
                                </li>
                            </ul>

                            <a href="#contact" class="btn btn-primary">
                                Daftar Sekarang
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card popular">
                            <div class="popular-badge">Paling Laris</div>
                            <h3>Paket Behel</h3>
                            <span class="period">mulai</span>
                            <div class="price">
                                <span class="currency">Rp</span>
                                <span class="amount">1 juta</span>
                            </div>
                            <p class="description">Wujudkan senyum rapi dan ideal impian Anda dengan behel gigi,
                                investasi terbaik untuk susunan gigi yang sempurna dan peningkatan penampilan jangka
                                panjang.</p>

                            <h4>Termasuk:</h4>
                            <ul class="features-list">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Sudah termasuk Rahang Atas dan Bawah
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Scalling Gratis
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Konsultasi dan Cetak Gigi Gratis
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Orthokit Gratis
                                </li>
                            </ul>

                            <a href="#contact" class="btn btn-light">
                                Daftar Sekarang
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-card">
                            <h3>Paket Implan</h3>
                            <div class="price">
                                <span class="currency">Rp</span>
                                <span class="amount">5 juta</span>
                                <span class="period">/gigi</span>
                            </div>
                            <p class="description">Dapatkan kembali kekuatan, fungsi, dan keindahan gigi asli yang
                                hilang dengan implan gigi, solusi permanen yang terasa dan terlihat paling natural.</p>

                            <h4>Termasuk:</h4>
                            <ul class="features-list">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Konsultasi dengan Dokter
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Sudah termasuk Crown Gigi
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Surgical Guide Gratis
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Gigi Palsu Akrilik Gratis selama Masa Tunggu
                                </li>
                            </ul>

                            <a href="#contact" class="btn btn-primary">
                                Daftar Sekarang
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Tim Dokter Profesional Kami</h2>
                <p>Tim kami siap melayani Anda dengan sepenuh hati.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr4.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Jagiran : Senin, Selasa, Rabu, Kamis, Jumat, Sabtu<br>Gunung Anyar : Rabu</b>
                                    </p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Iman Santoso Adji</b></h6>
                                <span class="position">MBA Jagiran</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr6.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Jagiran : Senin, Selasa, Rabu, Kamis, Sabtu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Olivia Ananto Putri</b></h6>
                                <span class="position">MBA Jagiran</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr3.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Jagiran : Jumat, Sabtu, Minggu<br>Gunung Anyar : Senin, Kamis<br>Sukodono : Selasa, Rabu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Amelia Hartanto</b></h6>
                                <span class="position">MBA Jagiran</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr1.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Jagiran : Senin, Selasa</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Revian Gigih Laksono</b></h6>
                                <span class="position">MBA Jagiran</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr13.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Jagiran : Rabu, Kamis<br>Gunung Anyar : Minggu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Nabil Ageng Dwi Putra</b></h6>
                                <span class="position">MBA Jagiran</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr5.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Jagiran : Jumat, Minggu<br>Gunung Anyar : Senin, Rabu, Sabtu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Novi Nurul Hidayati</b></h6>
                                <span class="position">MBA Jagiran</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr8.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Gunung Anyar : Selasa, Rabu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Furqan Bachri</b></h6>
                                <span class="position">MBA Gunung Anyar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr10.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Gunung Anyar : Selasa, Sabtu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Farah Qhiesta Nabila</b></h6>
                                <span class="position">MBA Gunung Anyar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr15.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Gunung Anyar : Senin, Rabu, Jumat</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Jasmine Azahra Martant</b></h6>
                                <span class="position">MBA Gunung Anyar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr12.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Gunung Anyar : Senin, Selasa, Kamis, Minggu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Yessy Agistasari</b></h6>
                                <span class="position">MBA Gunung Anyar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr14.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Gunung Anyar : Jumat, Minggu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Erika Yase Technolia</b></h6>
                                <span class="position">MBA Gunung Anyar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr2.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Gunung Anyar : Selasa, Kamis, Jumat, Sabtu<br>Sukodono : Rabu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Widianti Kartika Putri</b></h6>
                                <span class="position">MBA Gunung Anyar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/public/landingpage/assets/img/person/dr23.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Gunung Anyar : Sabtu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Annisa Fajri Sardi</b></h6>
                                <span class="position">MBA Gunung Anyar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr19.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Gunung Anyar : Senin, Selasa<br>Jagiran : Sabtu, Minggu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Ince Escha Faatur Sakti</b></h6>
                                <span class="position">MBA Gunung Anyar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr21.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Sukodono : Kamis, Minggu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Salwa Aulia Rahmawati</b></h6>
                                <span class="position">MBA Sukodono</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr18.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Sukodono : Senin, Minggu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Dicky Nyoman</b></h6>
                                <span class="position">MBA Sukodono</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr22.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Sukodono : Rabu, Jumat, Sabtu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Rachma Adityasari</b></h6>
                                <span class="position">MBA Sukodono</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr20.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Sukodono : Senin, Selasa, Jumat, Sabtu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Andhika Yahya Ubaidillah</b></h6>
                                <span class="position">MBA Sukodono</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr9.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Driyorejo : Rabu, Jumat, Sabtu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Dwi Ervina Febrianti</b></h6>
                                <span class="position">MBA Driyorejo</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr17.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Driyorejo : Senin, Selasa, Rabu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Areta Padmarini</b></h6>
                                <span class="position">MBA Driyorejo</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr16.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Driyorejo : Kamis, Sabtu, Minggu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Rifki Dwi Kurniawan</b></h6>
                                <span class="position">MBA Driyorejo</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr11.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Driyorejo : Selasa, Minggu</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Arimbi Gupitasari</b></h6>
                                <span class="position">MBA Driyorejo</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ asset('/landingpage/assets/img/person/dr7.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="team-overlay">
                                    <p><b>Driyorejo : Senin, Kamis, Jumat</b></p>
                                </div>
                            </div>
                            <div class="team-content">
                                <h6><b>drg. Fanny Marisca Alvion</b></h6>
                                <span class="position">MBA Driyorejo</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Apa Kata Mereka?</h2>
                <p>Kepuasan Anda adalah prioritas utama kami. Berikut testimoni dari para pasien kami.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="testimonials-slider swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon"></i>
                                        Awalnya iseng "blusukan" dari Sidoarjo ke Gresik karena lihat info katanya
                                        scaling gigi cuma 100 ribu. Pas sampai lokasi, ternyata tempatnya proper dan
                                        bersih banget, jauh dari ekspektasi untuk harga semurah itu. Overall, ini hidden
                                        gem parah sih. Pengalaman perawatan gigi yang sangat memuaskan dari segi harga,
                                        kualitas, dan fasilitas. Buat warga Gresik, Surabaya dan sekitarnya, nggak usah
                                        ragu lagi. Recommended banget! Gaskannn!
                                    </p>
                                </div>
                                <div class="testimonial-profile">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="profile-info">
                                        <img src="{{ asset('/landingpage/assets/img/person/testi1.jpeg') }}"
                                            alt="Profile Image">
                                        <div>
                                            <h3>Abiel Maldives</h3>
                                            <h4>Content Creator</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon"></i>
                                        Pertama kali datang, aku
                                        langsung suka sama tempatnya. Bersih banget, cozy, dan luas. Fasilitasnya
                                        kelihatan modern dan alat-alatnya canggih. Aku lihat juga banyak promo
                                        menarik untuk behel dan implan. Masuk ke acara utama: Bleaching. Jujur prosesnya
                                        nyaman banget, saking nyamannya aku sampai ketiduran, hehe. Durasinya sekitar 30
                                        menit - 1 jam. Dan hasilnya... YA AMPUN, gigi aku jadi putih dan cantik banget!
                                    </p>
                                </div>
                                <div class="testimonial-profile">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="profile-info">
                                        <img src="{{ asset('/landingpage/assets/img/person/testi3.jpeg') }}"
                                            alt="Profile Image">
                                        <div>
                                            <h3>dr Anggita Maudi</h3>
                                            <h4>Medical Doctor Creator</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon"></i>
                                        Nemenin suami pasang behel di M. Budi A Dental Care cabang Jagiran, dan
                                        pengalaman kami sangat positif! Awalnya tertarik karena lihat ada promo behel
                                        konvensional mulai dari 1 jutaan aja. Akhirnya suami memutuskan pasang behel
                                        jenis Self-Ligating. Kata dokternya, jenis ini rasa sakitnya
                                        lebih minim dan lebih gampang dijaga kebersihannya. Sangat direkomendasikan buat siapa pun di
                                        Surabaya yang cari klinik gigi terpercaya dengan harga yang jujur.
                                    </p>
                                </div>
                                <div class="testimonial-profile">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="profile-info">
                                        <img src="{{ asset('/landingpage/assets/img/person/testi2.jpg') }}"
                                            alt="Profile Image">
                                        <div>
                                            <h3>Vivian Baby</h3>
                                            <h4>Digital Creator</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon"></i>
                                        Awalnya lihat promo scaling gigi cuma 100 ribu untuk atas-bawah, langsung
                                        penasaran dan coba datang. Ternyata pas dicoba, kualitasnya jauh di atas
                                        ekspektasi untuk harga segitu. Saya datang ke cabang yang di Gunung Anyar,
                                        Surabaya. Pelayanannya top banget dari awal sampai akhir. Sangat-sangat
                                        direkomendasikan buat yang cari perawatan gigi berkualitas dengan harga yang
                                        jujur dan terjangkau. Pasti akan balik lagi ke sini!
                                    </p>
                                </div>
                                <div class="testimonial-profile">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="profile-info">
                                        <img src="{{ asset('/landingpage/assets/img/person/testi4.jpeg') }}"
                                            alt="Profile Image">
                                        <div>
                                            <h3>Ryan Dio Ramadhan</h3>
                                            <h4>Food Vlogger</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon"></i>
                                        Awalnya beneran kaget pas tau ada scaling gigi di Surabaya cuma 100 ribu. Sempat
                                        mikir ini beneran atau nggak, hehe. Akhirnya iseng nyobain ke M. Budi A. Dental
                                        Care yang cabang Gunung Anyar, dan ternyata ini pengalaman yang luar biasa!
                                        Pokoknya recommended banget buat yang mau perawatan gigi berkualitas tapi nggak
                                        mau kantong jebol. Poin plus banget, ada welcome drink dan snack gratis yang
                                        bisa diambil sepuasnya. Jangan ragu buat coba ke sini!
                                    </p>
                                </div>
                                <div class="testimonial-profile">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="profile-info">
                                        <img src="{{ asset('/landingpage/assets/img/person/testi5.jpeg') }}"
                                            alt="Profile Image">
                                        <div>
                                            <h3>Nuria Fadila Mirota</h3>
                                            <h4>Influencer</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Hubungi Kami</h2>
                <p>Jadwalkan konsultasi Anda hari ini dan mulailah perjalanan menuju senyum sehat!</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 mb-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3>Alamat Klinik</h3>
                            <p><b>Jagiran :</b><a href="https://maps.app.goo.gl/XSzFdq9imPSE3jt4A" target="_blank">
                                    Jl. Jagiran No.2, Surabaya</a><br>
                                <b>Gunung Anyar :</b><a href="https://maps.app.goo.gl/NAUNuZN54JjdeP5L6"
                                    target="_blank"> Wisma Tirto Agung Asri Tahap IV, No 324, Surabaya</a><br>
                                <b>Driyorejo :</b><a href="https://maps.app.goo.gl/jQkars3nmSnLj68q9" target="_blank">
                                    Jl. Griya Kencana, Perum Graha Mutiara I, Kec. Driyorejo, Gresik</a><br>
                                <b>Sukodono :</b><a href="https://maps.app.goo.gl/NAUNuZN54JjdeP5L6" target="_blank">
                                    Jl. Citra Sekawan Mandiri Estate, Kec. Sukodono, Sidoarjo</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <h3>Reservasi WhatsApp</h3>
                            <p><b>Jagiran :</b><a href="https://wa.me/628569001967" target="_blank">
                                    08569001967</a><br>
                                <b>Gunung Anyar :</b><a href="https://wa.me/6285600301967" target="_blank">
                                    085600301967</a><br>
                                <b>Driyorejo :</b><a href="https://wa.me/628159991992" target="_blank">
                                    08159991992</a><br>
                                <b>Sukodono :</b><a href="https://wa.me/6287719011967" target="_blank">
                                    087719011967</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-clock"></i>
                            </div>
                            <h3>Jam Buka</h3>
                            <p>
                            <p><b>Jagiran :</b> 10.00 - 21.00<br>
                                <b>Gunung Anyar :</b> 08.00 - 19.00<br>
                                <b>Driyorejo :</b> 08.00 - 20.00<br>
                                <b>Sukodono :</b> 08.00 - 21.00
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <img src="{{ asset('/landingpage/assets/img/logombapanjang.png') }}" alt="">
                    </a>
                    <div class="footer-contact pt-3">
                        <p><b>Jagiran :</b> Jl. Jagiran No.2, Surabaya<br>
                            <b>Gunung Anyar :</b> Wisma Tirto Agung Asri Tahap IV, No 324, Surabaya<br>
                            <b>Driyorejo :</b> Jl. Griya Kencana, Perum Graha Mutiara I, Kec. Driyorejo, Gresik<br>
                            <b>Sukodono :</b> Jl. Citra Sekawan Mandiri Estate, Kec. Sukodono, Sidoarjo
                        </p>
                        <p class="mt-3"><strong>Telepon:</strong> <span>+62 857 8447 7728</span></p>
                        <p><strong>Email:</strong> <span>klinikgigim.budi.a@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Link Cepat</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#portfolio">Layanan</a></li>
                        <li><a href="#pricing">Harga</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#portfolio">Perawatan</a></li>
                        <li><a href="#portfolio">Behel</a></li>
                        <li><a href="#portfolio">Gigi Palsu</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">M. Budi A. Dental Care</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/landingpage/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/landingpage/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/landingpage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/landingpage/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/landingpage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('/landingpage/assets/js/main.js') }}"></script>

</body>

</html>

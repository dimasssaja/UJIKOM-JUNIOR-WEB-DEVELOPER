<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DSiGawai</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="{{ asset('') }}assets/img/icon1.png" rel="icon">
    <link href="{{ asset('') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <link href="{{ asset('') }}assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Link ke file CSS utama -->
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
</head>

<body>
    {{-- //Welcome hero --}}
    <section id="hero">
        <div class="hero-container">
            <!-- Carousel di bagian Hero -->
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-item active"
                    style="background-image: url({{ asset('') }}assets/img/slide/bg1.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <!-- membuat animasi di bagian Hero -->
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>DSiGawai</span></h2>
                            <p class="animate__animated animate__fadeInUp">Selamat Datang
                                DSiGawai adalah Aplikasi Manajemen Kepegawaian Online Berbasis Website.</p>
                            <a href="{{ route('login') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    {{-- header navbar --}}
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="#"><span>DSiGawai</span></a></h1>
            </div>
            {{-- navbar menu --}}
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    {{-- body utama --}}
    <main id="main">
        <!-- Section untuk Bagian Tentang Kami -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>PROFIL</h2>
                    <p> DSiGawai merupakan perusahaan yang berkomitmen untuk memberikan pelayanan terbaik dalam bidang
                        kepegawaian. Kami percaya bahwa sumber daya manusia adalah aset terpenting dan oleh karena itu,
                        kami selalu berusaha untuk menciptakan lingkungan kerja yang mendukung perkembangan dan
                        kesejahteraan karyawan.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('') }}assets/img/pegawai.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Mewujudkan <strong>Keunggulan dan Profesionalisme</strong> dalam Setiap Langkah</h3>
                        <p class="fst-italic">
                            Dengan komitmen terhadap keunggulan, kami mengutamakan integritas, inovasi, dan kerja sama
                            dalam setiap aspek operasional kami.
                        </p>
                        <p>
                            Kami menyediakan lingkungan kerja yang dinamis dan inklusif, yang mendukung karyawan dalam
                            mencapai potensi penuh mereka. Setiap anggota tim kami didorong untuk terus belajar,
                            berkembang, dan berkontribusi secara maksimal.
                        </p>

                    </div>

                </div>
            </div>

            </div>
        </section>

        <!-- Section untuk Bagian Layanan-->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Layanan</h2>
                    <p>Kami menyediakan berbagai layanan yang dirancang untuk mengoptimalkan manajemen pegawai Anda.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Rekrutmen & Seleksi</a></h4>
                            <p class="description">Layanan rekrutmen kami membantu Anda menemukan kandidat terbaik untuk
                                memenuhi kebutuhan organisasi Anda.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Pengembangan Keterampilan</a></h4>
                            <p class="description">Kami menawarkan program pelatihan dan pengembangan keterampilan untuk
                                meningkatkan kompetensi dan produktivitas pegawai Anda.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Manajemen Kinerja</a></h4>
                            <p class="description">Layanan manajemen kinerja kami membantu Anda menetapkan, memantau,
                                dan mengevaluasi kinerja pegawai untuk mencapai tujuan organisasi.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Kesejahteraan Pegawai</a></h4>
                            <p class="description">Kami menawarkan program kesejahteraan yang dirancang untuk
                                meningkatkan kesehatan dan kesejahteraan pegawai Anda.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Section untuk Bagian cta, untuk survei-->
        <section class="cta">
            <div class="container">
                <div class="text-center">
                    <h3>Survei Pelayanan</h3>
                    <p> Bantu kami untuk menjadi lebih baik lagi <br>
                        “Kami berharap dapat memperoleh masukan dalam meningkatkan pelayanan informasi kami melalui
                        website <a href="http://ujikom.abdimasiot.web.id/">ujikom.abdimasiot.web.id</a>
                        <br>
                        Anda dapat memberikan survei pelayanan kami melalui formulir dengan klik tombol di bawah ini
                    </p>
                    <a class="cta-btn" href="https://forms.gle/HDaCFQqj55BvVUoL9">Isi Survei</a>
                </div>

            </div>
        </section>

        <!-- Section Bagian Kontak -->
        <section id="contact" class="contact section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Kontak Kami</h2>
                    <p>Kontak Kami untuk informasi lebih lanjut</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="row">

                        <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                            <i class="bx bx-map"></i>
                            <h4>Alamat</h4>
                            <p>Indonesia,<br>Kota Jambi, 21212</p>
                        </div>
                        <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                            <i class="bx bx-phone"></i>
                            <h4>Hubungi Kami</h4>
                            <p>+62 5589 22548 64</p>
                        </div>
                        <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                            <i class="bx bx-envelope"></i>
                            <h4>Email</h4>
                            <p>abimestidimaasds@gmail.com</p>
                        </div>
                        <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                            <i class="bx bx-time-five"></i>
                            <h4>Jam Kerja</h4>
                            <p>Sen - Jum: 9 Pagi - 5 Sore</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    {{-- footer halaman --}}
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Dibuat Oleh <strong><span>Dimas</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <!-- Script JS pendukung yang disediakan -->
    <script src="{{ asset('') }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('') }}assets/vendor/php-email-form/validate.js"></script>

    <!-- Script JS yang utama -->
    <script src="{{ asset('') }}assets/js/main.js"></script>

</body>

</html>

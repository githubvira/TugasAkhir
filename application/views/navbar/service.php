<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TUGAS AKHIR MSIB</title>

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="<?php echo base_url("index.php/Home/index"); ?>"><span>H</span>alwa</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo base_url("index.php/Home/index"); ?>">Home</a></li>
                    <li><a href="<?php echo base_url("index.php/Navbar/about"); ?>">About</a></li>
                    <li><a href="<?php echo base_url("index.php/Navbar/service"); ?>">Services</a></li>
                    <li><a href="<?php echo base_url("index.php/Navbar/portofolio"); ?>">Portofolio</a></li>
                    <li class="dropdown"><a href="#"><span>Catalogue</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="login-btn" href="<?php echo base_url("index.php/Catalog/index"); ?>">Birthday Cake</a></li>
                            <li><a class="login-btn" href="<?php echo base_url("index.php/Catalog/brownies"); ?>">Brownies</a></li>
                            <li><a class="login-btn" href="<?php echo base_url("index.php/Catalog/desert"); ?>">Dessert</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(<?php echo base_url(); ?>assets/carousel2.png)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Halwa </h2>
                                <p class="animate__animated animate__fadeInUp">Kami Menyediakan Berbagai Macam jenis Kue dan Dessert</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(<?php echo base_url(); ?>assets/carousel.png)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Halwa </h2>
                                <p class="animate__animated animate__fadeInUp">Kami Menyediakan Berbagai Macam jenis Kue</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(<?php echo base_url(); ?>assets/carousel3.png)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Halwa </h2>
                                <p class="animate__animated animate__fadeInUp">Kami Menyediakan Berbagai Macam jenis Kue</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Pesan</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <div id="services" class="services-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline services-head text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <!-- Start Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="bi bi-thermometer-half"></i>
                                    </a>
                                    <h4>Keamanan dan Kebersihan</h4>
                                    <p>
                                        Pedoman HACCP dijalankan dengan standar global dengan tingkat pemantauan tertinggi terhadap praktik keamanan dan sanitasi makanan yang diterapkan melalui penghalang "NO-sanitation-NO-access", udara yang disanitasi UV, dan sistem disinfektan Ozon di tempatnya </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="bi bi-bar-chart"></i>
                                    </a>
                                    <h4>Produk Berkualitas Tinggi</h4>
                                    <p>
                                        Program Penjaminan Mutu adalah struktur internal yang melakukan berbagai inspeksi, audit, produksi dan fasilitas makanan kami untuk menyediakan produk makanan yang aman dan berkualitas tinggi sambil mempertahankan praktik ideal yang meningkatkan produk yang relevan untuk industri makanan. </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="bi bi-card-checklist"></i>
                                    </a>
                                    <h4>Jaminan Kualitas B&C</h4>
                                    <p>
                                        Program Jaminan Kualitas B&C adalah struktur internal yang melakukan berbagai inspeksi, audit, produksi dan fasilitas makanan kami untuk menyediakan produk makanan yang aman dan berkualitas tinggi sambil mempertahankan praktik ideal yang meningkatkan produk yang relevan untuk industri makanan. </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="bi bi-hourglass-split"></i>
                                    </a>
                                    <h4>Mengukur Faktor </h4>
                                    <p>
                                        Semua produk didasarkan pada resep dengan inspeksi yang disebutkan untuk praktik berat, produksi, dan pemrosesan. Koki B&C memastikan standar produk mengikuti volume dan penampilan yang seragam hingga akurasi 95%. </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <!-- End Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="bi bi-layout-text-window"></i>
                                    </a>
                                    <h4>Presentasi</h4>
                                    <p>
                                        Semua produk didasarkan pada resep dengan inspeksi yang disebutkan untuk praktik berat, produksi, dan pemrosesan. Koki B&C memastikan standar produk mengikuti volume dan penampilan yang seragam hingga akurasi 95%. </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <!-- End Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="bi bi-basket-fill"></i>
                                    </a>
                                    <h4>Design Sesuai Pesanan</h4>
                                    <p>
                                        Customer bisa meminta untuk dibuatkan Birthday Cake sesuai design yg di inginkan, kami akan berusaha untuk dapat membuat kue semirip mungkin dengan design yang ada </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Services Section -->

        <!-- ======= Suscribe Section ======= -->
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                        <div class="suscribe-text text-center">
                            <h3>Welcome to Halwa</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Suscribe Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <h2><span>H</span>ome Cooking</h2>
                                </div>

                                <p>Halwa adalah penyedia kualitas terkemuka untuk specialty bakery dan produk gula-gula dengan solusi katering profesional. Kami menyediakan dan mengirimkan produk ke individu, institusi, perusahaan, kafe, perusahaan katering serta rumah yang sesuai dengan kebutuhan dalam jumlah tak terbatas hingga kebutuhan pribadi sehari-hari.</p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>information</h4>
                                <div class="footer-contacts">
                                    <p><span>Telp:</span> +62 822 84xx xxxx</p>
                                    <p><span>Email:</span> halwa@gmail.com</p>
                                    <p><span>Jam Operasi:</span> Senin-Minggu (08.00-17.00)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Instagram</h4>
                                <div class="flicker-img">
                                    <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/1.jpeg" alt="" /></a>
                                    <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/3.jpeg" alt="" /></a>
                                    <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/4.jpeg" alt="" /></a>
                                    <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/5.jpeg" alt="" /></a>
                                    <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/6.jpeg" alt="" /></a>
                                    <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/7.jpeg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/js/main.js"></script>

</body>

</html>
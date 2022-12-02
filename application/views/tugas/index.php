<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TUGAS AKHIR MBKM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="<?php echo base_url('/assets/tugas/'); ?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/css/style.css" rel="stylesheet">
    <!-- <style>
        .login-btn {
            color: red;
        }
    </style> -->
    <!-- =======================================================
  * Template Name: eBusiness - v4.9.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="index.php"><span>H</span>ome Cooking</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li class="dropdown"><a href="#"><span>Catalogue</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Birthday Cake</a></li>
                            <li><a href="#">Brownies</a></li>
                            <li><a href="#">Dessert</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li>
                        <a class="login-btn" href="<?php echo base_url("index.php/auth/index"); ?>">Sign In</a>
                    </li>
                    <li>
                        <a class="login-btn" href="<?php echo base_url("index.php/auth/registration"); ?>">Sign Up</a>
                    </li>
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
                                <h2 class="animate__animated animate__fadeInDown">HOME COOKING </h2>
                                <p class="animate__animated animate__fadeInUp">Kami Menyediakan Berbagai Macam jenis Kue dan Dessert</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(<?php echo base_url(); ?>assets/carousel.png)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">HOME COOKING </h2>
                                <p class="animate__animated animate__fadeInUp">Kami Menyediakan Berbagai Macam jenis Kue</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(<?php echo base_url(); ?>assets/carousel3.png)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">HOME COOKING </h2>
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

        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>About Home Cooking</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/about.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <h4 class="sec-head">Our Business</h4>
                                </a>
                                <p>
                                    Home Cooking mulai memanggang produk Confectionery di fasilitas bakery volume rendah. Kue-kue buatan tangan asli, kue, dan Dessert selalu menggunakan kualitas terbaik</p>
                                100% bahan sehat alami:
                                <ul>
                                    <li>
                                        <i class="bi bi-check"></i> Tepung berkualitas tinggi
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> telur segar kelas A utuh
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> krim mentega dan produk susu
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> gula tebu murni
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> pure dengan isian buah segar
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div><!-- End About Section -->

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

        <!-- ======= Team Section ======= -->

        <!-- <div id="team" class="our-team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Our special Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/team/1.jpg" alt="">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Jhon Mickel</h4>
                                <p>Seo</p>
                            </div>
                        </div>
                    </div> -->
        <!-- End column -->
        <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/team/2.jpg" alt="">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Andrew Arnold</h4>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div> -->
        <!-- End column -->
        <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/team/3.jpg" alt="">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Lellien Linda</h4>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div> -->
        <!-- End column -->
        <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/team/4.jpg" alt="">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Jhon Powel</h4>
                                <p>Seo Expert</p>
                            </div>
                        </div>
                    </div> -->
        <!-- End column -->
        <!-- </div>
            </div>
        </div> -->
        <!-- End Team Section -->

        <!-- ======= Rviews Section ======= -->
        <div class="reviews-area">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="<?php echo base_url(); ?>assets/pc.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 work-right-text d-flex align-items-center">
                    <div class="px-5 py-5 py-lg-0">
                        <h2>ingin Pesan Kue ?
                            Di Home Cooking aja</h2>

                        <h5>BIRTHDAY CAKE, BROWNIES, DESSERT, DLL</h5>
                        <a href="#contact" class="ready-btn scrollto">Contact us</a>
                    </div>
                </div>
            </div>
        </div><!-- End Rviews Section -->

        <!-- ======= Portfolio Section ======= -->
        <div id="portfolio" class="portfolio-area area-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Our Portofolio</h2>
                        </div>
                    </div>
                </div>
                <div class="row wesome-project-1 fix">
                    <!-- Start Portfolio -page -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Brownies</li>
                            <li data-filter=".filter-card">Birthday Cake</li>
                            <li data-filter=".filter-web">Dessert</li>
                        </ul>
                    </div>
                </div>

                <div class="row awesome-project-content portfolio-container">

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/4.jpeg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/portofolio/4.jpeg">
                                            <h4>Birthday Cake</h4>
                                            <span>Pinky Butterfly</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/3.jpeg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/portofolio/5.jpeg">
                                            <h4>Brownies</h4>
                                            <span>Topping Almond</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/1.jpeg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/portofolio/1.jpeg">
                                            <h4>Birthday Cake</h4>
                                            <span>Pink and White</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/6.jpeg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/portofolio/5.jpeg">
                                            <h4>Dessert</h4>
                                            <span>Salad Buah</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/5.jpeg" alt="" /></a>
                                <div class="add-actions text-center text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/portofolio/5.jpeg">
                                            <h4>Brownies</h4>
                                            <span>Chokochip</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/portofolio/7.jpeg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/portofolio/7.jpeg">
                                            <h4>Dessert</h4>
                                            <span>Mango Sticky Rice</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->

                </div>
            </div>
        </div><!-- End Portfolio Section -->

        <!-- ======= Pricing Section ======= -->
        <div id="pricing" class="pricing-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Pricing Table</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list">
                            <h3>basic <br /> <span>$80 / month</span></h3>
                            <ol>
                                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                                <li class="check"><i class="bi bi-x"></i><span>Full access</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                                <li class="cross"><i class="bi bi-x"></i><span>Free domin</span></li>
                                <li class="cross"><i class="bi bi-x"></i><span>Support unlimited</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                                <li class="check"><i class="bi bi-x"></i><span>Cash back</span></li>
                            </ol>
                            <button>sign up now</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list active">
                            <span class="saleon">top sale</span>
                            <h3>standard <br /> <span>$110 / month</span></h3>
                            <ol>
                                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                                <li class="cross"><i class="bi bi-x"></i><span>Free domin</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                                <li class="cross"><i class="bi bi-x"></i><span>Cash back</span></li>
                            </ol>
                            <button>sign up now</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list">
                            <h3>premium <br /> <span>$150 / month</span></h3>
                            <ol>
                                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Free domin</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                                <li class="check"><i class="bi bi-check"></i><span>Cash back</span></li>
                            </ol>
                            <button>sign up now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- <div id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper"> -->

        <!-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div> -->
        <!-- End testimonial item -->

        <!-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div> -->
        <!-- End testimonial item -->

        <!-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div> -->
        <!-- End testimonial item -->

        <!-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div> -->
        <!-- End testimonial item -->

        <!-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div> -->
        <!-- End testimonial item -->

        <!-- </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div> -->
        <!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <!-- <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Latest News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row"> -->
        <!-- Start Left Blog -->
        <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/blog/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">13 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Assumenda repud eum veniam</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div> -->
        <!-- Start single blog -->
        <!-- </div> -->
        <!-- End Left Blog-->
        <!-- Start Left Blog -->
        <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/blog/2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">130 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Explicabo magnam quibusdam.</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div> -->
        <!-- Start single blog -->
        <!-- </div> -->
        <!-- End Left Blog-->
        <!-- Start Right Blog-->
        <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="<?php echo base_url('/assets/tugas/'); ?>assets/img/blog/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">10 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div> -->
        <!-- End Right Blog-->
        <!-- </div>
                </div>
            </div>
        </div> -->
        <!-- End Blog Section -->

        <!-- ======= Suscribe Section ======= -->
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                        <div class="suscribe-text text-center">
                            <h3>Welcome to Home Cooking</h3>
                            <!-- <a class="sus-btn" href="#">Get A quote</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Suscribe Section -->

        <!-- ======= Contact Section ======= -->
        <div id="contact" class="contact-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Contact us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-phone"></i>
                                    <p>
                                        Call: +62 822 84xx xxxx<br>
                                        <span>Senin-Minggu (08.00-17.00)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-envelope"></i>
                                    <p>
                                        Email: homecooking@gmail.com<br>
                                        <span>Web: www.homecooking.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-geo-alt"></i>
                                    <p>
                                        Location: JL. HR Soebrantas no.50A<br>
                                        <span>Pekanbaru, Riau</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Start Google Map -->
                        <div class="col">
                            <!-- Start Map -->
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCMPWAgPlJm67yF7K4t3XaZ-n7EUc6w_2E&q=Universitas%20Riau%20Bina%20Widya" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <!-- End Map -->
                        </div>
                        <!-- End Google Map -->

                        <!-- Start  contact -->
                        <!-- <div class="col-md-6">
                            <div class="form contact-form">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>
                            </div>
                        </div> -->
                        <!-- End Left contact -->
                    </div>
                </div>
            </div>
        </div><!-- End Contact Section -->

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

                                <p>Home Cooking adalah penyedia kualitas terkemuka untuk specialty bakery dan produk gula-gula dengan solusi katering profesional. Kami menyediakan dan mengirimkan produk ke individu, institusi, perusahaan, kafe, perusahaan katering serta rumah yang sesuai dengan kebutuhan dalam jumlah tak terbatas hingga kebutuhan pribadi sehari-hari.</p>
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
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                </p> -->
                                <div class="footer-contacts">
                                    <p><span>Telp:</span> +62 822 84xx xxxx</p>
                                    <p><span>Email:</span> homecooking@gmail.com</p>
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

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/js/main.js"></script>

</body>

</html>
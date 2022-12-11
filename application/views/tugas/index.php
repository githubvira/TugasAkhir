<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TUGAS AKHIR MSIB</title>
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

                    <!-- <button class="btn btn-info" onclick="#"><i class="glyphicon glyphicon-plus"></i> Edit Hero</button> -->
                    <li><a class="nav-link scrollto active" href="<?php echo base_url("index.php/Home/index"); ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portofolio</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a href="<?php echo base_url("index.php/Catalog/brownies"); ?>"><span>Product</span> </a></li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url("index.php/auth/index"); ?>">Sign In</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url("index.php/auth/registration"); ?>">Sign up</a></li>
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


                    <?php foreach ($carausel as $c) : ?>
                        print_r($c);
                        <div class="carousel-item active" style="background-image: url(<?php echo base_url("uploads/" . $c['file_foto']); ?>)">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown"><?= $c['label']; ?></h2>
                                    <p class="animate__animated animate__fadeInUp"><?= $c['deskripsi']; ?></p>
                                    <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Pesan</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

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
                            <h2>About Halwa</h2>
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
                                    Halwa mulai memanggang produk Confectionery di fasilitas bakery volume rendah. Kue-kue buatan tangan asli, kue, dan Dessert selalu menggunakan kualitas terbaik</p>
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

        <!-- ======= Rviews Section ======= -->
        <div class="reviews-area">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="<?php echo base_url(); ?>assets/pc.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 work-right-text d-flex align-items-center">
                    <div class="px-5 py-5 py-lg-0">
                        <h2>ingin Pesan Kue ?
                            Di Halwa aja</h2>

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

        <!-- ======= Suscribe Section ======= -->
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                        <div class="suscribe-text text-center">
                            <h3>Welcome to Halwa</h3>
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
                                        Email: halwa@gmail.com<br>
                                        <span>Web: www.halwa.com</span>
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
                                    <h2><span>H</span>alwa</h2>
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
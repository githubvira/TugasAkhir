<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TUGAS AKHIR MBKM</title>
    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/tugas/'); ?>assets/css/style.css" rel="stylesheet">


    <link href="<?php echo base_url('assets/'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <link href="<?php echo base_url('assets/'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('/vendor/sbadmin2/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('/vendor/sbadmin2/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>img/favicon.ico" rel="icon">
    <style>
        .dropdown-item {
            color: black !important;
        }
    </style>
</head>


<body>



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <header id="header" class="fixed-top d-flex align-items-center">
                    <div class="container d-flex justify-content-between">

                        <div class="logo">
                            <h1><a href="<?php echo base_url("Home/index"); ?>"><span>H</span>alwa</a></h1>
                        </div>

                        <nav id="navbar" class="navbar">
                            <ul>
                                <li><a class="nav-link scrollto active" href="<?php echo base_url("Home/index"); ?>">Home</a></li>
                                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                                <li><a href="<?php echo base_url("Catalog/brownies"); ?>"><span>Product</span> </a>
                                </li>
                                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="<?= base_url('Catalog/brownies'); ?>">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="<?= $search; ?>">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Example split primary button -->
                                <div class="droppdown ml-4">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Pilihan Menu</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <!-- <span class="visually-hidden">Toggle Dropdown</span> -->
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?= base_url("Catalog/brownies") ?>">Tampilkan Semua</a>
                                            <a class="dropdown-item" href="<?= base_url("Catalog/brownies/Brownies") ?>">Brownies</a>
                                            <a class="dropdown-item" href="<?= base_url("Catalog/brownies/Cake") ?>">Cake</a>
                                            <a class="dropdown-item" href="<?= base_url("Catalog/brownies/Dessert") ?>">Dessert</a>

                                        </div>
                                    </div>
                                </div>

                                <div class="droppdown ml-4">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Rentang Harga</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <!-- <span class="visually-hidden">Toggle Dropdown</span> -->
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- <span class="dropdown-item">Range harga :</span> -->
                                            <form method="GET" action="<?= base_url('Catalog/brownies'); ?>">
                                                <div class="dropdown-item form-check d-flex align-items-center justify-content-between mb-3">
                                                    <input type="radio" class="form-check-input fPrice" name="filterharga" id="harga0" value="0">
                                                    <label class="form-check-label" for="harga0">Semua Harga</label>
                                                </div>
                                                <div class="dropdown-item form-check d-flex align-items-center justify-content-between mb-3">
                                                    <input type="radio" class="form-check-input fPrice" name="filterharga" id="harga1" value="1">
                                                    <label class="form-check-label" for="harga1">Rp. 0 - Rp. 50.000</label>
                                                </div>
                                                <div class="dropdown-item form-check d-flex align-items-center justify-content-between mb-3">
                                                    <input type="radio" class="form-check-input fPrice" name="filterharga" id="harga2" value="2">
                                                    <label class="form-check-label" for="harga2">Rp. 51.000 - Rp. 100.000</label>
                                                </div>
                                                <div class=" dropdown-item form-check d-flex align-items-center justify-content-between mb-3">
                                                    <input type="radio" class="form-check-input fPrice" name="filterharga" id="harga3" value="3">
                                                    <label class="form-check-label" for="harga3">Rp. 101.000 - Rp. 150.000</label>
                                                </div>
                                                <div class=" dropdown-item form-check d-flex align-items-center justify-content-between mb-3">
                                                    <input type="radio" class="form-check-input fPrice" name="filterharga" id="harga4" value="4">
                                                    <label class="form-check-label" for="harga4">Rp. 151.000 - Rp. 200.000</label>
                                                </div>
                                                <button type="submit" class="btn btn-secondary btn-lg btn-block">Terapkan</button>
                                                <script>
                                                    let x = document.getElementsByClassName("fPrice");
                                                    for (const i of x) {
                                                        i.addEventListener('click', function() {
                                                            window.location.href = "<?= base_url('Catalog/brownies?filterharga=') ?>" + i.value;
                                                        })
                                                    }
                                                </script>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </ul>
                            <i class=" bi bi-list mobile-nav-toggle"></i>
                        </nav><!-- .navbar -->
                    </div>
                </header><!-- End Header -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <main id="main">

                        <!-- Topbar Search -->

                        <!-- Products Start -->
                        <div class="container-fluid p-5 my-5">
                            <div class="text-center mb-4">
                                <h2 class="section-title px-5"><span class="px-2">Daftar Menu</span></h2>
                            </div>
                            <div class="row px-xl-5 pb-3">

                                <!-- <?php
                                        print_r($items);
                                        ?> -->
                                <?php foreach ($items as $key => $item) : ?>
                                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                        <div class="card product-item border-0 mb-4">
                                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                                <img class="img-fluid w-100" src="<?= base_url('uploads/' . $item['file_foto']); ?>" alt="">
                                            </div>
                                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                                <h6 class="text-truncate mb-3"><?= $item['nama_produk']; ?></h6>
                                                <div class="d-flex justify-content-center">
                                                    <h6><?= $item['harga_produk']; ?></h6><br>
                                                </div>
                                                <h6><?= $item['deskripsi']; ?></h6>
                                            </div>
                                            <div class="card-footer d-flex justify-content-between bg-light border">
                                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>



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
                                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                </p> -->
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

                    <!-- <div id="preloader"></div> -->
                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
                    
                    <!-- <script src="<?= SBADMIN; ?>/vendor/jquery/jquery.min.js"></script> -->
                    <!-- Vendor JS Files -->
                    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
                    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
                    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/vendor/php-email-form/validate.js"></script>
                    <script src="<?php echo base_url('/assets/tugas/'); ?>assets/js/main.js"></script>
                    <script src="<?php echo base_url('/assets'); ?>/lib/easing/easing.min.js"></script>
                    <script src="<?php echo base_url('/assets'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
                    <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
                    <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>vendor/jquery/jquery.min.js"></script>
                    <!-- <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>bootstrap/js/bootstrap.bundle.min.js"></script> -->
                    <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
                    <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>js/sb-admin-2.min.js"></script>


</body>

</html>
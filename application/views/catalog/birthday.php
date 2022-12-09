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
    <link href="<?php echo base_url('assets/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link href="<?php echo base_url('assets/'); ?>img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/vendor/sbadmin2/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('/vendor/sbadmin2/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url("index.php/Home/index"); ?>">
                <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"> -->
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><span>HALWA</span>
                </div>
            </a>
            <!-- </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- QUERY MENU -->
            <?php
            $queryMenu = "SELECT 'user_menu'.'id','menu'
                            FROM 'user_menu' JOIN 'user_access_menu' 
                            ON 'user_menu'.'id' = 'user_access_menu'.'menu_id'
                            WHERE condition";
            ?>

            <!-- Heading -->
            <div class="sidebar-heading">
                All
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Home/index"); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Admin/index"); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Hero</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-filter"></i>
                    <span>Catalog</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Pilihan:</h6>
                        <!-- <a class="collapse-item login-btn" href="<?php echo base_url("index.php/Catalog/hbd"); ?>">Birthday Cake</a> -->
                        <a class="collapse-item login-btn" href="<?php echo base_url("index.php/Catalog/brownies"); ?>">Brownies</a>
                        <a class="collapse-item login-btn" href="<?php echo base_url("index.php/Catalog/desert"); ?>">Dessert</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Logout
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index.php/auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <nav id="navbar" class="navbar">
                            <!-- <ul> -->
                            <!-- <li><a class="nav-link scrollto active" href="<?php echo base_url("index.php/Home/index"); ?>">Home</a></li> -->
                            <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
                                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                                <li><a class="nav-link scrollto" href="#portfolio">Portofolio</a></li>
                                <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                            <!-- <li> -->
                            <!-- <li><a class="nav-link" href="<?php echo base_url("index.php/Home/index"); ?>">Home</a></li>
                                <li><a class="nav-link" href="<?php echo base_url("index.php/Navbar/about"); ?>">About</a></li>
                                <li><a class="nav-link" href=" <?php echo base_url("index.php/Navbar/service"); ?>">Services</a></li>
                                <li><a class="nav-link" href=" <?php echo base_url("index.php/Navbar/portofolio"); ?>">Portofolio</a></li> -->
                            <!-- </ul> -->
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        </nav>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <button class="btn btn-info" onclick="#"><i class="glyphicon glyphicon-plus"></i> Edit Gambar</button>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url('/assets/img/profile/') . $user['image']; ?>">
                            </a>
            </div>
            </li>
            </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <main id="main">
                    <!-- Products Start -->
                    <div class="container-fluid pt-5">
                        <div class="text-center mb-4">
                            <h2 class="section-title px-5"><span class="px-2">Birthday Cake</span></h2>
                        </div>
                        <div class="row px-xl-5 pb-3">
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/birthday/1.jpeg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">Strawberry Shortcake</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>Rp 160.000,00</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/birthday/2.jpeg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">White Cake</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>Rp 140.000,00</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/birthday/3.jpeg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">Pink Cake</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>Rp 155.000,00</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/birthday/4.jpeg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">Butterfly Cake</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>Rp 200.000,00</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/birthday/5.jpeg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">Rose Cake</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>Rp 170.000,00</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/birthday/6.jpeg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">Red Velvet Cake</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>Rp 210.000,00</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/birthday/7.jpeg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">Flower Cake</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>Rp 250.000,00</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/birthday/8.jpeg" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">Oreo Cake</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>Rp 240.000,00</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Products End -->

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
                </main>
            </div>
        </div>
        <!-- End of Main Content -->
    </div>
    </div>
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
    <script src="<?php echo base_url('/assets'); ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url('/assets'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
    <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('/vendor/sbadmin2/'); ?>js/sb-admin-2.min.js"></script>



</body>

</html>
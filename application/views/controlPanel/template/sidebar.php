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

            <?php if ($user['role_id'] == 1) { ?>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Admin Area -->
                <div class="sidebar-heading">
                    ADMIN
                </div>
                <!-- Nav Item - Dashboard -->

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('ControlPanel/heroList'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Hero List</span></a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Admin/heroEvaluate'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Evaluate Hero</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('ControlPanel/productList'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Product List</span></a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Admin/productEvaluate'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Evaluate Products</span></a>
                </li>

                <!-- End Admin Area -->
            <?php } ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                User
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('ControlPanel/hero'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Hero</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('ControlPanel/addProduct'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Product</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/Catalog/brownies"); ?>">
                    <i class="fas fa-fw fa-cookie"></i>
                    <span>Product</span></a>
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
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        </nav>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url('/assets/img/profile/') . $user['image']; ?>">
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
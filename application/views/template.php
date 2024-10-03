<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/Antisme.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Antisme Outsourcing Website
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/scss/_fileinput.scss" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url() ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-normal text-center">
                    Antisme
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?= site_url('Dashboard') ?>">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <!-- Show for Admin -->
                    <?php if ($this->fungsi->user_login()->Level == "Admin") { ?>
                        <li>
                            <a href="<?= site_url('Account') ?>">
                                <i class="nc-icon nc-single-02"></i>
                                <p>Account</p>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- End of Show for Admin -->

                    <!-- Show for Employee -->
                    <?php if ($this->fungsi->user_login()->Level == "Employee") { ?>
                        <!-- <li>
                            <a href="<?= site_url('Contract') ?>">
                                <i class="nc-icon nc-time-alarm"></i>
                                <p>History</p>
                            </a>
                        </li> -->
                    <?php } ?>
                    <!-- End of Show for Employee -->

                    <!-- Show for Client -->
                    <?php if ($this->fungsi->user_login()->Level == "Client") { ?>
                        <li>
                            <a href="<?= site_url('Market') ?>">
                                <i class="nc-icon nc-basket"></i>
                                <p>Market</p>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- End of Show for Client -->

                    <!-- Show for Client & Admin -->
                    <?php if ($this->fungsi->user_login()->Level == "Admin" || $this->fungsi->user_login()->Level == "Client") { ?>
                        <li>
                            <a href="<?= site_url('Contract') ?>">
                                <i class="nc-icon nc-single-copy-04"></i>
                                <p>Contract</p>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- End of Show for Client & Admin -->

                    <li>
                        <a href="<?= site_url('Financial') ?>">
                            <i class="nc-icon nc-book-bookmark"></i>
                            <p>Financial Report</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel" style="min-height: 100vh;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;"><?= $this->fungsi->user_login()->Username; ?></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <p class="description"><?= date('l') ?>, <?= date('d F Y') ?></p>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= site_url('Profile') ?>">Profile</a>
                                    <a class="dropdown-item" href="<?= site_url('Auth/logout') ?>">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Content -->
            <div class="content">
                <?php echo $contents ?>
            </div>
            <!-- End of Content -->

            <!-- Footer -->
            <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                © 2020, made with <i class="fa fa-heart heart"></i> by Antareza
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>assets/js/core/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugins/fileinput.js"></script>
    <!--   End Core JS Files   -->

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  End of Google Maps Plugin    -->

    <!-- Chart JS -->
    <script src="<?= base_url() ?>assets/js/plugins/chartjs.min.js"></script>
    <!-- End of Chart JS -->

    <!--  Notifications Plugin    -->
    <script src="<?= base_url() ?>assets/js/plugins/bootstrap-notify.js"></script>
    <!--  End of Notifications Plugin    -->

    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url() ?>assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
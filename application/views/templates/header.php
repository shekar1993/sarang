<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();
?>public/assets/images/logo.png">
        <title>sarang admin</title>
        <!-- Custom CSS -->

        <link href="<?php echo base_url(); ?>public/css/admin_panel.css" rel="stylesheet">  
        <link href="<?php echo base_url(); ?>public/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>


    <body class="skin-default-dark fixed-layout">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">sarang admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->


            <header class="topbar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-11 mx-auto">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-4 col-md-5">
                                    <div class="row text-center">

                                        <div class="col-md-5 col-sm-12">
                                            <p> <a class="mail" href="mailto:saranag@gmail.com"><i class="fa fa-envelope"></i>info@sarangmusic.com</a></p>
                                        </div>
                                        <div class="col-md-5 col-sm-12" >
                                            <p>  <a class="phone" href="tel:+919590669510"> <i class="fa fa-phone"></i> +91 9590669510</a></p>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-3">

                                </div>
                                <!-- social icon-->
                                <div class="col-sm-2 col-md-2 text-center">
                                    <ul class="social-network ">
                                        <li><a class="" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="" href="#"><i class="fa fa-instagram"></i></a></li>

                                    </ul>
                                </div>
                                <div class="col-sm-2 col-md-2 text-center signup">
                                    <p><a class="" href="<?php echo base_url(); ?>index.php/welcome/logout">Logout</a></p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar top-navbar navbar-expand-md navbar-dark p-2">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">

                            <img src="<?php echo base_url(); ?>public/assets/images/sarang_logo.png" alt="homepage" class="dark-logo"  height="70" />
                        </a>

                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">

                        </ul>
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>public/assets/images/users/1.jpg" alt="user" class="img-circle" width="30"></a>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); 
   ?>public/assets/images/sarang_ico.png">
    <title>sarang</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>public/js/jquery.js" rel="stylesheet">
  <script src="<?php echo base_url();?>public/js/sweetalert.min.js" 
  type="text/javascript" charset="utf-8"></script>
	<link href="<?php echo base_url();?>public/css/custom.css" rel="stylesheet">

    <link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/css/slick-theme.css" rel="stylesheet">
    
 
  
 
<script>
    function showAlert(title,msg,yesBtn,type){

swal({
  title: title,
  text: msg,
  icon: type,
  button: yesBtn,
});
}
</script>


</head>


<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">sarang</p>
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
          <?php if(isset($isloggedin) && $isloggedin==true){ ?>
          <p onclick="logoutAlert()" class="logout">Logout</p>
          <?php } else{?>
                <p><a class="" href="<?php echo base_url(); ?>index.php/welcome/login">Login</a></p>
                <p><a class="" href=""> | </a></p>
                <p><a class="" href="<?php echo base_url(); ?>index.php/welcome/signup">Register</a></p>
<?php }?>
                               </div>
                  </div>
        </div>
      </div>
            <div class="row navigation"> 
                <div class="col-md-11 mx-auto">
            <nav class=" navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
               
                         <img src="<?php echo base_url();?>public/assets/images/sarang_logo.png" alt="homepage" class="dark-logo"  height="70" />
                    </a>

                </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <!-- ============================================================== -->
  
                    <ul class="navbar-nav ml-auto">
   <li class="nav-item"> <a class="nav-link nav-toggler waves-effect waves-light" href="<?php echo base_url(); ?>index.php">HOME</a></li>
  
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle course" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          COURSES
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/course">cources</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/course">cources</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/course">cources</a>

        </div>
      </li>
   <li class="nav-item"> <a class="nav-link nav-toggler waves-effect waves-light" href="<?php echo base_url(); ?>index.php#pricing">PRICING</a></li>
   
   <li class="nav-item"> <a class="nav-link nav-toggler waves-effect waves-light" href="<?php echo base_url(); ?>index.php/welcome/contact_us">REACH</a></li>
   <li class="nav-item"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)">BLOG</a></li>
                    </ul>
                </div>
            </nav>
                </div>
            </div>
        </header>
     
        <?php if(isset($title) && $title !="Home") { ?>
<div class="jumbotron2 course-image4 bread-title">
    <h3 class="categories" ><?php echo $title ?></h3>
        <p class="categories2">Home > <?php echo $title ?></p>    
</div>

<div class="container-fluid justify-content-center course-image2" style="height:30vh;">
    <div class ="container row equal  d-flex justify-content-center align-items-center mx-auto h-100 " >
        <div class ="col-md-12">
            <div class="dropdown">

                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    All Categories
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Hindustani Classical Vocal</a>
                    <a class="dropdown-item active" href="#">Carnatic Classical Vocal</a>
                    <a class="dropdown-item" href="#">Carnatic Classical Violin</a>
                    <a class="dropdown-item" href="#">Ghazal</a>
                    <a class="dropdown-item" href="#">Sitar</a>
                </div>
            </div>

            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                   &nbsp;&nbsp; Price &nbsp;&nbsp;
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"> $1000 </a>
                    <a class="dropdown-item active" href="#"> $1000 </a>
                    <a class="dropdown-item" href="#"> $1000</a>
                    <a class="dropdown-item" href="#"> $1000</a>
                    <a class="dropdown-item" href="#"> $1000 </a>
                </div>
            </div>
            
 
                <form class="example" action="/action_page.php">
                    <input type="text" placeholder="Do you want to learn today?" name="search">
                    <button type="submit">SEARCH NOW <i class="fa fa-search"></i></button>
                </form>
            </div>
    </div>
</div>	
        <?php }?>
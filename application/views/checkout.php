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
   ?>public/assets/images/sarang_ico.png">
    <title>Saarang admin</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>public/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/css/slick-theme.css" rel="stylesheet">
 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head> 
<body>
<div class="container-fluid checkout">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <img src="<?php echo base_url();?>public/assets/images/sarang_logo.png" alt="homepage" class="dark-logo"  height="40" />
            </div>
        </div>
    </div>
</div><br><br>
    <div class="container" id="chechout-box">
   <div class="row">

            <div class="col-md-8">
               <h2> <p class="number text-center"> 1 </p>&nbsp;  Customer</h2>
               <h6 id="check">Check out as a <b>Guest? </b>You'll be able to save your details to create account <br>with us later</h6>
               <b id="check2">Email Address</b><br>
               <input id="check-email" type="text" > &nbsp;
               <button class="button-checkout  text-right" id="guest" style="background-color:#911b71; border: none; color:white;">CONTINUE AS GUEST</button><br>
               <input class="checkin" type="radio" name="sub" value="30"> Subscribe to our newsletter.<br><br>
               <h6 id="check2" >Already have an Account ? <span style="color:purple;">Sign in now</span></h6><hr align="left" id="checkout-line">
               
               <h2> <p class="number text-center"> 2 </p>&nbsp;  Shipping</h2><hr align="left" id="checkout-line">
                <h2> <p class="number text-center"> 3 </p> &nbsp;  Billing</h2><hr align="left" id="checkout-line">
                 <h2> <p class="number text-center"> 4 </p>&nbsp;   Payment</h2><hr align="left" id="checkout-line">
                 
                
            </div>
            
            
            <div class="col-md-4 checkout-card">
                <article class="card p-3" id="checkout-shadow" >
<div class="card-body">
    <div class="row">
    <div class="col-md-6"><p><b> Order Summary</b></p></div>
<div class="text-right col-md-6" ><p style="color:#b7acd4;" align="right"><b>Edit Cart</b></p></div>
</div>
<hr>
    <div class="row">
    <div class="col-md-6"><p> Item</p></div>
<div class="text-right col-md-6" ><p align="right"></p></div>
</div>
    <div class="row">
    <div class="col-md-2"><p> <img  src="<?php echo base_url().'public/assets/images/'?>product-images/Guitar.png"  height="auto" width="30" alt=""/></p></div>
<div class="text-right col-md-7" align="left"><p align="left">1  Digital oak cheese guitar</p></div>
<div class="col-md-3"><p>$39.89</p></div>
</div>
<hr>
    <div class="row">
    <div class="col-md-6"><p> Subtotal</p></div>
<div class="text-right col-md-6" ><p align="right">$39.89</p></div>
</div>
   <div class="row">
    <div class="col-md-6"><p> Shipping</p></div>
<div class="text-right col-md-6" ><p align="right">--</p></div>
</div>
   <div class="row">
    <div class="col-md-6"><p> GST</p></div>
<div class="text-right col-md-6" ><p align="right">$00</p></div>
</div>
   <div class="row">
    <div class="col-md-6"><p style="color:purple;">Coupon / Gift</p></div>
<div class="text-right col-md-6" ><p align="right">$39.89</p></div>
</div>
<hr>
   <div class="row ">
    <div class="col-md-6 mt-2"><p>Total (USD)</p></div>
<div class="text-right col-md-6" ><p align="right" id="card-bottom"><b>$39.89</b></p></div>
</div>

</div> <!-- card-body.// -->
</article> 
   </div>

    </div>
        </div>

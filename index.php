<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JDJ TECHNOLOGY (M) SDN BHD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/jdj-logo.png" rel="icon">  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>
  <div class="top-header">
    <div class="row" style="max-width: 100%">
      <div class="col-md-4 col-5">
        <h1 class="big-name text-end">JDJ</h1>
      </div>
      <div class="col-md-8 col-7">
        <h1 class="mb-0">TECHNOLOGY (M) SDN. BHD. <small class="subtitle">(1359495-U)</small></h1>
        <h1 class="pt-0 second-name">METAL TRADING. <small class="subtitle">(002687917-T)</small></h1>
        <hr class="float-end name-underline">
      </div>
    </div>
    
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class=" d-flex align-items-center bg-gold" >    
    <div class="container d-flex align-items-center">

      <a style="position: absolute;" href="index.php?module=home"><img class="company-logo" src="assets/jdj-logo.png"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->      
      <nav id="navbar" class="navbar">

        <ul>
          <li><a href="index.php?module=home" class="<?php echo empty($_REQUEST['module']) || $_REQUEST['module'] == 'home'? 'active':''; ?>">Home </a></li>
          <li class="dropdown about-menu"><a href="javascript:void(0)" class="<?php echo $_REQUEST['module'] == 'about'? 'active':''; ?>"><span>About Us</span> <!-- <i class="bi bi-chevron-down"></i> --></a>
              <ul>
                <li><a href="index.php?module=about&submodule=vision" class="<?php echo isset($_REQUEST['submodule']) && $_REQUEST['submodule'] == 'vision'? 'active':''; ?>">Vision & Mission</a></li>
                <li><a href="index.php?module=about&submodule=corporate" class="<?php echo isset($_REQUEST['submodule']) && $_REQUEST['submodule'] == 'corporate'? 'active':''; ?>">Corporate Details</a></li>
                <li><a href="index.php?module=about&submodule=md_message" class="<?php echo isset($_REQUEST['submodule']) && $_REQUEST['submodule'] == 'md_message'? 'active':''; ?>">MD Message</a></li>
                <li><a href="index.php?module=about&submodule=orgchart" class="<?php echo isset($_REQUEST['submodule']) && $_REQUEST['submodule'] == 'orgchart'? 'active':''; ?>">Organizational Chart</a></li>
                <li><a href="index.php?module=about&submodule=ssm" class="<?php echo isset($_REQUEST['submodule']) && $_REQUEST['submodule'] == 'ssm'? 'active':''; ?>">SSM Certificate</a></li>
              </ul>
          </li>
          <li class="dropdown service-menu"><a href="javascript:void(0)"><span>Services</span> <!-- <i class="bi bi-chevron-down"></i> --></a>
            <ul>
                <li><a href="index.php?module=services&submodule=list">List of Services</a></li>
                <li><a href="index.php?module=services&submodule=material">Type of Collected Material</a></li>
                <li><a href="index.php?module=services&submodule=safety">Safety</a></li>
                <li><a href="index.php?module=services&submodule=safetyequipment">Safety Equipments</a></li>
                <li><a href="index.php?module=services&submodule=equipment">List of Equipments</a></li>
              </ul>
          </li>
          <li><a href="index.php?module=deconstruction">Deconstruction & Dismantling</a></li>  
          <li class="dropdown project-menu"><a href="javascript:void(0)"><span>Projects</span> <!-- <i class="bi bi-chevron-down"></i> --></a>
            <ul>
                <li><a href="index.php?module=projects&submodule=1">SASASHIP PTE LTD</a></li>
                <li><a href="index.php?module=projects&submodule=2">United Plantations BHD</a></li>
                <li><a href="index.php?module=projects&submodule=3">Guocera Tiles (M) SDN. BHD.</a></li>
                <li><a href="index.php?module=projects&submodule=4">Petrogas</a></li>
              </ul>
          </li>
          <li><a href="index.php?module=contact">Contact Us</a></li>          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  

  <main id="main">
    <?php 

      /*get content*/
      if(!isset($_REQUEST['module'])){        
        include "home.php";
      }
      else
      {        
        include $_REQUEST['module'].".php";
      }
    ?>
    

  </main><!-- End #main -->

  <hr class="footerline">
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-12 pl-4 col-12">

            <div class="float-lg-end">
              <div class="icon-bg-gold"><i class="bi bi-at"></i></div>
              <div class="footer-text">
                No. 21B, Batu 13, Kampung Simpang Balak, <br>Jalan Cheras, 43000 Kajang, <br>Selangor Darul Ehsan
              </div>
            </div>
            
          </div>
          <div class="col-lg-5 col-md-12 col-12">
            <div class="middle-info">
              <div class="icon-bg-gold mt-0 mt-lg-0"><i class="bi bi-phone phone-icon"></i></div>
              <div class="footer-text mt-3 mt-lg-0">
                <p class="mb-0">+60 13-721 4393&nbsp;&nbsp;&nbsp;&nbsp;+60 11-1290 1176</p>
                <p class="mb-0">+60 18-973 4393&nbsp;&nbsp;&nbsp;&nbsp;+60 10-268 1176</p>  
              </div>              
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-12">            
            <div class="icon-bg-gold mt-4 mt-lg-0"><i class="bi bi-envelope mail-icon"></i></div>
            <div class="footer-text mt-4 mt-lg-0">
              <p class="mb-0">jdjtechnology20@gmail.com</p>
              <p class="mb-0">thila716@gmail.com</p>
            </div>
          </div>

        </div>
      </div>
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
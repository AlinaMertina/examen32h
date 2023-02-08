<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bethany Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url("assetsT/vendor/aos/aos.css");?>" rel="stylesheet">
  <link href="<?php echo base_url("assetsT/vendor/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">
  <link href="<?php echo base_url("assetsT/vendor/bootstrap-icons/bootstrap-icons.css");?>" rel="stylesheet">
  <link href="<?php echo base_url("assetsT/vendor/boxicons/css/boxicons.min.css");?>" rel="stylesheet">
  <link href="<?php echo base_url("assetsT/vendor/glightbox/css/glightbox.min.css");?>" rel="stylesheet">
  <link href="<?php echo base_url("assetsT/vendor/remixicon/remixicon.css");?>" rel="stylesheet">
  <link href="<?php echo base_url("assetsT/vendor/swiper/swiper-bundle.min.css");?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url("assetsT/css/style.css");?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v4.10.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center" style="font-size:10px;margin-bottom:20%;">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>Takalo-Takalo</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            
            <?php if(isset($admin)){ ?>
              <li><a class="nav-link scrollto active" href="<?php echo base_url("accuille/liste/");?>">Accuille</a></li>
              <li><a class="nav-link scrollto" href="<?php echo base_url("accuille/faireRecherche/");?>">recherche</a></li>
              <li><a class="nav-link scrollto " href="<?php echo base_url("Statistiques/getStat/");?>">Statistiques</a></li>
            <?php }else{ ?>
              <li><a class="nav-link scrollto active" href="<?php echo base_url("accuille/index/");?>">Accuille</a></li>
              <li><a class="nav-link scrollto" href="<?php echo base_url("accuille/listeproposition/");?>">proposition</a></li>
              <li><a class="nav-link scrollto " href="<?php echo base_url("accuille/listeautreobject/");?>">Produit</a></li>
              <li class="dropdown"><a href="#"><span>Gestion de mes poste</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="<?php echo base_url("accuille/ajoutproduit/");?>">Ajout produit</a></li>
                  <li><a href="<?php echo base_url("accuille/voirlistedemespost/");?>">Voir liste de mes poste</a></li>
                </ul>
              </li>
              <?php } ?>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="<?php echo  base_url("welcome/deconnexion/"); ?>">Log out</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->
  
      <?php if(isset($admin)){ ?>
      <form action="" method="POST">
          </input type="text" name="categorie" >
          </input type="submit"/>
      </from>
  <?php } ?>
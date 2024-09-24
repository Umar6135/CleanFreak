<!DOCTYPE html>
<html lang="de">

<head>
  <?php
  if ($GLOBALS['title']) {
    $title = $GLOBALS['title'];
  } else {
    $GLOBALS['title'] = "";
  }
  if ($GLOBALS['desc']) {
    $desc = $GLOBALS['desc'];
  } else {
    $desc = "";
  }
  if ($GLOBALS['keywords']) {
    $keywords = $GLOBALS['keywords'];
  } else {
    $keywords = "";
  } ?>

  <title>
    <?php echo $title; ?>
  </title>
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="description" content="<?php echo $desc ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="./assets/css/aos.css" rel="stylesheet"> -->
    <link rel="preload" href="./assets/css/style.min.css" as="style" />
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <link rel="preload" href="./assets/img/banner-bg.webp" as="Image" />


    
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">

</head>

<body>
    <!-- top-header  -->
    <div class="top-header" id="navbartops">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="ht-social">
                        <a href="https://www.facebook.com/profile.php?id=61558004429418" aria-label="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ht-contact">
                        <a href="tel:4054062287">405-406-2287</a>
                        <span>|</span>

                        <a href="mailto:cleanfreaksokc@gmail.com">cleanfreaksokc@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>










    
    <header id="header-lower">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" aria-label="logo"><img src="./assets/img/logo.svg" width="100"
                        height="100" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa-solid fa-bars bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">
                                About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./residential-cleaning.php">Residential Cleaning</a></li>
                                <li><a class="dropdown-item" href="./commercial-cleaning.php">Commercial Cleaning</a></li>

                                <li><a class="dropdown-item" href="./window-cleaning.php">Window Washing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./who-we-serve.php">
                            Cleaning Blog</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">
                                Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
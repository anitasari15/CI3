<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>HTML Education Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../../assets/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
  <body>

    <!-- Header -->
    <header id="header" class="transparent-nav">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a class="logo" href="home">
              <img src="../../assets/img/sklh.jpeg" alt="logo">
            </a>
          </div>
          <!-- /Logo -->

          <!-- Mobile toggle -->
          <button class="navbar-toggle">
            <span></span>
          </button>
          <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <div class="container">
          <ul class="main-menu nav navbar-nav navbar-right">
            <li><a href="../../home">Home</a></li>
            <li><a href="../../home">About</a></li>
            <li><a href="../../blog">Blog</a></li>
            <!-- <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li> -->
          </ul>
        </div>
        </nav>
        <!-- /Navigation -->

      </div>
    </header>
    <!-- /Header -->

    <!-- Home -->
    <div id="home" class="hero-area">

      <!-- Backgound Image -->
      <div class="bg-image bg-parallax overlay" style="background-image:url(../../assets/img/bg.png)"></div>
      <!-- /Backgound Image -->

      <div class="home-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1 class="white-text">Wellcome To SMAN 1 KUTOREJO</h1>
              <p class="lead white-text">BERSATU, BERAKSI DAN BERPRESTASI</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /Home -->

    <!-- About -->
    <div class="section">

      <!-- container -->
      <div class="container">

        <!-- row -->
        <div class="row">

          <div class="col-md-6">
            <div class="section-header">
              <h2>VISI DAN MISI</h2>
              <!-- <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p> -->
            </div>

            <!-- feature -->
            
            <!-- /feature -->

            <!-- feature -->
            <div class="feature">
              <!-- <i class="feature-icon fa fa-users"></i> -->
             <div class="container text-center">
      <?php foreach ($detail as $key): ?>
      <div class="container">
        <table>
          <tr class="text-center">
            <td>
              <h3><b><?php echo $key->judul; ?></b><h3>
              </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="../../img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
              <br></br>
              <br></br>
              <br></br>
              <?php echo $key->tanggal; ?>
              <br></br>
              <br></br>
              <br></br>

            </td>
          </tr>
          <tr>
            <td class="text-justify">
              <?php echo $key->content; ?>
            </td>
          </tr>
        </table>
      </div>
      <?php endforeach ?>
    </div>
       
    <!-- Footer -->
    <footer id="footer" class="section">

      <!-- container -->
      <div class="container">

        <!-- row -->
        <div class="row">

          <!-- footer logo -->
          <div class="col-md-6">
            <div class="footer-logo">
              <a class="logo" href="#home">
                <img src="../../assets/img/sklh.jpeg" alt="logo">
              </a>
            </div>
          </div>
          <!-- footer logo -->

          <!-- footer nav -->
          <div class="col-md-6">
            <ul class="footer-nav">
              <li><a href="../../home">Home</a></li>
              <li><a href="../../about">About</a></li>
            </ul>
          </div>
          <!-- /footer nav -->

        </div>
        <!-- /row -->

        <!-- row -->
        <div id="bottom-footer" class="row">

          <!-- social -->
          <div class="col-md-4 col-md-push-8">
            <ul class="footer-social">
<!--               <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>
          </div>
          <!-- /social -->

          <!-- copyright -->
          <div class="col-md-8 col-md-pull-4">
            <div class="footer-copyright">
              <span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
            </div>
          </div>
          <!-- /copyright -->

        </div>
        <!-- row -->

      </div>
      <!-- /container -->

    </footer>
    <!-- /Footer -->

    <!-- preloader -->
    <div id='preloader'><div class='preloader'></div></div>
    <!-- /preloader -->


    <!-- jQuery Plugins -->
    <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assets/js/main.js"></script>

  </body>
</html>

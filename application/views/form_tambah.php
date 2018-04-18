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
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>

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
              <img src="../assets/img/sklh.jpeg" alt="logo">
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
            <li><a href="../home">Home</a></li>
            <li><a href="../home">About</a></li>
            <li><a href="../blog">Blog</a></li>
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
      <div class="bg-image bg-parallax overlay" style="background-image:url(../assets/img/bg.png)"></div>
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

  <div class="container">
    <?php echo validation_errors(); ?>
      <?php
        echo form_open('blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="judul" value="<?php echo set_value('judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="content" value="<?php echo set_value('content') ?>"></td>
        </tr>
        <tr>
          <td>Kategori </td>
          <td>:</td>
          <td><input type="text" name="kategori" value="<?php echo set_value('kategori') ?>"></td>
        </tr>
        <tr>
          <td>Penulis </td>
          <td>:</td>
          <td><input type="text" name="penulis" value="<?php echo set_value('penulis') ?>"></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="sumber" value="<?php echo set_value('sumber') ?>"></td>
        </tr>
        <tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="tanggal" value="<?php echo set_value('tanggal') ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar') ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>

</body>
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
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>

  </body>
</html>

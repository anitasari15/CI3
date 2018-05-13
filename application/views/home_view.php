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
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>

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
              <img src="assets/img/sklh.jpeg" alt="logo">
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
            <li><a href="<?php echo base_url() ?>home">Home</a></li>
            <li><a href="<?php echo base_url() ?>home">About</a></li>
            <li><a href="<?php echo base_url() ?>blog">Blog</a></li>
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
      <div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/bg.png)"></div>
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

    <div class="container text-center">

      <h1>ARTIKEL</h1>
      <br></br>
      <?php foreach ($artikel as $key): ?>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <table style="margin-bottom: 30px;">
            <tr>
              <td>
                <a href="<?php echo base_url() ?>blog/detail/<?php echo $key->id_blog ?>" style="color: black;">
                  <img src="<?php echo base_url() ?>img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
                  <br>
                  <?php echo $key->judul ?>
                </a>
                <br></br>
                <!-- <button>Edit</button> -->
                <!-- <button>Delete</button> -->
                <a href='<?php echo base_url() ?>blog/delete/<?php echo $key->id_blog ?>' class='btn btn-sm btn-danger'>Hapus</a>
                <a href='<?php echo base_url() ?>blog/edit/<?php echo $key->id_blog ?>' class='btn btn-sm btn-info'>Update</a>
              </td>
            </tr>
          </table>
        </div>
      <?php endforeach ?>
    </div>
    
<div class="text-center">
<?php
 // $links ini berasal dari fungsi pagination
 // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
 if (isset($links)) {
 echo $links;
 }
 ?>
</div>
    
       
    <!-- Footer -->
    <footer id="footer" class="section">

      <!-- container -->
      <div class="container">

        <!-- row -->
        <div class="row">

          <!-- footer nav -->
          <div class="col-md-12">
            <ul class="footer-nav">
              <li><a href="<?php echo base_url() ?>blog/tambah">Tambah Artikel</a></li>
              <li><a href="<?php echo base_url() ?>kategori">Kategori</a></li> 
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
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css">
        <!-- Style tambahan
        Note: Jika menginginkan style CSS tambahan, gunakan file custom.css sehingga file CSS asli milik Bootstrap tetap orisinil. Tujuannya, agar nantinya jika ada update baru dari Bootstrap dan ingin kita implementasikan, maka custom style kita tidak tertimpa.
        -->
        <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/custom.css">

        <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/assets/js/holder.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url() ?>assets/assets/js/custom.js"></script>

  </body>
</html>

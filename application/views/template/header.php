<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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

    <script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>


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
              <img src="<?php echo base_url() ?>assets/img/sklh.jpeg" alt="logo">
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
            <li><a href="<?php echo site_url() ?>home">Home</a></li>
            <li><a href="<?php echo site_url() ?>home">About</a></li>
            <li><a href="<?php echo site_url() ?>blog">Blog</a></li>
            <li><a href="<?php echo site_url() ?>kategori">Kategori</a></li>
          </ul>
<!-- log out -->
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <div class="btn-group" role="group" aria-label="Data baru">
                <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
                <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>
            </div>
            <?php endif; ?>

            <?php if($this->session->userdata('logged_in')) : ?>
                <div class="btn-group" role="group" aria-label="Data baru">
                <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
                </div>
            <?php endif; ?>
        </div>
        </nav>
        <!-- /Navigation -->
        <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>
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
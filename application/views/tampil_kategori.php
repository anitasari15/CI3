<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
} ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>HTML Education Template</title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.9.1.min.js"></script>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url(). 'assets/assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url(). 'assets/assets/js/jquery.dataTables.bootstrap4.min.js'?>"></script>
   



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
            <li><a href="<?php echo base_url() ?>home">Home</a></li>
            <li><a href="<?php echo base_url() ?>home">About</a></li>
            <li><a href="<?php echo base_url() ?>blog">Blog</a></li>
            <li><a href="<?php echo base_url() ?>kategori">Kategori</a></li>
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
<br></br>
<br></br>
  <h1 class="black-text">FORM TAMPIL KATEGORI</h1>
<br></br>
<br></br>
<td><a href='<?php echo base_url() ?>kategori/create' class='btn btn-sm btn-info'>Tambah</a></td>

        <div class="card-content table-responsive">
            <table id="dt-basic" class="table">
                <thead class="text-primary">
                    <th>Id Kategori</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                  <?php
                        foreach($kategori as $i):
                  ?>
                  <tr>
                    <td><?php echo $i->id_kategori ?></td>
                    <td><?php echo $i->kategori ?></td>
                    <td><?php echo $i->deskripsi ?></td>
                    <td>
                      <a href="<?php echo base_url() ?>kategori/edit/<?php echo $i->id_kategori ?>" class="btn btn-primary">Update</a>
                      <a href="<?php echo base_url() ?>kategori/delete/<?php echo $i->id_kategori ?>" class="btn btn-danger">Delete</a></td>
                  </tr>
            </tbody>
            <?php endforeach;?>
        </table>
    </div>


<script >
         $(document).ready(function(){

        // Contoh inisialisasi Datatable tanpa konfigurasi apapun
        // #dt-basic adalah id html dari tabel yang diinisialisasi
        $('#dt-basic').DataTable();
    });
</script>

    <!-- js placed at the end of the document so the pages load faster -->
  <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css">

</body>
</html>
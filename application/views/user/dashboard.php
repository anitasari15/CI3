<?php $this->load->view("template/header"); ?>

<div class="container">
   <div class="py-5 text-center">
       <h2>Selamat datang <?php echo $user->nama ?> 
       <br>
       <br>
       <span class="badge badge-secondary"><?php echo $user->nama_level ?></span></h2>
   </div>
</div>

<br>
<br>

<?php $this->load->view("template/footer"); ?>
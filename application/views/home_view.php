<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
} ?>

<?php $this->load->view("template/header"); ?>
<div class="container text-center">

      <h1>ARTIKEL</h1>
      <br></br>
      <div><a href='<?php echo base_url() ?>blog/tambah' class='btn btn-sm btn-info'>Tambah Konten</a></div>
      <br></br>
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

<?php $this->load->view("template/footer"); ?>
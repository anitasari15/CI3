<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
} ?>

<?php $this->load->view("template/header"); ?>
            <div class="feature">
              <!-- <i class="feature-icon fa fa-users"></i> -->
             <div class="container text-center">
      <?php foreach ($detail as $key): ?>
      <div class="container">
        <table>
          <tr class="text-center">
            <td>
              <h3><b><?php echo $key->judul; ?></b></h3>
              </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="<?php echo base_url() ?>img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
              <br></br>
              <br></br>
              <br></br>
              <?php echo $key->tanggal_post; ?>
              <br></br>
              <br></br>
              <br></br>

            </td>
          </tr>
          <br></br>
          <tr>
            <td class="text-center">
              <!-- <td>ID KATEGORI : </td>
              <br></br> -->
              <p>ID KATEGORI : <?php echo $key->id_kategori; ?></p>
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
<?php $this->load->view("template/footer"); ?>
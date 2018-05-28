<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
} ?>

<?php $this->load->view("template/header"); ?>

<br></br>
<br></br>
<br></br>
<br></br>
  <div class="container">
    <h1 class="black-text">FORM TAMBAH KATEGORI</h1>
    <br></br>
    <?php echo validation_errors(); ?>
    <?php echo form_open('kategori/create', array('enctype'=>'multipart/form-data') ); ?>
  <table>
        <tr>
          <td>Kategori</td>
          <td>:</td>
          <td><input type="text" name="kategori" value="<?php echo set_value('kategori'); ?>"></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td>:</td>
          <td><input type="text" name="deskripsi" value="<?php echo set_value('deskripsi') ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
  </table>
  </div>
 
</body>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
</body>

<?php $this->load->view("template/footer"); ?>
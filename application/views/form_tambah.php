<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
} ?>

<?php $this->load->view("template/header"); ?>
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
          <label>Kategori</label>
            <select name="id_kategori" class="form-control" required>
              <option value="">Pilih Kategori</option>
              <?php foreach($kategori as $kategori): ?>
              <option value="<?php echo $kategori->id_kategori; ?>"><?php echo $kategori->kategori; ?></option>
              <?php endforeach; ?>
            </select>
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
<?php $this->load->view("template/footer"); ?>
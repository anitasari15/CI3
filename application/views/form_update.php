<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
} ?>

<?php $this->load->view("template/header"); ?>
<div class="container">
      <?php foreach ($single as $key): ?>
      <?php echo validation_errors(); ?>
      <?php echo form_open('blog/edit/'.$key->id_blog, array('enctype'=>'multipart/form-data')); ?>
      <table>
        <tr>
          <td>ID_BLOG</td>
          <td>:</td>
          <td><input type="text" name="id" readonly value="<?php echo $key->id_blog; ?>"></td>
        </tr>
        <tr>
          <td>JUDUL</td>
          <td>:</td>
          <td><input type="text" name="judul" value="<?php echo $key->judul; ?>"></td>
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
          <td>KONTEN</td>
          <td>:</td>
          <td><input type="text" name="content" value="<?php echo $key->content; ?>"></td>
        </tr>
        <!-- <tr>
          <td>KATEGORI </td>
          <td>:</td>
          <td><input type="text" name="kategori" value="<?php echo $key->id_kategori; ?>"></td>
        </tr> -->
        <tr>
          <td>PENULIS </td>
          <td>:</td>
          <td><input type="text" name="penulis" value="<?php echo $key->penulis; ?>"></td>
        </tr>
        <tr>
          <td>SUMBER </td>
          <td>:</td>
          <td><input type="text" name="sumber" value="<?php echo $key->sumber; ?>"></td>
        </tr>
        <tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="edit" value="Edit" class="btn btn-primary"></td>
        </tr>
      </table>
      <?php endforeach ?>
    </div>
<?php $this->load->view("template/footer"); ?>
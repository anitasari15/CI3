<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">
      <?php foreach ($single as $key): ?>
      <?php echo form_open('kategori/edit/'.$key->id_kategori, array('enctype'=>'multipart/form-data')); ?>
      <table>
        <tr>
          <td>ID KATEGORI</td>
          <td>:</td>
          <td><input type="text" name="id_kategori" readonly value="<?php echo $key->id_kategori; ?>"></td>
        </tr>
        <tr>
          <td>NAMA KATEGORI</td>
          <td>:</td>
          <td><input type="text" name="kategori" value="<?php echo $key->kategori; ?>"></td>
        </tr>
        <tr>
          <td>DESKRIPSI</td>
          <td>:</td>
          <td><input type="text" name="deskripsi" value="<?php echo $key->deskripsi; ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="edit" value="Edit" class="btn btn-primary"></td>
        </tr>
      </table>
      <?php endforeach ?>
    </div>

</body>
</html>
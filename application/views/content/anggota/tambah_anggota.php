<div class="container-fluid">

  <?php if(validation_errors()) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo validation_errors(); ?>
            </div>
          <?php } ?>

    <h1>Tambah Data Anggota</h1>
    <form action="<?php echo base_url('index.php/anggota/store'); ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anggota">
    <?php if(form_error('nama')){ ?>
      <small class="text-danger"><?php echo form_error('nama')?></small>
    <?php } ?>
    
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
      <option value="">Tidak Menyebutkan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="kelas">Kelas</label>
    <select name="kelas" id="kelas" class="form-control">
      <option value="A">Kelas A</option>
      <option value="B">Kelas B</option>
      <option value="C">Kelas C</option>
      <option value="">Tidak Menyebutkan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="foto">Foto (jika ada)</label>
    <input type="file" class="form-control" id="foto" name="foto">  
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
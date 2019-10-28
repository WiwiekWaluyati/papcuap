<div class="container-fluid">
    <h1>Edit Data Dosen</h1>
    <form action="<?php echo base_url('index.php/dosen/update/'.$dosen->id_dosen); ?>" method="post">
  <div class="form-group">
    <label for="nama">NRP</label>
    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukan No NRP" value="<?php echo $dosen->nip; ?>">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="nama">Nama Dosen</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Dosen" value="<?php echo $dosen->nama; ?>">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" rows=" 10" value="<?php echo $dosen->alamat; ?>">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="alamat">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" value="<?php echo $dosen->tanggal_lahir; ?>">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="container-fluid">
    <h1>Tambah Data Dosen</h1>
    <form action="<?php echo base_url('index.php/dosen/store'); ?>" method="post">
  <div class="form-group">
    <label for="nip">NIP</label>
    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="nama">Nama Dosen</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Dosen">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" rows=" 10">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="container-fluid">
  <!-- konten kita ada disini -->
  <h1>Tambah Feedback </h1>

  <form action="<?php echo base_url('index.php/feedback/store'); ?>" method="post">
    <div class="form-group">
      <label for="nrp">NRP</label>
      <input class="form-control" id="nrp" placeholder="Masukkan NRP" name="nrp">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input class="form-control" id="nama" placeholder="Masukkan nama mahasiswa" name="nama">
    </div>
    <div class="form-group">
      <label for="penilaian">Penilaian</label>
      <select class="form-control" id="penilaian" name="penilaian">
        <option value="Puas">Puas</option>
        <option value="Tidak Puas">Tidak Puas</option>
      </select>
    </div>
    <div class="form-group">
        <label for="kesan">Kesan</label>
        <textarea class="form-control" id="kesan" rows="7" name="kesan" placeholder="Masukan Kesan"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>

    </form>

  </div>
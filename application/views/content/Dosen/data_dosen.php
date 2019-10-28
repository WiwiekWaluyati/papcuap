<div class="container-fluid">
  <h1>Data Dosen PAPSI</h1>

				<!-- tampilkan flashdata (jika ada) -->
				    <?php if($this->session->flashdata('success')) { ?>
				    <div class="alert alert-success" role="alert">
				    	<?php echo $this->session->flashdata('success'); ?>
				    </div>
					<?php } ?>


	<a class="btn btn-block btn-primary" href="<?php echo base_url('index.php/dosen/create'); ?>">Tambah Dosen</a>
  <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
  	<thead>
  		<tr>
  			<td scope="col">No</td>
  			<td scope="col">NIP</td>
  			<td scope="col">Nama</td>
  			<td scope="col">Alamat</td>
        <td scope="col">Tanggal Lahir</td>
  			<td>Aksi</td>
  		</tr>
  	</thead>
  	<tbody style="background-image:url(assets/img/seigaiha.png);">
  		<?php
  			$no = 0;
  			foreach ($dosen as $item) {
  				$no++;
  		?>
  			<tr>
  				<th scope="row"><?php echo $no ?></th>
          <td><?php echo $item->nip ?></td>
  				<td><?php echo $item->nama ?></td>
  				<td><?php echo $item->alamat ?></td>
  				<td><?php echo $item->tanggal_lahir ?></td>
  				<td>-</td>
  				<td>
            <a href="<?php echo base_url('index.php/dosen/show/'.$item->id_dosen) ?>" class="btn btn-xs btn-info">Tampil</a>
  					<a href="<?php echo base_url('index.php/dosen/edit/'.$item->id_dosen) ?>" class="btn btn-xs btn-warning">Edit</a>
  					<a href="<?php echo base_url('index.php/dosen/delete/'.$item->id_dosen) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin menghapus <?php echo $item->nama ?> ?')">Hapus</a>
  				</td>
  			</tr>
  		<?php
  			}
  		?>
  	</tbody>
  </table>
</div>
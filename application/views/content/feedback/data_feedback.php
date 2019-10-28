  <div class="container-fluid">
        <!-- konten kita ada disini -->
        <h1>Data Feedback</h1>
        
        <!-- tampilkan flashfdata (jika ada) -->
                <?php if(!empty($message)) {?>
                <hr>
                <div class="alert alert-danger" role="alert">
                        <?php echo $message; ?>
                </div>
                <?php } ?>


        <a class= "btn btn-block btn-primary" href="<?php echo base_url('index.php/feedback/create'); ?>">Tambah Feedback</a>

          <table class="table table-hover">
            <thead>
              <tr>
                <td scope= "col">No</td>
                <td scope= "col">NRP</td>
                <td scope= "col">Nama </td>
                <td scope= "col">Penilaian</td>
                <td scope= "col">Kesan</td>
                        <td scope= "col">Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php 
                    $no = 0;
              foreach ($feedback as $item) {
                        $no++;
              ?>  
              
            <tr>
              <th scope= "row"><?php echo $no;?></th>
              <td><?php echo $item->nrp; ?></td>
              <td><?php echo $item->nama; ?></td>
              <td><?php echo $item->penilaian; ?></td>
                    <td><?php echo $item->kesan; ?></td>
              
              <td>
                <a href="<?php echo base_url('index.php/feedback/edit/'.$item->id); ?>" class= " btn btn-xs btn-warning">Edit</a>
                <a href="<?php echo base_url('index.php/feedback/delete/'.$item->id); ?>" class= " btn btn-xs btn-danger">Hapus</a>
              </td>
            </tr>
            <?php
          }
          ?>
            </tbody>

          </table>
      </div>
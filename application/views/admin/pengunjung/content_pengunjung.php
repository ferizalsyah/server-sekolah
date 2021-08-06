 <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Kampus &nbsp;&nbsp;<a href="<?php echo base_url()."admin/kampus/tambah_kampus/"?>"
        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></h3>
    </div>
 <!-- Main content -->
   
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Kampus</th>
                  <th>Nama Kampus</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
              foreach ($kampus->result() as $row) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->kd_kampus;?></td>
                  <td><?php echo $row->nmkampus;?></td>
                  <td><?php echo $row->alamat;?></td>
                  <td>
            <a href="<?php echo base_url()."admin/kampus/update/".$row->idkampus; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."admin/kampus/hapus/".$row->idkampus; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
              </table>
            </div>
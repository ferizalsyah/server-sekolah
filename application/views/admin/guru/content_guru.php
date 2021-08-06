 <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Lokasi &nbsp;&nbsp;<a href="<?php echo base_url()."admin/guru/tambah"?>"
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
                  <th>Nama Guru</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Mata Pelajaran</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
              foreach ($data->result() as $row) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->nama_guru;?></td>
                  <td><?php echo $row->email;?></td>
                  <td><?php echo $row->password;?></td>
                  <td><?php echo $row->jenis_kelamin;?></td>
                  <td><?php echo $row->alamat;?></td>
                  <td><?php echo $row->guru_mapel;?></td>
                  <td>
            <a href="<?php echo base_url()."admin/guru/update/".$row->id_guru; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."admin/guru/hapus/".$row->id_guru; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
              </table>
            </div>
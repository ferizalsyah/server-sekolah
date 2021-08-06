 <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Siswa &nbsp;&nbsp;<a href="<?php echo base_url()."admin/siswa/tambah_siswa/"?>"
        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></h3>
    </div>
 <!-- Main content -->
   
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php echo form_open('kampus/cetak_content_kampus');?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NISN</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Kelas</th>
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
                  <td><?php echo $row->nama;?></td>
                  <td><?php echo $row->nisn;?></td>
                  <td><?php echo $row->email;?></td>
                  <td><?php echo $row->password;?></td>
                  <td><?php echo $row->alamat;?></td>
                  <td><?php echo $row->jenis_kelamin;?></td>
                  <td><?php echo $row->kelas;?></td>
                  <td>
            <a href="<?php echo base_url()."admin/siswa/update/".$row->id_siswa; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."admin/siswa/hapus/".$row->id_siswa; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </form>
          </tr>
          <?php
          $no++;
      }
          ?>
              </table>
              
            </div>
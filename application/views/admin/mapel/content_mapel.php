<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Data Kelas &nbsp;&nbsp;<a href="<?php echo base_url() . "admin/mapel/tambah_mapel/" ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></h3>
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
            <th>Mata Pelajaran</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($pelajaran->result() as $row) {
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $row->nama_pelajaran; ?></td>
              <td>
                <a href="<?php echo base_url() . "admin/mapel/content_update/" . $row->id_pelajaran; ?>" class="btn btn-success btn-sm">Edit</a>
                <a href="<?php echo base_url() . "admin/mapel/hapus/" . $row->id_pelajaran; ?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
          <?php
            $no++;
          }
          ?>
      </table>
    </div>
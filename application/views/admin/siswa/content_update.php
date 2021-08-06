<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data kampus</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($siswa->result() as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/siswa/edit">
			<div class="box-body">
			<input type="hidden" name="id_siswa" value="<?php echo $b->id_siswa ?>">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputPassword3" value="<?php echo $b->nama ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NISN</label>
                  <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control" id="inputEmail3" value="<?php echo $b->nisn ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="inputEmail3" value="<?php echo $b->email ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputEmail3" value="<?php echo $b->alamat ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" value="<?php echo $b->jenis_kelamin ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" name="kelas" class="form-control" id="inputEmail3" value="<?php echo $b->kelas ?>">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/data_siswa" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Update</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>
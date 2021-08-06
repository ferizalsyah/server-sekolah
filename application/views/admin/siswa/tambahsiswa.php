<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data siswa</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/siswa/simpan">
			<div class="box-body">
      <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputPassword3">
                  </div>
                </div>
          
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">NISN</label>
                  <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" name="password" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" name="kelas" class="form-control" id="inputEmail3">
                  </div>
                </div>
         
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/siswa" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Update</button>
              </div>
              <!-- /.box-footer -->
		</form>
	</div>
</div>
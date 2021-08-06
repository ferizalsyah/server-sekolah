<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data Kelas</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/kelas/simpan">
			<div class="box-body">
      <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_kelas" class="form-control" id="inputPassword3">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/kelas" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Update</button>
              </div>
              <!-- /.box-footer -->
		</form>
	</div>
</div>
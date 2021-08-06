<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data kampus</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($kampus->result() as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/kampus/edit">
			<div class="box-body">
			<input type="hidden" name="idkampus" value="<?php echo $b->idkampus ?>">
      <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kd_kampus</label>

                  <div class="col-sm-10">
                    <input type="text" name="kd_kampus" class="form-control" id="inputPassword3" value="<?php echo $b->kd_kampus ?>">
                  </div>
                </div>
          
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">nmkampus</label>

                  <div class="col-sm-10">
                    <input type="text" name="nmkampus" class="form-control" id="inputPassword3" value="<?php echo $b->nmkampus ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">alamat</label>

                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputEmail3" value="<?php echo $b->alamat ?>">
                  </div>
                </div>
         
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/data_kampus" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Update</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>
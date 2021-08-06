<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data Guru</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($guru as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/admin/guru/edit">
			<div class="box-body">
			<input type="hidden" name="id_guru" value="<?php echo $b->id_guru ?>">
      <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_guru" class="form-control" id="inputPassword3" value="<?php echo $b->nama_guru ?>">
                  </div>
                </div>
          
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/guru" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Update</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>
<form action="<?php echo site_url('Welcome/UpdateDataNobuy'); ?>" method="post">


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Keterangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">


<div class="form-group">
<label class="col-sm-2 control-label">Tanggal</label>
<div class="col-sm-10">
<input type="hidden" name="no" class="form-control" value="<?php echo $detail['no']; ?>">
<input type="text" name="tanggal" class="form-control" value="<?php echo $detail['tanggal']; ?>">
</div></div>


<div class="form-group">
<label class="col-sm-2 control-label">Hari</label>
<div class="col-sm-10">
<input type="text" name="hari" class="form-control" value="<?php echo $detail['hari']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Keterangan</label>
<div class="col-sm-10">
<input type="text" name="alasan_nobuy" class="form-control" value="<?php echo $detail['alasan_nobuy']; ?>">
</div></div>

</div>

 <div class="box-footer">
                <button type="submit" name="btn_simpan" class="btn btn-info pull-right">Simpan</button>
              </div>
          </form></div></form>
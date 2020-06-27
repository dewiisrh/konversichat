<form action="<?php echo site_url('Welcome/UpdateDataChat'); ?>" method="post">


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data Chat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">


<div class="form-group">
<label class="col-sm-2 control-label">Hari</label>
<div class="col-sm-10">
<input type="hidden" name="tanggal" class="form-control" value="<?php echo $detail['tanggal']; ?>">
<input type="text" name="hari" class="form-control" value="<?php echo $detail['hari']; ?>">
</div></div>


<div class="form-group">
<label class="col-sm-2 control-label">IG/FB</label>
<div class="col-sm-10">
<input type="text" name="medsos" class="form-control" value="<?php echo $detail['medsos']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">WA</label>
<div class="col-sm-10">
<input type="text" name="wa" class="form-control" value="<?php echo $detail['wa']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Buying</label>
<div class="col-sm-10">
<input type="text" name="buy" class="form-control" value="<?php echo $detail['buy']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">No Buying</label>
<div class="col-sm-10">
<input type="text" name="nobuy" class="form-control" value="<?php echo $detail['nobuy']; ?>">
</div></div>
</div>

 <div class="box-footer">
                <button type="submit" name="btn_simpan" class="btn btn-info pull-right">Simpan</button>
              </div>
          </form></div></form>
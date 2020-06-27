<div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Data Chat</h2>
            </div>
    

<table class="table">

			<div class="navbar-form">
				<a href="<?php echo site_url('Welcome/AddChat'); ?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Data Chat</button></a>
			 
		</div>

	<tr>
		<th>Tanggal</th>
		<th>Hari</th>
		<th>IG/FB</th>
		<th>WA</th>
		<th>Buying</th>
		<th>No Buying</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataChat))
	{
		foreach($DataChat as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->tanggal; ?></td>
		<td><?php echo $ReadDS->hari; ?></td>
		<td><?php echo $ReadDS->medsos; ?></td>
		<td><?php echo $ReadDS->wa; ?></td>
		<td><?php echo $ReadDS->buy; ?></td>
		<td><?php echo $ReadDS->nobuy; ?></td>

		<td>
			<a href="<?php echo site_url('Welcome/DataChat/'.$ReadDS->tanggal.'/view') ?>"><button type="button" class="btn btn-success">Update</button></a>
			<a href="<?php echo site_url('Welcome/DeleteDataChat/'.$ReadDS->tanggal) ?>"><button type="button" class="btn btn-danger">Delete</button></a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table></div>
<div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Keterangan</h2>
            </div>
    

<table class="table">

			<div class="navbar-form">
				<a href="<?php echo site_url('Welcome/AddNobuy'); ?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Keterangan</button></a>
			 
		</div>

	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Hari</th>
		<th>Keterangan</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataNobuy))
	{
		foreach($DataNobuy as $ReadDS)
		{
	?>

	<tr>
 		<td><?php echo $ReadDS->no; ?></td>
		<td><?php echo $ReadDS->tanggal; ?></td>
		<td><?php echo $ReadDS->hari; ?></td>
		<td><?php echo $ReadDS->alasan_nobuy; ?></td>

		<td>
			<a href="<?php echo site_url('Welcome/DataNobuy/'.$ReadDS->no.'/view') ?>"><button type="button" class="btn btn-success">Update</button></a>
			<a href="<?php echo site_url('Welcome/DeleteDataNobuy/'.$ReadDS->no) ?>"><button type="button" class="btn btn-danger">Delete</button></a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
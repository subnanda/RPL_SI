<html>
    <head>

    <title>Print Data Aset</title>

    </head>
    <body>

    <h3 align="center"><u>Data Aset</u></h3>
    <p>
    <a href="<?php echo base_url();?>aset/data"> 
    <button onClick="window.print();" class="btn btn-success btn-small">Print</button> 
    
    <a href="<?php echo base_url();?>laporan"> 
    
    <button class="btn btn-warning btn-small">Back</button> 
    
    </p>
    </a>

   
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			
			<th>Kode Aset</th>
			<th>Nama</th>
			<th>Spesifikasi</th>
			<th>Jumlah</th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			foreach ($data->result() as $row) 
			{
				?>
				
				<td><?php echo $row->kode_aset;?></td>
				<td><?php echo $row->nama;?></td>
				<td><?php echo $row->spesifikasi;?></td>
				<td><?php echo $row->jumlah;?></td>
				
				
			
			
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</body>
</html>
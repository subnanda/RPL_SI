<h3 align="center"><u> Data Aset </u></h3>
<ol class="breadcrumb">
                        <li><a href="#">Tables
                        <small>>></small>
                        <small>Aset</small></a></li>
                        
                    </ol>
<script type="text/javascript">
	// $(function()
	// {
	// 	var oTable1 = $('#sample-table-2').dataTable( {
	// 		"aoColumns" : [null, null,null,null,null,null,null,null,
	// 		{"bSortable": false }
	// 		] } );

	// })
</script>
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			
			<th style="text-align:center">Kode Aset</th>
			<th style="text-align:center">Nama</th>
			<th style="text-align:center">Spesifikasi</th>
			<th style="text-align:center">Jumlah</th>
			
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
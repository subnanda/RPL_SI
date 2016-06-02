<script type="text/javascript">
	$(function()
	{
		var oTable1 = $('#sample-table-2').dataTable( {
			"aoColumns" : [null, null,null,null,null,null,null,null,
			{"bSortable": false }
			] } );

	})
</script>
<p>
<a href="<?php echo base_url();?>index.php/input/tambah" class="btn btn-primary btn-small"> Tambah Data</a>
</p>
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			
			<th>ID Pengadaan</th>
			<th>Nama Barang</th>
			<th>Kode</th>
			<th>Jumlah</th>
			<th>Tanggal</th>
			<th>Fungsi</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			foreach ($data->result() as $row) 
			{
				?>
				
				<td><?php echo $row->id_pengadaan;?></td>
				<td><?php echo $row->nama_barang;?></td>
				<td><?php echo $row->kode_barang;?></td>
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo $row->tgl_pengadaan;?></td>
				<td><?php echo $row->fungsi;?></td>
				<td><?php echo $row->keterangan;?></td>
				<td>
					<a href="<?php echo base_url()?>index.php/input/edit/<?php echo $row->id_pengadaan;?>" class="btn btn-primary btn-small">Edit</a>
					
				</td>
				
			
			
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
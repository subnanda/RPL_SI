

<table id="sample-table-2" class="table table-striped table-bordered table-hover" width="600px">
	<thead>
		<tr>
			<th style="text-align:center">Nomor</th>
			<th style="text-align:center">ID</th>
			<th style="text-align:center">Nama Barang</th>
			<th style="text-align:center">Kode</th>
			<th style="text-align:center">Tanggal</th>
			<th style="text-align:center">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data->result() as $row) 
			{
				?>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->id_pengadaan;?></td>
				<td><?php echo $row->nama_barang;?></td>
				<td><?php echo $row->kode_barang;?></td>
				
				<td><?php echo $row->tgl_pengadaan;?></td>
				
				
				<td>
				
					<a href="<?php echo base_url()?>index.php/persetujuan/delete/<?php echo $row->id_pengadaan;?>" 
					class="btn btn-primary btn-small" class="btn btn-primary btn-small" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?' );" >Delete</a>
				
				</td>
				
			
			
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
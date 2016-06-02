<html>
    <head>

    <title>Print Data Peminjaman Dosen / Lembaga</title>

    </head>
    <body>

    <h3 align="center">Data Peminjaman Dosen / Lembaga</h3>
    <p>
    <a href="<?php echo base_url();?>peminjaman/data"> 
    <button onClick="window.print();" class="btn btn-success btn-small">Print</button> 
    
    <a href="<?php echo base_url();?>laporan"> 
    
    <button class="btn btn-warning btn-small">Back</button> 
    
    </p>
    </a>

   
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<!-- <th>No Peminjaman</th> -->
			<th>Dosen/Lembaga</th>
			<th>Aset</th>
			<th>Admin</th>
			<th>Jumlah</th>
			<th>Tgl Pinjam</th>
			<th>Tgl Kembali</th>
			<th>Tgl Dikembalikan</th>
			<th>Denda</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data->result() as $row) 
			{
				$id_dosen = $this->model_peminjaman->tampilpeminjaman($row->id_dosen);
				$kode = $this->model_peminjaman->tampilpeminjaman1($row->kode);
				//$namadosen = $this->model_peminjaman->tampilpeminjaman2($row->id_dosen);	
				$id_adm = $this->model_peminjaman->tampiladmin($row->id_adm);
				?>
				<td><?php echo $row->no_peminjaman;?></td>
				<!-- <td><?php echo $row->no_peminjaman;?></td> -->
				<td><?php echo $id_dosen;?></td>
				<td><?php echo $kode;?></td>
				<td><?php echo $id_adm;?></td>
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo $row->tgl_peminjaman;?></td>
				<td><?php echo $row->tgl_pengembalian;?></td>
				<td><?php echo $row->tgl_adm;?></td>
				<td><?php echo "Rp.",$row->sanksi;?></td>
				
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>

</div>
</body>
</html>





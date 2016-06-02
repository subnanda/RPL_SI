<html>
    <head>

    <title>Print Data Peminjaman Mahasiswa</title>

    </head>
    <body>

    <h3 align="center">Data Peminjaman Mahasiswa</h3>
    <p>
    <a href="<?php echo base_url();?>peminjaman_mahasiswa/data"> 
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
			<th>Mahasiswa</th>
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
				$no_bp = $this->model_pinjam->tampilpeminjaman($row->no_bp);
				$kode_aset = $this->model_pinjam->tampilpeminjaman1($row->kode_aset);
				//$namadosen = $this->model_peminjaman->tampilpeminjaman2($row->id_dosen);	
				$id_adm = $this->model_pinjam->tampiladmin($row->id_adm);
				?>
				<td><?php echo $row->no_peminjaman;?></td>
				<!-- <td><?php echo $row->no_peminjaman;?></td> -->
				<td><?php echo $no_bp;?></td>
				<td><?php echo $kode_aset;?></td>
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





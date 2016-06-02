<html>
    <head>

    <title>Print Data Pengadaan</title>

    </head>
    <body>

    <h3 align="center">Data Pengadaan</h3>
    <p>
    <a href="<?php echo base_url();?>pengadaan_aset/data"> 
    <button onClick="window.print();" class="btn btn-success btn-small">Print</button> 
    <a href="<?php echo base_url();?>laporan"> 
    
    <button class="btn btn-warning btn-small">Back</button> 
    </p>
    </a>

   
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th style="text-align:center">No</th>
			<!-- <th>No Peminjaman</th> -->
			<th style="text-align:center">Dosen / Lembaga</th>
			<th style="text-align:center">Nama Aset</th>
			<th style="text-align:center">Kode Aset</th>
			<th style="text-align:center">Jumlah</th>
			<th style="text-align:center">Fungsi</th>
			<th style="text-align:center">Spesifikasi</th>
			<th style="text-align:center">Status</th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data->result() as $row) 
			{
				$id_dosen = $this->model_pengadaan->tampilpeminjaman($row->id_dosen);
				
				if ($row->status == 0) 
				{
					$row->status = "Belum Disetujui";
				}
				else
				{
					$row->status = "Disetujui";
				}
				//adm = $this->model_pinjam_mhs->tampiladmin($row->id_adm);
				?>
				<td><?php echo $no++;?></td>
				<td><?php echo $id_dosen;?></td>
				<td><?php echo $row->nama_aset;?></td>
				<td><?php echo $row->kode_aset;?></td>
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo $row->fungsi;?></td>
				<td><?php echo $row->spesifikasi;?></td>
				<td><?php echo $row->status;?></td>
				
				
		</tr>
		<?php } ?>
	</tbody>
</table>

</body>


</html>
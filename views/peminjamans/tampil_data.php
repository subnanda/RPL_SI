<html>
<head>
    
</head>
<body>
<h2 style="text-align: center;"><u>Status Peminjaman Mahasiswa</u></h2>


<!-- <p>
<a href="<?php echo base_url();?>peminjaman/edit" class="btn btn-primary btn-small"> Tambah Denda </a>

</p> -->
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th style="text-align:center">No</th>
			<!-- <th>No Peminjaman</th> -->
			<th style="text-align:center">Mahasiswa</th>
			<th style="text-align:center">Aset</th>
			<th style="text-align:center">Admin</th>
			<th style="text-align:center">Jumlah</th>
			<th style="text-align:center">Tgl Pinjam</th>
			<th style="text-align:center">Tgl Kembali</th>
			<th style="text-align:center">Status</th>
			<th style="text-align:center">Check</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data->result() as $row) 
			{
				if ($row->status == 0) 
				{
					$row->status = "Belum Disetujui";
				}
				else
				{
					$row->status = "Disetujui";
				}
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
				<td><?php echo $row->status;?></td>
				
				<td style="text-align:center">
					<a href="<?php echo base_url()?>pinjam_mhs/edit/<?php echo $row->no_peminjaman;?>" class="btn btn-info btn-small">Detail</a>

				</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</body>
</html>
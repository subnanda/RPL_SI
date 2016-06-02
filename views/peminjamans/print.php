<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Peminjaman Mahasiswa</h1>
<a href="<?php echo "Tanggal : ".date('d-m-Y'); ?><br><br>" class="btn btn-success btn-small">Cetak Data</a><br><br>


<!-- <p>
<a href="<?php echo base_url();?>peminjaman/edit" class="btn btn-primary btn-small"> Tambah Denda </a>

</p> -->
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
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data as $row) 
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
				
				<!-- <td>
					<a href="<?php echo base_url()?>peminjaman_mahasiswa/edit/<?php echo $row->no_peminjaman;?>" class="btn btn-primary btn-small">Denda</a> |
					<a href="<?php echo base_url()?>peminjaman_mahasiswa/delete/<?php echo $row->no_peminjaman;?>" class="btn btn-primary btn-small" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?');">Delete</a>
					 
				</td> -->
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</body>
</html>
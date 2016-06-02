<h3 align="center"><u> Status Peminjaman Dosen dan Lembaga</u></h3>


<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th style="text-align:center">No</th>
			<!-- <th>No Peminjaman</th> -->
			<th style="text-align:center">Dosen / Lembaga</th>
			<th style="text-align:center">Aset</th>
			<th style="text-align:center">Admin</th>
			<th style="text-align:center">Jumlah</th>
			<th style="text-align:center">Tgl Pinjam</th>
			<th style="text-align:center">Tgl Kembali</th>
			<th style="text-align:center">Status</th>
			<th style="text-align:center">Check</th>
			<!-- <th>Tgl Dikembalikan</th>
			<th>Denda</th> -->
			<!-- <th>Aksi</th> -->
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			
			foreach ($data->result() as $row) 
			{
				$id_dosen = $this->model_pinjam_dosen->tampilpeminjaman($row->id_dosen);
				$kode = $this->model_pinjam_dosen->tampilpeminjaman1($row->kode);
				//$namadosen = $this->model_peminjaman->tampilpeminjaman2($row->id_dosen);	
				$id_adm = $this->model_pinjam_dosen->tampiladmin($row->id_adm);
				if ($row->status == 0) 
				{
					$row->status = "Belum Disetujui";
				}
				else
				{
					$row->status = "Disetujui";
				}
				?>
				<td><?php echo $row->no_peminjaman;?></td>
				<!-- <td><?php echo $row->no_peminjaman;?></td> -->
				<td><?php echo $id_dosen;?></td>
				<td><?php echo $kode;?></td>
				<td><?php echo $id_adm;?></td>
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo $row->tgl_peminjaman;?></td>
				<td><?php echo $row->tgl_pengembalian;?></td>
				<td><?php echo $row->status;?></td>
				<!-- <td><?php echo $row->tgl_adm;?></td>
				<td><?php echo "Rp.",$row->sanksi;?></td> -->
				<td style="text-align:center">
					<a href="<?php echo base_url()?>peminjaman/edit/<?php echo $row->no_peminjaman;?>" class="btn btn-info btn-small">Detail</a>
					 
				</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
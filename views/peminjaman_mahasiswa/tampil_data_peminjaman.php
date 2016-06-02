<h3 align="center"><u> Data Peminjaman Mahasiswa </u></h3>

<p>
<a href="<?php echo base_url();?>pinjam_mhs/tambah" class="btn btn-block btn-info btn-small"> Tambah Data </a>

</p>
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th style="text-align:center">No</th>
			<!-- <th>No Peminjaman</th> -->
			<th style="text-align:center">Mahasiswa</th>
			<th style="text-align:center">Aset</th>
			<!-- <th>Admin</th> -->
			<th style="text-align:center">Jumlah</th>
			<th style="text-align:center">Tgl Pinjam</th>
			<th style="text-align:center">Tgl Kembali</th>
			
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
				$no_bp = $this->model_pinjam_mhs->tampilpeminjaman($row->no_bp);
				$kode_aset = $this->model_pinjam_mhs->tampilpeminjaman1($row->kode_aset);
				//$namadosen = $this->model_peminjaman->tampilpeminjaman2($row->id_dosen);	
				$id_adm = $this->model_pinjam_mhs->tampiladmin($row->id_adm);
				?>
				<td><?php echo $row->no_peminjaman;?></td>
				<!-- <td><?php echo $row->no_peminjaman;?></td> -->
				<td><?php echo $no_bp;?></td>
				<td><?php echo $kode_aset;?></td>
				<!-- <td><?php echo $id_adm;?></td> -->
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo $row->tgl_peminjaman;?></td>
				<td><?php echo $row->tgl_pengembalian;?></td>
				<!-- <td><?php echo $row->tgl_adm;?></td>
				<td><?php echo "Rp.",$row->sanksi;?></td> -->
				<!-- <td> -->
					<!-- <a href="<?php echo base_url()?>peminjaman_mahasiswa/edit/<?php echo $row->no_peminjaman;?>">Denda</a> |
					<a href="<?php echo base_url()?>peminjaman_mahasiswa/delete/<?php echo $row->no_peminjaman;?>" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?');">Delete</a> -->
					 
				<!-- </td> -->
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<h3 align="center"><u> Data Peminjaman Mahasiswa </u></h3>
<ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>aset/asett">Tables
                        <small>>></small>
                        <small>Aset</small></a></li>
                        
                    </ol>

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
			
			<th style="text-align:center">Jumlah</th>
			<th style="text-align:center">Tgl Pinjam</th>
			<th style="text-align:center">Tgl Kembali</th>
			<th style="text-align:center">Status</th>
			<th style="text-align:center">Tgl Dikembalikan</th>
			<th style="text-align:center">Denda</th>
			<th style="text-align:center">Aksi</th>
			<th style="text-align:center">Add Denda</th>
			
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
				<td><?php echo $no_bp;?></td>
				<td><?php echo $kode_aset;?></td>
				
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo $row->tgl_peminjaman;?></td>
				<td><?php echo $row->tgl_pengembalian;?></td>
				<td><?php echo $row->status;?></td>
				<td><?php echo $row->tgl_adm;?></td>
				<td><?php echo "Rp.",$row->sanksi;?></td>
				<td><p>
				<a href="<?php echo base_url()?>setuju_mhs/edit/<?php echo $row->no_peminjaman;?>" class="btn btn-link btn-small"><u>Setujui</u></a>
				</p>
					<a href="<?php echo base_url()?>peminjaman_mahasiswa/delete/<?php echo $row->no_peminjaman;?>" class="btn btn-link btn-small" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?');"><u>Delete</u></a>
					 
				</td>
				<td>
					<p><a href="<?php echo base_url()?>peminjaman_mahasiswa/edit/<?php echo $row->no_peminjaman;?>" class="btn btn-link btn-small">Pengembalian</a> </p> 
				</td>
				
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
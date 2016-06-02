<h3 align="center"><u> Data Pengajuan Aset </u></h3>
<ol class="breadcrumb">
                        <li><a href="#">Tables
                        <small>>></small>
                        <small>Pengadaan</small></a></li>
                        
                    </ol>
<!-- <p>
<a href="<?php echo base_url();?>pengajuan/tambah" class="btn btn-primary btn-small"> Tambah Data </a>

</p> -->
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
			<th style="text-align:center">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data->result() as $row) 
			{
				$id_dosen = $this->model_pengadaan->tampilpeminjaman($row->id_dosen);
				//$status = $this->model_setuju->tampiladmin($row->status);
				if ($row->status == 0) 
				{
					$row->status = "Belum Disetujui";
				}
				else
				{
					$row->status = "Disetujui";
				}
				// $kode_aset = $this->model_pinjam_mhs->tampilpeminjaman1($row->kode_aset);
				// //$namadosen = $this->model_peminjaman->tampilpeminjaman2($row->id_dosen);	
				// $id_adm = $this->model_pinjam_mhs->tampiladmin($row->id_adm);
				?>
				<td><?php echo $no++;?></td>
				<!-- <td><?php echo $row->no_peminjaman;?></td> -->
				<td><?php echo $id_dosen;?></td>
				<td><?php echo $row->nama_aset;?></td>
				<td><?php echo $row->kode_aset;?></td>
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo $row->fungsi;?></td>
				<td><?php echo $row->spesifikasi;?></td>
				<td><?php echo $row->status;?></td>
				
				<!-- <td><?php echo $row->tgl_adm;?></td>
				<td><?php echo "Rp.",$row->sanksi;?></td> -->
				<td> 
				<p>
					<a href="<?php echo base_url()?>pengadaan_aset/edit/<?php echo $row->id_pengadaan;?>" class="btn btn-link btn-small">Input Aset</a></p>
					<a href="<?php echo base_url()?>pengadaan_aset/delete/<?php echo $row->id_pengadaan;?>" class="btn btn-link btn-small" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?');">Delete</a>
					 
				</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<h3 align="center"><u> Data Peminjaman Lembaga Dan Dosen </u></h3>
<ol class="breadcrumb">
                        <li><a href="<?php echo base_url();?>aset/asettt">Tables
                        <small>>></small>
                        <small>Aset</small></a></li>
                        
                    </ol>

<!-- <p>
<a href="<?php echo base_url();?>peminjaman/edit" class="btn btn-primary btn-small"> Tambah Denda </a>

</p> -->
<div class="box-body">
<table id="sample-table-2" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th style="text-align:center">No</th>
			<!-- <th>No Peminjaman</th> -->
			<th style="text-align:center">Dosen/Lembaga</th>
			<th style="text-align:center">Aset</th>
			
			<th style="text-align:center">Jumlah</th>
			<th style="text-align:center">Tgl Pinjam</th>
			<th style="text-align:center">Tgl Kembali</th>
			<th style="text-align:center">Status</th>
			<th style="text-align:center">Tgl Dikembalikan</th>
			<th style="text-align:center">Denda</th>
			<th style="text-align:center">Aksi</th>
			<th style="text-align:center">Add Pengembalian</th>
			
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
				<!-- <td><?php echo $id_adm;?></td> -->
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo $row->tgl_peminjaman;?></td>
				<td><?php echo $row->tgl_pengembalian;?></td>
				<td><?php echo $row->status;?></td>
				<td><?php echo $row->tgl_adm;?></td>
				<td><?php echo "Rp.",$row->sanksi;?></td>
				<td>
					<p><a href="<?php echo base_url()?>peminjaman/setuju/<?php echo $row->no_peminjaman;?>" class="btn btn-link btn-small"><u>Setujui</u></a></p>
					
					<a href="<?php echo base_url()?>peminjaman/delete/<?php echo $row->no_peminjaman;?>" class="btn btn-link btn-small" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?');"><u>Delete</u></i></a> 
				</td>
				<td>
					<p><a href="<?php echo base_url()?>peminjaman/denda/<?php echo $row->no_peminjaman;?>" class="btn btn-link btn-small">Pengembalian</a></p>
				</td>

		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
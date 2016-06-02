
	<style type="text/css">
	  #outtable{
	  	padding: 20px;
	  	border:1px solid #e3e3e3;
	  	width:600px;
	  	border-radius: 5px;
	  }
 
	  .short{
	  	width: 50px;
	  }
 
	  .normal{
	  	width: 150px;
	  }
      table{
      	border-collapse: collapse;
      	font-family: arial;
      	color:#5E5B5C;
      }
 
      thead th{
      	text-align: left;
      	padding: 10px;
      }
 
      tbody td{
      	border-top: 1px solid #e3e3e3;
      	padding: 10px;
      }
 
      tbody tr:nth-child(even){
      	background: #F6F5FA;
      }
 
      tbody tr:hover{
      	background: #EAE9F5
      }
	</style>
	<div class="posting">

	<table width="400px"  align="center">
	<tr>
		<td style="text-align:center">
			<label><h5>Data</h5></label>
		</td>
		<td style="text-align:center"><h5>Value</h5></td>
	</tr>

	<tr>
	<td>
		<label >No Peminjaman</label>
		</td><td>
			<?php echo $no_peminjaman;?>
		</td>
	</tr>

	<tr>
	<td>
	<label>Nama Dosen / Lembaga</label>
	</td>
		<?php 

			$id_dosen = $this->model_pinjam_dosen->tampilpeminjaman($id_dosen);
			?>
			<td><?php echo $id_dosen;?></td>
	</tr>

	<tr>
	<td>
		<label>Tanggal Peminjaman</label>
		</td>
		<td>
			<?php echo $tgl_peminjaman;?>	
		</td>
	</tr>

	<tr>
	<td>
		<label>Tanggal Pengembalian</label>
		</td><td>
			<?php echo $tgl_pengembalian;?>
		</td>
	</tr>

	<tr>
	<td>
	<label>Nama Aset</label>
	</td>
	<?php 

			$kode = $this->model_pinjam_dosen->tampilpeminjaman1($kode);
			?>
			<td><?php echo $kode;?></td>
	
		
	</tr>

	<tr>
	<td>
		<label>Jumlah</label>
		</td><td>
			<?php echo $jumlah;?>
		</td>
	</tr>

<tr>
<td>
	<label>Nama Admin</label>
	</td>
	<?php
		$id_adm = $this->model_pinjam->tampiladmin($id_adm);
	?><td>
		<?php echo $id_adm;?>
	</td>	
	</tr>

<tr>
	<td>
		<label class="control-label"> Status</label>
		</td>
		<?php
		if ($status == 0) 
				{
					$status = "Belum Disetujui";
				}
				else
				{
					$status = "Disetujui";
				}
		?>
			<td><?php echo $status;?>
		</td>
	</td>

</tr>

	<tr>
	<td></td>&nbsp;
	<td>
    <a href="<?php echo base_url();?>peminjaman/kelas"> 
    <button onClick="window.print();" class="btn btn-success btn-small">Print</button> 
    
		<a href="<?php echo base_url();?>peminjaman/kelas" class="btn btn-warning btn-small">Tutup</a>
	</td>
	</tr>
	</table>
	</div>





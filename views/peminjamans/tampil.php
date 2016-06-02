
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
		<td> <label><h5 align="center">Data</h5></label></td>&nbsp;
		<td><label><h5 align="center">Value</h5></label></td>
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
	<label>Nama Mahasiswa</label>
	</td>
		<?php
		$no_bp = $this->model_pinjam->tampilpeminjaman($no_bp);
		?>
		<td><?php echo $no_bp;?>
	</td>	
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

			$kode_aset = $this->model_pinjam->tampilpeminjaman1($kode_aset);
			?>
			<td><?php echo $kode_aset;?></td>
	
		
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
    <a href="<?php echo base_url();?>pinjam_mhs/kelas"> 
    <button onClick="window.print();" class="btn btn-success btn-small">Print</button> 
    
		<a href="<?php echo base_url();?>pinjam_mhs/kelas" class="btn btn-warning btn-small">Tutup</a>
	</td>
	</tr>
	</table>
	</div>





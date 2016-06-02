<?php
$info = $this->session->flashdata('info');
if (!empty($info)) 
{
	echo $info;
}
?>

<div class="posting">
	<table width="400px"  align="center">
	<th colspan="3" align="left" ><div style="margin:0 0 0 20px"><h4 align="center"><u> Data Aset</u></h4></div></th>
	<tr>
	<td>
		<label class="control-label" style="text-align:center">Kode Aset</label>
		</td><td style="text-align:center">
			<?php echo $kode_aset;?>
			
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label" style="text-align:center">No Pengadaan</label>
		</td><td style="text-align:center">
			<?php echo $no_pengadaan;?>
			
		</td>
	</tr>
	
	<tr>
	<td>
		<label class="control-label" style="text-align:center">Nama Aset</label>
		</td><td style="text-align:center">
			<?php echo $nama;?>
			
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label" style="text-align:center">Spesifikasi</label>
		</td><td style="text-align:center">
			<?php echo $spesifikasi;?>
			
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label" style="text-align:center">Jumlah</label>
		</td><td style="text-align:center">
			<?php echo $jumlah;?>
			
		</td>
	</tr>

	<tr>
	<td></td>&nbsp;
	<td style="text-align:center">
		<a href="<?php echo base_url();?>hapus_pengadaan"> 
    <button onClick="window.print();" class="btn btn-success btn-small">Print</button>
		<a href="<?php echo base_url();?>hapus_pengadaan" class="btn btn-warning btn-small">Tutup</a>
	</td>
	</tr>
	</table>

</div>





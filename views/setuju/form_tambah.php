<?php
$info = $this->session->flashdata('info');
if (!empty($info)) 
{
	echo $info;
}
?>

<div  class="posting">
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>setuju/simpan" >
	<table width="400px"  align="center">
	<th colspan="3" align="left" ><div style="margin:0 0 0 20px"><h4 align="center">Form Persetujuan Pengadaan Aset</h4></div></th>
	<tr>
	<td>
		<label class="control-label">No Pengajuan</label>
		</td><td>
			<input type="text" name="id_pengadaan" id="id_pengadaan" placeholder="Nomor Pengajuan" class="span3" value="<?php echo $id_pengadaan;?>">
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Aksi</label>
		</td><td>
			<input type="radio" name="status" id="status" value=0 > Tidak Setuju<br/>
			<input type="radio" name="status" id="status" value=1 > Setuju<br/>
		</td>
	</tr>

	<tr>
	<td></td>&nbsp;
	<td>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" class="btn btn-info btn-small" onclick="return confirm('Anda Yakin Ingin Mengubah Data Ini?');" >Tambah</button>
		<a href="<?php echo base_url();?>setuju" class="btn btn-warning btn-small">Tutup</a>
	</td>
	</tr>
</table>
</form>
</div>





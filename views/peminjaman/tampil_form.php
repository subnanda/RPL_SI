<?php
$info = $this->session->flashdata('info');
if (!empty($info)) 
{
	echo $info;
}
?>
<div class="posting">
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>peminjaman/add" >
<table width="400px"  align="center">
	<th colspan="3" align="left" ><div style="margin:0 0 0 20px"><h4 align="center"><u>Peminjaman</u></h4></div></th>
	<tr>

	<td width="80px">
		<label class="control-label" style="text-align:center">No Peminjaman</label>
		</td><td>
			<input type="text" name="no_peminjaman" id="no_peminjaman" class="span1" value="<?php echo $no_peminjaman;?>" style="color:red">
			<h8 style="color:red">*</h8>
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label" style="text-align:center">Aksi</label>
		</td><td>
			<input type="radio" name="status" id="status" value=0 > Tidak Setuju<br/>
			<input type="radio" name="status" id="status" value=1 > Setuju<br/>
		</td>
	</tr>

	 <tr>
	<td>
	</td>&nbsp;<td>
		<button type="submit" class="btn btn-success btn-small" onclick="return confirm('Anda Yakin Ingin Mengubah Data Ini?');" >Tambah</button>
		<a href="<?php echo base_url();?>peminjaman_mahasiswa" class="btn btn-warning btn-small">Tutup</a>
	</td>
	</tr>
</table>
NB: <h8 style="color:red">*</h8> (Data Tidak Boleh Di Ubah)
</form>
</div>





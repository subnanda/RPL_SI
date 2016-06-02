

<?php
$info = $this->session->flashdata('info');
if (!empty($info)) 
{
	echo $info;
}
?>
<div class="posting">
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>peminjaman/save" >
<table width="400px"  align="center">
<th colspan="3" align="left" ><div style="margin:0 0 0 20px"><h4 align="center">Form Pengembalian Aset</h4></div></th>
	<tr>
	<td width="80px">
		<label class="control-label" style="text-align:center">No Peminjaman</label>
		</td><td>
			<input type="text" name="no_peminjaman" id="no_peminjaman" placeholder="Nomor Perpindahan" class="span1" value="<?php echo $no_peminjaman;?>" style="color:red">
		<h8 style="color:red">*</h8>
		</td>
	</tr>


	<tr>
	<td>
		<label class="control-label" style="text-align:center">Tanggal Pengembalian</label>
		</td><td>
			<?php echo $tgl_pengembalian;?>
			<h8 style="color:red">*</h8>
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label" style="text-align:center">Tanggal Dikembalikan</label>
		</td><td>
			<input class="span2" type="date" name="tgl_adm" id="tgl_adm" min="2014-09-08" max="2018-09-08">
		</td>
	</tr>


	<tr>
	<td>
		<label class="control-label" style="text-align:center">Denda</label>
		</td><td>
			<input type="text" name="sanksi" id="sanksi" placeholder="Denda" class="span2" value="<?php echo $sanksi;?>">
		</td>
	</tr>
	
	<tr>
	<td></td>&nbsp;
	<td>
		<button type="submit" class="btn btn-success btn-small" >Tambah</button>
		<a href="<?php echo base_url();?>peminjaman" class="btn btn-warning btn-small">Tutup</a>
	</td>
	</tr>
	</table>
	NB: <h8 style="color:red">*</h8> (Data Tidak Boleh Di Ubah)
</form>
</div>





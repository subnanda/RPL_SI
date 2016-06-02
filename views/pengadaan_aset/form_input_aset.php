<script type="text/javascript">
function cekform(){
  if (kode_aset.value == ""){
    alert("Kode masih kosong!");
    kode_aset.focus();
    return (false);
  }
  if (no_pengadaan.value == ""){
    alert("Nomor Pengadaan masih kosong!");
    no_pengadaan.focus();
    return (false);
  }
  if (nama.value == ""){
    alert("Nama kosong!");
    nama.focus();
    return (false);
  }
  if (spesifikasi.value == ""){
    alert("Spesifikasi masih kosong!");
    spesifikasi.focus();
    return (false);
  }
return (true);
}
</script>

<?php
$info = $this->session->flashdata('info');
if (!empty($info)) 
{ 
	echo $info;
}
?>
<div class="posting">
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>pengadaan_aset/simpan" onsubmit="return cekform();">
<table width="400px"  align="center">
	<th colspan="3" align="left" ><div style="margin:0 0 0 20px"><h4 align="center">Form Input Aset</h4></div></th>
	<tr>
	<td>
		<label class="control-label">Nomor Pengadaan</label>
		</td>
		<td>
			<input type="text" name="no_pengadaan" id="no_pengadaan" placeholder="Nomor Pengadaan" class="span2" value="<?php echo $id_pengadaan;?>">
			<h8 style="color:red">*</h8>
		</td>
	</tr>


	<tr>
	<td>
		<label class="control-label">Kode Aset</label>
		</td>
		<td>
			<input type="text" name="kode_aset" id="kode_aset" placeholder="Kode Aset" class="span2" value="<?php echo $kode_aset;?>">
			<h8 style="color:red">*</h8>
		</td>
	</tr>

	
	<tr>
	<td>
		<label class="control-label">Nama Aset</label>
		</td>
		<td>
			<input type="text" name="nama" id="nama" placeholder="Nama Aset" class="span2" value="<?php echo $nama_aset;?>">
			<h8 style="color:red">*</h8>
		</td>
	</tr>


	<tr>
	<td>
		<label class="control-label">Spesifikasi</label>
	</td>
		<td>
			<input type="text" name="spesifikasi" id="spesifikasi" placeholder="Spesifikasi" class="span2" value="<?php echo $spesifikasi;?>">
			<h8 style="color:red">*</h8>
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Jumlah</label>
		</td>
		<td>
			<input type="text" name="jumlah" id="jumlah" placeholder="Jumlah" class="span2" value="<?php echo $jumlah;?>">
			<h8 style="color:red">*</h8>
		</td>
	</tr>

	<tr>
	<td></td>&nbsp;
	<td>
		<button type="submit" class="btn btn-success btn-small" onclick="return confirm('Data Berhasil Di Simpan');"> Tambah </button>
		<a href="<?php echo base_url();?>pengadaan_aset" class="btn btn-warning btn-small">Tutup</a>
	</td>
	</tr>
	</table>
	NB: <h8 style="color:red">*</h8> (Data Tidak Boleh Di Ubah)
</form>
</div>
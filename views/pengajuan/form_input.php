<script type="text/javascript">
function cekform(){
  if (id_pengadaan.value == ""){
    alert("Gagal, Kode masih kosong!");
    id_pengadaan.focus();
    return (false);
  }
  if (id_dosen.value == ""){
    alert("Gagal, Dosen masih kosong!");
    id_dosen.focus();
    return (false);
  }
  if (nama_aset.value == ""){
    alert("Gagal, Nama Aset kosong!");
    nama_aset.focus();
    return (false);
  }
  if (kode_aset.value == ""){
    alert("Gagal, Kode Aset masih kosong!");
    kode_aset.focus();
    return (false);
  }
  if (jumlah.value == ""){
    alert("Gagal, Jumlah masih kosong!");
    jumlah.focus();
    return (false);
  }
  if (tgl_pengadaan.value == ""){
    alert("Gagal, Tanggal masih kosong!");
    tgl_pengadaan.focus();
    return (false);
  }
  if (spesifikasi.value == ""){
    alert("Gagal, Spesifikasi masih kosong!");
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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>pengajuan/simpan" onsubmit="return cekform();">
<table width="400px"  align="center">
	<th colspan="3" align="left" ><div style="margin:0 0 0 20px"><h4 align="center">Form Pengajuan Aset</h4></div></th>
	<tr>
	<td>
	 
		<label class="control-label">No Pengajuan</label></td>
		<td>
			<input type="text" name="id_pengadaan" id="id_pengadaan" placeholder="001xxx" class="span3" >
		</td>
	</tr> 

	<tr>
	<td>
	<label class="control-label">Dosen / Lembaga</label>
	</td><td>
		<input type="text" name="id_dosen" id="id_dosen" placeholder="ID Dosen / Lembaga "  class="span3" >
	</td>	
	</tr>

	<tr>
	<td>
		<label class="control-label">Nama Aset</label>
		</td>
		<td>
			<input type="text" name="nama_aset" id="nama_aset" placeholder="Nama Aset" class="span3">
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Kode Aset</label>
		</td><td>
			<input type="text" name="kode_aset" id="kode_aset" placeholder="15xxx" class="span3" >
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Jumlah</label></td>
		<td>
			<input type="text" name="jumlah" id="jumlah" placeholder="Jumlah" class="span3">
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Tanggal Pengajuan</label>
		</td><td>
			<input type="date" name="tgl_pengadaan" id="tgl_pengadaan" min="2012/01/01" max="2040/01/01" class="span3" >
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Spesifikasi</label>
		</td><td>
			<select name="spesifikasi" id="spesifikasi">
			<option value="">--Pilih--</option>
			<option value="Baik"  class="span3">Baik</option>
			<option value="Tidak Baik"  class="span3">Tidak Baik</option>
			</select>
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Fungsi</label>
		</td><td>
			<input type="text" name="fungsi" id="fungsi" placeholder="Fungsi" class="span3">
		</td>
	</tr>

	
	<tr>
	<td>
		<label class="control-label">Keterangan</label>
		</td><td>
			<textarea type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="span5"> </textarea>
		</td>
	</tr>

<!-- 
	<div class="control-group">
		<label class="control-label">Tanggal Dikembalikan</label>
		<div class="controls">
			<input type="date" name="tgl_adm" id="tgl_adm" min="2010-01-01" max="2019-01-01">
		</div>
	</div>


	<div class="control-group">
		<label class="control-label">Denda</label>
		<div class="controls">
			<input type="text" name="sanksi" id="sanksi" placeholder="Denda" class="span3" >
		</div>
	</div>
	 -->
	 <tr>
	 <td></td>&nbsp;
	<td>
		<button type="submit" class="btn btn-success btn-small"  >Tambah</button>
		&nbsp;<a href="<?php echo base_url();?>pengajuan" class="btn btn-warning btn-small">Tutup</a>
	</td></tr>
</table>
</form>
</div>





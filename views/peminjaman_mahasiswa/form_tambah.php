<script type="text/javascript">
function cekform()
{

  if (no_peminjaman.value == "")
  {
    alert("Gagal, Nomor Peminjaman masih kosong!");
    no_peminjaman.focus();
    return (false);
  }

  if (no_bp.value == "")
  {
    alert("Gagal, Nomor BP masih kosong!");
    no_bp.focus();
    return (false);
  }
  
  if (tgl_peminjaman.value == "")
  {
    alert("Gagal, Tanggal masih kosong!");
    tgl_peminjaman.focus();
    return (false);
  }

  if (tgl_pengembalian.value == "")
  {
    alert("Gagal, Nomor masih kosong!");
    tgl_pengembalian.focus();
    return (false);
  }

  if (kode_aset.value == "")
  {
    alert("Gagal, Aset masih kosong!");
    kode_aset.focus();
    return (false);
  }
  if (jumlah == "")
  {
    alert("Gagal, Jumlah masih kosong!");
    jumlah.focus();
    return (false);
  }

  if (id_adm.value == "")
  {
    alert("Gagal, Nama Administrasi masih kosong!");
    id_adm.focus();
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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>pinjam_mhs/simpan" onsubmit="return cekform();">
<table width="400px"  align="center">
	<th colspan="3" align="left" ><div style="margin:0 0 0 20px"><h4 align="center"><u> Form Peminjaman</u></h4></div></th>
	<tr>
	<td>
		<label class="control-label">No Peminjaman</label>
		</td><td>
			<input type="text" name="no_peminjaman" id="no_peminjaman" placeholder="021xxx" class="span3" >
		</td>
	</tr>

	<tr>
	<td>
	<label class="control-label">Nomor BP</label>
	</td><td>
		<input type="text" name="no_bp" id="no_bp" placeholder="Nomor BP" class="span3">
	</td>	
	</tr>

	<tr>
	<td>
		<label class="control-label">Tanggal Pinjam</label>
		</td><td>
			<input type="date" name="tgl_peminjaman" id="tgl_peminjaman" min="2014-09-08" max="2018-09-08" >
		</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Tanggal Kembali</label>
		</td><td>
			<input type="date" name="tgl_pengembalian" id="tgl_pengembalian" min="2014-09-08" max="2018-09-08" >
		</td>
	</tr>

	<tr>
	<td>
	<label class="control-label">Nama Aset</label>
	</td><td>
		<select name="kode_aset" id="kode_aset">
			<option value="">-Pilih-</option>
			<?php
			$kode_aset = $this->db->get('aset');
			foreach ($kode_aset->result() as $row) 
			{
				
			
			?>
			<option value="<?php echo $row->kode_aset;?>"><?php echo $row->nama;?></option>
			<?php }?>
		</select>
	</td>	
	</tr>

	<tr>
	<td>
		<label class="control-label">Jumlah</label>
		</td><td>
			<input type="text" name="jumlah" id="jumlah" placeholder="jumlah" class="span3" >
		</td>
	</tr>

	<tr>
	<td>
	<label class="control-label">Nama Admin</label>
	</td><td>
		<select name="id_adm" id="id_adm">
			<option value="">-Pilih-</option>
			<?php
			$id_adm = $this->db->get('adm_jurusan');
			foreach ($id_adm->result() as $row) 
			{
				
			
			?>
			<option value="<?php echo $row->id_adm;?>"><?php echo $row->nama;?></option>
			<?php }?>
		</select>
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
	<td></td>&nbsp;<td>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" class="btn btn-success btn-small">Tambah</button>
		<a href="<?php echo base_url();?>pinjam_mhs" class="btn btn-danger btn-small">Tutup</a>
	</td>
	</tr>
	</table>
</form>
</div>



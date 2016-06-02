<script type="text/javascript">
function cekform(){
  if (id_pengadaan.value == ""){
    alert("ID masih kosong!");
    id_pengadaan.focus();
    return (false);
  }
  if (nama_barang.value == ""){
    alert("Nama Barang masih kosong!");
    nama_barang.focus();
    return (false);
  }
  if (kode_barang.value == ""){
    alert("Kode Barang kosong!");
    kode_barang.focus();
    return (false);
  }
  if (jumlah.value == ""){
    alert("Jumlah masih kosong!");
    jumlah.focus();
    return (false);
  }
  if (tgl_pengadaan.value == ""){
    alert("Tanggal masih kosong!");
    tgl_pengadaan.focus();
    return (false);
  }
  if (fungsi.value == ""){
    alert("Fungsi masih kosong!");
    fungsi.focus();
    return (false);
  }
  if (keterangan.value == ""){
    alert("Keterangan masih kosong!");
    keterangan.focus();
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

<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/input/simpan" onsubmit="return cekform();">
	<div class="control-group">
		<label class="control-label">ID</label>
		<div class="controls">
			<input type="text" name="id_pengadaan" id="id_pengadaan" placeholder="ID Pengadaan" class="span3" value="<?php echo $id_pengadaan;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Nama Barang</label>
		<div class="controls">
			<input type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang" class="span3" value="<?php echo $nama_barang;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Kode Barang</label>
		<div class="controls">
			<input type="text" name="kode_barang" id="kode_barang" placeholder="Kode Barang" class="span3" value="<?php echo $kode_barang;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Jumlah</label>
		<div class="controls">
			<input type="text" name="jumlah" id="jumlah" placeholder="jumlah" class="span2" value="<?php echo $jumlah;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Tanggal</label>
		<div class="controls">
			<input type="date" name="tgl_pengadaan" id="tgl_pengadaan" min="2014-09-08" max="2018-09-08" value="2015-02-24" value="<?php echo $tgl_pengadaan;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Fungsi</label>
		<div class="controls">
			<input type="textarea" name="fungsi" id="fungsi" placeholder="fungsi" class="span2" value="<?php echo $fungsi;?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Keterangan</label>
		<div class="controls">
			<textarea name="keterangan" id="keterangan" placeholder="keterangan" class="span3" value="<?php echo $keterangan;?>"> </textarea>
		</div>
	</div>	

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" class="btn btn-primary btn-small"> Tambah </button>
		<a href="<?php echo base_url();?>index.php/input" class="btn btn-primary btn-small">Tutup</a>
	</div>
</form>
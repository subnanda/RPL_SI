	<script type="text/javascript">// $(document).ready(function()
	// {
	// 	$('.simpan').click(function()
	// 	{
	// 		var string = $('.my-form').serialize();
	// 		//alert(string);
	// 		$.ajax({
	// 			type 	: 'POST',
	// 			url 	: '<?php echo site_url();?>/perpindahan/simpan',
	// 			data	: string,
	// 			success	: function(data){
	// 				alert(data);
	// 			}
	// 		});
	// 	});
	// });
</script>


<script type="text/javascript">
function cekform(){
  if (kode_perpindahan.value == ""){
    alert("Gagal, Kode masih kosong!");
    kode_perpindahan.focus();
    return (false);
  }
  if (namaaset.value == ""){
    alert("Gagal, Nama Aset Belum Di Pilih!");
    no_pengadaan.focus();
    return (false);
  }
  if (namaadm.value == ""){
    alert("Gagal, Nama Admin Belum Di Pilih!");
    namaadm.focus();
    return (false);
  }
  if (tgl_perpindahan.value == ""){
    alert("Gagal, Tanggal masih kosong!");
    tgl_perpindahan.focus();
    return (false);
  }
  if (nama.value == ""){
    alert("Gagal, Nama masih kosong!");
    nama.focus();
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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>perpindahan/simpan" onsubmit="return cekform();">
	<table width="400px"  align="center">
	<th colspan="3" align="left" ><div style="margin:0 0 0 20px"><h4 align="center">Form Perpindahan Aset</h4></div></th>
	<tr>
	<td>
		<label class="control-label">Kode Perpindahan</label></td>
		<td>
			<input type="text" name="kode_perpindahan" id="kode_perpindahan" placeholder="Kode Perpindahan" class="span3" >
		</td>
	</tr>

	<tr>
	<td>
	<label class="control-label">Nama Aset</label></td>
	<td>
		<select name="namaaset" id="namaaset">
			<option value="">-Pilih-</option>
			<?php
			$namaaset = $this->db->get('aset');
			foreach ($namaaset->result() as $row) 
			{
				
			
			?>
			<option value="<?php echo $row->kode_aset;?>"><?php echo $row->nama;?></option>
			<?php }?>
		</select>
	</td>	
	</tr>

	<tr>
	<td>
	<label class="control-label">Nama Admin</label></td>
	<td>
		<select name="namaadm" id="namaadm">
			<option value="">-Pilih-</option>
			<?php
			$namaadm = $this->db->get('adm_jurusan');
			foreach ($namaadm->result() as $row) 
			{
				
			
			?>
			<option value="<?php echo $row->id_adm;?>"><?php echo $row->nama;?></option>
			<?php }?>
		</select>
	</td>	
	</tr>

	<tr>
	<td>
		<label class="control-label">Tanggal Perpindahan</label></td>
		<td>
			<input type="date" name="tgl_perpindahan" id="tgl_perpindahan" min="2010-001-01" max="2030-12-12" value="2015-01-01" >	
		
	</td>
	</tr>

	<tr>
	<td>
		<label class="control-label">Nama Pemegang</label></td>
		<td>
			<input type="text" name="nama" id="nama" placeholder="Nama Pemegang" class="span3" >
		</td>
	</tr>
	
	<tr>
	<td></td>&nbsp;
	<td>
		
		<button type="submit" name="simpan" id="simpan" class="btn btn-success btn-small" onclick="return confirm('Anda Yakin Ingin Menambah Data Ini?');" >Simpan</button> 
		
		<a href="<?php echo base_url();?>perpindahan" class="btn btn-warning btn-small">Tutup</a></td>
	</tr>
	</table>
</form>
</div>




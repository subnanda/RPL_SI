
<h3 align="center"><u> Data Perpindahan Aset </u></h3>
<script type="text/javascript">
	// $(function()
	// {
	// 	var oTable1 = $('#sample-table-2').dataTable( {
	// 		"aoColumns" : [null, null,null,null,null,null,null,null,
	// 		{"bSortable": false }
	// 		] } );

	// })
</script>

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<p>
<a href="<?php echo base_url();?>perpindahan/tambah" class="btn btn-block btn-info btn-small"> Tambah Data</a>
</p>
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th style="text-align:center">Nomor</th>
			<th style="text-align:center">Nama Pemegang</th>
			
			<th style="text-align:center">Nama Aset</th>
			<th style="text-align:center">Nama Admin</th>
			<th style="text-align:center">Tanggal Perpindahan</th>
			
			<!-- <th style="text-align:center">Aksi</th> -->
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data->result() as $row) 
			{

				$namaaset = $this->model_perpindahan->tampilperpindahan($row->kode_aset);	
				$namaadm = $this->model_perpindahan->tampiladm($row->id_adm);
				?>
				<td><?php echo $no++;?></td>
				<td><?php echo $row->nama_pemegang;?></td>
				<!-- <td><?php echo $row->kode_perpindahan;?></td> -->
				<td><?php echo $namaaset;?></td>
				<td><?php echo $namaadm;?></td>
				<td><?php echo $row->tgl_perpindahan;?></td>
				
				<!-- <td style="text-align:center">
					<a href="<?php echo base_url()?>perpindahan/delete/<?php echo $row->kode_perpindahan;?>"  class="btn btn-danger btn-small"	onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?');">Delete</a>

					
				</td>
				 -->
			
			
		</tr>
		<?php } ?>
	</tbody>
</table>

</div>




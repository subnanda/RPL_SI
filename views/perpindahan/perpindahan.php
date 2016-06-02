<html>
    <head>

    <title>Print Data Perpindahan</title>

    </head>
    <body>

    <h3 align="center">Data Perpindahan</h3>
    <p>
    <a href="<?php echo base_url();?>perpindahan/data"> 
    <button onClick="window.print();" class="btn btn-success btn-small">Print</button> 
    
    <a href="<?php echo base_url();?>laporan"> 
    
    <button class="btn btn-warning btn-small">Back</button> 
    </p>
    </a>

   
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th style="text-align:center">Nomor</th>
			<th style="text-align:center">Nama Pemegang</th>
			
			<th style="text-align:center">Nama Aset</th>
			<th style="text-align:center">Nama Admin</th>
			<th style="text-align:center">Tanggal Perpindahan</th>
			
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
				
				
				
			
		</tr>
		<?php } ?>
	</tbody>
</table>
</body>


</html>
<h3 align="center"><u> Info Aset </u></h3>
<ol class="breadcrumb">
                        <li><a href="#">Tables
                        <small>>></small>
                        <small>Aset</small></a></li>
                        
                    </ol>
<script type="text/javascript">
	$(function()
	{
		var oTable1 = $('#sample-table-2').dataTable( {
			"aoColumns" : [null, null,null,null,null,null,null,null,
			{"bSortable": false }
			] } );

	})
</script>

<style type="text/css">
	  #outtable{
	  	padding: 20px;
	  	border:1px solid #e3e3e3;
	  	width:600px;
	  	border-radius: 5px;
	  }
 
	  .short{
	  	width: 50px;
	  }
 
	  .normal{
	  	width: 150px;
	  }
      table{
      	border-collapse: collapse;
      	font-family: arial;
      	color:#5E5B5C;
      }
 
      thead th{
      	text-align: left;
      	padding: 10px;
      }
 
      tbody td{
      	border-top: 1px solid #e3e3e3;
      	padding: 10px;
      }
 
      tbody tr:nth-child(even){
      	background: #F6F5FA;
      }
 
      tbody tr:hover{
      	background: #EAE9F5
      }
	</style>

<table id="outtable" align="center">
	<thead>
		<tr>
			<th class="short" style="text-align:center">Nomor</th>
			<th class="normal" style="text-align:center">Kode Aset</th>
			
			<th class="normal" style="text-align:center">Nama Aset</th>
			<th class="normal" style="text-align:center">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data->result() as $row) 
			{
				?>
				<td><?php echo $no++;?></td>
				<td><?php echo $row->kode_aset;?></td>
				
				<td><?php echo $row->nama;?></td>
				<td style="text-align:center">
					<a href="<?php echo base_url()?>hapus_pengadaan/edit/<?php echo $row->kode_aset;?>" 
					class="btn btn-info btn-small" >Detail</a>
					<!-- <a href="<?php echo base_url()?>hapus_pengadaan/delete/<?php echo $row->kode_aset;?>" class="btn btn-danger btn-small" >Delete</a> -->
 				</td>
				
			
			
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
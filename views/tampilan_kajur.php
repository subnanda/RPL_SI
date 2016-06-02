<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">



<style rel="stylesheet">
body{
background-color: rgb(247, 247, 249);}
.bgr{
background:#fff;
padding:5px;
}
.login table{
margin:-100px auto 0;
}
.posting table{
margin:50px auto 0;
}
tr, td, th{
border:1px solid #ccc;
padding:5px;
}
th.title {
padding:5px; 
border:0px;
}
.login table tr th h2 { font-size:15px; margin:0; padding:0 font-weight:20px;  }
.navbar-inner {
border-radius:0;
 
}
.box {
height:280px;
width: 290px;
 
margin-bottom:10px;
padding:5px;
}
.boxisi{
height:225px;
padding:5px;
background-color: rgb(247, 247, 249);
border: 1px solid rgb(225, 225, 232);
margin-bottom:5px;
}
.boxisi img{
width:265px;
height:170px;
}
` 
</style>

<script type="text/javascript">
	window.jQuery || document.write("<script src='<?php echo base_url();?> assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<script type="text/javascript">
	if ("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>assets/js/boostrap.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTable.bootstrap.js"></script>

<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

<script src="<?php echo base_url();?>http://localhost/tgsjualbeli/js/jquery.js"></script>
<script src="<?php echo base_url();?>js/bootstrap-modal.js"></script>
</head>
<body>
 <div class="container bgr">
    <div class="navbar">
    <div class="navbar-inner">
    <div class="container">
	<ul class="nav">
	<th colspan="5" align="left" ><div style="margin:0 0 0 20px"><h2><img width=50px height=260 src='<?php echo base_url();?>gambar/unand.png'/> Jurusan Sistem Informasi </h2></div></th>
	<li><a href="<?php echo base_url();?>beranda/kajurd">Beranda</a></li>
	<li><a href="<?php echo base_url();?>setuju">Persetujuan Pengadaan</a></li>
	<li><a href="<?php echo base_url();?>aset">Data Aset</a></li>
	

  
	
	</ul>
    <div>
	<li colspan="5" align="right" > <a href="<?php echo base_url();?>perpindahan/logout"><th colspan="5" class="btn btn-info btn-small">Logout</th></a> </li>
	</div>
    
    </div>
    </div>
    
    </div>
    
<?php echo $this->load->view($content); ?>

<div>
<p><p>
<center class="main-footer">
                <div class="pull-right hidden-xs">
                </div>
                <strong>Copyright &copy; 2016 <a href=#>@ Sistem Informasi Universitas Andalas</a>.</strong> All rights reserved.
</center>
</div>

</body>
</html>
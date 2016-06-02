<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>SI ASSET</title>

<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>



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


</head>
<body>
 <div class="container bgr">
    <div class="navbar">
    <div class="navbar-inner">
    <div class="container">
	<ul class="nav">
	<th colspan="5" align="left"><div style="margin:0 0 0 20px" ><h2 ><img width=50px height=260 src='<?php echo base_url();?>gambar/unand.png'/> Jurusan Sistem Informasi </h2></div></th>
	
	<li><a href="<?php echo base_url();?>beranda" class="container bgr">Beranda</a></li>
	<li><a href="<?php echo base_url();?>pengadaan_aset" class="container bgr">Pengadaan</a></li>
	<li><a href="<?php echo base_url();?>hapus_pengadaan" class="container bgr">Info Aset</a></li>
	
	<li><a href="<?php echo base_url();?>perpindahan" class="container bgr">Perpindahan</a></li>
	<li><a href="<?php echo base_url();?>peminjaman" class="container bgr">Peminjaman Lembaga/Dosen</a></li>
	
	<li><a href="<?php echo base_url();?>peminjaman_mahasiswa" class="container bgr">Peminjaman Mahasiswa</a></li>
	
	<li><a href="<?php echo base_url();?>laporan" class="container bgr">Laporan</a></li>
	

  
	</ul>
    
     
    </div>
	<div class="controls">
	
	<li align="right" > <a href="<?php echo base_url();?>perpindahan/logout"><th>Logout</th></a> </li>
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
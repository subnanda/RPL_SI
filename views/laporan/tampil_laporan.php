	
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan | SI OFFICE</title>
</head>
<body>

<!-- <h1>Haii selamat datang, anda login sebagai <?php echo $username; ?></h1> <a href="<?php echo site_url('admin/c_admin/logout'); ?>">Logout</a> -->
<h4  align="center">Laporan Sistem Pengelolaan Aset</h4>
<h6 align="center">Jurusan Sistem Informasi</h6>
<h6 align="center">Universitas Andalas</h6>

 <style>
        /* CSS Reset */
        * {
            margin : 0;
            padding : 0;
            font-family : Arial, sans-serif;
            font-size: 12px;
        }
        
        h1,h2,h3,h4,h5,h6 {
            font-weight : normal;
        }
        
        /* Sidebar */
        #sidebar {
            width:850px;
            padding: 10px;
            margin: 10px 0px 20px 50px;
            color: #424242;
            background-color :#e8e8e8;
        }
        
        /* Widget */    
        .widget {
            width : 100%;
            padding : 0px;
            margin-bottom : 20px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
               border-radius: 2px;
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        .widget-title {
            color: #fff;
            background:url("images/sidebarh2bg.gif") repeat-x #016696;
            padding: 0px 20px;
            height : 30px;
            line-height : 30px;
            display : block;
            border : none;
        }
            
        .widget-title h3 {
            font-family: Arial;
            font-weight : bold;
            font-size: 12px;
            letter-spacing : 0.5px;
            text-transform : Uppercase;
        }
        .widget ul {
            list-style: none;
            background: #fff;
            padding: 5px 0 5px 0;
            border: none;
        }
        .widget li {
            border-bottom: 1px dotted #d9d9d9;
            padding: 8px 15px;
            color: #666;
        }
        
        .widget li:last-child {
            border-bottom: none;
        }
        
        /* Link Widget */
        .widget li a {
            color: #444;
            text-decoration : none;
        }
        
        .widget li a:hover {
            font-weight : bold;
            color : #ff6c00;
        }
    </style>
</head>
<body>
<div id="sidebar">
    
    
    <div class="widget">
        <div class="widget-title"><h3 align="center">Kategori Laporan</h3></div>
        <ul>
            <li>&#187; <a href="<?php echo base_url();?>aset/data">Laporan Aset</a></li>
            <li>&#187; <a href="<?php echo base_url();?>peminjaman/data">Laporan Peminjaman Dosen / Lembaga</a></li>
            <li>&#187; <a href="<?php echo base_url();?>peminjaman_mahasiswa/data">Laporan Peminjaman Mahasiswa</a></li>
            <li>&#187; <a href="<?php echo base_url();?>perpindahan/data">Laporan Perpindahan</a></li>
            <li>&#187; <a href="<?php echo base_url();?>pengadaan_aset/data">Laporan Pengadaan</a></li>
        </ul>
    </div>
</div>

</div>
</body>
</html>
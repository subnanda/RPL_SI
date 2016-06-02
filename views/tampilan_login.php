
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
    
	</head>
	<body>
  
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">

          <form method="POST" action="<?php echo base_url();?>login/cek_login" onsubmit="return cekform();">
            <div class="form-group">
              <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              <?php 
              $info=$this->session->flashdata('info');
              if(!empty($info))
                {
                  echo $info;
                }
              ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="<?php echo base_url();?>//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	</body>
</html>
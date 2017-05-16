<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perpustakaan JTI</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header" class="y"> </div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			</div>
			  <?php echo form_open('login/cekLogin'); ?>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
				  	<form action="" method="POST" role="form" >  	
			  	<legend>Form Login</legend>
			  	<?php echo validation_errors(); ?>
			  	<div class="form-group" align="center">
			  		<label for="">Username</label>
			  		<input type="text" class="form-control" id="username" name="username" placeholder="username" align="center">
			  		<label for="">Password</label>
			  		<input type="password" class="form-control" id="password" name="password" placeholder="password" align="center">
			  	</div>
			  		<button type="submit" class="btn btn-success">Submit</button>  <a href="<?php echo site_url('login/create') ?>" type="button" class="btn btn-primary">Register</a></h1><br><br>
			</div>
			  </form>
		</div>
</div>

		<tr>
			<td colspan=3 height=10% bgcolor=black >
					<br>
					<hr align=center color=black size=3 width=90%>
					<font size=2 color=blue face="century gothic" ><center> 
						Copyright &copy 2017<b>&nbsp Proyek Web TI-2A</b></a><br>
						Prodi Teknik Informatika | Jurusan Teknologi Informasi<br><b>POLITEKNIK NEGERI MALANG</b></a>
						<br><br>
					</center></font>
			</td>
		<tr>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
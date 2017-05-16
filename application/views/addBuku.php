<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perpustakaan JTI</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								<a class="navbar-brand" href="#">Perpustakaan JTI</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="active"><a href="<?php echo site_url() ?>">Tambah Daftar Buku</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
									</div>
						</nav>

					</div>	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
						<?php echo form_open_multipart('Buku/addData/'.$this->uri->segment(3)); ?>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">									
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<?php if (validation_errors()==true) {?>
										<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<?php echo validation_errors();echo $data ?>
										</div>	
									<?php }?>
									<h1>Tambah Buku</h1>
									<div class="form-group">
										<label for="">Judul</label>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
									</div>
									<div class="form-group">
										<label for="">Pengarang</label>
										<input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang"> 
									</div>
									<div class="form-group">
										<label for="">Penerbit</label>
										<input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
									</div>
									
									<div class="form-group">
										<label for="">Kategori Buku</label>
										<select name="kategori_buku" class="form-control" required>
											<option value=""> ----- </option>
											<?php foreach($kategori_list as $key){?>
												<option value="<?php echo $key['id_kategori']; ?>"><?php echo $key['kategori']; ?></option>";
											<?php  }?>
										</select>
									</div>
									<div class="form-group">
										<label for="">Jumlah</label>
										<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah">
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
									<?php echo form_close(); ?>
									</div>
								</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
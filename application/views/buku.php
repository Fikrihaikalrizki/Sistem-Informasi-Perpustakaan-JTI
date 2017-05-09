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
										<li class="active"><a href="<?php echo site_url('buku') ?>">Data Buku</a></li>
									</ul>
									
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Daftar Buku</h1>	
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
									    
										<th><center>Judul Buku</center></th>
										<th><center>Pengarang</center></th>
										<th><center>Penerbit</center></th>
										<th><center>Kategori</center></th>
										<th><center>Jumlah</center></th>
										<!--<th><center>Menu</center></th>-->
									</tr>
								</thead>
								<tbody>
								<?php foreach ($buku_list as $key) { ?>
									<tr>
										<td><?php echo $key->nama_buku ?></td>
										<td><?php echo $key->nama_pengarang ?></td>
										<td><?php echo $key->penerbit ?></td>
										<td><?php echo $key->kategori ?></td>
										<td><?php echo $key->jumlah ?></td>
										<td>
											<a href="<?php echo site_url('') ?>" type="button" class="btn btn-info">Edit</a>
											<a href="<?php echo site_url('') ?>" type="button" class="btn btn-success">Pinjam</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<tr>
			<td colspan=3 bgcolor=#FAFAFA> <br><br><br>
			</td>
		</tr>
		
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
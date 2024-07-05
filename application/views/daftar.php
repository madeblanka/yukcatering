<!doctype html>
<html lang="en">
  <head>
  	<title>Yuk Catering - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('login/css/style.css')?>">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Yuk Catering Daftar</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(<?php echo base_url('login/images/bg-1.jpg')?>);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Daftar</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<!-- <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a> -->
									</p>
								</div>
			      	    </div>
							<form action="<?php echo site_url('user/add') ?>" method="post" class="signin-form">
			      		<!-- <div class="form-group mt-3">
			      			<input type="text" class="form-control" name="nik" required>
			      			<label class="form-control-placeholder" for="NIK">NIK</label>
			      		</div> -->
                          <div class="form-group mt-3">
			      			<input type="text" class="form-control" name="nama" required>
			      			<label class="form-control-placeholder" for="nama">Nama</label>
			      		</div>
                        <div class="form-group mt-3">
			      			<input type="number" class="form-control" name="nohp" required>
			      			<label class="form-control-placeholder" for="nohp">No HP</label>
			      		</div>
			      		<div class="form-group mt-3">
			      			<input type="password" class="form-control" name="password" required>
			      			<label class="form-control-placeholder" for="password">Password</label>
			      		</div>
			      		<!-- <div class="form-group mt-3">
			      			<input type="text" class="form-control" name="alamat" required>
			      			<label class="form-control-placeholder" for="alamat">Alamat</label>
			      		</div> -->
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
		            </div>
		          </form>
                  <p class="text-center">Sudah Punya Account? <a data-toggle="tab" href="<?php echo site_url('login') ?>">Login</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url('login/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('login/js/popper.js')?>"><script>
  <script src="<?php echo base_url('login/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('login/js/main.js')?>"></script>

	</body>
</html>


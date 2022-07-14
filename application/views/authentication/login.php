<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content />
	<meta name="author" content />
	<title>Login</title>
	<link href="<?= base_url() ?>public/css/styles.css" rel="stylesheet" />
	<link rel="icon" type="image/x-icon" href="<?= base_url('public/images/logo.jpeg') ?>" width="50" class="ml-2" />
	<link rel="stylesheet" href="<?= base_url() ?>public/vendors/fontawesome-free/css/all.min.css" />
	<script src="<?= base_url() ?>public/vendors/feather-icons/feather.min.js"></script>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4">
							<!-- Basic login form-->
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header justify-content-center">
									<h3 class="font-weight-light my-4">Login</h3>
								</div>
								<div class="card-body">
									<!-- Login form-->
									<?= form_open('authentication') ?>
									<!-- Form Group (email address)-->
									<div class="form-group">
										<label class="small mb-1" for="inputEmailAddress">Email</label>
										<input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Masukan email" required />
										<?= form_error('email', '<div class="text-danger"></div>') ?>
									</div>
									<!-- Form Group (password)-->
									<div class="form-group">
										<label class="small mb-1" for="inputPassword">Password</label>
										<input class="form-control" id="inputPassword" name="password" type="password" placeholder="Masukan password" required />
										<?= form_error('password', '<div class="text-danger"></div>') ?>

									</div>
									<!-- Form Group (remember password checkbox)-->
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
											<label class="custom-control-label" for="rememberPasswordCheck">Ingat Saya</label>
										</div>
									</div>
									<!-- Form Group (login box)-->
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<button class="btn btn-primary btn-block " type="submit">Login</button><br>
									</div>
									<div class="form-group d-flex align-items-center justify-content-between mt-1 mb-0">
										<a href="#" class="btn btn-primary btn-block ">Reset Password</a>
									</div>
									<?= form_close() ?>
								</div>

							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<footer class="footer mt-auto footer-dark">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 small">Copyright &#xA9;Aplikasi Gerbang Pintu Otomatis - Golden English</div>
						<div class="col-md-6 text-md-right small">
							<a href="#!">Privacy Policy</a>
							&#xB7;
							<a href="#!">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="<?= base_url() ?>public/vendors/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>public/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>public/js/scripts.js"></script>

</body>

</html>
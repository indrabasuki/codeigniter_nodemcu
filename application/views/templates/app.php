<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content />
	<meta name="author" content />
	<title><?= $title ?></title>
	<link href="<?= base_url() ?>public/css/styles.css" rel="stylesheet" />
	<link href="<?= base_url() ?>public/vendors/datatables-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>public/vendors/daterangepicker/daterangepicker.css" rel="stylesheet" />
	<link rel="icon" type="image/x-icon" href="<?= base_url('public/images/logo.jpeg') ?>" width="50" class="ml-2" />
	<link rel="stylesheet" href="<?= base_url() ?>public/vendors/fontawesome-free/css/all.min.css" />
	<script src="<?= base_url() ?>public/vendors/feather-icons/feather.min.js"></script>
	<script src="<?= base_url() ?>public/vendors/jquery/jquery.min.js"></script>

</head>

<body class="nav-fixed">
	<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
		<img src="<?= base_url('public/images/logo.jpeg') ?>" width="50" class="ml-2" alt="">
		<a class="navbar-brand" href="#"> Golden English</a>
		<!-- Sidenav Toggle Button-->
		<button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle"><i data-feather="menu"></i></button>
		<!-- Navbar Search Input-->
		<!-- * * Note: * * Visible only on and above the md breakpoint-->
		<form class="form-inline mr-auto d-none d-md-block mr-3">
			<div class="input-group input-group-joined input-group-solid">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
				<div class="input-group-append">
					<div class="input-group-text"><i data-feather="search"></i></div>
				</div>
			</div>
		</form>
		<!-- Navbar Items-->
		<ul class="navbar-nav align-items-center ml-auto">
			<!-- Documentation Dropdown-->
			<li class="nav-item dropdown no-caret d-none d-sm-block mr-3">
				<a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="font-weight-500">Documentation</div>
					<i class="fas fa-chevron-right dropdown-arrow"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right py-0 mr-sm-n15 mr-lg-0 o-hidden animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
					<a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank">
						<div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book"></i></div>
						<div>
							<div class="small text-gray-500">Documentation</div>
							Usage instructions and reference
						</div>
					</a>
					<div class="dropdown-divider m-0"></div>
					<a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components" target="_blank">
						<div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="code"></i></div>
						<div>
							<div class="small text-gray-500">Components</div>
							Code snippets and reference
						</div>
					</a>
					<div class="dropdown-divider m-0"></div>
					<a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog" target="_blank">
						<div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="file-text"></i></div>
						<div>
							<div class="small text-gray-500">Changelog</div>
							Updates and changes
						</div>
					</a>
				</div>
			</li>

			<!-- User Dropdown-->
			<li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
				<a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?= base_url('public/images/user.png') ?>" /></a>
				<div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
					<h6 class="dropdown-header d-flex align-items-center">
						<img class="dropdown-user-img" src="<?= base_url('public/images/user.png') ?>" />
						<div class="dropdown-user-details">
							<div class="dropdown-user-details-name"><?= $this->session->userdata('name') ?></div>
							<div class="dropdown-user-details-email"><?= $this->session->userdata('email') ?></div>
						</div>
					</h6>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?= base_url('user/profile') ?>">
						<div class="dropdown-item-icon"><i data-feather="settings"></i></div>
						Account
					</a>
					<a class="dropdown-item" href="<?= base_url('authentication/logout') ?>">
						<div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
						Logout
					</a>
				</div>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sidenav shadow-right sidenav-light">
				<div class="sidenav-menu">
					<div class="nav accordion" id="accordionSidenav">

						<div class="sidenav-menu-heading">Menu</div>
						<!-- Sidenav Link (Charts)-->
						<a class="nav-link" href="<?= base_url('dashboard') ?>">
							<div class="nav-link-icon"><i data-feather="home"></i></div>
							Dashboard
						</a>
						<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
							<div class="nav-link-icon"><i data-feather="folder"></i></div>
							Master Data
							<div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
							<nav class="sidenav-menu-nested nav">
								<a class="nav-link" href="<?= base_url('member') ?>">Data Anggota</a>
								<a class="nav-link" href="<?= base_url('user') ?>">Data Pengguna</a>
								<a class="nav-link" href="<?= base_url('kelas') ?>">Data Kelas</a>
							</nav>
						</div>
						<a class="nav-link" href="<?= base_url('activity') ?>">
							<div class="nav-link-icon"><i data-feather="activity"></i></div>
							Aktivitas
						</a>

						<a class="nav-link" href="<?= base_url('report') ?>">
							<div class="nav-link-icon"><i data-feather="printer"></i></div>
							Laporan
						</a>
						<div class="sidenav-menu-heading"></div>
						<a class="nav-link text-danger" href="<?= base_url('authentication/logout') ?>">
							<div class="nav-link-icon"><i data-feather="power"></i></div>
							Logout
						</a>
					</div>
				</div>
				<!-- Sidenav Footer-->
				<div class="sidenav-footer">
					<div class="sidenav-footer-content">
						<div class="sidenav-footer-subtitle">Login in sebagai:</div>
						<div class="sidenav-footer-title"><?= $this->session->userdata('name') ?></div>
					</div>
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<?= $content ?>
			</main>
			<footer class="footer mt-auto footer-light">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 small">Copyright &#xA9;Golden English <?= date('Y') ?></div>
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

	<script src="<?= base_url() ?>public/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>public/js/scripts.js"></script>
	<script src="<?= base_url() ?>public/vendors/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>public/vendors/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>public/vendors/daterangepicker/daterangepicker.js"></script>

</body>

</html>
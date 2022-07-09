<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="home"></i></div>
						Dashboard
					</h1>
					<div class="page-header-subtitle">Selamat datang , <?= $this->session->userdata('name') ?></div>
				</div>

			</div>
		</div>
	</div>
</header>
<!-- Main page content-->
<div class="container mt-n10">

	<div class="row">

		<div class="col-xxl-4 col-lg-3">
			<div class="card bg-white text-black  mb-4">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-center">
						<div class="mr-3">
							<div class="text-black-75 small">Total Aktivitas Hari ini</div>
							<div class="text-lg font-weight-bold">24</div>
						</div>
						<i class="feather-xl text-black-50" data-feather="check-square"></i>
					</div>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-black  stretched-link" href="#">Detail</a>
					<div class="small text-black "><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xxl-4 col-lg-3">
			<div class="card bg-white text-black mb-4">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-center">
						<div class="mr-3">
							<div class="text-black-75 small">Data Anggota</div>
							<div class="text-lg font-weight-bold">12</div>
						</div>
						<i class="feather-xl text-black-50" data-feather="user"></i>
					</div>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-black stretched-link" href="<?= base_url('user') ?>">Detail</a>
					<div class="small text-black"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xxl-4 col-lg-">
			<div class="card bg-white text-black mb-4">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-center">
						<div class="mr-3">
							<div class="text-black-75 small">Data Admin</div>
							<div class="text-lg font-weight-bold"><?= $this->db->get('user')->num_rows() ?></div>
						</div>
						<i class="feather-xl text-black-50" data-feather="users"></i>
					</div>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-black stretched-link" href="<?= base_url('user') ?>">Detail</a>
					<div class="small text-black"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Example DataTable for Dashboard Demo-->
	<div class="card mb-4">
		<div class="card-header">Aktivitas terbaru</div>
		<div class="card-body">
			<div class="datatable">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Waktu In Gate</th>
							<th>Waktu Out Gate</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>1</td>
							<td>Indra Basuki</td>
							<td>08.00 WIB</td>
							<td>09.00 WIB</td>
							<td class="text-center"><span class="badge badge-success">Success</span></td>
							<td class="text-center"><a href="" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
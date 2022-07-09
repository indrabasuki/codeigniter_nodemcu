<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="user"></i></div>
						Data User
					</h1>
				</div>

			</div>
		</div>
	</div>
</header>
<!-- Main page content-->
<div class="container mt-n10">


	<!-- Example DataTable for Dashboard Demo-->
	<div class="card mb-4">
		<div class="card-header">
			<div class="row">
				<div class="col-md-12">
					<a href="<?= base_url('user/create') ?>" title="Tambah Data" class="btn btn-sm btn-primary">Tambah Data</a>

				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="datatable">
				<table class="table table-bordered table-hover" id="data_user" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Telepon</th>
							<th>Status</th>
							<th>Level</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						foreach ($user as $item) : ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $item->name ?></td>
								<td><?= $item->email ?></td>
								<td><?= $item->name ?></td>
								<?php if ($item->is_active == 1) : ?>
									<td><span class="badge badge-success">Aktif</span></td>
								<?php else : ?>
									<td><span class="badge badge-danger">Tidak Aktif</span></td>
								<?php endif; ?>


								<?php if ($item->role_id == 1) : ?>
									<td><span class="badge badge-success">Administrator</span></td>
								<?php else : ?>
									<td><span class="badge badge-warning">Manager</span></td>
								<?php endif; ?>
								<td class="text-center">
									<a href="" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a>
									<a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
									<a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#data_user').DataTable();
	});
</script>

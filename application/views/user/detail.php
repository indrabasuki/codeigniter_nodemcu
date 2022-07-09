<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="users"></i></div>
						Detail Data Pengguna
					</h1>
				</div>

			</div>
		</div>
	</div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Nama : <?= $user->name ?></label>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Email : <?= $user->email ?></label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">telepon : <?= $user->telepon ?></label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<?php if ($user->role_id == 1) : ?>
							<label for="">Level : <span class="badge badge-success">Administrator</span></label>
						<?php else : ?>
							<label for="">Level : <span class="badge badge-warning">Manager</span></label>
						<?php endif; ?>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<?php if ($user->is_active == 1) : ?>
							<label for="">Status : <span class="badge badge-success">Aktif</span></label>
						<?php else : ?>
							<label for="">Status : <span class="badge badge-danger">Tidak Aktif</span></label>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Tanggal : <?= $user->created_at ?></label>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<a href="<?= base_url('user') ?>" class="btn btn-secondary btn-sm">Kembali</a>
			<a href="<?= base_url('user/edit/') . $user->id ?>" class="btn btn-warning btn-sm">Edit</a>
		</div>
	</div>
</div>

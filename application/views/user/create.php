<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="user"></i></div>
						Tambah Data User
					</h1>
				</div>

			</div>
		</div>
	</div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
	<?= form_open('user/create') ?>
	<div class="card">
		<div class="card-body">

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Nama Pengguna</label>
						<input type="text" name="name" class="form-control" placeholder="Nama Pengguna" required>
						<?= form_error('name') ?>

					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Email Pengguna</label>
						<input type="email" name="email" class="form-control" placeholder="Email Pengguna" required>
						<?= form_error('email') ?>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Nomor Telepon</label>
						<input type="number" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
						<?= form_error('telepon') ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Status</label>
						<select name="is_active" class="form-control" id="">
							<option value="1">Aktif</option>
							<option value="0">Tidak Aktif</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Level</label>
						<select name="role_id" class="form-control" id="">
							<option value="1">Administrator</option>
							<option value="2">Manager</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password1" class="form-control" placeholder="Password" required>
						<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>

					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Konfirmasi Password</label>
						<input type="password" name="password2" class="form-control" placeholder="Password" required>
					</div>
				</div>
			</div>

		</div>

		<div class="card-footer">
			<a href="<?= base_url('member') ?>" class="btn btn-secondary btn-sm">Kembali</a>
			<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
		</div>
	</div>
	<?= form_close() ?>
</div>

<script>
	$(document).ready(function() {
		$('#data_user').DataTable();
	});
</script>

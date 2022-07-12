<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="user"></i></div>
						Tambah Data Anggota
					</h1>
				</div>

			</div>
		</div>
	</div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
	<?= form_open('member/create') ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">ID Anngota</label>
						<input type="text" name="id_member" value="<?= $id_member ?>" class="form-control" readonly>
						<span class="text-danger">ID Anggota Otomatis di generate oleh sistem</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">ID Device</label>
						<input type="number" name="id_device" class="form-control" placeholder="ID Device" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">ID Card</label>
						<input type="text" name="id_card" class="form-control" placeholder="ID Card" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Nama Anggota</label>
						<input type="text" name="name" class="form-control" placeholder="Nama Anggota" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Nomor Telepon</label>
						<input type="number" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Alamat</label>
						<input type="text" name="address" class="form-control" placeholder="Alamat" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Kelas</label>
						<select id="id_kelas" name="id_kelas" class="form-control" placeholder="Kelas" required>
							<option value="" disabled>-- Pilih Kelas --</option>
							<?php foreach ($kelas as $item) : ?>
								<option value="<?= $item->id_kelas ?>"><?= $item->name ?></option>
							<?php endforeach; ?>
						</select>
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
		$('#data_member').DataTable();
	});
</script>
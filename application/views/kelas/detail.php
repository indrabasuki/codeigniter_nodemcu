<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="figma"></i></div>
						Detail Data Kelas
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
						<label for="">Nama Kelas : <?= $kelas->name ?></label>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Keterangan : <?= $kelas->description ?></label>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<a href="<?= base_url('kelas') ?>" class="btn btn-secondary btn-sm">Kembali</a>
			<a href="<?= base_url('kelas/edit/') . $kelas->id_kelas ?>" class="btn btn-warning btn-sm">Edit</a>
		</div>
	</div>
</div>

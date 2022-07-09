<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-2">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-2">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="printer"></i></div>
						Menu Laporan
					</h1>
				</div>

			</div>
		</div>
	</div>
</header>
<!-- Main page content-->
<div class="container mt-2">
	<?= form_open('report/print') ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Tanggal Awal</label>
						<input type="date" name="tanggal_awal" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Tanggal Akhir</label>
						<input type="date" name="tanggal_akhir" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card-footer">
		<a href="<?= base_url('dashboard') ?>" class="btn btn-sm btn-secondary">Kembali</a>
		<button class="btn btn-sm btn-primary" type="submit">Cetak laporan</button>
	</div>
	<?= form_close() ?>
</div>

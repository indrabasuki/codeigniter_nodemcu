<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="figma"></i></div>
						Data Kelas
					</h1>
				</div>

			</div>
		</div>
	</div>
</header>
<!-- Main page content-->
<div class="container mt-n10">

	<?= $this->session->flashdata('message'); ?>
	<!-- Example DataTable for Dashboard Demo-->
	<div class="card mb-4">
		<div class="card-header">
			<div class="row">
				<div class="col-md-12">
					<a href="<?= base_url('kelas/create') ?>" title="Tambah Data" class="btn btn-sm btn-primary">Tambah Data</a>

				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="datatable">
				<table class="table table-bordered table-hover" id="data_kelas" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Kelas</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						foreach ($kelas as $item) : ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $item->kelas_name ?></td>
								<td><?= $item->description ?></td>

								<td class="text-center">
									<!-- Button trigger modal -->
									<a href="<?= base_url('kelas/detail/') . $item->id_kelas ?>" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="kelas detail"><i class="fas fa-eye"></i></a>
									<a href="<?= base_url('kelas/edit/') . $item->id_kelas ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
									<a onclick="return confirm('Apakah anda ingin hapus data?')" href="<?= base_url('kelas/delete/') . $item->id_kelas ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
		$('#data_kelas').DataTable();
	});
</script>
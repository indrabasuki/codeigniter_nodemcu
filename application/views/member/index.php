<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="figma"></i></div>
						Data Anggota
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
					<a href="<?= base_url('member/create') ?>" title="Tambah Data" class="btn btn-sm btn-primary">Tambah Data Anggota</a>

				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="datatable">
				<table class="table table-bordered table-hover" id="data_member" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>ID Anggota</th>
							<th>ID Card</th>
							<th>Nama Anggota</th>
							<th>No Telepon</th>
							<th>Alamat</th>
							<th>Kelas</th>
							<th>Terdaftar</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						foreach ($member as $item) : ?>

							<tr>
								<td><?= $no++ ?></td>
								<td><?= $item->id_member ?></td>
								<td><?= $item->id_card ?></td>
								<td><?= $item->name ?></td>
								<td><?= $item->telepon ?></td>
								<td><?= $item->address ?></td>
								<?php if ($item->is_staff == 1) : ?>
									<td><span class="btn btn-sm btn-block btn-primary">Sebagai Staff</span></td>

								<?php else : ?>
									<td><?= $item->kelas_name ?> <br>
										<span class="btn btn-sm btn-block btn-success">Murid</span>
									</td>

								<?php endif ?>
								<td><?= $item->created_at ?></td>

								<td class="text-center">
									<a href="<?= base_url('member/detail/') . $item->id_member ?>" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a>
									<a href="<?= base_url('member/edit/') . $item->id_member ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
									<a onclick="return confirm('Apakah anda ingin hapus data?')" href="<?= base_url('member/delete/') . $item->id_member ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
		$('#data_member').DataTable();
	});
</script>
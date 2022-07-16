<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
	<div class="container">
		<div class="page-header-content pt-4">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto mt-4">
					<h1 class="page-header-title">
						<div class="page-header-icon"><i data-feather="home"></i></div>
						Aktivitas
					</h1>

				</div>
			</div>
		</div>
</header>
<div class="container mt-n10">

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
							<th>Kelas</th>
							<th>ID Card</th>
							<th>Waktu In Gate</th>
							<th>Waktu Out Gate</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						foreach ($activity as $item) :
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $item->name ?></td>
								<td><?= $item->kelas_name ?></td>
								<td><?= $item->id_card ?></td>
								<?php if ($item->in == 1) : ?>
									<td><?= date("Y-m-d H:i:s", substr($item->time, 0, 10));  ?></td>
								<?php else : ?>
									<td>..</td>
								<?php endif; ?>
								<?php if ($item->out == 1) : ?>
									<td><?= date("Y-m-d H:i:s", substr($item->time, 0, 10));  ?></td>
								<?php else : ?>
									<td>..</td>
								<?php endif; ?> <td><?= $item->activity_description ?></td>
								<td><a href="#" class="btn btn-sm btn-success">Lihat <i class="fas fa-eye"></i></a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

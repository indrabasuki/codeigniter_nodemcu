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
	<?= form_open('member/update') ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">ID Anggota</label>
						<input type="text" name="id_member" value="<?= $member->id_member ?>" class="form-control" readonly>
						<span class="text-danger">ID Anggota Otomatis di generate oleh sistem</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">ID Device</label>
						<input type="number" value="<?= $member->id_device ?>" name="id_device" class="form-control" placeholder="ID Device" required>
					</div>
				</div>
				<div class="col-md-6">
					<button class="btn btn-primary" id="tempel">Tempel RFID Card </button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">ID Card</label>
						<input type="text" value="<?= $member->id_card ?>" name="id_card" class="form-control" placeholder="ID Card" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Nama Anggota</label>
						<input type="text" name="name" value="<?= $member->name ?>" class="form-control" placeholder="Nama Anggota" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Nomor Telepon</label>
						<input type="number" value="<?= $member->telepon ?>" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Alamat</label>
						<input type="text" value="<?= $member->address ?>" name="address" class="form-control" placeholder="Alamat" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Role</label>
						<select id="staff" name="is_staff" class="form-control">
							<option value="" disabled>-- Pilih Role --</option>
							<option value="1">Staff</option>
							<option value="0">Murid</option>

						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group" id="kelas">
						<label for="">Kelas</label>
						<select name="id_kelas" class="form-control" placeholder="Kelas" required>
							<option value="" disabled>-- Pilih Kelas --</option>
							<?php foreach ($kelas as $item) : ?>
								<option value="<?= $item->id_kelas ?>"><?= $item->kelas_name ?></option>
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
		$('#kelas').hide();

		$('#staff').on('change', function() {
			if (this.value == 0) {
				$('#kelas').show();
			} else {
				$('#kelas').hide();

			}
		});

		$('#tempel').click(function() {


			alert('Silahkan Tempel RFID Card Pada Mesin RFID');
			show_id();

		});
	});

	function show_id() {
		$.ajax({
			type: 'ajax',
			url: '<?php echo base_url('rfid/get_id') ?>',
			async: true,
			dataType: 'json',
			success: function(data) {
				alert(data);
			}

		});
	}
</script>
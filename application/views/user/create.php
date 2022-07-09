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
                        <label for="">ID User</label>
                        <input type="text" name="number" class="form-control" placeholder="ID User" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Pengguna</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" name="number" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="email" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Password" required>
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
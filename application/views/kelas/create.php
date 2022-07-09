<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="figma"></i></div>
                        Tambah Data Kelas
                    </h1>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
    <?= form_open('kelas/create') ?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Kelas" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <a href="<?= base_url('kelas') ?>" class="btn btn-secondary btn-sm">Kembali</a>
            <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
        </div>
    </div>
    <?= form_close() ?>
</div>

<script>
    $(document).ready(function() {
        $('#data_kelas').DataTable();
    });
</script>
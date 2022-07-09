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
                        <label for="">ID Card</label>
                        <input type="text" name="number" class="form-control" placeholder="ID Card" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Anggota</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Anggota" required>
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
                        <label for="">Alamat</label>
                        <input type="text" name="address" class="form-control" placeholder="Alamat" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select id="data_kelas" name="address" class="form-select" placeholder="Alamat" required>
                            <option>
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Terdaftar</label>
                        <input type="text" name="timestamp" class="form-control" placeholder="Terdaftar" required>
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
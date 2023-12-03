<?php $this->extend('dashboard'); ?>
<?php $this->section('content'); ?>

<?php if($petugas['level'] == "petugas") {
// Remove "PTS_" from the string
$username = str_replace("PTS_", "", $petugas['username']);
}else{
// Remove "ADM_" from the string
$username = str_replace("ADM_", "", $petugas['username']);
} 

$email = explode('@', $petugas['email'])[0];
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 plr_30 body_white_bg pt_30">
            <h1 class="mt-4">Edit Data Petugas</h1>
            <!-- form ganti Password -->
            <form action="/admin/petugas/update/<?= $petugas['id_petugas']; ?>" method="post"
                enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="form-group mt-3 mb-3">
                    <?= session()->getFlashdata('nama_petugas') ?>
                    <label for="nama_petugas" class="form-label">Nama Petugas <font color="FF7F7F">*</font>
                    </label>
                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas"
                        value="<?= $petugas['nama_petugas'] ?>" placeholder="Masukan Nama Petugas">
                </div>

                <div class="form-group mb-3">
                    <?= session()->getFlashdata('username') ?>
                    <label for="username" class="form-label">Username <font color="FF7F7F">*</font></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="petugas">PTS_</span>
                        </div>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukan Username" aria-describedby="petugas" value="<?= $username ?>">
                    </div>
                </div>

                <div class="form-group mb-3">

                    <?= session()->getFlashdata('email') ?>
                    <label for="email" class="form-label">Email <font color="FF7F7F">*</font></label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email"
                            aria-describedby="email" value="<?= $email ?>">
                        <div class="input-group-append">
                            <span class="input-group-text" id="email">@laporinaja.my.id</span>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <?= session()->getFlashdata('telepon') ?>
                    <label for="telepon" class="form-label">Telphone <font color="FF7F7F">*</font></label>
                    <input type="text" class="form-control" id="telepon" value="<?= $petugas['telepon'] ?>"
                        name="telepon" placeholder="Masukan Telphone">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Level <font color="FF7F7F">*</font></label>
                    <select class="form-select" name="level" aria-label="Default select example">
                        <option value="petugas" <?php if ($petugas['level'] == 'petugas') echo 'selected'; ?>>Petugas
                        </option>
                        <option value="admin" <?php if ($petugas['level'] == 'admin') echo 'selected'; ?>>Admin</option>
                    </select>
                </div>

                <button type="submit" class="me-1 btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </main>

    <script>
    if ($('select[name="level"]').val() != "petugas") {
        $("#petugas").text("ADM_")
    }

    $('select').on('change', function() {
        if ($('select[name="level"]').val() == "petugas") {
            $("#petugas").text("PTS_")
        } else {
            $("#petugas").text("ADM_")
        }
    })
    </script>

    <?php $this->endSection(); ?>
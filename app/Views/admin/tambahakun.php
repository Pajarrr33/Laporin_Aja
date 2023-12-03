<?php $this->extend('dashboard'); ?>
<?php $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 plr_30 body_white_bg pt_30">
            <h1 class="mt-4">Tambah Data Petugas</h1>
            <form action="/admin/savePetugas" method="post" enctype="multipart/form-data">
                <div class="form-group mt-3 mb-3">
                    <?= session()->getFlashdata('nama_petugas') ?>
                    <label for="nama_petugas" class="form-label">Nama Petugas <font color="FF7F7F">*</font>
                    </label>
                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas"
                        placeholder="Masukan Nama Petugas">
                </div>

                <div class="form-group mb-3">

                    <?= session()->getFlashdata('username') ?>
                    <label for="username" class="form-label">Username <font color="FF7F7F">*</font></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="petugas">PTS_</span>
                        </div>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukan Username" aria-describedby="petugas">
                    </div>
                </div>

                <div class="form-group mb-3">

                    <?= session()->getFlashdata('email') ?>
                    <label for="email" class="form-label">Email <font color="FF7F7F">*</font></label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email"
                            aria-describedby="email">
                        <div class="input-group-append">
                            <span class="input-group-text" id="email">@laporinaja.my.id</span>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">

                    <?= session()->getFlashdata('password') ?>
                    <label for="password" class="form-label">Password <font color="FF7F7F">*</font></label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukan Password">
                </div>

                <div class="form-group mb-3">

                    <?= session()->getFlashdata('confirm') ?>
                    <label for="confirm" class="form-label">Confirm <font color="FF7F7F">*</font></label>
                    <input type="password" class="form-control" id="confirm" name="confirm"
                        placeholder="Masukan Ulang Password">
                </div>

                <div class="form-group mb-3">
                    <?= session()->getFlashdata('telepon') ?>
                    <label for="telepon" class="form-label">Telphone <font color="FF7F7F">*</font></label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukan Telphone">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Level <font color="FF7F7F">*</font></label>
                    <select class="form-select" name="level" aria-label="Default select example">
                        <option value="petugas" selected>Petugas</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <button type="submit" class="me-1 btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </main>

    <script>
    $(document).ready(function() {
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
    })
    </script>

    <?php $this->endSection(); ?>
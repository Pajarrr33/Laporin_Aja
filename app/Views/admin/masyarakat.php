<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="d-flex justify-content-between my-lg-3">
            <div class="d-flex">
                <h3>Kelola Akun Masyarakat</h3>
            </div>
        </div>
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($masyarakat as $m) : ?>
                <tr>
                    <td scope="row"><?= $i++; ?></td>
                    <td><?= $m['username']; ?></td>
                    <td><?= $m['email']; ?></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                            data-target="#resetpw<?= $m['id_masyarakat'] ?>"><i class="bi bi-key"></i></button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php foreach ($masyarakat as $m) : ?>
<!-- Modal -->
<div class="modal fade" id="resetpw<?= $m['id_masyarakat'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/masyarakat/reset-password/<?= $m['id_masyarakat'] ?>" method="post">
                    <div class="form-group mt-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleInputPassword1">Confirm</label>
                        <input type="password" name="confirm" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password Kembali">
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?= $this->endSection() ?>
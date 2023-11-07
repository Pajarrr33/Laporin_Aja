<?php $this->extend('layout/admin'); ?>
<?php $this->section('content'); ?>

<?php
$besan = session()->getFlashdata('pesan');
?>

<div id_petugas="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Petugas</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Petugas</li>
            </ol>
            <!-- button tambah data -->
            <div class="row mb-3">
                <div class="col-sm-10">
                    <a href="/admin/tambah/petugas" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <table id_petugas="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Petugas</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>telepon</th>
                                <th>Level</th>
                                <th>Salt</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nama Petugas</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>telepon</th>
                                <th>Level</th>
                                <th>Salt</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($petugas as $p) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $p['id_petugas']; ?></td>
                                    <td><?= $p['nama_petugas']; ?></td>
                                    <td><?= $p['username']; ?></td>
                                    <td><?= $p['password']; ?></td>
                                    <td><?= $p['telepon']; ?></td>
                                    <td><?= $p['level']; ?></td>
                                    <td><?= $p['salt']; ?></td>
                                    <td>
                                        <a href="/petugas/edit/<?= $p['id_petugas']; ?>" class="btn btn-primary" >Edit</a>
                                        <form action="/petugas/<?= $p['id_petugas']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal<?= $p['id_petugas']; ?>">Detail</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if ($besan) { ?>
                                <h5 style="color:green"><?php echo $besan ?><h5>
                                    <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php foreach ($petugas as $p) : ?>
            <div class="modal fade" id_petugas="Modal<?= $p['id_petugas']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id_petugas="exampleModalLabel">Detail Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Id Petugas: <?= $p['id_petugas']; ?></h6>
                            <h6>Nama Petugas : <?= $p['nama_petugas']; ?></h6>
                            <h6>Username : <?= $p['username']; ?></h6>
                            <h6>Password : <?= $p['password']; ?></h6>
                            <h6>telepon : <?= $p['telepon']; ?></h6>
                            <h6>Level : <?= $p['level']; ?></h6>
                            <h6>Salt : <?= $p['salt']; ?></h6>
                        </div>
                        <li><a class="dropdown-item" href="/admin/logout">Logout</a></li>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <?php $this->endSection(); ?>
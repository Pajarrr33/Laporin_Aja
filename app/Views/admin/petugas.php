<?php $this->extend('dashboard'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
$session = session()
?>

<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="d-flex justify-content-between my-lg-3">
            <div class="d-flex">
                <h3>Kelola Akun Petugas / Admin</h3>
            </div>
            <div class="d-flex">
                <a href="/admin/tambahakun" class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i></a>
            </div>
        </div>
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Petugas</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($petugas as $p) : ?>
                <tr>
                    <td scope="row"><?= $i++; ?></td>
                    <td><?= $p['nama_petugas']; ?></td>
                    <td><?= $p['username']; ?></td>
                    <td><?= $p['email']; ?></td>
                    <td><?= $p['telepon']; ?></td>
                    <td class="text-uppercase">
                        <?= $p['level']; ?>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/petugas/edit/<?= $p['id_petugas'] ?>"><i
                                class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-warning btn-sm" href="#" onclick="confirmReset(<?= $p['id_petugas'] ?>)"><i
                                class="bi bi-key"></i></a>
                        <a class="btn btn-danger btn-sm" href="#" onclick="confirmDelete(<?= $p['id_petugas'] ?>)"><i
                                class="bi bi-trash3"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    let table = new DataTable('#myTable')
    $('#myTable_wrapper').addClass("pt-5 pb-5")
})

function confirmReset(id) {
    Swal.fire({
        title: 'Apakah Anda Yakin Ingin Mereset Password Akun Ini?',
        text: 'Anda tidak dapat mengembalikan password seperti sebelumnya!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, Reset Password!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Assuming your reset URL is "/admin/defaultpasspetugas/"
            window.location.href = '/admin/defaultpasspetugas/' + id;
        }
    });
}

function confirmDelete(id) {
    Swal.fire({
        title: 'Apakah Anda Yakin Ingin Menghapus Akun ini?',
        text: 'Anda tidak dapat mengembalikan data ini!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Assuming your delete URL is "/admin/petugas/delete/"
            window.location.href = '/admin/petugas/delete/' + id;
        }
    });
}
</script>

<?php $this->endSection(); ?>
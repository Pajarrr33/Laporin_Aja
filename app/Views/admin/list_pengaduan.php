<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($pengaduan as $p) : ?>
                <a href="/admin/pengaduan/<?= $p['id_pengaduan'] ?>">
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $p['judul'] ?></td>
                        <td><?= $p['tanggal'] ?></td>
                        <td>
                            <?php if($p['status'] == 0 ) :?>
                            <div class="alert alert-primary" role="alert">
                                Dibuat
                            </div>
                            <?php elseif($p['status'] == 1 ) :?>
                            <div class="alert alert-primary" role="alert">
                                Diterima
                            </div>
                            <?php elseif($p['status'] == 2 ) :?>
                            <div class="alert alert-primary" role="alert">
                                Ditanggapi
                            </div>
                            <?php elseif($p['status'] == 3 ) :?>
                            <div class="alert alert-primary" role="alert">
                                Selesai
                            </div>
                            <?php elseif($p['status'] == 4 ) :?>
                            <div class="alert alert-primary" role="alert">
                                Ditolak
                            </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="/admin/pengaduan/<?= $p['id_pengaduan'] ?>" class="btn btn-outline-info"><i
                                    class="bi bi-search"></i></a>
                            <?php if($p['status'] == 0 ) :?>
                            <a href="/admin/terima_pengaduan/<?= $p['id_pengaduan'] ?>" class="btn btn-outline-success"><i
                                    class="bi bi-check2"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#tolak_pengaduan_<?= $p['id_pengaduan'] ?>">
                                <i class="bi bi-x-lg"></i>
                            </button>
                            <?php elseif($p['status'] == 1 || $p['status'] == 2) :?>
                            <a href="#" class="btn btn-outline-primary"><i class="bi bi-chat"></i></a>
                            <?php endif ; ?>
                        </td>
                    </tr>
                </a>
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
</script>



<?php foreach($pengaduan as $p) : ?>
<!-- Modal -->
<div class="modal fade" id="tolak_pengaduan_<?= $p['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kenapa Pengaduan ini ditolak?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/tolak_pengaduan/<?= $p['id_pengaduan'] ?>" method="post">
                    <div class="input-group">
                        <input type="text" name="tanggapan" placeholder="Alasan" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


<?= $this->endSection() ?>
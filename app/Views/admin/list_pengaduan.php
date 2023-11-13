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
                        <?php if($p['status'] == 0 ) :?>
                        <a href="/terima_pengaduan/<?= $p['id_pengaduan'] ?>" class="btn btn-outline-success"><i class="bi bi-check2"></i></a>
                        <a href="/tolak_pengaduan/<?= $p['id_pengaduan'] ?>" class="btn btn-outline-danger"><i class="bi bi-x-lg"></i></a>
                        <?php elseif($p['status'] == 1 || $p['status'] == 2) :?>
                        <a href="#" class="btn btn-outline-primary">Beri Tanggapan</a>
                        <?php endif ; ?>
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
</script>
<?= $this->endSection() ?>
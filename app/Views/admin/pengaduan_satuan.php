<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<style>
.d-inline-block {
    margin-right: 10px;
}
</style>
<div class="main_content_iner ">
    <div class="container-fluid plr_30  border rounded-lg body_white_bg pt_30">
        <div class="top_section mb-5 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="d-inline-block">
                    <img src="/assets/img/file-regular.svg" alt="" width="75px" height="75px">
                </div>
                <div class="d-inline-block">
                    <h3><b><?= $pengaduan['judul'] ?></b></p>
                        <p><?= $pengaduan['tanggal'] ?></p>
                </div>
            </div>
            <div class="d-inline-block ">
                <?php if($pengaduan['status'] == 0 ) :?>
                <div class="alert alert-primary" role="alert">
                    Dibuat
                </div>
                <?php elseif($pengaduan['status'] == 1 ) :?>
                <div class="alert alert-primary" role="alert">
                    Diterima
                </div>
                <?php elseif($pengaduan['status'] == 2 ) :?>
                <div class="alert alert-primary" role="alert">
                    Ditanggapi
                </div>
                <?php elseif($pengaduan['status'] == 3 ) :?>
                <div class="alert alert-primary" role="alert">
                    Selesai
                </div>
                <?php elseif($pengaduan['status'] == 4 ) :?>
                <div class="alert alert-primary" role="alert">
                    Ditolak
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="bottom_section">
            <div class="row">
                <div class="col-lg-6">
                    <h4><b>A. Identitas Laporan</b></h4>
                    <div class="row">
                        <div class="col-lg-4">
                            <h6>
                                Judul Laporan
                            </h6>
                        </div>
                        <div class="col-lg-1">
                            <h6>
                                :
                            </h6>
                        </div>
                        <div class="col-lg-7">
                            <h6>
                                <?= $pengaduan['judul'] ?>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h6>
                                Pelapor
                            </h6>
                        </div>
                        <div class="col-lg-1">
                            <h6>
                                :
                            </h6>
                        </div>
                        <div class="col-lg-7">
                            <h6>
                                <?= $masyarakat['username'] ?>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h6>
                                Tanggal dan waktu
                            </h6>
                        </div>
                        <div class="col-lg-1">
                            <h6>
                                :
                            </h6>
                        </div>
                        <div class="col-lg-7">
                            <h6>
                                <?= $pengaduan['tanggal'] ?>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h6>
                                Lokasi
                            </h6>
                        </div>
                        <div class="col-lg-1">
                            <h6>
                                :
                            </h6>
                        </div>
                        <div class="col-lg-7">
                            <h6>
                                Indonesia
                            </h6>
                        </div>
                    </div>
                    <h4><b>B. Deskripsi Laporan</b></h4>
                    <img src="/upload/<?= $pengaduan['img'] ?>" alt="bukti" width="100%" style="object-fit:contain;">
                    <h6 class="mt-3">
                    <?php 
                    // Assuming $pengaduan['isi'] contains HTML
                    $html = $pengaduan['isi'];

                    // Remove all <p> tags from the HTML content
                    $htmlWithoutPTags = str_replace('<p>', '', $html);
                    $htmlWithoutPTags = str_replace('</p>', '', $htmlWithoutPTags);

                    // Display the modified content
                    echo $htmlWithoutPTags ;
                    ?>
                    </h6>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <h4><b>C. Timeline Laporan</b></h3>
                        </div>
                        <div class="d-flex">
                            <button type="button" class="tambah_tanggapan"><i class="bi bi-plus-lg"></i></button>
                            <button type="button" class="tutup_tanggapan d-none"><i class="bi bi-x-lg"></i></button>
                            <?php foreach($tanggapan as $t) : ?>
                            <button type="button" class="tutup_tanggapan_edit<?= $t['id_tanggapan'] ?> d-none"><i class="bi bi-x-lg"></i></button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <form action="/tambah_tanggapan/<?= $pengaduan['id_pengaduan'] ?>" method="post" class="d-none tanggapan mt-3 format_tanggapan">
                        <textarea name="tanggapan" id="isi" cols="30" rows="10"
                            placeholder="Masukan tanggapan anda"></textarea>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php $i = 1; foreach($tanggapan as $t) : ?>
                    <div class="d-flex align-items-center mt-3">
                        <div class="d-flex tanggapan_satuan<?= $t['id_tanggapan'] ?> align-items-center">
                            <?php if($i == 1) : ?>
                            <div class="d-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-circle-fill" viewBox="0 0 16 16" style="color:orange">
                                    <circle cx="8" cy="8" r="8" />
                                </svg>
                            </div>
                            <?php elseif($i > 1) : ?>
                            <div class="d-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-circle-fill" viewBox="0 0 16 16" style="color:gray">
                                    <circle cx="8" cy="8" r="8" />
                                </svg>
                            </div>
                            <?php endif ; ?>
                            <div class="d-inline-block">
                                    <h6 class="tanggapan_terdahulu<?= $t['id_tanggapan'] ?>">
                                    <?php 
                                    // Assuming $pengaduan['isi'] contains HTML
                                    $html = $t['tanggapan'];

                                    // Remove all <p> tags from the HTML content
                                    $htmlWithoutPTags = str_replace('<p>', '', $html);
                                    $htmlWithoutPTags = str_replace('</p>', '', $htmlWithoutPTags);

                                    // Display the modified content
                                    echo $htmlWithoutPTags ;
                                    ?>
                                    </h6>
                                    <p><?= $t['tanggal'] ?></p>
                            </div>
                        </div>
                        <form action="/update_tanggapan/<?= $t['id_tanggapan'] ?>" method="post"
                            class="d-none edit_tanggapan<?= $t['id_tanggapan'] ?> mt-3 format_tanggapan">
                            <textarea name="tanggapan" id="edit_tanggapan<?= $t['id_tanggapan'] ?>" cols="30" rows="10"
                                placeholder="Masukan tanggapan anda"><?= $t['tanggapan'] ?></textarea>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                </div>
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
ClassicEditor
    .create(document.querySelector('#isi'))
    .catch(error => {
        console.error(error);
    });
$(document).ready(function() {
    $(".format_tanggapan").css('width', '100%')
})

<?php foreach($tanggapan as $t) : ?>
ClassicEditor
    .create(document.querySelector('#edit_tanggapan<?= $t['id_tanggapan'] ?>'))
    .catch(error => {
        console.error(error);
    });

    var isTanggapanClickable = true;

    $(".tanggapan_terdahulu<?= $t['id_tanggapan'] ?>").on("dblclick", function() {
        if (isTanggapanClickable) {
            $(".edit_tanggapan<?= $t['id_tanggapan'] ?>").removeClass("d-none");
            $(".tanggapan_satuan<?= $t['id_tanggapan'] ?>").addClass("d-none");
            $(".tutup_tanggapan_edit<?= $t['id_tanggapan'] ?>").removeClass("d-none");
            $(".tambah_tanggapan").addClass("d-none");
            $(".tutup_tanggapan").addClass("d-none");
            isTanggapanClickable = false; // Disable all tanggapan_terdahulu elements
        }
    });

    $(".tutup_tanggapan_edit<?= $t['id_tanggapan'] ?>").on("click", function() {
        $(".edit_tanggapan<?= $t['id_tanggapan'] ?>").addClass("d-none");
        $(".tutup_tanggapan_edit<?= $t['id_tanggapan'] ?>").addClass("d-none");
        $(".tanggapan_satuan<?= $t['id_tanggapan'] ?>").removeClass("d-none");
        $(".tambah_tanggapan").removeClass("d-none");
        isTanggapanClickable = true; // Enable all tanggapan_terdahulu elements
    });

<?php endforeach ; ?>


$(".tambah_tanggapan").on("click", function() {
    isTanggapanClickable = false; // Disable all tanggapan_terdahulu elements
    $(".tanggapan").removeClass("d-none");
    $(".tambah_tanggapan").addClass("d-none");
    $(".tutup_tanggapan").removeClass("d-none");

    <?php foreach($tanggapan as $t) : ?>
        $(".edit_tanggapan<?= $t['id_tanggapan'] ?>").addClass("d-none");
        $(".tanggapan_satuan<?= $t['id_tanggapan'] ?>").removeClass("d-none");
    <?php endforeach; ?>
});

$(".tutup_tanggapan").on("click", function() {
    isTanggapanClickable = true; // Enable all tanggapan_terdahulu elements
    $(".tanggapan").addClass("d-none");
    $(".tambah_tanggapan").removeClass("d-none");
    $(".tutup_tanggapan").addClass("d-none");
});

</script>

<?= $this->endSection() ?>
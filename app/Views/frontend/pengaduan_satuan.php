<?= $this->extend('templates') ?>

<?= $this->section('content') ?>

<style>
.d-inline-block {
    margin-right: 10px;
}
</style>

<section class="background-section" style="background-image: url(<?= base_url() ?>assets/img/breadcrumb.jpg);">
    <div class="container">
        <nav aria-label="breadcrumb" class="my-custom-breadcrumb">
            <ol class="breadcrumb mt-lg-5 pt-lg-2">
                <li class="breadcrumb-item"><a href="#"><b style="color: white;">Home</b></a></li>
                <li class="breadcrumb-item"><a href="#"><b style="color: white;">Pengaduan</b></a></li>
                <li class="breadcrumb-item"><a href="#"><b style="color: white;">Detail</b></a></li>
            </ol>
        </nav>
    </div>
</section>

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
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
                            <h4>
                                Judul Laporan
                            </h4>
                        </div>
                        <div class="col-lg-1">
                            <h4>
                                :
                            </h4>
                        </div>
                        <div class="col-lg-7">
                            <h4>
                                <?= $pengaduan['judul'] ?>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h4>
                                Pelapor
                            </h4>
                        </div>
                        <div class="col-lg-1">
                            <h4>
                                :
                            </h4>
                        </div>
                        <div class="col-lg-7">
                            <h4>
                                <?= $masyarakat['username'] ?>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h4>
                                Tanggal dan waktu
                            </h4>
                        </div>
                        <div class="col-lg-1">
                            <h4>
                                :
                            </h4>
                        </div>
                        <div class="col-lg-7">
                            <h4>
                                <?= $pengaduan['tanggal'] ?>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h4>
                                Lokasi
                            </h4>
                        </div>
                        <div class="col-lg-1">
                            <h4>
                                :
                            </h4>
                        </div>
                        <div class="col-lg-7">
                            <h4>
                                Indonesia
                            </h4>
                        </div>
                    </div>
                    <h4><b>B. Deskripsi Laporan</b></h4>
                    <img src="/upload/<?= $pengaduan['img'] ?>" alt="bukti" width="100%" style="object-fit:contain;">
                    <h4 class="mt-3">
                        <?php 
                    // Assuming $pengaduan['isi'] contains HTML
                    $html = $pengaduan['isi'];

                    // Remove all <p> tags from the HTML content
                    $htmlWithoutPTags = str_replace('<p>', '', $html);
                    $htmlWithoutPTags = str_replace('</p>', '', $htmlWithoutPTags);

                    // Display the modified content
                    echo $htmlWithoutPTags ;
                    ?>
                    </h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <h4><b>C. Timeline Laporan</b></h3>
                        </div>
                    </div>
                    <form action="/admin/tambah_tanggapan/<?= $pengaduan['id_pengaduan'] ?>" method="post"
                        class="d-none tanggapan mt-3 format_tanggapan">
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
                    <div class="mt-3">
                        <div class="tanggapan_satuan<?= $t['id_tanggapan'] ?>">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <?php if($i == 1) : ?>
                                    <div class="d-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                            style="color:orange">
                                            <circle cx="8" cy="8" r="8" />
                                        </svg>
                                    </div>
                                    <?php elseif($i > 1) : ?>
                                    <div class="d-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                            style="color:gray">
                                            <circle cx="8" cy="8" r="8" />
                                        </svg>
                                    </div>
                                    <?php endif ; ?>
                                    <div class="d-inline-block">
                                        <h4 class="tanggapan_terdahulu<?= $t['id_tanggapan'] ?>">
                                            <?php 
                                    // Assuming $pengaduan['isi'] contains HTML
                                    $html = $t['tanggapan'];

                                    // Remove all <p> tags from the HTML content
                                    $htmlWithoutPTags = str_replace('<p>', '', $html);
                                    $htmlWithoutPTags = str_replace('</p>', '', $htmlWithoutPTags);

                                    // Display the modified content
                                    echo $htmlWithoutPTags ;
                                    ?>
                                        </h4>
                                        <p><?= $t['tanggal'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="/admin/update_tanggapan/<?= $t['id_tanggapan'] ?>" method="post"
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
                <div class="row mt-lg-5">
                    <div class="col-lg-6">
                        <a href="/pengaduan/update_pengaduan/<?= $pengaduan['id_pengaduan'] ?>" style="width: 100%;" class="btn btn-primary">Update</a>
                    </div>
                    <div class="col-lg-6">
                        <button style="width: 100%;" onclick="confirmDelete(<?=$pengaduan['id_pengaduan'] ?>)" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda Yakin Ingin Pengaduan ini?',
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
                window.location.href = '/hapus_pengaduan/' + id;
            }
        });
    }

</script>

<?= $this->endSection() ?>
<?= $this->extend('templates') ?>

<?= $this->section('content') ?>

<style>
.tanggapan {
    margin-right: 10px;
}
</style>

<section class="background-section" style="background-image: url(assets/img/breadcrumb.jpg);">
    <div class="container">
        <nav aria-label="breadcrumb" class="my-custom-breadcrumb">
            <ol class="breadcrumb mt-lg-5 pt-lg-2">
                <li class="breadcrumb-item"><a href="#"><b style="color: white;">Home</b></a></li>
                <li class="breadcrumb-item"><a href="#"><b style="color: white;">User</b></a></li>
            </ol>
        </nav>
    </div>
</section>

<!--================Login Box Area =================-->
<section class="section_gap" style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 border rounded-lg text-center" style="border-radius: 5%;">
                <img src="/assets/img/kocheng.jpeg" alt="profile" class="m-5" width="100px" height="100px"
                    style="border-radius:50%;object-fit:cover;">
                <div class="pt-3 d-flex justify-content-around">
                    <div class="d-flex">
                        <button type="button" id="update" class="btn btn-primary">Perbarui</button>
                    </div>
                    <div class="d-flex">
                        <a href="/user/delete/<?= $masyarakat['id_masyarakat'] ?>" id="hapus" class="btn btn-primary delete-btn">Hapus</a>
                        <button id="cancel" class="btn btn-primary d-none">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border rounded-lg" style="border-radius: 4%;">
                <div class="text_section">
                    <div class="row mt-3 pb-3 border-bottom">
                        <div class="col-lg-4">
                            <h5>
                                Nama Pengguna
                            </h5>
                        </div>
                        <div class="col-lg-1">
                            <h5>
                                :
                            </h5>
                        </div>
                        <div class="col-lg-7">
                            <h5>
                                <?= $masyarakat['username'] ?>
                            </h5>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3 border-bottom">
                        <div class="col-lg-4">
                            <h5>
                                Email
                            </h5>
                        </div>
                        <div class="col-lg-1">
                            <h5>
                                :
                            </h5>
                        </div>
                        <div class="col-lg-7">
                            <h5>
                                <?= $masyarakat['email'] ?>
                            </h5>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3 border-bottom">
                        <div class="col-lg-4">
                            <h5>
                                Phone
                            </h5>
                        </div>
                        <div class="col-lg-1">
                            <h5>
                                :
                            </h5>
                        </div>
                        <?php if($masyarakat['telepon'] == null) { $masyarakat['telepon'] = "Belum Ditambahkan" ;} ?>
                        <div class="col-lg-7">
                            <h5>
                                <?= $masyarakat['telepon'] ?>
                            </h5>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3 border-bottom">
                        <div class="col-lg-4">
                            <h5>
                                Address
                            </h5>
                        </div>
                        <div class="col-lg-1">
                            <h5>
                                :
                            </h5>
                        </div>
                        <?php if($masyarakat['alamat'] == null) { $masyarakat['alamat'] = "Belum Ditambahkan" ;} ?>
                        <div class="col-lg-7">
                            <h5>
                                <?= $masyarakat['alamat'] ?>
                            </h5>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col-lg-4">
                            <h5>
                                NIK
                            </h5>
                        </div>
                        <div class="col-lg-1">
                            <h5>
                                :
                            </h5>
                        </div>

                        <?php if($masyarakat['nik'] == null) { $masyarakat['nik'] = "Belum Ditambahkan" ;} ?>
                        <div class="col-lg-7">
                            <h5>
                                <?= $masyarakat['nik'] ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="form-section d-none">
                    <form action="/user/update/<?= $masyarakat['id_masyarakat'] ?>" method="post">
                        <div class="form-group">
                            <label for="fullname">Username</label>
                            <input type="text" name="username" class="form-control" id="fullname" value="<?= $masyarakat['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="<?= $masyarakat['email'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="telepon" class="form-control" id="phone" value="<?= $masyarakat['telepon'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="alamat" class="form-control" id="address" value="<?= $masyarakat['alamat'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" value="<?= $masyarakat['nik'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row my-5 pengaduan">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 text-center" style="border: 2px solid black; border-right-style:hidden;">
                        <button type="button" id="dibuat" style="background-color: transparent; border:0px">
                            DIBUAT
                        </button>
                    </div>
                    <div class="col-lg-3 text-center" style="border: 2px solid black; border-right-style:hidden;">
                        <button type="button" id="diterima" style="background-color: transparent; border:0px">
                            DITERIMA
                        </button>
                    </div>
                    <div class="col-lg-3 text-center" style="border: 2px solid black; border-right-style:hidden;">
                        <button type="button" id="ditanggapi" style="background-color: transparent; border:0px">
                            DITANGGAPI
                        </button>
                    </div>
                    <div class="col-lg-3 text-center" style="border: 2px solid black;">
                        <button type="button" id="selesai" style="background-color: transparent; border:0px">
                            SELESAI
                        </button>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12" style="border: 2px solid black; border-top:hidden;">
                        <div class="dibuat">
                            <?php if(empty($pengaduan_dibuat)) : ?>
                            <div class="alert alert-light" role="alert">
                                Yah,Belum ada pengaduan nih yuk buat dulu!
                            </div>
                            <?php else: ?>
                            <?php foreach($pengaduan_dibuat as $pb) : ?>
                            <a href="/pengaduan/detail/<?= $pb["id_pengaduan"] ?>">
                                <div class="laporan border my-lg-3" style="border-radius: 10px;">
                                    <div class="d-flex my-lg-3 mx-lg-3 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="d-inline-block">
                                                <img src="/assets/img/file-regular.svg" alt="" width="75px"
                                                    height="75px">
                                            </div>
                                            <div class="d-inline-block">
                                                <h5><?= $pb["judul"] ?></h5>
                                                <p><?= $pb["tanggal"] ?></p>
                                            </div>
                                        </div>
                                        <div class="d-inline-block">
                                            <?php if($pb['status'] == 0 ) :?>
                                            <div class="alert alert-warning" role="alert">
                                                Dibuat
                                            </div>
                                            <?php elseif($pb['status'] == 1 ) :?>
                                            <div class="alert alert-info" role="alert">
                                                Diterima
                                            </div>
                                            <?php elseif($pb['status'] == 2 ) :?>
                                            <div class="alert" role="alert" style="background-color: #CCE5FF;">
                                                Ditanggapi
                                            </div>
                                            <?php elseif($pb['status'] == 3 ) :?>
                                            <div class="alert alert-success" role="alert">
                                                Selesai
                                            </div>
                                            <?php elseif($pb['status'] == 4 ) :?>
                                            <div class="alert alert-danger" role="alert">
                                                Ditolak
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $no=1; foreach($tanggapan as $t) :  if($t['id_pengaduan'] == $pb['id_pengaduan']) :?>
                                    <div class="bottom_section d-flex my-lg-3 ml-lg-5 mr-lg-3">
                                        <div class="d-flex align-items-center">
                                            <?php if($no == 1) : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:orange">
                                                    <circle cx="8" cy="8" r="8"></circle>
                                                </svg>
                                            </div>
                                            <?php else : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:gray">
                                                    <circle cx="8" cy="8" r="8" />
                                                </svg>
                                            </div>
                                            <?php endif ; ?>
                                            <div class="d-inline-block tanggapan">
                                                <h4> <?= $t['tanggapan'] ?> </h4>
                                                <p> <?= $t['tanggal'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; endif ; if($no == 3) { break; } endforeach ;  ?>
                                </div>
                            </a>
                            <?php endforeach ; ?>
                            <?php endif ; ?>
                        </div>

                        <div class="diterima d-none">
                            <?php if(empty($pengaduan_diterima)) : ?>
                            <div class="alert alert-light" role="alert">
                                Yah,Belum ada pengaduan nih yuk buat dulu!
                            </div>
                            <?php else: ?>
                            <?php foreach($pengaduan_diterima as $pd) : ?>

                            <a href="/pengaduan/detail/<?= $pd["id_pengaduan"] ?>">
                                <div class="laporan border my-lg-3" style="border-radius: 10px;">
                                    <div class="d-flex my-lg-3 mx-lg-3 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="d-inline-block">
                                                <img src="/assets/img/file-regular.svg" alt="" width="75px"
                                                    height="75px">
                                            </div>
                                            <div class="d-inline-block">
                                                <h5><?= $pd["judul"] ?></h5>
                                                <p><?= $pd["tanggal"] ?></p>
                                            </div>
                                        </div>
                                        <div class="d-inline-block">
                                            <?php if($pd['status'] == 0 ) :?>
                                            <div class="alert alert-warning" role="alert">
                                                Dibuat
                                            </div>
                                            <?php elseif($pd['status'] == 1 ) :?>
                                            <div class="alert alert-info" role="alert">
                                                Diterima
                                            </div>
                                            <?php elseif($pd['status'] == 2 ) :?>
                                            <div class="alert" role="alert" style="background-color: #CCE5FF;">
                                                Ditanggapi
                                            </div>
                                            <?php elseif($pd['status'] == 3 ) :?>
                                            <div class="alert alert-success" role="alert">
                                                Selesai
                                            </div>
                                            <?php elseif($pd['status'] == 4 ) :?>
                                            <div class="alert alert-danger" role="alert">
                                                Ditolak
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $no=1; foreach($tanggapan as $t) :  if($t['id_pengaduan'] == $pd['id_pengaduan']) :?>
                                    <div class="bottom_section d-flex my-lg-3 ml-lg-5 mr-lg-3">
                                        <div class="d-flex align-items-center">
                                            <?php if($no == 1) : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:orange">
                                                    <circle cx="8" cy="8" r="8"></circle>
                                                </svg>
                                            </div>
                                            <?php else : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:gray">
                                                    <circle cx="8" cy="8" r="8" />
                                                </svg>
                                            </div>
                                            <?php endif ; ?>
                                            <div class="d-inline-block tanggapan">
                                                <h4> <?= $t['tanggapan'] ?> </h4>
                                                <p> <?= $t['tanggal'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; endif ; if($no == 3) { break; } endforeach ;  ?>
                                </div>
                            </a>
                            <?php endforeach ; ?>
                            <?php endif ; ?>
                        </div>


                        <div class="ditanggapi d-none">
                            <?php if(empty($pengaduan_ditanggapi)) : ?>
                            <div class="alert alert-light" role="alert">
                                Yah,Belum ada pengaduan nih yuk buat dulu!
                            </div>
                            <?php else: ?>
                            <?php foreach($pengaduan_ditanggapi as $pt) : ?>
                            <a href="/pengaduan/detail/<?= $pt["id_pengaduan"] ?>">
                                <div class="laporan border my-lg-3" style="border-radius: 10px;">
                                    <div class="d-flex my-lg-3 mx-lg-3 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="d-inline-block">
                                                <img src="/assets/img/file-regular.svg" alt="" width="75px"
                                                    height="75px">
                                            </div>
                                            <div class="d-inline-block">
                                                <h5><?= $pt["judul"] ?></h5>
                                                <p><?= $pt["tanggal"] ?></p>
                                            </div>
                                        </div>
                                        <div class="d-inline-block">
                                            <?php if($pt['status'] == 0 ) :?>
                                            <div class="alert alert-warning" role="alert">
                                                Dibuat
                                            </div>
                                            <?php elseif($pt['status'] == 1 ) :?>
                                            <div class="alert alert-info" role="alert">
                                                Diterima
                                            </div>
                                            <?php elseif($pt['status'] == 2 ) :?>
                                            <div class="alert" role="alert" style="background-color: #CCE5FF;">
                                                Ditanggapi
                                            </div>
                                            <?php elseif($pt['status'] == 3 ) :?>
                                            <div class="alert alert-success" role="alert">
                                                Selesai
                                            </div>
                                            <?php elseif($pt['status'] == 4 ) :?>
                                            <div class="alert alert-danger" role="alert">
                                                Ditolak
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $no=1; foreach($tanggapan as $t) :  if($t['id_pengaduan'] == $pt['id_pengaduan']) :?>
                                    <div class="bottom_section d-flex my-lg-3 ml-lg-5 mr-lg-3">
                                        <div class="d-flex align-items-center">
                                            <?php if($no == 1) : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:orange">
                                                    <circle cx="8" cy="8" r="8"></circle>
                                                </svg>
                                            </div>
                                            <?php else : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:gray">
                                                    <circle cx="8" cy="8" r="8" />
                                                </svg>
                                            </div>
                                            <?php endif ; ?>
                                            <div class="d-inline-block tanggapan">
                                                <h4> <?= $t['tanggapan'] ?> </h4>
                                                <p> <?= $t['tanggal'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; endif ; if($no == 3) { break; } endforeach ;  ?>
                                </div>
                            </a>
                            <?php endforeach ; ?>
                            <?php endif ; ?>
                        </div>

                        <div class="selesai d-none">
                            <?php if(empty($pengaduan_selesai)) : ?>
                            <div class="alert alert-light" role="alert">
                                Yah,Belum ada pengaduan nih yuk buat dulu!
                            </div>
                            <?php else: ?>
                            <?php foreach($pengaduan_selesai as $ps) : ?>
                            <a href="/pengaduan/detail/<?= $ps["id_pengaduan"] ?>">
                                <div class="laporan border my-lg-3" style="border-radius: 10px;">
                                    <div class="d-flex my-lg-3 mx-lg-3 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="d-inline-block">
                                                <img src="/assets/img/file-regular.svg" alt="" width="75px"
                                                    height="75px">
                                            </div>
                                            <div class="d-inline-block">
                                                <h5><?= $ps["judul"] ?></h5>
                                                <p><?= $ps["tanggal"] ?></p>
                                            </div>
                                        </div>
                                        <div class="d-inline-block">
                                            <?php if($ps['status'] == 0 ) :?>
                                            <div class="alert alert-warning" role="alert">
                                                Dibuat
                                            </div>
                                            <?php elseif($ps['status'] == 1 ) :?>
                                            <div class="alert alert-info" role="alert">
                                                Diterima
                                            </div>
                                            <?php elseif($ps['status'] == 2 ) :?>
                                            <div class="alert" role="alert" style="background-color: #CCE5FF;">
                                                Ditanggapi
                                            </div>
                                            <?php elseif($ps['status'] == 3 ) :?>
                                            <div class="alert alert-success" role="alert">
                                                Selesai
                                            </div>
                                            <?php elseif($ps['status'] == 4 ) :?>
                                            <div class="alert alert-danger" role="alert">
                                                Ditolak
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $no=1; foreach($tanggapan as $t) :  if($t['id_pengaduan'] == $ps['id_pengaduan']) :?>
                                    <div class="bottom_section d-flex my-lg-3 ml-lg-5 mr-lg-3">
                                        <div class="d-flex align-items-center">
                                            <?php if($no == 1) : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:orange">
                                                    <circle cx="8" cy="8" r="8"></circle>
                                                </svg>
                                            </div>
                                            <?php else : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:gray">
                                                    <circle cx="8" cy="8" r="8" />
                                                </svg>
                                            </div>
                                            <?php endif ; ?>
                                            <div class="d-inline-block tanggapan">
                                                <h4> <?= $t['tanggapan'] ?> </h4>
                                                <p> <?= $t['tanggal'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; endif ; if($no == 3) { break; } endforeach ;  ?>
                                </div>
                            </a>
                            <?php endforeach ; ?>
                            <?php endif ; ?>
                        </div>

                        <?php foreach($pengaduan_ditolak as $pt) : ?>
                        <div class="ditolak d-none">
                            <?php if(empty($pt)) : ?>
                            <div class="alert alert-light" role="alert">
                                Yah,Belum ada pengaduan nih yuk buat dulu!
                            </div>
                            <?php else: ?>
                            <a href="/pengaduan/detail/<?= $pt["id_pengaduan"] ?>">
                                <div class="laporan border my-lg-3" style="border-radius: 10px;">
                                    <div class="d-flex my-lg-3 mx-lg-3 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="d-inline-block">
                                                <img src="/assets/img/file-regular.svg" alt="" width="75px"
                                                    height="75px">
                                            </div>
                                            <div class="d-inline-block">
                                                <h5><?= $pt["judul"] ?></h5>
                                                <p><?= $pt["tanggal"] ?></p>
                                            </div>
                                        </div>
                                        <div class="d-inline-block">
                                            <?php if($pt['status'] == 0 ) :?>
                                            <div class="alert alert-warning" role="alert">
                                                Dibuat
                                            </div>
                                            <?php elseif($pt['status'] == 1 ) :?>
                                            <div class="alert alert-info" role="alert">
                                                Diterima
                                            </div>
                                            <?php elseif($pt['status'] == 2 ) :?>
                                            <div class="alert" role="alert" style="background-color: #CCE5FF;">
                                                Ditanggapi
                                            </div>
                                            <?php elseif($pt['status'] == 3 ) :?>
                                            <div class="alert alert-success" role="alert">
                                                Selesai
                                            </div>
                                            <?php elseif($pt['status'] == 4 ) :?>
                                            <div class="alert alert-danger" role="alert">
                                                Ditolak
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $no=1; foreach($tanggapan as $t) :  if($t['id_pengaduan'] == $pt['id_pengaduan']) :?>
                                    <div class="bottom_section d-flex my-lg-3 ml-lg-5 mr-lg-3">
                                        <div class="d-flex align-items-center">
                                            <?php if($no == 1) : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:orange">
                                                    <circle cx="8" cy="8" r="8"></circle>
                                                </svg>
                                            </div>
                                            <?php else : ?>
                                            <div class="d-inline-block tanggapan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"
                                                    style="color:gray">
                                                    <circle cx="8" cy="8" r="8" />
                                                </svg>
                                            </div>
                                            <?php endif ; ?>
                                            <div class="d-inline-block tanggapan">
                                                <h4> <?= $t['tanggapan'] ?> </h4>
                                                <p> <?= $t['tanggal'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; endif ; if($no == 3) { break; } endforeach ;  ?>
                                </div>
                            </a>
                            <?php endif ; ?>
                        </div>
                        <?php endforeach ; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<script>
$("#dibuat").on('click', function() {
    $(".dibuat").removeClass("d-none")
    $(".diterima").addClass("d-none")
    $(".ditanggapi").addClass("d-none")
    $(".selesai").addClass("d-none")
    $(".ditolak").addClass("d-none")
})

$("#diterima").on('click', function() {
    $(".dibuat").addClass("d-none")
    $(".diterima").removeClass("d-none")
    $(".ditanggapi").addClass("d-none")
    $(".selesai").addClass("d-none")
    $(".ditolak").addClass("d-none")
})

$("#ditanggapi").on('click', function() {
    $(".dibuat").addClass("d-none")
    $(".diterima").addClass("d-none")
    $(".ditanggapi").removeClass("d-none")
    $(".selesai").addClass("d-none")
    $(".ditolak").addClass("d-none")
})

$("#selesai").on('click', function() {
    $(".dibuat").addClass("d-none")
    $(".diterima").addClass("d-none")
    $(".ditanggapi").addClass("d-none")
    $(".selesai").removeClass("d-none")
    $(".ditolak").addClass("d-none")
})

$("#update").on('click',function() {
    $(".text_section").addClass("d-none")
    $(".form-section").removeClass("d-none")
    $("#hapus").addClass("d-none")
    $("#cancel").removeClass("d-none")
    $(".pengaduan").addClass("d-none")
})

$("#cancel").on('click',function(){
    $(".text_section").removeClass("d-none")
    $(".form-section").addClass("d-none")
    $("#hapus").removeClass("d-none")
    $("#cancel").addClass("d-none")
    $(".pengaduan").removeClass("d-none")
})

// Add this script to handle SweetAlert
document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach((button) => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                const deleteUrl = this.getAttribute('href');

                Swal.fire({
                    title: 'Apakah anda yakin ingin menghapus akun ini?',
                    text: 'Akun tidak akan bisa dikembalikan!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = deleteUrl;
                    }
                });
            });
        });
    });

</script>

<?= $this->endSection() ?>
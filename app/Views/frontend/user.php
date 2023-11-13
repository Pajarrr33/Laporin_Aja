<?= $this->extend('templates') ?>
 
<?= $this->section('content') ?>

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
                    <img src="/assets/img/kocheng.jpeg" alt="profile" class="m-5" width="100px" height="100px" style="border-radius:50%;object-fit:cover;">
                    <div class="mt-2">
                        <p>
                            Bio
                        </p>
                    </div>
                    <div>
                        <div class="col-lg-2">
                            <button href="" class="btn btn-primary">Update Profile</button>
                        </div>
                        <div class="col-lg-2">
                            <button href="" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 text-center" style="border: 2px solid black; border-right-style:hidden;">
                            DIBUAT
                        </div>
                        <div class="col-lg-3 text-center" style="border: 2px solid black; border-right-style:hidden;">
                            DITERIMA
                        </div>
                        <div class="col-lg-3 text-center" style="border: 2px solid black; border-right-style:hidden;">
                           DITANGGAPI
                        </div>
                        <div class="col-lg-3 text-center" style="border: 2px solid black;">
                           SELESAI
                        </div>
                    </div>
                    <div>
                        <table class="table mx-2">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggapan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($pengaduan as $p) : ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $p['judul'] ?></td>
                                    <td><?= $p['tanggal'] ?></td>
                                    <td>
                                        <?php if($p['status'] == 0 ) :?>
                                        Dibuat
                                        <?php elseif($p['status'] == 1 ) :?>
                                        Diterima
                                        <?php elseif($p['status'] == 2 ) :?>
                                        Ditanggapi
                                        <?php elseif($p['status'] == 3 ) :?>
                                        Selesai
                                        <?php elseif($p['status'] == 4 ) :?>
                                        Ditolak
                                        <?php endif; ?>
                                    </td>
                                    <?php foreach($tanggapan as $t) :?>
                                    <td>
                                        <?php if($t['id_pengaduan'] == $p['id_pengaduan']) { echo $t['tanggapan']; } else { continue; }?>
                                    </td>
                                    <td>
                                        <a href="/update_pengaduan/<?= $p['id_pengaduan'] ?>"  class="btn btn-primary">update_pengaduan</a>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</section>

<?= $this->endSection() ?>
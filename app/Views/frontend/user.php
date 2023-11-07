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
                    <img src="/assets/img/kocheng.jpeg" alt="profile" class="m-5" width="100px" height="100px" style="border-radius:50%">
                </div>
            </div>
        </div>
	</section>

<?= $this->endSection() ?>
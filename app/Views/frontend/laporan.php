<?= $this->extend('templates') ?>
 
<?= $this->section('content') ?>
    <section class="background-section" style="background-image: url(assets/img/breadcrumb.jpg);">
		<div class="container">
			<nav aria-label="breadcrumb" class="my-custom-breadcrumb">
				<ol class="breadcrumb mt-lg-5 pt-lg-2">
				  <li class="breadcrumb-item"><a href="#"><b style="color: white;">Home</b></a></li>
				  <li class="breadcrumb-item"><a href="#"><b style="color: white;">Laporan</b></a></li>
				</ol>
			</nav>			  
		</div>
	</section>

<div class="container">
    <h1 class="mt-5">Product Page</h1>
    <p class="lead">Ini adalah halaman Product Page</p>
</div>
<?= $this->endSection() ?>
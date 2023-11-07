<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Majestic | <?= $title ?></title>
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicons/favicon-32x32.png">


	<!--CSS ============================================= -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/nouislider.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugin/owlcarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/owlcarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
	<link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<script src="<?= base_url() ?>assets/js/vendor/jquery-3.7.0.min.js" type="text/javascript"></script>
	<script defer src="<?= base_url() ?>assets/plugin/owlcarousel2-2.3.4/dist/owl.carousel.min.js"></script>
</head>

<body id="category">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
				<div class="container"><a class="navbar-brand d-inline-flex" href="<?= base_url() ?>"><img class="d-inline-block" src="<?= base_url() ?>assets/img/gallery/logo.png" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">Majestic</span></a>
				  <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				  <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="<?= base_url("Product?Filter=women") ?>">Women</a></li>
					 	<li class="nav-item px-2"><a class="nav-link fw-medium" href="<?= base_url("Product?Filter=men") ?>">Men</a></li>
						<li class="nav-item px-2"><a class="nav-link fw-medium" href="<?= base_url("Product") ?>">Product</a></li>
					  	<li class="nav-item px-2"><a class="nav-link fw-medium" href="<?= base_url('Contact') ?>">Outlet</a></li>
					</ul>
					<form class="d-flex"><a class="text-1000" href="<?= base_url('Contact') ?>">
						<svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
						</svg></a><a class="text-1000" href="<?= base_url('Cart') ?>">
						<svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						  <circle cx="9" cy="21" r="1"></circle>
						  <circle cx="20" cy="21" r="1"></circle>
						  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
						</svg></a><a class="text-1000" href="<?= base_url('User') ?>">
						<svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
						  <circle cx="12" cy="7" r="4"></circle>
						</svg></a><a class="text-1000" href="<?= base_url('Wishlist') ?>">
						<svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
						</svg></a></form>
						<form class="form-inline mt-2" action="<?= base_url('Product') ?>" method="post">
							<div class="input-group">
							  <input type="text" name="keyword" class="form-control" placeholder="Search Product" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Product'">
							  <span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="bi bi-search"></i></button>
							  </span>
							</div>
						</form>
				  </div>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header Area -->
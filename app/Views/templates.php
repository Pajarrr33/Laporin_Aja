
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS ============================================= -->
    <link rel="shortcut icon" href="/assets/img/logo_64x64.png" type="image/x-icon">
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
	<link rel="stylesheet" href="<?= base_url() ?>plugin/owlcarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>plugin/owlcarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
	<link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
	<script src="<?= base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <title>Laporin Aja - <?= $title ?></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>assets/img/logo_1.png" width="150px" height="30px"  alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto ">
                <a class="nav-link" href="#">Tentang Kami</a>
                <a class="nav-link" href="#">Fitur</a>
                <a class="nav-link" href="#">Hubungi Kami</a>
                <a class="nav-link" href="#">Buat Laporan</a>
                <a class="nav-link" href="#">Masuk</a>
            </div>
            </ul>
        </div>
    </nav>

    
    
    <?= $this->renderSection('content') ?>

	<footer class="py-0 pt-7 bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-6 col-lg-2 mb-3">
              <img src="<?= base_url() ?>assets/img/logo2-removebg-preview.png" alt="logo" width="150px" height="30px">
              <ul class="list-unstyled mb-md-4 mb-lg-0 mt-3">
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!">Tentang Kami</a></li>
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!">Affiliasi</a></li>
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!"></a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-3 mb-3">
              <h5 class="lh-lg fw-bold text-white footer_text">Pertanyaan &amp; bantuan</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!">Cara membuat laporan</a></li>
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!">Melihat Laporan</a></li>
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!">Cara Daftar Akun</a></li>
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!">Cara Login</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-3 mb-3">
              <h5 class="lh-lg fw-bold text-white footer_text">Customer Service</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!">Hubungi kami</a></li>
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!">Pusat bantuan</a></li>
                <li class="lh-lg"><a class="text-white text-decoration-none footer_text" href="#!"></a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-4 ms-auto">
              <h5 class="lh-lg fw-bold text-white footer_text">Berlangganan kabar terbaru</h5>
              <div class="row input-group-icon mb-5">
                <div class="col-12">
                  <input class="form-control input-box" type="email" placeholder="Enter Email" aria-label="email" />
                  <svg class="bi bi-arrow-right-short input-box-icon" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="#424242" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                  </svg>
                </div>
              </div>
              <p class="text-white">
                <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg><span class="text-white footer_text">+3930219390</span>
              </p>
              <p class="text-white">
                <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg><span class="text-white footer_text">something@gmail.com</span>
              </p>
            </div>
          </div>
          <div class="border-bottom border-3"></div>
          <div class="row flex-center my-3">
            <div class="col-md-6 order-1 order-md-0">
              <p class="my-2 text-white text-center text-md-start"> Copyright 2023 @
                <a class="text-white" href="https://themewagon.com/" target="_blank">Laporin aja</a>
              </p>
            </div>
            <div class="col-md-6">
              <div class="text-center text-md-end"><a href="#!"><span class="me-4 text-white bi bi-facebook"></span></a><a href="#!"> <span class="me-4 text-white bi bi-instagram"></span></a><a href="#!"> <span class="me-4 text-white bi bi-youtube"></span></a><a href="#!"> <span class="me-4 text-white bi bi-twitter"></span></a></div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </footer>
      <!-- <section> close ============================-->
      <!-- ============================================-->

	<script>
		$(document).ready(function() {
			var navbar = $(".navbar");
			var scroll_start = 0;
			var start_change = $(".container").offset().top;

			$(document).scroll(function() {
				scroll_start = $(this).scrollTop();
				if (scroll_start > start_change) {
					navbar.addClass('scrolled');
				} else {
					navbar.removeClass('scrolled');
				}
			});
		});
	</script>

    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.sticky.js"></script>
	<script src="<?= base_url() ?>assets/js/nouislider.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?= base_url() ?>assets/js/gmaps.min.js"></script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>
	<script src="vendors/@popperassets/js/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="<?= base_url() ?>assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</body>
</html>



	
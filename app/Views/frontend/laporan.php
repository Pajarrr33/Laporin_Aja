<?= $this->extend('templates') ?>
 
<?= $this->section('content') ?>
    <section class="background-section" style="background-image: url(assets/img/breadcrumb.jpg);">
		
	</section>

<div class="container">
    <h1 class="mt-5">Product Page</h1>
    <p class="lead">Ini adalah halaman Product Page</p>
			<nav aria-label="breadcrumb" class="my-custom-breadcrumb">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="/masyarakat/new"><b style="color: black;">Buat Laporan</b></a></li>
				  <li class="breadcrumb-item"><a href="/masyarakat/lihat"><b style="color: black;">Cek Laporan</b></a></li>
				</ol>
			</nav>			  
		</div>
</div>
  <?= $this->renderSection('content'); ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h4>Laporin Aja<span>!</span></h4>
              <p>
                weleh weleh <br>
                Indonesia<br><br>
                <strong>Phone:</strong> +62 11111111111<br>
                <strong>Email:</strong> lintangnata4@gmail.com<br>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved Lintang XII RPL
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Lintang Nataris</a>
      </div>
    </div>
  </footer><!-- End Footer -->
<?= $this->endSection() ?>
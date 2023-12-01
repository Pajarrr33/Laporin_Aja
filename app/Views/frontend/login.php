<?= $this->extend('templates') ?>
 
<?= $this->section('content') ?>
    <section class="background-section" style="background-image: url(assets/img/breadcrumb.jpg);">
		<div class="container">
			<nav aria-label="breadcrumb" class="my-custom-breadcrumb">
				<ol class="breadcrumb mt-lg-5 pt-lg-2">
				  <li class="breadcrumb-item"><a href="#"><b style="color: white;">Home</b></a></li>
				  <li class="breadcrumb-item"><a href="#"><b style="color: white;">Masuk</b></a></li>
				</ol>
			</nav>			  
		</div>
	</section>

    <!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>LOGIN</h3>
						<?= session()->getFlashdata('pesan'); ?>
						<form class="row login_form" action="/auth/valid_login" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username / Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<a href="/laporan"><button type="submit" value="submit" class="primary-btn">Log In</button></a>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
                <div class="col-lg-6">
					<div class="login_box_img" style="margin-left: -30px;">
						<img class="img-fluid" src="assets/img/cs.jpg" alt="">
						<div class="hover">
							<h4>Baru di website kami?</h4>
							<p>Buat akun terlebih dahulu untuk mengakses seluruh fitur yang ada</p>
							<a class="primary-btn" href="/register">register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?= $this->endSection() ?>
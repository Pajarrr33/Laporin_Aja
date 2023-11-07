<?= $this->extend('templates') ?>
 
<?= $this->section('content') ?>
    <section class="background-section" style="background-image: url(assets/img/breadcrumb.jpg);">
		<div class="container">
			<nav aria-label="breadcrumb" class="my-custom-breadcrumb">
				<ol class="breadcrumb mt-lg-5 pt-lg-2">
				  <li class="breadcrumb-item"><a href="#"><b style="color: white;">Home</b></a></li>
				  <li class="breadcrumb-item"><a href="#"><b style="color: white;">Register</b></a></li>
				</ol>
			</nav>			  
		</div>
	</section>

    <?php
    $session = session();
    $error = $session->getFlashdata('error');
    $password = $session->getFlashdata('password');
    ?>

    <!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
                <div class="col-lg-6">
					<div class="login_box_img" style="margin-right: -30px;">
						<img class="img-fluid" src="assets/img/Customer-Service-5.png" alt="">
						<div class="hover">
							<h4>Sudah pernah mengunjungi website kami sebelumnya?</h4>
							<p>Login untuk mengakses seluruh fitur yang kami miliki</p>
							<a class="primary-btn" href="">Login</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Register</h3>
                        <div>
                            <?php if ($password) { ?>
                                 <p style="color:red"><?php echo $password ?></p>
                            <?php } ?>
                        </div>
                        <div>
                            <?php if ($error) { ?>
                                <p style="color:red">Terjadi Kesalahan:
                                    <?php foreach ($error as $e) { ?>
                                        <br>
                                    <p style="color:red"><?php echo $e ?></p>
                                    <?php } ?>
                                </p>
                            <?php } ?>
                        </div>
						<form class="row login_form" action="auth/valid_register" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password2" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Register</button>
								<a href="">Sudah punya akun?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
<?= $this->endSection() ?>
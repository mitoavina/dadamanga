<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= base_url() ?>icon.ico" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link href="<?= base_url() ?>assets/css/global.css?v=1" rel="stylesheet">
	<!--===============================================================================================-->
	<link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 px-5 py-5">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url() ?>assets/img/png/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="<?= base_url('authentication') ?>">
					<span class="login100-form-title">
						Administrator Login
					</span>
					<?php if (isset($error)) {
					?>
						<p class="text-danger text-center mb-3"><?= $error ?></p>
					<?php } ?>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="login" placeholder="Login">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class=" brown-color login100-form-btn">
							Log in
						</button>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/js/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/js/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>
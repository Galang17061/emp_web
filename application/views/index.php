<!DOCTYPE html>
<html dir="ltr">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Favicon icon -->
		<link href="<?= base_url() ?>asset/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>asset/assets/images/favicon.png">
		<title>Login</title>
		<!-- Custom CSS -->
		<link href="<?= base_url(); ?>asset/dist/css/style.min.css" rel="stylesheet">
	</head>

	<body>
		<div class="main-wrapper">
			<div class="preloader">
				<div class="lds-ripple">
					<div class="lds-pos"></div>
					<div class="lds-pos"></div>
				</div>
			</div>
			<div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
				style="background:url(<?= base_url(); ?>asset/assets/images/big/auth-bg.jpg) no-repeat center center;">
				<div class="auth-box">
					<div id="loginform">
						<div class="logo">
							<span class="db"><img src="<?= base_url(); ?>asset/assets/images/logo-icon.png"
									alt="logo" /></span>
							<h5 class="font-medium m-b-20">Sign In to Admin</h5>
						</div>
						<!-- Form -->
						<div class="row">
							<div class="col-12">
								<form class="form-horizontal m-t-20" id="loginform"
									action="<?= base_url('login/login_proses') ?>">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i
													class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control form-control-lg is_required"
											placeholder="Email" aria-label="Email" name="email" id="email"
											aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon2"><i
													class="ti-pencil"></i></span>
										</div>
										<input type="password" class="form-control form-control-lg is_required"
											placeholder="Password" aria-label="Password" name="password" id="password"
											aria-describedby="basic-addon1">
									</div>
									<div class="form-group text-center">
										<div class="col-xs-12 p-b-20">
											<button type="button" id="loginButton" class="btn btn-block btn-lg btn-info"
												onclick="login.login(this)">Log In</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<script src="<?= base_url(); ?>asset/assets/libs/jquery/dist/jquery.min.js"></script>
		<script src="<?= base_url(); ?>asset/assets/libs/popper.js/dist/umd/popper.min.js"></script>
		<script src="<?= base_url(); ?>asset/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
		<script>
			$('[data-toggle="tooltip"]').tooltip();
			$(".preloader").fadeOut();
			$('#to-recover').on("click", function () {
				$("#loginform").slideUp();
				$("#recoverform").fadeIn();
			});

		</script>
		<script src="<?= base_url(); ?>asset/js/validation.js"></script>
		<script src="<?= base_url('asset/js/controllers/login.js'); ?>"></script>
        <script src="<?= base_url() ?>asset/js/toastr.min.js"></script>
		<!-- Set Global base_url -->
		<script>
			var base_url = '<?= base_url() ?>';

		</script>
	</body>

</html>

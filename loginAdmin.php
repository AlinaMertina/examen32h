<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="<?php echo base_url('assetsT1/images/icons/favicon.ico'); ?>"/>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/vendor/animate/animate.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/vendor/css-hamburgers/hamburgers.min.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/vendor/animsition/css/animsition.min.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/vendor/select2/select2.min.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/vendor/daterangepicker/daterangepicker.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/css/main.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsT1/css/style1.css'); ?>">

</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url('assets/images/bg-01.jpg'); ?>');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form"  action="<?php echo base_url('welcome/traitLoginAdmin/') ?>" method = "post">
					<span class="login100-form-title p-b-49">
						Connecter-vous
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Taper votre email" value="chalmanInssa1962002@gmail.com">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="mdp" placeholder="taper votre mot de passe" value="chalman">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                            
							<button class="login100-form-btn">
                                <input type="submit" value="Se connecter"/>
							</button>
						</div>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>
                    <?php  
                        if(isset($_GET['idError'])) { ?>
                           <p style="color: red"><?php echo $_GET['idError']; ?></p>
                    <?php } ?>
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetsT1/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetsT1/vendor/animsition/js/animsition.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetsT1/vendor/bootstrap/js/popper.js'); ?>"></script>
	<script src="<?php echo base_url('assetsT1/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetsT1/vendor/select2/select2.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetsT1/vendor/daterangepicker/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('assetsT1/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetsT1/vendor/countdowntime/countdowntime.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetsT1/js/main.js'); ?>"></script>

</body>
</html>
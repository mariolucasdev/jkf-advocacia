<!DOCTYPE html>
<html lang="en">
<head>
	<title>Avanti - Manage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url('assets/frontend/img/logotipos/logo.png')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>css/util.css">
	<link rel="stylesheet" href="<?=base_url('assets/backend/login/')?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 ">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-50">
						<img
							style="width: 200px"
							src="<?=base_url('assets/frontend/img/logotipos/')?>logo.png" alt="">
					</span>

					<div class="wrap-input100 validate-input m-t-30 m-b-35" data-validate = "Entre com um usuário">
						<input class="input100" placeholder="usuário" type="text" name="usuario" value="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Entre com umas senha">
						<input class="input100" placeholder="senha" type="password" name="senha" value="">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="background-color: #2980b9; box-shadow: none">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url('assets/backend/login/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/backend/login/')?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/backend/login/')?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url('assets/backend/login/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/backend/login/')?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/backend/login/')?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url('assets/backend/login/')?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/backend/login/')?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/backend/login/')?>js/main.js"></script>

</body>
</html>
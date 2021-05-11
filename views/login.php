<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
<style>
      body{
		    
            background-image: url(img/login.jpg);
            background-repeat: no-repeat;
            background-size: auto 760px;
            background-attachment:fixed;
			background-position: 50px 90px;
      }
    </style>

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
<header class="header-section">
    <div class="container">
      <div class="logo">
        <a href="./index.html">
          <img src="img/logo.png" alt="" />
        </a>
      </div>
      <div class="nav-menu">
        <nav class="mainmenu mobile-menu">
          <ul>
            <li class="active"><a href="./index.html">INICIO</a></li>
            <li><a href="#sistema">SISTEMA</a></li>
            <li>
              <a href="./speaker.html">Equipos</a>
              <ul class="dropdown">
                <li><a href="#">MSAM</a></li>
                <li><a href="#">Cobras</a></li>
                <li><a href="#">Eda</a></li>
              </ul>
            </li>
            <li><a href="./schedule.html">Fechas</a></li>
            <li><a href="./blog.html">Tipos de Equipos</a></li>
          </ul>
        </nav>
        <a href="?controller=home" class="primary-btn top-btn"><i class="fa fa-user-circle-o"></i> Volver</a>
      </div>
      <div id="mobile-menu-wrap"></div>
    </div>
  </header>

	<div class="limiter">
	
			
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
	  			
			

				<form  class="login100-form validate-form" action="?controller=login&method=login" method="post">
	  			
				
                <?php 

                    if (isset($error['errorMessage'])) {
                ?>
                    <div class="alert alert-danger  alert-dismissable alert-width"  role="alert">

                        <button class="close" data-dismiss="alert">&times;</button>

                         <p class="text-dark"><?php echo $error['errorMessage']?></p>
                    </div>
                <?php
                    }

                ?>

					<span class="login100-form-title p-b-49">
                        Sesión ETB
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Correo Electronico</span>
						<input class="input100" type="email" name="correoUsuario" placeholder="@etb.com.co">
						<span class="focus-input100" data-symbol="&#xf206;" value="<?php echo isset($error['correoUsuario']) ? $error['correoUsuario'] : '' ?>"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="contrasenaUsuario" placeholder="*****">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Olvidaste tu Contraseña?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Iniciar 
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<a href="?controller=home">
							Volver A Inicio?
						</a>
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

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>
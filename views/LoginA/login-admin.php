<!DOCTYPE html>
<html>
  <head>
    <title>Su Ordenador a la Medida</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->

    <link href="<?php echo URL_BASE;?>/public/css/style.css" rel="stylesheet" media="screen">

	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>/public/css/login.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>/public/css/estilo.css">

	
      </head>
  <body id="intro">
	  <!-- intro area -->	 
	  <div >
			<div class="intro-text">
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="brand topimg">
							<img class="logo" src="<?php echo URL_BASE;?>/public/img/Su Ordenador a la Medida.PNG">
								<div class="container top">
								    <div class="card card-container">
								    	
								        <button name="boton" ><img id="profile-img" class="profile-img-card" src="<?php echo URL_BASE;?>/public/img/admin.png"/></button>	            
								        <p id="profile-name" class="profile-name-card"></p>
								            <form action="<?php echo URL_BASE;?>/index.php/Index/index" class="form-signin">
								                <span id="reauth-email" class="reauth-email"></span>
								                <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
								                <input type="password" minlength="8" id="inputPassword" class="form-control" placeholder="Contreseña" required>
								                <div id="remember" class="checkbox">
								                    <label>
								                        <input type="checkbox" value="remember-me"> Recordarme
								                    </label>
								                </div>
								                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
								            </form><!-- /form -->
								            <a href="#" class="forgot-password">
								                ¿Olvidaste tu contraseña?
								            </a>
								        </div><!-- /card-container -->
								    </div><!-- /container -->
						</div>
					</div>
					</div>
				</div>
		 	</div>	
	 </div>
	  

	  
	  

	 
	 <!-- js -->
	 <script src="<?php echo URL_BASE;?>/public/js/modernizr.custom.js"></script>
	 <script src="<?php echo URL_BASE;?>/public/css/login.js"></script>
    <script src="<?php echo URL_BASE;?>/public/js/jquery.js"></script>
    <script src="<?php echo URL_BASE;?>/public/js/bootstrap.min.js"></script>
	<script src="<?php echo URL_BASE;?>/public/js/jquery.smooth-scroll.min.js"></script>
	<script src="<?php echo URL_BASE;?>/public/js/jquery.dlmenu.js"></script>
	<script src="<?php echo URL_BASE;?>/public/js/wow.min.js"></script>
	<script src="<?php echo URL_BASE;?>/public/js/custom.js"></script>
	<script src="<?php echo URL_BASE;?>/public/js/jqBootstrapValidation.js"></script>
  	</body>
</html>
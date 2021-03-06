<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale = 1, width=device-width" />

	<title>Se connecter</title>

	<link rel="shortcut icon" href="../View/images/logo.png">

	<link rel="stylesheet" href="../View/css/bootstrap.min.css">
	<link rel="stylesheet" href="../View/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../View/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../View/css/main.css">

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container2">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<a class="navbar-brand" href="http://handbase.ddns.net"><img src="../View/images/logo.png" alt="logo club" width = 5% height = 100% class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn2" href="http://handbase.ddns.net">Accueil</a></li>
					<li><a class="btn2" href="../View/contact.View.php">Nous contacter</a></li>
					<li class="active"><a class="btn2" href="signin.View.php">Se connecter</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="http://handbase.ddns.net">Accueil</a></li>
			<li class="active">Se connecter</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h2 class="page-title">Se connecter</h2>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Se connecter à votre compte</h3>
							<hr>


							 <!-- <form action="http://localhost:5555/Controler/signin.ctrl.php" method="post"> -->
							  <form action="http://handbase.ddns.net/projet/Controler/signin.ctrl.php" method="post">

								<div class="top-margin">
									<label>Nom d'utilisateur <span class="text-danger">*</span></label>
									<input type="text" name="login" class="form-control">
								</div>
								<div class="top-margin">
									<label>Mot de passe <span class="text-danger">*</span></label>
									<input type="password" name="password" class="form-control">
								</div>

								<hr>
								<?php
		 					if($this->errorLogin == true ) {

								?>

								<div class="password incorrect message">
								<font color="red">	<b> Mot de passe ou login incorrect, veuillez réessayer </b> </font>
								</div>
									<br>
								<?php } ?>
								<div class="row">
									<div class="col-lg-8">
										<b><a href="../View/forgot.View.php">Mot de passe oublié</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Connexion</button>
									</div>
								</div>

							</form>
						</div>
					</div>

				</div>

			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-3 widget">
						<h3 class="widget-title">Nous contacter</h3>
						<div class="widget-body">
							<p>0457659852<br>
								<a href="mailto:#">test@test.com</a><br>
								<br>
								Gymnase de L'Europe, Avenue Francois Mitterand, 01400 Châtillon-sur-Chalaronne
							</p>
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Nous suivre</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href="https://fr-fr.facebook.com/vaillantechatillonnaise/"><i class="fa fa-facebook fa-2"></i></a>
							</p>
						</div>
					</div>



				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="http://handbase.ddns.net/">Accueil</a> |
								<a href="contact.View.php">Nous contacter</a> |
								<b><a href="../Controler/signin.View.php">Se connecter</a></b>
							</p>
						</div>
					</div>



				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>






</body>
</html>

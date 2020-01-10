<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Accueil</title>

	<link rel="shortcut icon" href="../projet/View/images/logo.png">

	<link rel="stylesheet" href="../projet/View/css/bootstrap.min.css">
	<link rel="stylesheet" href="../projet/View/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../projet/View/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../projet/View/css/main.css">

</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container2">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.View.php"><img src="..projet/View/images/logo.png" alt="logo club" width = 5% height = 100% class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a class="btn2" href="#">Accueil</a></li>
					<li><a class="btn2" href="../projet/Controler/contact.ctrl.php">Nous contacter</a></li>
					<li><a class="btn2" href="../projet/Controler/signin.ctrl.php">Se connecter</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2>Qui sommes-nous ?</h2>
		<p>
			La Vaillante Chatillonnaise Handball est une association sportive située à Châtillon-sur-Chalaronne dans le département de l'Ain.<br>
			Nous sommes plus de 150 adhérentes et adhérents de tout âge rassemblés autour de la pratique du handball.<br>
		</p>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Questions fréquemment posées</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Où nous trouver ?</h3>
				<p>
					La pratique, entraînement et matchs à domicile, se déroule au gymnase de l'Europe à Châtillon-sur-Chalaronne, Avenue François Mitterand.
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Comment se fait l'inscription?</h3>
				<p>L'inscription ne se fait pas sur le site mais directement au club où il faut se présenter aux entraineurs aux horaires d'entraînement</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<h3>Niveau Requis ?</h3>
				<p>Le club porté par des bénevoles rassemblés autour de la passion du hand acceuille toutes les personnes ayant envie de jouer. <br>
					La variété des équipes et des niveaux permet à chacun de trouver sa place dans nos différentes équipes.</p>
			</div>
			<div class="col-sm-6">
				<h3>Pourquoi nous rejoindre ?</h3>
				<p>Car les valeurs d'équipe, d'entraide, de fair-play et de bonne humeur sont à la base de notre engagement associatif.
				</p>
			</div>

		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>Le meilleur conditionneur complet. Idéal pour les enfants, car il aide à développer les deux côtés du corps et du cerveau pour faciliter l'apprentissage. Si vous ne l'avez pas déjà fait, j'espère que vous commencerez à jouer, rejoignez notre association, participez et gagnez un tournoi, et venez nous rendre visite.</h4>
     		<p class="text-right"><a href="https://conseilsport.decathlon.fr/conseils/les-bienfaits-du-handball-tp_26843" class="btn btn-primary btn-large">En savoir plus -> </a></p>
  		</div>

</div>	<!-- /container -->

	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer">

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
								<b><a href="index.php">Accueil</a></b> |
								<a href="contact.View.php">Nous contacter</a> |
								<a href="../projet/signin.ctrl.php">Se connecter</a>
							</p>
						</div>
					</div>



				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>






</body>
</html>

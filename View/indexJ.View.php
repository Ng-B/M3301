<?php
session_start();
 if ( isset( $_SESSION['user_id'] ) ) {  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Accueil</title>

	<link rel="shortcut icon" href="../View/images/logo.png">

	<link rel="stylesheet" href="../View/css/bootstrap.min.css">
	<link rel="stylesheet" href="../View/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../View/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../View/css/main.css">

</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container2">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<a class="navbar-brand" href="indexJ.View.php"><img src="../View/images/logo.png" alt="logo club" width = 5% height = 100% class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a class="btn2" href="../Controler/indexJ.ctrl.php?login=<?php echo $this->current_user; ?>">Accueil</a></li>
					<li><a class="btn2" href="../Controler/matchsPasses.ctrl.php?login=<?php echo $this->current_user; ?>">Matchs passés</a></li>
					<li><a class="btn2" href="../Controler/matchsVenir.ctrl.php?login=<?php echo $this->current_user; ?>">Matchs à venir</a></li>
					<li><a class="btn2" href="../Controler/monCompteJ.ctrl.php?login=<?php echo $this->current_user; ?>">Mon compte</a></li>
					<li><a class="btn2" href="../Controler/signin.ctrl.php">Déconnexion</a></li>
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
			Vaillante Chatillonnaise Handball est une association sportive de Handball.<br>
			Située à Châtillon-sur-Chalaronne dans le département de l'Ain, elle est composée de différentes équipes triées selon l'âge.<br>
			Des compétitions et des entraînements ont lieu régulièrement.<br>
			Le club, composé de plus de 150 adhérents, ne cesse de croître.
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

		<h2 class="text-center top-space">Questions fréquements posées</h2>
		<br>session_unset();

// destroy the session
session_destroy();

		<div class="row">
			<div class="col-sm-6">
				<h3>La formation ?</h3>
				<p>Depuis de nombreuses années, le club du Vaillante Châtillonnaise Handball a toujours porté une grande attention à la formation qui est au coeur de la stratégie sportive du club.
					Nous considérons le handball non pas comme un sport mais un mode de vie. Avec un entrainnement intensive de 8h par semaine, l'association crée des experts.
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Comment se fait l'inscription ?</h3>
				<p>L'inscription ne se fait pas sur le site mais directemnt au club où il faut se présenter avec sa pièce d'identité, une fiche médicale des deux dernières années et les pièces d'identité des parents.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<h3>Doit-on ammener notre propre tenue ?</h3>
				<p>La tenue est offerte par le club. Le t-shirt est obligatoire et doit être porté à chaque entrainnement, par contre il est possible d'ammener votre propre short.
					Il n'y a aucun frais associé de votre part pour les tenues cependant déchirure, perte ou vol des tenues peut résulté des pénalités.
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Que faire en cas d'absence ?</h3>
				<p>En cas d'abscence, vous devez prévenir le club. Des abscences à répétition non justifiées seront sanctionnées.
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
								<b><a href="../View/indexJ.View.php">Accueil</a></b>
								<a href="../Controler/matchsPasses.ctrl.php?login=<?php echo $this->current_user ?>">Matchs passés</a> |
								<a href="../Controler/matchsVenir.ctrl.php?login=<?php echo $this->current_user ?>">Matchs à venir</a> |
								<a href="../Controler/monCompteJ.ctrl.php?login=<?php echo $this->current_user ?>">Mon compte</a> |
								<a href="../Controler/signin.ctrl.php">Déconnexion</a>
							</p>
						</div>
					</div>



				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>






</body>
</html>
<?php }else{     header("Location: http://handbase.ddns.net/projet/Controler/signin.ctrl.php"); } ?>

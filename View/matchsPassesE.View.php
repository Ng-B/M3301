<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<link rel="shortcut icon" href="../View/images/logo.png">

	<link rel="stylesheet" href="../View/css/bootstrap.min.css">
	<link rel="stylesheet" href="../View/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../View/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../View/css/main.css">

	<style media="screen">
	th {
	 text-align:center;
	 padding-bottom: 10px;
	}

	td {
	 text-align:center;
	 padding-bottom: 10px;
	}
  </style>

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container2" >
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<a class="navbar-brand" href="indexE.View.php"><img src="../View/images/logo.png" width = 5% height = 100% alt="" class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn2" href="indexE.View.php">Accueil</a></li>
					<li><a class="btn2" href="gestionJoueur.View.php">Gestion des joueurs</a></li>
					<li><a class="btn2" href="gestionEquipe.View.php">Gestion de l'équipe</a></li>
					<li class="active"><a class="btn2" href="matchsPassesE.View.php">Matchs passés</a></li>
					<li><a class="btn2" href="matchsVenirE.View.php">Matchs à venir</a></li>
					<li><a class="btn2" href="monCompte.View.php">Mon compte</a></li>
					<li><a class="btn2" href="index.View.php">Déconnexion</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="indexE.View.php">Accueil</a></li>
			<li class="active">Matchs passés</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h2 class="page-title">Matchs passés</h2>
				</header>
				<br>
				<table style="width:100%">
					<tr>
						<th>Match</th>
						<th>Date</th>
						<th>Heure</th>
						<th>Adresse</th>
						<th>Nom de l'arbitre</th>
						<th>Catégorie</th>
					</tr>
					<tr>
						<td>Grenoble - Echirolles</td>
						<td>14/07/2019</td>
						<td>15h15</td>
						<td>14 avenue Jean Paul</td>
						<td>Jean</td>
						<td>-18M</td>

					</tr>
					<tr>
						<td>Grenoble - Echirolles</td>
						<td>14/07/2019</td>
						<td>15h15</td>
						<td>14 avenue Jean Paul</td>
						<td>Jean</td>
						<td>-18M</td>
					</tr>
					<tr>
						<td>Grenoble - Echirolles</td>
						<td>14/07/2019</td>
						<td>15h15</td>
						<td>14 avenue Jean Paul</td>
						<td>Jean</td>
						<td>-18M</td>
					</tr>
					<tr>
						<td>Grenoble - Echirolles</td>
						<td>14/07/2019</td>
						<td>15h15</td>
						<td>14 avenue Jean Paul</td>
						<td>Jean</td>
						<td>-18M</td>
					</tr>
					<tr>
						<td>Grenoble - Echirolles</td>
						<td>14/07/2019</td>
						<td>15h15</td>
						<td>14 avenue Jean Paul</td>
						<td>Jean</td>
						<td>-18M</td>
					</tr>
			</table>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->

	<section class="container-full top-space">
		<div id="map"></div>
	</section>

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
								<a href="indexE.View.php">Accueil</a> |
								<a href="gestionJoueur.View.php">Gestion des joueurs</a> |
								<a href="gestionEquipe.View.php">Gestion de l'équipe</a> |
								<b><a href="matchsPassesE.View.php">Matchs passés</a></b> |
								<a href="matchsVenirE.View.php">Matchs à venir</a> |
								<a href="monCompteE.View.php">Mon compte</a> |
								<a href="index.View.php">Déconnexion</a>
							</p>
						</div>
					</div>



				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>






</body>
</html>

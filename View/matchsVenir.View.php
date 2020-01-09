<?php
session_start();
 if ( isset( $_SESSION['user_id'] ) ) {  ?>
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
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="indexJ.View.php"><img src="../View/images/logo.png" width = 5% height = 100% alt="" class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn2" href="../Controler/indexJ.ctrl.php?login=<?php echo $this->current_login; ?>">Accueil</a></li>
					<li><a class="btn2" href="../Controler/matchsPasses.ctrl.php?login=<?php echo $this->current_login; ?>">Matchs passés</a></li>
					<li class="active"><a class="btn2" href="../Controler/matchsVenir.ctrl.php?login=<?php echo $this->current_login; ?>">Matchs à venir</a></li>
					<li><a class="btn2" href="../Controler/monCompteJ.ctrl.php?login=<?php echo $this->current_login; ?>">Mon compte</a></li>
					<li><a class="btn2" href="../Controler/signin.ctrl.php">Déconnexion</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="indexJ.View.php">Accueil</a></li>
			<li class="active">Matchs à venir</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h2 class="page-title">Matchs à venir</h2>
				</header>
				<br>
				<?php if( isset($this->aucun_match_venir) ){
					print("<h3> Aucun match a venir trouve </h3>");
				}else{
					?>
				<table style="width:100%">
					<tr>
						<th>Match ID</th>
						<th>Date (aaaa-mm-jj)</th>
						<th> Heure </th>
						<th>Lieu</th>
						<th>ID arbitre</th>
						<th>Catégorie</th>
					</tr>
					<?php foreach ($this->les_matchs_venir as $match) { ?>
					<tr>
						<td><?=$match->getId() ?> </td>
						<td><?=$match->getDate() ?></td>
						<td><?=$match->getHeure() ?></td>
						<td><?=$match->getLieu() ?></td>
						<td><?=$match->getArbitre() ?></td>
						<td><?=$match->getCategorie() ?></td>

					</tr>
		<?php }
		echo "</table>";
			} ?>
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
								<a href="indexJ.View.php">Accueil</a> |
								<a href="matchsPasses.View.php">Matchs passés</a> |
								<b><a href="matchsVenir.View.php">Matchs à venir</a></b> |
							  <a href="monCompteJ.View.php">Mon compte</a> |
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
<?php }else{     header("Location: http://handbase.ddns.net/projet/Controler/signin.ctrl.php"); } ?>

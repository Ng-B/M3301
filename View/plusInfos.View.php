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
     text-align:left;
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
				<a class="navbar-brand" href="index.View.php"><img src="../View/images/logo.png" width = 5% height = 100% alt="" class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn2" href="indexP.View.php">Accueil</a></li>
					<li class="active"><a class="btn2" href="presidentAdherents.View.php">Gestion des adhérents</a></li>
          <li><a class="btn2" href="lesmatchs.View.php">Gestion des matchs</a></li>
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
			<li><a href="indexP.View.php">Accueil</a></li>
			<li><a href="presidentAdherents.View.php">Gestion des adhérents</a></li>
      <li class="active"> Plus d'informations</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h2 class="page-title">Plus d'informations</h2>
				</header>
				<br>
				<a href="modifier.View.php"><input type="submit" value="Modifier" id="valider"></a><br><br><br>
				<table style="width:100%">
			 <tr>
         <th>ID :</th>
         <td>1</td>
       </tr>
       <tr>
				 <th>Nom :</th>
         <td>LOCATELLI</td>
       </tr>
       <tr>
				 <th>Prénom :</th>
         <td>Antoine</td>
       </tr>
       <tr>
         <th>Date de naissance :</th>
         <td>01/01/2000</td>
       </tr>
       <tr>
         <th>Sexe : </th>
         <td>Homme</td>
       </tr>
       <tr>
				 <th>Numéro de téléphone :</th>
         <td>0651213520</td>
       </tr>
       <tr>
				 <th>Adresse mail :</th>
         <td>antoine.locatelli@iut2.univ-grenoble-alpes.fr</td>
       </tr>
       <tr>
				 <th>Numéro de licence :</th>
         <td>123456789</td>
       </tr>
       <tr>
         <th>Rôle :</th>
         <td>Joueur</td>
       </tr>
       <tr>
         <th>Bureau :</th>
         <td>NULL</td>
       </tr>
       <tr>
         <th>Numéro de téléphone portable père :</th>
         <td>NULL</td>
       </tr>
       <tr>
         <th>Numéro de téléphone fixe père :</th>
         <td>NULL</td>
       </tr>
       <tr>
         <th>Numéro de téléphone portable mère :</th>
         <td>NULL</td>
       </tr>
       <tr>
         <th>Numéro de téléphone fixe mère :</th>
         <td>NULL</td>
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
								<a href="indexP.View.php">Accueil</a> |
								<b><a href="presidentAdherents.View.php">Gestion des adhérents</a></b> |
                <a href="lesmatchs.View.php">Gestion des matchs</a> |
							  <a href="monCompte.View.php">Mon compte</a>
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

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

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container2" >
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="indexP.View.php"><img src="../View/images/logo.png" width = 5% height = 100% alt="" class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn2" href="indexP.View.php">Accueil</a></li>
					<li class="active"><a class="btn2" href="presidentAdherents.html">Gestion des adhérents</a></li>
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
			<li><a href="index.View.php">Accueil</a></li>
			<li><a href="presidentAdherents.View.php">Gestion des adhérents</a></li>
			<li class="active"> Ajouter un adhérent</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h2 class="page-title">Ajouter un adhérent</h2>
				</header>
				<br>
				<p>* champs obligatoires</p>
				<div class="formulaire">
					<form action="../Controler/confirmation.ctrl.php" method="post">
	         <fieldset>
	           <legend>Informations personnelles</legend>
	           <label for="firstname">Nom * : </label>
	           <input type="text" name="firstname" placeholder="DUPONT" required><br><br>
	           <label for="lastname">Prénom * :</label>
	           <input type="text" name="lastname" placeholder="Alain" required><br><br>
	           <label for="date">Date de naissance * :</label>
	           <input type="date" name="date" placeholder="jj/mm/aaaa" required><br><br>
	           <label for="gender">Sexe * :</label>
						<input type="radio" name="gender" value="male" checked>     Homme
	          <input type="radio" name="gender" value="female">     Femme<br><br>
	           <label for="phone">Numéro de téléphone * :</label>
	           <input type="text" name="phone" placeholder="0651236598" required><br><br>
	           <label for="mail">Adresse mail * :</label>
	           <input type="text" name="mail" placeholder="test@test.fr" required><br><br>
	           <label for="role">Rôle(s) :</label>
						<input type="checkbox" name="joueur" value="joueur" checked>     Joueur
	          <input type="checkbox" name="entraineur" value="entraineur">     Entraîneur (catégorie :
						<select name="categorie">
 						<option value="-9" selected>-9</option>
					  <option value="-11">-11</option>
						<option value="-13M">-13M</option>
						<option value="-13F">-13F</option>
						<option value="-15M">-15M</option>
						<option value="-15F">-15F</option>
					  <option value="-18M">-18M</option>
						<option value="-18F">-18F</option>
						<option value="SeniorM">-SéniorM</option>
						<option value="SeniorF">-SéniorF</option>
					  </select>)<br><br>
	          <label for="bureau">Bureau :</label>
						<select name="bureau" id="bureau">
 						<option value="president">Président</option>
					  <option value="secretaire">Secrétaire</option>
						<option value="aucun" selected>Aucun des deux</option>
					 </select>
	         </fieldset>
					 <br><br>
	         <fieldset>
	           <legend>Informations parents</legend>
	           <label for="phoneP">Numéro de téléphone portable père :</label>
	           <input type="text" name="phoneP" placeholder="0651236589"><br><br>
	           <label for="phonePF">Numéro de téléphone fixe père :</label>
	           <input type="text" name="phonePF" placeholder="0476589856"><br><br>
	           <label for="phoneM">Numéro de téléphone portable mère :</label>
	           <input type="text" name="phoneM" placeholder="0652365987"><br><br>
	           <label for="phoneMF">Numéro de téléphone fixe mère :</label>
	           <input type="text" name="phoneMF" placeholder="0456358975"><br><br>
	        </fieldset>
					<input type="submit" value="Valider" id="valider"></a>
	        </form><br>

				</div>

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

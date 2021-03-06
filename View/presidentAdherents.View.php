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
				<a class="navbar-brand" href="indexP.View.php"><img src="../View/images/logo.png" width = 5% height = 100% alt="" class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn2" href="../Controler/indexP.ctrl.php?login=<?php echo $this->current_login; ?>">Accueil</a></li>
					<li class="active"><a class="btn2" href="../Controler/presidentAdherents.ctrl.php?login=<?= $this->current_login?>">Gestion des adhérents</a></li>
					<li><a class="btn2" href="../Controler/lesmatchs.ctrl.php?login=<?= $this->current_login?>">Gestion des matchs</a></li>
					<li><a class="btn2" href="../Controler/monCompte.ctrl.php?login=<?= $this->current_login?>">Mon compte</a></li>
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
			<li><a href="http://handbase.ddns.net">Accueil</a></li>
			<li class="active"> Gestion des adhérents </li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h2 class="page-title">Gestion des adhérents</h2>
				</header>
				<br>
				<a href="../Controler/formulaire.ctrl.php?login=<?= $this->current_login?>"><input type="submit" value="Ajouter un adhérent" id="valider"></a><br><br><br>
				<?php if( isset($this->no_adherents)  ){
					print("<h3> Aucun adherent trouve </h3>");
				}else{
					?>
				<table style="width:100%">
			 <tr>
				 <th>Nom</th>
				 <th>Prénom</th>
				 <th>Age</th>
				 <th>Sexe</th>
				 <th>Rôle</th>
				 <th>Catégorie</th>
				 <th></th>
			 </tr>
			 <?php foreach ($this->adherents as $adherent) { ?>
			 <tr>
				 <td><?= $adherent->getNom() ?> </td>
				 <td><?= $adherent->getPrenom() ?></td>
				 <td><?= $adherent->getAge() ?></td>
				 <td><?php  if($adherent->getSexe()==0){ echo "Femme"; }else{ echo "Homme"; } ?></td>
				 <td>-------</td>
				 <td>-------</td>
         <td><a href="../Controler/plusInfos.ctrl.php?login=<?= $adherent->getLogin() ?>">Plus d'informations</a></td>
			 </tr>
 <?php }
 		echo  "</table>" ;
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
<?php }else{     header("Location: http://handbase.ddns.net/projet/Controler/signin.ctrl.php"); } ?>

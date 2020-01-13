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
					<li class="active"><a class="btn2" href="../Controler/presidentAdherents.ctrl.php?login=<?php echo $this->current_login; ?>">Gestion des adhérents</a></li>
					<li><a class="btn2" href="../Controler/lesmatchs.ctrl.php?login=<?=  $this->current_login?>">Gestion des matchs</a></li>
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
			<li><a href="indexP.View.php">Accueil</a></li>
			<li><a href="presidentAdherents.View.php">Gestion des adhérents</a></li>
			<li><a href="formulaire.View.php">Ajouter un adhérent</a></li>
      <li class="active">Récapitulatif</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h2 class="page-title">Récapitulatif</h2>
				</header>
				<br>
				<p>* champs obligatoires</p>
				<div class="formulaire">
					<form action="../Controler/inscription.php?login=<?= $this->current_login ?>" method="post">
	         <fieldset>
	           <legend>Informations personnelles</legend>
	           <label for="firstname">Nom * : </label>
	           <input type="text" name="firstname" value="<?=$this->lastname?>" readonly="readonly" required><br><br>
	           <label for="lastname">Prénom * :</label>
	           <input type="text" name="lastname" value="<?=$this->firstname?>" readonly="readonly" required><br><br>
	           <label for="date">Date de naissance * :</label>
	           <input type="date" name="date" value="<?=$this->date?>" readonly="readonly" required><br><br>
	           <label for="gender">Sexe * :</label>
						 <?php if($this->gender=="male"){ ?>
						<input type="radio" name="gender" value="male" disabled="disabled" checked>     Homme
	          <input type="radio" name="gender" value="female" disabled="disabled">     Femme<br><br>
					<?php }else{ ?>
						<input type="radio" name="gender" value="male" disabled="disabled" >     Homme
	          <input type="radio" name="gender" value="female" disabled="disabled" checked>     Femme<br><br>
					<?php } ?>
						 <label for="phone">Numéro de téléphone * :</label>
	           <input type="text" name="phone" value="<?=$this->phone?>" readonly="readonly" required><br><br>
	           <label for="mail">Adresse mail * :</label>
	           <input type="text" name="mail" value="<?=$this->mail?>" readonly="readonly" required><br><br>
	           <label for="role">Rôle(s) :</label>

						 <?php if($this->joueur){ ?>
						<input type="checkbox" name="joueur" value="joueur" disabled="disabled" checked>     Joueur
						<?php }else{ ?>
							<input type="checkbox" name="joueur" value="joueur" disabled="disabled" >     Joueur
							<?php } ?>

							<?php if($this->entraineur){ ?>
								<input type="checkbox" name="entraineur" value="entraineur" disabled="disabled" checked>     Entraîneur (catégorie :
								<input type="text" name="categorie" value="<?=$this->categorie?>" readonly="readonly" required>)<br><br>
							<?php }else{ ?>
								<input type="checkbox" name="entraineur" value="entraineur" disabled="disabled">     Entraîneur
								<?php } ?>


	          <label for="bureau">Rôle bureau :</label>
						<input type="text" name="bureau" value="<?=$this->bureau?>" readonly="readonly" required><br><br>
	         </fieldset>
					 <br><br>
	         <fieldset>
	           <legend>Informations parents</legend>
						 <?php if(isset($this->phoneP)){ ?>
	           <label for="phoneP">Numéro de téléphone portable père :</label>
	           <input type="text" name="phoneP" value="<?=$this->phoneP?>" readonly="readonly"><br><br>
					 <?php }
					 if(isset($phonePF)){ ?>
						 <label for="phonePF">Numéro de téléphone fixe père :</label>
	           <input type="text" name="phonePF" value="<?=$this->phonePF?>" readonly="readonly"><br><br>
					 <?php }
					 if(isset($this->phoneM)){ ?>
						 <label for="phoneM">Numéro de téléphone portable mère :</label>
	           <input type="text" name="phoneM" value="<?=$this->phoneM?>" readonly="readonly"><br><br>
					 <?php }
					 if(isset($this->phoneMF)){ ?>
						 <label for="phoneMF">Numéro de téléphone fixe mère :</label>
	           <input type="text" name="phoneMF" value="<?=$this->phoneMF?>" readonly="readonly"><br><br>
					 <?php } ?>
					</fieldset>
					<input type="submit" value="Valider" id="valider">
	        </form><br>
            <a href="presidentAdherents.View.php"><input type="submit" value="Annuler" id="valider"></a>
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
<?php }else{     header("Location: http://handbase.ddns.net/projet/Controler/signin.ctrl.php"); } ?>

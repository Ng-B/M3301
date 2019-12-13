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
				<a class="navbar-brand" href="index.html"><img src="../View/images/logo.png" width = 5% height = 100% alt="" class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn2" href="indexP.html">Accueil</a></li>
					<li><a class="btn2" href="presidentAdherents.html">Gestion des adhérents</a></li>
					<li class="active"><a class="btn2" href="lesmatchs.html">Gestion des matchs</a></li>
					<li><a class="btn2" href="monCompte.html">Mon compte</a></li>
					<li><a class="btn2" href="index.html">Déconnexion</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Accueil</a></li>
			<li class="active"> Gestion des matchs </li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h2 class="page-title">Gestion des matchs</h2>
				</header>
				<br>
				<a href="ajouterMatch.html"><input type="submit" value="Ajouter un match" id="valider"></a><br><br><br>
				<table style="width:100%">
			 <tr>
				 <th>Lieu</th>
				 <th>Date</th>
				 <th>ID Arbitre</th>
				 <th>Heure</th>
			 </tr>
			 <tr>
				 <td>14 avenue Jean Paul, Grenoble 38100</td>
				 <td>14/07/2019</td>
				 <td>18</td>
				 <td>15h15</td>
			 </tr>
			 <tr>
         <td>18 avenue Paulloir, Grenoble 38130</td>
         <td>11/07/2019</td>
         <td>14</td>
         <td>15h15</td>
			 </tr>
			 <tr>
         <td>18 avenue Helloir, Grenoble 38130</td>
         <td>11/07/2019</td>
         <td>14</td>
         <td>15h15</td>
			 </tr>
			 <tr>
         <td>18 rue Buger, Grenoble 38130</td>
         <td>11/07/2019</td>
         <td>14</td>
         <td>15h15</td>
			 </tr>
			 <tr>
         <td>88 longe Ereoir, Grenoble 38130</td>
         <td>11/07/2019</td>
         <td>14</td>
         <td>15h15</td>
			 </tr>
			 <tr>
         <td>18 avenue Paulloir, Grenoble 38130</td>
         <td>11/07/2019</td>
         <td>14</td>
         <td>15h15</td>
			 </tr>
			 <tr>
         <td>10 rue Mozzy, Grenoble 38130</td>
         <td>11/07/2019</td>
         <td>14</td>
         <td>15h15</td>
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
								<a href="indexP.html">Accueil</a> |
								<a href="presidentAdherents.html">Gestion des adhérents</a> |
								<b><a href="lesmatchs.html">Gestion des matchs</a></b> |
								<a href="monCompte.html">Mon compte</a> |
								<a href="index.html">Déconnexion</a>
							</p>
						</div>
					</div>



				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>






</body>
</html>

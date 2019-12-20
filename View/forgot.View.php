<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Mot de passe oublié</title>

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
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="../View/images/logo.png" alt="logo club" width = 5% height = 100% class="logo"><h1>Vaillante Chatillonnaise Handball</h1></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn2" href="index.View.php">Accueil</a></li>
					<li><a class="btn2" href="contact.View.php">Nous contacter</a></li>
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
			<li><a href="index.html">Accueil</a></li>
			<li><a href="signin.html">Se connecter</a></li>
			<li class="active">Mot de passe oublié</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h2 class="page-title">Mot de passe oublié</h2>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<hr>
              <h3 class="thin text-center">Entrer l'adresse mail associée à votre compte</h3>
							<form>
								<div class="top-margin">
									<label>Adresse mail <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Envoyer</button>
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
                <a href="index.View.php">Accueil</a> |
                <a href="contact.View.php">Nous contacter</a> |
                <b><a href="signin.View.php">Se connecter</a></b>
              </p>
            </div>
          </div>



        </div> <!-- /row of widgets -->
      </div>
    </div>
  </footer>




</body>
</html>

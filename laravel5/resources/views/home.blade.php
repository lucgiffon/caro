<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AnnaleSearch - le seul endroit pour toute vos annales</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
<div class="preloader">
	<img src="img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
		</div>
		<div class="col-md-6" id="searchBoxGoesHere">
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right main-nav">
				<li><a href="#search">Recherche</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Inscription</a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
<header id="search">
	<div class="container">
		<div class="table">
			<div class="header-text">
				<form action="" method="post">
				<div class="row">
					<div class="col-md-12 text-center" id="content">
						<h1 class="white typed">Le seul endroit pour toutes vos annales.</h1>
						<span class="typed-cursor">|</span>
						<div class="input-group stylish-input-group">
							<input id="searchBox" type="text" class="form-control" placeholder="Rechercher" name="q">
								<span class="input-group-addon">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</span>
						</div>
					</div>
				</div>
				<div class="row" id="searchCheckbox">
					{{--<div class="col-md-12">
						<span class="text-left">Rechercher par :</span>
					</div>--}}
					<div class="col-md-3">
						<div class="checkbox-holder text-left">
							<div class="checkbox">
								<input type="checkbox" value="None" name="check" id="cursus"/>
								<label for="cursus"><span>cursus</span></label>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox-holder text-left">
							<div class="checkbox">
								<input type="checkbox" value="None" name="check" id="niveau"/>
								<label for="niveau"><span>niveau</span></label>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox-holder text-left">
							<div class="checkbox">
								<input type="checkbox" value="None" name="check" id="faculte"/>
								<label for="faculte"><span>faculte</span></label>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox-holder text-left">
							<div class="checkbox">
								<input type="checkbox" value="None" name="check" id="matiere"/>
								<label for="matiere"><span>matiere</span></label>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</header>
<section id="services" class="section section-padded">
	<div class="container">
		<div class="row text-center title">
			<h2>A propos de AnnaleSearch.com</h2>
			<h4 class="light muted">Banque de données pour les Annales de faculté.</h4>
		</div>
		<div class="row services">
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="img/icons/heart-blue.png" alt="" class="icon">
					</div>
					<h4 class="heading">Trouvez toute les annales</h4>
					<p class="description">Par cursus, niveau d'enseignement, faculté, la recherche s'adapte à vos besoins.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="img/icons/guru-blue.png" alt="" class="icon">
					</div>
					<h4 class="heading">Soumettez vos annales</h4>
					<p class="description">AnnaleSearch.com est un site collaboratif, tout le monde peut l'enrichir.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="img/icons/weight-blue.png" alt="" class="icon">
					</div>
					<h4 class="heading">Participer en ligne</h4>
					<p class="description">Un système de commentaire enrichie vous permet de parler de chaque Annale.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="cut cut-bottom"></div>
</section>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-popup">
			<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
			<h3 class="white">Inscription</h3>
			<form action="" class="popup-form">
				<input type="text" class="form-control form-white" placeholder="Nom">
				<input type="text" class="form-control form-white" placeholder="Prénom">
				<input type="text" class="form-control form-white" placeholder="Mail">
				<div class="checkbox-holder text-left">
					<div class="checkbox">
						<input type="checkbox" value="None" id="squaredOne" name="check" />
						<label for="squaredOne"><span>J'accepte les <strong>conditions d'utilisation</strong></span></label>
					</div>
				</div>
				<button type="submit" class="btn btn-submit">Envoyer</button>
			</form>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="row bottom-footer text-center-mobile">
			<div class="col-sm-8">
				<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://laravel.com/">Laravel</a> designed and developed by <a href="#">Giffon Luc</a></p>
			</div>
			<div class="col-sm-4 text-right text-center-mobile">
				<ul class="social-footer">
					<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
					<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Holder for mobile navigation -->
<div class="mobile-nav">
	<ul>
	</ul>
	<a href="#" class="close-link"><i class="arrow_up"></i></a>
</div>
<!-- Scripts -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/typewriter.js"></script>
<script type="text/javascript" src="js/jquery.onepagenav.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/search.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>BDE.CESI</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('../css/background.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('../css/nav.css') }}"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	@yield('link')

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="backgroun">
		<header>
			<a href="/" class="logo"><img src="../Image/logo.png" width="62" height="60" class="d-inline-block align-top" alt=""></a>
			<div class="menu-toggle"></div>
			<nav class="smallScreen">
				<ul>
					@if(auth()->check())
					<ul class= "nav navbar-nav">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Évènements<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="évènements_futurs">Évènements futurs</a></li>
								<li><a href="évènements_passés">Évènements passés</a></li>
							</ul>
						</ul>
						<ul class= "nav navbar-nav">
							<li class="is-active"><a href="/boîte_à_idée">Boîte à idée</a></li>
						</ul>
						<ul class= "nav navbar-nav">
							<li class="active"><a href="/boutique">Boutique</a></li>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/compte"><span class="glyphicon glyphicon-user"></span> Mon compte</a></li></ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/deconnexion"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
						</ul>
						@else
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/inscription"><span class="glyphicon glyphicon-user"></span> Inscription</a></li></ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/connexion"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
							</ul>
							@endif
						</ul>
					</nav>
					<div class="clearfix"></div>
				</header>

				@include('flash::message')

				@yield('content')

				<footer class="container-fluid text-center">
					<p>Retrouvez l'actualité du BDE sur</p>
					<br>
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
					<i class="fa fa-snapchat-square" aria-hidden="true"></i>
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<br>
					<br>
					<a href="#">Politique de confidentialité</a>
					<a href="#">Mentions légales</a>
					<a href="#">Crédits</a>
					<a href="#"">© BDE 2018</a>
				</footer>
			</div>
			<script
			src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.menu-toggle').click(function(){
						$('.menu-toggle').toggleClass('active')
						$('nav').toggleClass('active')
					})
				})
			</script>
		</body>
		</html>
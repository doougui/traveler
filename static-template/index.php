<!DOCTYPE html>
<html lang="pt">
<head>
	<!-- Title &¨Meta --> 
	<meta charset="utf-8">
	<title>Traveler</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="A travel website.">
	<meta name="theme-color" content="#F8F9FA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Prelaod -->
	<link rel="preload" href="assets/js/jquery-3.3.1.min.js" as="script">
	<link rel="preload" href="assets/js/bootstrap.bundle.min.js" as="script">
	<link rel="preload" href="assets/css/bootstrap.min.css" as="style">
	<link rel="preload" href="assets/css/normalize.css" as="style">
	<link rel="preload" href="assets/css/style.css" as="style">
	<link rel="preload" href="assets/font/HankenGrotesk-Light.otf" as="font" crossorigin="anonymous">
	<link rel="preload" href="assets/font/Poppins-Regular.ttf" as="font" crossorigin="anonymous">
	<link rel="preload" href="assets/font/Oswald-Regular.ttf" as="font" crossorigin="anonymous">
	<!-- Favicon & CSS --> 
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm p-3 rounded fixed-top">
		<a href="?p=home" class="navbar-brand">TRAVELER</a>

		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapse collapse" id="navbar-menu">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="?p=home" class="nav-link <?php if (!isset($_GET['p']) || $_GET['p'] == 'home') { echo 'active'; } ?>">Ínicio</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle <?php if (isset($_GET['p']) && ($_GET['p'] == 'curacao' || $_GET['p'] == 'holanda' || $_GET['p'] == 'paris' || $_GET['p'] == 'panama')) { echo 'active'; } ?>" id="dropdown-menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Locais
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdown-menu">
						<a class="dropdown-item <?php if (isset($_GET['p']) && $_GET['p'] == 'curacao') { echo 'active'; } ?>" href="?p=curacao">Curaçao</a>
						<a class="dropdown-item <?php if (isset($_GET['p']) && $_GET['p'] == 'holanda') { echo 'active'; } ?>" href="?p=holanda">Holanda</a>
						<a class="dropdown-item <?php if (isset($_GET['p']) && $_GET['p'] == 'paris') { echo 'active'; } ?>" href="?p=paris">Paris</a>
						<a class="dropdown-item <?php if (isset($_GET['p']) && $_GET['p'] == 'panama') { echo 'active'; } ?>" href="?p=panama">Panamá</a>
					</div>
				</li>

				<li class="nav-item">
					<a href="?p=plans" class="nav-link <?php if (isset($_GET['p']) && $_GET['p'] == 'plans') { echo 'active'; } ?>">Planos</a>
				</li>

				<li class="nav-item">
					<a href="?p=contact" class="nav-link <?php if (isset($_GET['p']) && $_GET['p'] == 'contact') { echo 'active'; } ?>">Contato</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#" class="nav-link" data-toggle="modal" data-target="#login">Login</a>
				</li>

				<li class="nav-item">
					<button class="nav-item btn btn-outline-primary disabled" data-toggle="tooltip" title="Recurso em desenvolvimento">Inscrever-se</button>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Modal -->
	<div class="modal fade" id="login">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Entre na sua conta</h4>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						<div class="form-group">
							<label for="email-login">E-mail</label>
							<input type="email" name="email" class="form-control" id="email-login">
						</div>

						<div class="form-group">
							<label for="password">Senha</label>
							<input type="password" name="password" class="form-control" id="password">
						</div>

						<div class="form-group">
							<button type="button" class="btn btn-primary disabled" data-toggle="tooltip" title="Recurso em desenvolvimento">
								Entrar
							</button>
							<p><small>Esqueceu sua senha? <a href="#">Clique aqui.</a></small></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Content -->
	<?php 
		if (isset($_GET['p']) && $_GET['p'] == 'home') {
			include 'home.php';
		} else if (isset($_GET['p']) && $_GET['p'] == 'curacao') {
			include 'curacao.php';
		} else if (isset($_GET['p']) && $_GET['p'] == 'holanda') {
			include 'holanda.php';
		} else if (isset($_GET['p']) && $_GET['p'] == 'paris') {
			include 'paris.php';
		} else if (isset($_GET['p']) && $_GET['p'] == 'panama') {
			include 'panama.php';
		} else if (isset($_GET['p']) && $_GET['p'] == 'plans') {
			include 'plans.php';
		} else if (isset($_GET['p']) && $_GET['p'] == 'contact') {
			include 'contact.php';
		} else {
			include 'home.php';
		}
	?>

	<!-- Footer -->
	<footer class="bg-dark text-light"> 
		<div class="container py-4">
			<div class="row">
				<div class="col-md-6">
					<h4 class="h6">NOSSA HISTÓRIA</h4>
					<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum enim sequi ea nulla, obcaecati impedit, a laboriosam. Cumque, aspernatur tenetur eligendi recusandae? Veniam assumenda, ab dolores tempora porro saepe, labore ipsum doloremque, in adipisci suscipit!</p>
				</div>
				<div class="col-md-3">
					<h4 class="h6">CONTATO</h4>
					<ul class="list-unstyled text-secondary">
						<li>contato@traveler.com</li>
						<li>+55 48 99975-1669</li>
						<li>De Segunda à Sexta</li>
						<li>Das 8:00h às 18:00h</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4 class="h6">REDES SOCIAIS</h4>
					<ul class="list-unstyled">
						<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2 social-media-footer" href="https://www.facebook.com/" target="_blank">Facebook</a></li>
						<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2 social-media-footer" href="https://twitter.com/" target="_blank">Twitter</a></li>
						<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2 social-media-footer" href="https://www.youtube.com/" target="_blank">Youtube</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bg-primary text-center py-3">
			<p class="mb-0">Douglas Pinheiro Goulart - Traveler © 2019. Alguns direitos reservados.</p>
		</div>
	</footer>	

	<!-- JS -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Tooltip -->
	<script>
		$(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>
</html>
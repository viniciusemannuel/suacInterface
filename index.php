<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Tela de login</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

	</head>

	<body>

		<div class="navbar navbar-fixed-top">

			<div class="navbar-inner">

				<div class="container">

					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

					<a class="brand"> Sistema Único de Assistência ao CRAS - SUAC </a>

				</div>
				<!-- /container -->

			</div>
			<!-- /navbar-inner -->

		</div>
		<!-- /navbar -->

		<div class="account-container">

			<div class="content clearfix">

				<form action="home.php" method="post">

					<div class="alert">
						<button type="button" class="close" data-dismiss="alert">
							×
						</button>
						<strong>Aviso!</strong> Efetue login para acessar todas as funcionalidades do sistema.
					</div>

					<h1>Login</h1>

					<div class="login-fields">

						<div class="field">
							<label for="username">Username</label>
							<input type="text" id="username" name="username" value="" placeholder="Usuário" class="login username-field" />
						</div>
						<!-- /field -->

						<div class="field">
							<label for="password">Password:</label>
							<input type="password" id="password" name="password" value="" placeholder="Senha" class="login password-field"/>
						</div>
						<!-- /password -->

					</div>
					<!-- /login-fields -->

					<div class="login-actions">

						<span class="login-checkbox">
							<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
							<label class="choice" for="Field">Mantenha-me conectado</label> </span>
						<a href="home.php">
						<button class="button btn btn-success btn-large" type="submit">
							Logar
						</button> </a>
					</div>
					<!-- .actions -->

				</form>

			</div>
			<!-- /content -->

		</div>
		<!-- /account-container -->

		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/bootstrap.js"></script>

		<script src="js/signin.js"></script>

	</body>

</html>

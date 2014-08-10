<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Dashboard - SUAC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
		rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/pages/dashboard.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>

		<?php /* Menu principal */

	include_once ('top.php');
		?>

		<?php

		/* Menu principal */

		include_once ('navbar.php');
		?>

		<!-- /subnavbar -->
		<div class="main">

			<div class="main-inner">
				<!-- /container -->

				<div class="container">

					<div class="row">
						<div class="span12">

							<ol class="breadcrumb">
								<li>
									<a href="/suac/home.php"><i class="icon-dashboard"></i> Home</a>
								</li>
								<li>
									/ <i class="icon-user"></i> Perfil
								</li>
							</ol>

						</div>
					</div>

					<br>

					<div class="row">

						<div class="span12">

							<div class="widget">

								<div class="widget-header">
									<i class="icon-user"></i>
									<h3>Perfil</h3>
								</div>
								<!-- /widget-header -->

								<div class="widget-content">

									<br>

									<div class="tab-pane active" id="formcontrols">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label">Nome:</label>
													<div class="controls">

														Jurema Macaxeira Marciel

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">Apelido:</label>
													<div class="controls">

														Macaxeira

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">Registro de identidade:</label>
													<div class="controls">

														654376789-435

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">CPF:</label>
													<div class="controls">

														654.376.789-435

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">Cidade:</label>
													<div class="controls">

														Icó

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">Rua:</label>
													<div class="controls">

														Quintino Bocaiuva

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">Bairro:</label>
													<div class="controls">

														Centro

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">Número:</label>
													<div class="controls">

														1222

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">Complemento:</label>
													<div class="controls">

														Sobrado azul

													</div>
													<!-- /controls -->
												</div>

												<div class="control-group">
													<label class="control-label">Cep:</label>
													<div class="controls">

														63430-000

													</div>
													<!-- /controls -->
												</div>

												<div class="widget widget-nopad">
													<div class="widget-header">
														<i class="icon-list-alt"></i>
														<h3> Informações do sistema</h3>
													</div>
													<!-- /widget-header -->
													<div class="widget-content">
														
														<br>

														<div class="control-group">
															<label class="control-label">Login:</label>
															<div class="controls">

																63430-000

															</div>
															<!-- /controls -->
														</div>

														<div class="control-group">
															<label class="control-label">Senha:</label>
															<div class="controls">

																***********

															</div>
															<!-- /controls -->
														</div>
														
														<div class="control-group">
															<label class="control-label">Email:</label>
															<div class="controls">

																marcos.ellys@gmail.com

															</div>
															<!-- /controls -->
														</div>

													</div>
												</div>

											</fieldset>
										</form>
									</div>

								</div>

							</div>
							<!-- /widget-content -->

						</div>
						<!-- /widget -->

					</div>
					<!-- /spa12 -->

				</div>

			</div>
		</div>

		</div>

		</div>

		</div>
		<!-- /main-inner -->
		</div>
		<!-- /main -->
		<!-- /extra -->
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/excanvas.min.js"></script>
		<script src="js/chart.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.js"></script>
		<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

	</body>

	<?php

	/* Rodapé do site */

	include_once ('footer.php');
?>
</html>

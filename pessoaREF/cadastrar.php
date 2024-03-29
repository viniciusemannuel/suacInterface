<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Dashboard - SUAC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
		rel="stylesheet">
		<link href="../css/font-awesome.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/pages/dashboard.css" rel="stylesheet">

		<script src="../js/jquery-1.7.2.min.js"></script>
		<script src="../js/excanvas.min.js"></script>
		<script src="../js/chart.min.js" type="text/javascript"></script>
		<script src="../js/bootstrap.js"></script>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>

		<?php /* Menu principal */

	include_once ('../top.php');
		?>

		<?php

		/* Menu principal */

		include_once ('../navbar.php');
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
									/ <a href="/suac/pessoaREF/"> <i class="icon-group"></i> Pessoas referênciadas</a>
								</li>
								<li>
									/ <i class="icon-user"></i> Cadastrar pessoa referênciada
								</li>
							</ol>

						</div>
					</div>
					
					<br>

					<div class="row">

						<div class="span12">

							<div class="widget ">

								<div class="widget-header">
									<i class="icon-user"></i>
									<h3>Cadastrar pessoa referênciada</h3>
								</div>
								<!-- /widget-header -->

								<div class="widget-content">

									<div class="tabbable">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#formcontrols" data-toggle="tab">Dados Pessoais</a>
											</li>
											<li class="">
												<a href="#jscontrols" data-toggle="tab">Dados sobre endereço</a>
											</li>
										</ul>

										<br>

										<div class="tab-content">
											<div class="tab-pane active" id="formcontrols">
												<form id="edit-profile" class="form-horizontal">
													<fieldset>

														<div class="control-group">
															<label class="control-label" for="email">Pessoa referenciada:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Nome completo aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Apelido:</label>
															<div class="controls">
																<input type="text" class="span4" id="email" placeholder="Apelido aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Nome da mãe:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Nome da mãe aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Nome do pai:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Nome do pai aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">NIS da pessoa de referência:</label>
															<div class="controls">
																<input type="text" class="span3" id="email" placeholder="NIS da pessoa de referência aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">CPF:</label>
															<div class="controls">
																<input type="text" class="span4" id="email" placeholder="CPF aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">RG:</label>
															<div class="controls">
																<input type="text" class="span4" id="email" placeholder="RG aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Orgão:</label>
															<div class="controls">
																<input type="text" class="span4" id="email" placeholder="Número do prontuário">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">UF:</label>
															<div class="controls">
																<input type="text" class="span4" id="email" placeholder="Número do prontuário">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Data de emissão:</label>
															<div class="controls">
																<input type="date" class="span4" id="email" placeholder="Número do prontuário">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Número do prontuário:</label>
															<div class="controls">
																<input type="text" class="span4" id="email" placeholder="Número do prontuário">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label">Tipo de unidade</label>

															<div class="controls">
																<label class="radio inline">
																	<input type="radio" name="radiobtns">
																	CRAS </label>

																<label class="radio inline">
																	<input type="radio" name="radiobtns">
																	CREAS </label>
															</div>
															<!-- /controls -->
														</div>

														<div class="control-group">
															<label class="control-label" for="email">Nome da Unidade:</label>
															<div class="controls">

																<SELECT>
																	<OPTION>Centro</OPTION>
																	<OPTION>Alto Manoel Marioano</OPTION>
																	<OPTION>BNH</OPTION>
																</SELECT>
															</div>
															<!-- /controls -->
														</div>
														<!-- /Até aqui -->

													</fieldset>
												</form>
											</div>

											<div class="tab-pane" id="jscontrols">
												<form id="edit-profile" class="form-horizontal">
													<fieldset>

														<div class="control-group">
															<label class="control-label" for="email">Rua:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Rua ou Avenida">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Bairro:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Nome completo aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">UF:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Nome completo aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">CEP:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Nome completo aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Municipio:</label>
															<div class="controls">

																<SELECT>
																	<OPTION>Icó</OPTION>
																	<OPTION>Russas</OPTION>
																	<OPTION>Jaguaribe</OPTION>
																</SELECT>
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Complemento:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Nome completo aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Ponto de referência:</label>
															<div class="controls">
																<input type="text" class="span6" id="email" placeholder="Nome completo aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Telefone para contato 1:</label>
															<div class="controls">
																<input type="text" class="span5" id="email" placeholder="Nome completo aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="email">Telefone para contato 2:</label>
															<div class="controls">
																<input type="text" class="span5" id="email" placeholder="Nome completo aqui">
															</div>
															<!-- /controls -->
														</div>
														<!-- /control-group -->

														<div class="control-group">
															<label class="control-label">Localização do domicilio</label>

															<div class="controls">
																<label class="radio inline">
																	<input type="radio" name="radiobtns">
																	Urbano </label>

																<label class="radio inline">
																	<input type="radio" name="radiobtns">
																	Rural </label>
															</div>
															<!-- /controls -->
														</div>

														<!-- /Até aqui -->

													</fieldset>
												</form>
											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="form-actions">
						<button type="submit" class="btn btn-primary">
							Salvar
						</button>
						<button class="btn">
							Cancelar
						</button>
					</div>

				</div>

			</div>

		</div>

		<!-- /extra -->
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

		<?php

		/*
		 *
		 * Rodapé do site
		 * Insiro ele atráves de um include
		 *
		 *  */

		include_once ('../footer.php');
		?>

	</body>
</html>

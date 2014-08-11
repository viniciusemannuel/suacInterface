<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>FAQ - Bootstrap Admin Template</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		<link href="../css/font-awesome.css" rel="stylesheet">

		<link href="../css/style.css" rel="stylesheet">

		<link href="../js/guidely/guidely.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>

		<?php
		require_once '../top.php';
		?>

		<?php
		require_once '../navbar.php';
		?>

		<div class="main">

			<div class="main-inner">

				<div class="container">

					<div class="row">

						<div class="span12">

							<div id="target-1" class="widget">

								<div class="widget-header">
									<i class="icon-tasks"></i>
									<h3>Agendar atendimento</h3>
								</div>
								<!-- /widget-header -->

								<div class="widget-content">

									<br>

									<div class="tab-pane active" id="formcontrols">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label">Pessoa referênciada:</label>
													<div class="controls">

														<select class="span7">
															<option>Raimundo Ananias</option>
															<option>Francisca Maria Gomes</option>
															<option>José Silva Marciel</option>
															<option>Francisca Gonçalves</option>
														</select>
													</div>
													<!-- /controls -->
												</div>

											</fieldset>
										</form>
									</div>

								</div>

							</div>

							<div id="target-2" class="widget">

								<div class="widget-header">
									<i class="icon-tasks"></i>
									<h3>Agendar atendimento</h3>
								</div>
								<!-- /widget-header -->

								<div class="widget-content">

									<br>

									<div class="tab-pane active" id="formcontrols">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label" for="date">Data do atendimento:</label>
													<div class="controls">
														<input type="date">
													</div>
													<!-- /controls -->
												</div>

											</fieldset>
										</form>
									</div>

								</div>

							</div>

							<div id="target-3" class="widget">

								<div class="widget-header">
									<i class="icon-tasks"></i>
									<h3>Agendar atendimento</h3>
								</div>
								<!-- /widget-header -->

								<div class="widget-content">

									<br>

									<div class="tab-pane active" id="formcontrols">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label">Tipo</label>

													<div class="controls">
														<label class="radio inline">
															<input name="radiobtns" type="radio">
															Atualização de cadastro </label>

														<label class="radio inline">
															<input name="radiobtns" type="radio">
															Adesão a beneficio </label>
													</div>
													<!-- /controls -->
												</div>

											</fieldset>
										</form>
									</div>

								</div>

							</div>

							<div id="target-4" class="widget">

								<div class="widget-header">
									<i class="icon-tasks"></i>
									<h3>Agendar atendimento</h3>
								</div>
								<!-- /widget-header -->

								<div class="widget-content">

									<br>

									<div class="tab-pane active" id="formcontrols">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="form-actions">
													<button type="submit" class="btn btn-primary">
														Agendar
													</button>
													<button class="btn">
														Cancelar
													</button>
												</div>

											</fieldset>
										</form>
									</div>

								</div>

							</div>

						</div>
						<!-- /span12 -->

					
					

					</div>
					<!-- /row -->

				</div>
				<!-- /container -->

			</div>
			<!-- /main-inner -->

		</div>
		<!-- /main -->


		<?php
			require_once'../footer.php';
		?>
		
		
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../js/jquery-1.7.2.min.js"></script>

		<script src="../js/bootstrap.js"></script>
		<script src="../js/base.js"></script>

		<script src="../js/guidely/guidely.min.js"></script>

		<script>
			$(function() {

				guidely.add({
					attachTo : '#target-1',
					anchor : 'top-right',
					title : 'Selecione uma pessoa referenciada',
					text : 'Você terá uma lista contendo o nome de todas as pessoas referenciadas, selecione a pessoa que está agendando o atendimento.'
				});

				guidely.add({
					attachTo : '#target-2',
					anchor : 'top-right',
					title : 'Informe a data do atendimento',
					text : 'Informe a data em que o atendimento irá ser realizado.'
				});

				guidely.add({
					attachTo : '#target-3',
					anchor : 'middle-middle',
					title : 'Selecione o tipo de atendimento',
					text : 'Selecione o assunto sobre o atendimento.'
				});

				guidely.add({
					attachTo : '#target-4',
					anchor : 'middle-middle',
					title : 'Clique em agendar',
					text : 'Por último clique em "Agendar" para confirmar.'
				});

				guidely.init({
					welcome : true,
					startTrigger : false
				});

			});

		</script>
	</body>

</html>

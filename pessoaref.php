<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>FAQ - Bootstrap Admin Template</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">

		<link href="css/style.css" rel="stylesheet">

		<link href="css/pages/faq.css" rel="stylesheet">

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

							<div class="widget widget-plain">

								<div class="widget-content">

									<a href="cadpessoaref.php" class="btn btn-large btn-success btn-support-ask">Adicionar Pessoa referênciada</a>

								</div>
								<!-- /widget-content -->

							</div>

						</div><!-- /span12 -->
					</div>

					<div class="row">

						<div class="span12">

							<div class="widget widget-table action-table">
								<div class="widget-header">
									<i class="icon-group"></i>
									<h3>Pessoas referenciadas cadastradas</h3>
								</div>
								<!-- /widget-header -->
								<div class="widget-content">
									<table class="table table-striped table-bordered">
										<thead>
											<tr>
												<th> Nome </th>
												<th> Apelido</th>
												<th class="td-actions">Ações</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td> Raimundo Ananias </td>
												<td> Ananias </td>
												<td class="td-actions">
												<button class="btn btn-info">
													Ver
												</button>
												<button class="btn btn-warning">
													Editar
												</button>
												<button class="btn btn-danger">
													Excluir
												</button></td>
											</tr>
											<tr>
												<td> Francisca Maria Gomes </td>
												<td> Mariazinha </td>
												<td class="td-actions">
												<button class="btn btn-info">
													Ver
												</button>
												<button class="btn btn-warning">
													Editar
												</button>
												<button class="btn btn-danger">
													Excluir
												</button></td>
											</tr>
											<tr>
												<td> José Silva Marciel </td>
												<td> Zé Silva </td>
												<td class="td-actions">
												<button class="btn btn-info">
													Ver
												</button>
												<button class="btn btn-warning">
													Editar
												</button>
												<button class="btn btn-danger">
													Excluir
												</button></td>
											</tr>
											<tr>
												<td> Francisca Gonçalves </td>
												<td> Chiquinho das tapiocas </td>
												<td class="td-actions">
												<button class="btn btn-info">
													Ver
												</button>
												<button class="btn btn-warning">
													Editar
												</button>
												<button class="btn btn-danger">
													Excluir
												</button></td>
											</tr>
											<tr>
												<td> Joana Silvestre Campestre </td>
												<td> Peste </td>
												<td class="td-actions">
												<button class="btn btn-info">
													Ver
												</button>
												<button class="btn btn-warning">
													Editar
												</button>
												<button class="btn btn-danger">
													Excluir
												</button></td>
											</tr>
											<tr>
												<td> Fatima Sousa Mendes </td>
												<td> Fátima das costuras </td>
												<td class="td-actions">
												<button class="btn btn-info">
													Ver
												</button>
												<button class="btn btn-warning">
													Editar
												</button>
												<button class="btn btn-danger">
													Excluir
												</button></td>
											</tr>
											<tr>
												<td> Rita Messejana Cadilac </td>
												<td> Da vida </td>
												<td class="td-actions">
												<button class="btn btn-info">
													Ver
												</button>
												<button class="btn btn-warning">
													Editar
												</button>
												<button class="btn btn-danger">
													Excluir
												</button></td>
											</tr>

										</tbody>
									</table>
								</div>
								<!-- /widget-content -->
							</div>

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

		<script src="js/bootstrap.js"></script>
		<script src="js/base.js"></script>
		<script src="js/faq.js"></script>


		
		 <?php

  /* Menu principal */

  include_once('footer.php');

  ?>

	</body>
</html>

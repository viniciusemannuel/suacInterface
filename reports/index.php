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
		<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

		<script src="../js/base.js"></script>
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>

		<?php /* Menu principal */

	include_once ('../top.php');
		?>

		<?php /* Menu principal */

	include_once ('../navbar.php');
		?>

		<!-- /subnavbar -->
		<div class="main">
			<div class="main-inner">
				<div class="container">

					<div class="row">
						<div class="span12">

							<ol class="breadcrumb">
								<li>
									<a href="/suac/home.php"><i class="icon-dashboard"></i> Home</a>
								</li>
								<li class="active">
									/ <i class="icon-list-alt"></i> Relatórios
								</li>
							</ol>

						</div>
					</div>

					<br>

					<div class="row">

						<div class="span12">

							<div class="widget">
								<div class="widget-header">
									<i class="icon-list-alt"></i>
									<h3>Tipos de relatórios</h3>
								</div>
								<!-- /widget-header -->
								<div class="widget-content">
									<div class="shortcuts">
										<a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-group"></i> <span class="shortcut-label"> Famílias cadastradas </span> </a>
										<a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-ok"></i> <span class="shortcut-label"> Atendimentos realizados </span> </a>
									</div>
									<!-- /shortcuts -->
								</div>
								<!-- /widget-content -->
							</div>

						</div>

					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /main-inner -->
		</div>
		<!-- /main -->

		<!-- footer -->

		<?php

		/* Menu principal */

		include_once ('../footer.php');
		?>
	</body>
</html>

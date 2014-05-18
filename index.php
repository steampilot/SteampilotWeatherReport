<?php
//Generate the data
//require_once 'ch/steampilot/spwr/data.php';
// Builds the forecast
//require_once 'ch/steampilot/spwr/report.ph';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Generates and displays a weather report for Switzerland">
	<meta name="author" content="jerome.roethlisberger">
	<link rel="shortcut icon" href="./ico/spwr.ico">

	<title>Steampilot Weather Report</title>

	<!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/steampilot.css" rel="stylesheet" >

</head>

<body>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">SPWR</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Today</a></li>
				<li><a href="#about">Tomorow</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Weekly Forecast <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">TU-2014-05-26</a></li>
						<li><a href="#">FR-2014-05-27</a></li>
						<li><a href="#">SA-2014-05-27</a></li>
						<li><a href="#">SU-2014-05-27</a></li>
						<li><a href="#">MO-2014-05-27</a></li>
					</ul>
				</li>
				<li><a class="btn btn-success" id="reload-btn" href="#">Reload Data</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<h1 id="title">Steampilot Weather Report</h1>
	<p>Get updated Swiss weather information on the fly.</p>
</div>
<div class="row">
	<div class="col-lg-2">
		<div class="panel panel-primary panel-green">
			<div class="panel-heading">
				<h3 class="panel-title">Data Layer</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li>
						Weather
					</li>
					<li>
						Temperature
					</li>
					<li>
						Wind
					</li>
					<li>
						Pollen Exposure
					</li>
				</ul>
			</div>
		</div>
	</div><!-- /.col-sm-4 -->
	<div class="col-lg-10">
		<img src="img/ch_map_extra_big.png" class="img-responsive" />

	</div><!-- /.col-sm-4 -->
	<div class="row">
		<div id="footer">
			<div class="container">
				<p class="text-muted">SPWR createy by Jerome Roethlisberger on demand of GIBM at 2014-05-01.</p>
			</div>
		</div>
	</div>
</div>

</body>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>

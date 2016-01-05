<?php

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
	<!-- CSS -->
	<?php
	Assets::css(array(
		Url::templatePath().'assets/bootstrap/css/bootstrap.min.css',
		Url::templatePath().'assets/bootstrap/css/bootstrap-theme.min.css'
	));

	$hooks->run('css');
	?>

	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">
						CodeUp
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						
					</ul>
				</div>
			</div>
		</nav>

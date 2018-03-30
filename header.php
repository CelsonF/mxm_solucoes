<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?> Site MXM </title>
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
		$scope.showMe = false;
		$scope.myFunc = function() {
				$scope.showMe = !$scope.showMe;
		}
});
</script>
	</head>
	<body>


		<div class="jumbotron">
	 		<div class="container">


	 <nav class="navbar navbar-default">

	  <div class="container-fluid">
	 	<div class="navbar-header">
	 		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	 			<span class="icon-bar"></span>
	 			<span class="icon-bar"></span>
	 			<span class="icon-bar"></span>
	 		</button>
	 		<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/mxm.png" alt="mxm_logo"></a>
	 	</div>

  <?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>

		<?php
	             wp_nav_menu( array(
	                 'menu'              => 'Menu',
	                 'theme_location'    => 'menu-header',
	                 'depth'             => 2,
	                 'container'         => 'div',
	                 'container_class'   => 'collapse navbar-collapse',
	                 'container_id'      => 'myNavbar',
	                 'menu_class'        => 'nav navbar-nav navbar-right',
	                 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	                 'walker'            => new WP_Bootstrap_Navwalker())
	             );
	         ?>


		<!--<div class="collapse navbar-collapse" id="myNavbar">
	 		<ul class="nav navbar-nav navbar-right">
	 			<li class="active"><a href="#">Home</a></li>
	 			<li><a href="empresa.html">Empresa</a></li>
	 			<li><a href="produtos.html">Produtos</a></li>
	 			<li><a href="servicos.html">Serviços</a></li>
	 			<li><a href="legislacao.html">Legislação</a></li>
	 			<li><a href="#empresa.html">Blog</a></li>
	 			<li><a href="contato.html">Contato</a></li>
	 		</ul>
	 	</div>-->

	 </div>

	 </nav>




	 		</div><!-- fim container -->
	  </div><!-- fim hero-unit -->

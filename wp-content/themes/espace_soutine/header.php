<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<link type="image/jpg" href="./img/EspaceSoutineFavicon.png" rel="shortcut icon"></link>
		<?php wp_head(); ?>
	</head>
	<body>
<!--nav & header-->
		<div id="accueil" class="col-xs-12 header">
			<div class="black-filter">
			</div>
			<div class="row">
				<div class="navbar">
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container">
			        		<div class="navbar-header">
			        			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			        				<span class="sr-only">Toggle navigation</span>
			        				<span class="icon-bar"></span>
			        				<span class="icon-bar"></span>
			        				<span class="icon-bar"></span>
			        			</button>
			          			<a class="navbar-brand" href="#">ESPACE <span class="gras">SOUTINE</span>
			        		</div>
			        		<div style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">
			          			<ul class="nav navbar-nav">
			            			<li><a class="survol" href="#">Accueil</a></li>
			            			<li><a class="survol" href="#gpresentation">L'Espace Soutine</a></li>
			            			<li><a class="survol" href="#gprestation">Nos prestations</a></li>
			            			<li><a class="survol" href="#galerie">Galerie</a></li>
			            			<li><a class="survol" href="#gevenement">Nos événements</a></li>
			          			</ul>
			          			<ul class="nav navbar-nav navbar-right">
			            			<li><a class="bleu" href="#gnous_contacter">Nous contacter</a></li>
			          			</ul>
			        		</div>
			      		</div>
			   		</nav>
	      		</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-left">
					<h1>ESPACE <span>SOUTINE</span></h1>
					<h2 id="leves-lieu"><?php bloginfo('description'); ?></a></h2>
					<h2 id="leves"><a href="#gnous_contacter"><span class="glyphicon glyphicon-map-marker"></span> <i>Lèves, Ville de Chartres Métropole</i></a></h2></h2>
					<ul>
						<li><p>Entreprises</p></li>	
						<li><p>Institutionnels</p></li>
						<li><p>Associations</p></li>
						<li><p>Particuliers</p></li>
						<li><p>Acteurs culturels</p></li>
					</ul>
				</div>
			</div>
			<div class="row align-btn-head">
				<div class="col-xs-12 scrollbtn">
					<a class="btn btn-header btn-default" href="#gpresentation">
                        <span class="glyphicon glyphicon-circle-arrow-down scrollbtn"><span>
                    </a>
				</div>
			</div>
		</div>
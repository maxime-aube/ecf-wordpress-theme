<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="main-header">
		<div class="container">
			<div class="logo"><a href="index.html">DWWM</a></div>
			<nav class="main-nav">
				<ul class="menu" id="main-menu">
					<li class="menu-item"><a href="index.html">Accueil</a></li>
					<li class="menu-item"><a href="formation-liste.html">La formation</a></li>
					<li class="menu-item active"><a href="etudiant-liste.html">Les étudiants</a></li>
					<li class="menu-item"><a href="actualite-liste.html">Actualités</a></li>
					<li class="menu-item"><a href="contact.html">Nous contacter</a></li>
				</ul>
			</nav>
		</div>
	</header>
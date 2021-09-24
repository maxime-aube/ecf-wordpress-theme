<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('medium-content-area sidebar-right medium-body-text large-headings large-icons'); ?>>
<div id="page" class="site">
    
    <a class="skip-link screen-reader-text" href="#content">
        <span>Skip to content</span>
        <span data-icon="ei-arrow-right"></span>
    </a>

	<header id="masthead" class="site-header" role="banner">
		
        <div class="header-info">
			<h1 class="header-title"><?php echo get_bloginfo('name'); ?></h1>
			<p class="header-meta"><?php echo get_bloginfo('description'); ?></p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">

            <a href="<?php home_url(); ?>" class="custom-logo-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" />
            </a>
          
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span data-icon="ei-navicon"></span>
                <span>Menu</span>
            </button>
            
            <div class="menu-wrapper">
                
                <header class="menu-header">
                    <h2 class="menu-title">Menu</h2>
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span data-icon="ei-close"></span>
                        <span class="screen-reader-text">Close Menu</span>
                    </button>
                </header>

                <?php wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => '',
                    'menu_class' => 'primary-menu'
                )); ?>

                <?php wp_nav_menu(array(
                    'theme_location' => 'social',
                    'container' => '',
                    'menu_class' => 'social-icons'
                )); ?>

                <?php dynamic_sidebar( 'menu-sidebar' ); ?>

            </div>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
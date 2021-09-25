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
			<div class="logo"><a href="<?php echo get_home_url(); ?>">DWWM</a></div>
            <nav class="main-nav">
                <?php wp_nav_menu([
                    'theme_location' => 'main',
                    'container' => 'ul',
                    'menu_class' => 'menu'
                ]); ?>
            </nav>

		</div>
	</header>
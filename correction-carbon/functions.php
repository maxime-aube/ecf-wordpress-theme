<?php 

/* Prise en charge de <title> */
add_theme_support('title-tag');
/* Prise en charge des images mises en avant */
add_theme_support('post-thumbnails');

/* Chargement des feuilles de style et des scripts */
function mpf_enqueue_styles_and_scripts() {
    /* Chargement des feuilles de style */
    wp_enqueue_style('audiowide', 'https://fonts.googleapis.com/css?family=Audiowide|Exo+2:300,300i,400,400i,700,700i&amp;subset=latin-ext', array(), '1.0');
    wp_enqueue_style('spacemono', 'https://fonts.googleapis.com/css?family=Space+Mono', array(), '1.0');
    wp_enqueue_style('carbon', get_stylesheet_uri(), array('audiowide', 'spacemono'), '1.0');
    wp_enqueue_style('evilicons', 'https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.css', array(), '1.0');
    /* Chargement des scripts */
    wp_enqueue_script('detection', get_stylesheet_directory_uri() . '/js/detection.js', array(), '1.0');
    wp_enqueue_script('evilicon', 'https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.js', array(), '1.0');
    wp_enqueue_script('navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), '1.0', true);
    wp_enqueue_script('skiplink', get_stylesheet_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mpf_enqueue_styles_and_scripts');

/* Création des emplacements de menu */
register_nav_menus( array(
    'main'      => 'Menu principal',
    'secondary' => 'Menu secondaire',
    'social'    => 'Réseaux sociaux'
));

/* Création des sidebars */
register_sidebar( array(
    'name'  => 'Sidebar du menu',
    'id'    => 'menu-sidebar',
    'before_widget' => '<section id="%1$s" class="%2$s widget menu-widget">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title h5">',
    'after_title' => '</h2>',
    'before_sidebar' => '<aside id="menu-widget-area" class="menu-widget-area">',
    'after_sidebar' => '</aside>'
));

register_sidebar( array(
    'name'  => 'Barre latéral',
    'id'    => 'sidebar',
    'before_widget' => '<section id="%1$s" class="%2$s widget">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title h5">',
    'after_title' => '</h2>',
    'before_sidebar' => '<aside id="secondary" class="widget-area" role="complementary">',
    'after_sidebar' => '</aside>'
));

register_sidebar( array(
    'name'  => 'Pied de page',
    'id'    => 'footer-sidebar',
    'before_widget' => '<section id="%1$s" class="%2$s widget footer-widget">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title h5">',
    'after_title' => '</h2>',
    'before_sidebar' => '<aside id="footer-widget-area" class="footer-widget-area" role="complementary"><div class="footer-widgets">',
    'after_sidebar' => '</div></aside>'
));

/* Modify next and previous posts link */
function mpf_next_posts_link_attributes() {
    return 'class="previous-posts-link button" rel="next"';
}
add_filter('next_posts_link_attributes', 'mpf_next_posts_link_attributes');

function mpf_prev_posts_link_attributes() {
    return 'class="next-posts-link button" rel="prev"';
}
add_filter('previous_posts_link_attributes', 'mpf_prev_posts_link_attributes');
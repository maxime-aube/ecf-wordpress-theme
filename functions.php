<?php

// prise en charge des thumbnails
add_theme_support('post-thumbnails');

// ajout automatique du titre du site dans l'en-tête du site
add_theme_support('title-tag');


/* pretty self explanatory */
function charger_des_trucs() {
    // Déclarer style.css à la racine du thème
    wp_enqueue_style('styles', get_stylesheet_uri(), array(), '1.0');
}

add_action( 'wp_enqueue_scripts', 'charger_des_trucs' );

/* Création des emplacements de menu */
register_nav_menus([
    'main'      => 'Menu principal',
    'social'    => 'Réseaux sociaux',
    'mentions'    => 'Mentions légales et politique de confidentialité' 
]);


// on verra pour le reste peut-être

/* Modify next and previous posts link */
// function mpf_next_posts_link_attributes() {
//     return 'class="previous-posts-link button" rel="next"';
// }
// add_filter('next_posts_link_attributes', 'mpf_next_posts_link_attributes');

// function mpf_prev_posts_link_attributes() {
//     return 'class="next-posts-link button" rel="prev"';
// }
// add_filter('previous_posts_link_attributes', 'mpf_prev_posts_link_attributes');

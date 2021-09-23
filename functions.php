<?php

function charger_des_trucs() {
    // Déclarer style.css à la racine du thème
    wp_enqueue_style('capitaine', get_stylesheet_uri(), array(), '1.0');
}

// prise en charge des thumbnails
add_theme_support('post-thumbnails');

// ajout automatique du titre du site dans l'en-tête du site
add_theme_support('title-tag');

add_action( 'wp_enqueue_scripts', 'charger_des_trucs' );
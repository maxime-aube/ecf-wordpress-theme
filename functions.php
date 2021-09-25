<?php

// prise en charge des thumbnails
add_theme_support('post-thumbnails');

// ajout automatique du titre du site dans l'en-tête du site
add_theme_support('title-tag');

/* pretty self explanatory */
function charger_des_trucs_styley() {
    // Déclarer style.css à la racine du thème
    wp_enqueue_style('styles', get_stylesheet_uri(), array(), '1.0');
}

// déclararation des custom post types (c'est pété) pour les étudiants et les modules de fomrmation
function charger_dautres_trucs_cpt() {

        //déclaration des CPT

        $labels = [
            'etudiant' => [
                'name' => 'Étudiant',
                'all_items' => 'les étudiants',
                'singular_name' => 'étudiant',
                'add_new_item' => 'Ajouter un étudiant',
                'edit_item' => 'Modifier un étudiant',
                'menu_name' => 'Étudiants'
            ],
            'module' => [
                'name' => 'Module',
                'all_items' => 'la formation',
                'singular_name' => 'module de formation',
                'add_new_item' => 'ajouter un module de formation',
                'edit_item' => 'modifier un module',
                'menu_name' => 'Modules'
            ]
        ];
    
        $args_etudiants = array(
            'labels' => $labels['etudiant'],
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-groups',
        );

        $args_modules_formation = array(
            'labels' => $labels['module'],
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-book',
        );
    
        register_post_type('etudiant', $args_etudiants);
        register_post_type('module', $args_modules_formation);
}

add_action('wp_enqueue_scripts', 'charger_des_trucs_styley');
add_action('init', 'charger_dautres_trucs_cpt');


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

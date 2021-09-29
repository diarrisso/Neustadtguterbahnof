<?php 
function wpdocs_theme_name_scripts() {




    wp_enqueue_script('flip-js',get_template_directory_uri(). '/js/flip.min.js');

    wp_enqueue_style('bootstrap5-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');


	wp_enqueue_style('style',get_template_directory_uri(). '/css /style.css' );
    wp_enqueue_style('style.css');


    wp_enqueue_style('flip', get_template_directory_uri() . '/css /flip.min.css');
    wp_enqueue_style('flip.min.css');



}


register_nav_menus( array(
    'Header' => __( 'header Menu' ),
   'Footer' => __( 'Footer Menu' ),
) );
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );







?>
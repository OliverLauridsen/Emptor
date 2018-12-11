<?php
/**
 * Register and load any stylesheets your themes frontend requires.
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style( 'jquery.bxslider-css', get_template_directory_uri() . "/dist/js/plugins/jquery.bxslider/jquery.bxslider.css");
    wp_enqueue_style( 'frontend-css', get_template_directory_uri() . "/dist/css/frontend.css");
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');

});
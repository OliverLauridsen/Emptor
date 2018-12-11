<?php 
wp_header();
/* Template Name: Product Page */ 

if (have_posts()):
    while ( have_posts() ): the_post();

        require_once 'page-templates/ballot_boxes.php';
    endwhile;
endif;

?>
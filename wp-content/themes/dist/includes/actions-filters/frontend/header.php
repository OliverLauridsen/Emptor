<?php
add_filter( 'wp_title', 'add_site_description_to_title', 10, 2 );

/**
 * Creates a nicely formatted and more specific title element text
 */
function add_site_description_to_title($title, $sep) {
    if (is_feed()) {
        return $title;
    }
    // Add the site name.
    $title .= get_bloginfo( 'name' );
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }
    return $title;
}
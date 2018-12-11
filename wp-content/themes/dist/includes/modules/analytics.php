<?php
/**
 * Function that prints the tracking code inserted in the theme settings
 * Strips the slashes that were added when inserting the code to the
 * database
 */
function get_analytics_tracking_code() {
    $tracking_code = get_option('theme_analytics');

    if($tracking_code) {
        return stripslashes($tracking_code)."\n";
    }
}


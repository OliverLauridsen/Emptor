<?php
register_ajax_methods();

/**
 *  Register AJAX methods and set the correct privileges/permissions.
 *
 *  Populate the $ajax_events array with the method name as a key, and a boolean value as privilege.
 *  Set to "true" if the method should be executable for a user that is not logged in.
 *  Set to "false" if the methods should executable for logged in users only.
 */
function register_ajax_methods() {
    $ajax_events = array(
        // 'example_method'              => true,
    );

    foreach ($ajax_events as $ajax_event => $nopriv ) {
        add_action('wp_ajax_'.$ajax_event, $ajax_event);

        if($nopriv) {
            add_action('wp_ajax_nopriv_'.$ajax_event, $ajax_event);
        }
    }
}
<?php
/**
 * html24 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package html24
 */
/**
 * Requires all actions and filters
 */
require_once 'includes/actions-filters/backend/login.php';
require_once 'includes/actions-filters/backend/navigation.php';
require_once 'includes/actions-filters/backend/file_upload.php';
require_once 'includes/actions-filters/backend/theme_support.php';
require_once 'includes/actions-filters/backend/disable_heartbeat.php';
require_once 'includes/actions-filters/backend/hide_wp_version.php';
require_once 'includes/actions-filters/frontend/header.php';

/**
 * Requires AJAX related methods
 */
require_once 'includes/ajax/method_handler.php';

/**
 * Requires all WordPress plugins
 */
require_once 'includes/plugins/acf-config.php';

/**
 * Requires/enqueues all scripts and styles
 */
require_once 'includes/enqueues/backend/styles.php';
require_once 'includes/enqueues/backend/scripts.php';

require_once 'includes/enqueues/frontend/styles.php';
require_once 'includes/enqueues/frontend/scripts.php';

/**
 * Requires all methods
 */
require_once 'includes/modules/analytics.php';
require_once 'includes/modules/helpers.php';
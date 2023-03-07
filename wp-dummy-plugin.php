<?php
/**
 *
 * @wordpress-plugin
 * Plugin Name:       Dummy Plugin
 * Description:       Used to force GoDaddy Managed Wordpress to clear cache
 * Version:           1.0
 * Author:            Alex Agranov
 * License:           GNU General Public License v3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'DUMMY_PLUGIN_VERSION', '1.0' );

function run_dummy_plugin() {
}
run_dummy_plugin();


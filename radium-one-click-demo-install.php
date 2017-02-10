<?php
/**
 * Plugin Name: One click demo install
 * Plugin URI: https://github.com/FrankM1/radium-one-click-demo-install
 * Description: This plugin help you confiq with blogie wordpress theme to one click demo install
 * Author: Rachel FrankM1
 * Author URI: https://github.com/FrankM1/
 * Version: 1.0
 * License: GPLv2 or later
 */

/**
 * Version 0.0.3
 *
 * This file is just an example you can copy it to your theme and modify it to fit your own needs.
 * Watch the paths though.
 */
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

include( plugin_dir_path( __FILE__ ) . 'importer/radium-importer.php');

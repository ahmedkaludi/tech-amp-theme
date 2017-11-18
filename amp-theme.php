<?php
/*
Plugin Name: Tech Blogging Theme for AMP
Plugin URI: https://ampforwp.com/demo/blogging-theme/amp/
Description: Create a Tech Blogging AMP theme with ease.
Version: 1.0
Author: AMPforWP Team
Author URI: https://ampforwp.com/
License: GPL2
AMP: Tech Blogging AMP Theme
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
// Define the Folder of the theme.
define('AMPFORWP_TECH_MAGAZINE_THEME', plugin_dir_path( __FILE__ )); 
require_once( AMPFORWP_TECH_MAGAZINE_THEME . '/tech_magazine_settings.php');
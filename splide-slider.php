<?php
/**
 * Plugin Name:       Splider Slider
 * Plugin URI:        https://karageyik.com/?ref=splider
 * Description:       Splider Slider is fastest choise for you (:
 * Version:           0.1
 * Author:            fers4t
 * Author URI:        https://karageyik.com/?ref=splider
 * Text Domain:       splider-slider
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /l10n
 */

DEFINE('plugin_path',plugin_dir_path( __FILE__ ) );
DEFINE('plugin_url',plugin_dir_url( __FILE__ ) );

// functions
include plugin_path . "/include/functions.php";

// panel
include plugin_path . "/panel/homepage.php";

// shortcode
include plugin_path . "/include/shortcode.php";

require_once('widget/elementor/splide.php');

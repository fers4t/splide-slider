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

 // constants
DEFINE('plugin_path', plugin_dir_path(__FILE__));
DEFINE('plugin_url', plugin_dir_url(__FILE__));

DEFINE('kg_view_path', plugin_dir_path(__FILE__) . "/view/");
DEFINE('kg_view_url', plugin_dir_url(__FILE__) . "/view/");

DEFINE('kg_themes_path', kg_view_path . "public/themes/");
DEFINE('kg_themes_url', kg_view_url . "public/themes");

DEFINE('kg_controller_path', plugin_dir_path(__FILE__) . "/controller/");
DEFINE('kg_controller_url', plugin_dir_url(__FILE__) . "/controller/");

// functions
include plugin_path . "/include/functions.php";

// panel
include plugin_path . "/modal/panel/homepage.php";

// shortcode
include plugin_path . "/include/shortcode.php";

require_once('include/widget/elementor/splide.php');

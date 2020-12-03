<?php

function geyik_slider_sc($atts)
{
    extract(shortcode_atts(array(
        'class'             => "karageyik",
        'category'			=> null,
        'count'				=> 6,
        'order_by'			=> "date",
        'order'				=> "DESC",

        'focus'				=> "center",
        'perpage'			=> (int)1,
        'permove'			=> (int)1,
        'autowidth'			=> 'false',
        'autoplay'			=> true,
        'direction'			=> "ltr",
        'lazyload'			=> "false",
    ), $atts));
    
    $args = array(
        'category'				=> array($category),
        'numberposts'		=> $count,
        'order_by'			=> $order_by,
        'order'				=> $order
    );
    $get_posts 				= get_posts($args);

    $kg_post_name			= [];
    $kg_post_excerpt		= [];
    $kg_post_link			= [];
    $kg_post_image			= [];


    $print 					= "";
    $print .= "<script style='display:none !important' type='text/javascript' src='" . plugin_url . "/view/assets/3rd/js/splide/splide.min.js'></script>";
    $print .= "<link style='display:none !important' rel='stylesheet' type='text/css' href='" . plugin_url . "/view/assets/3rd/js/splide/splide.min.css'>";

    include kg_themes_path . "1/html.php" ;
    include kg_themes_path . "1/css.php" ;
    include kg_themes_path . "1/js.php" ;

    return $print;

    echo '</div>';
}
add_shortcode('g_slider', 'geyik_slider_sc');

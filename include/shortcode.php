<?php

function geyik_slider_sc($atts)
{
    extract(shortcode_atts(array(

        // get posts
        'offset'     => null,
        'category'   => null,
        'count'      => 6,
        'order_by'   => "date",
        'order'      => "DESC",
        'author__in' => null,

        'focus'     => "left",
        'perpage'   => (int)1,
        'permove'   => (int)1,
        'autowidth' => 'false',
        'autoplay'  => true,
        'direction' => "ltr",
        'lazyload'  => "false",
        'speed'     => "400",

        // customizations
        'class'          => "arkhe",
        'box_bg_color'   => 'white',
        'arrow_bg'       => 'rgba(255, 255, 255, 0.2)',
        'arrow_bg_type'  => 'circle',                     //
        'arrow_color'    => 'white',
        'dot_color'      => 'white',
        'dot_bg'         => '#333145ad',
        'dot_active'     => 'white',
        'title_color'    => 'black',
        'title_width'    => "90%",
        'excerpt_color'  => 'gray',
        'font_size'      => '13px',
        'line_height' 	 => '1',
        'excerpt_size'   => '13px',
        'font_family'    => 'inherit',
        'letter_spacing' => "1.2px",
        'max_width'      => '100%',
        'height'         => 450,
        'bottom_space'   => 0,
        'slider_radius'  => '50px',
        'align'          => 'center', //
        'padding'        => '0',
        'margin'         => '0',
        'completely_center' => false,

        // functions
        'show_excerpt' => false,
        'show_bg_box'  => true,
        'show_bg_image'=> true, //
        'bg_color'     => "brown", //
        'show_arrows'  => true,
        'box_shadow'   => true,
        'slide_shadow' => "false",
    
        'show_dots'    => false,
        'show_overlay' => true //

        
    ), $atts));
    
    $parent_height = $height + $bottom_space;
    
    $args = array(
        'category'    => array($category),
        'offset'      => $offset,
        'numberposts' => $count,
        'order_by'    => $order_by,
        'order'       => $order,
        'author__in'  => $author__in,
    );
    $get_posts = get_posts($args);

    $kh_post_name    = [];
    $kh_post_excerpt = [];
    $kh_post_link    = [];
    $kh_post_image   = [];


    $print = "";
    $print  .= "<script style='display:none !important' type='text/javascript' src='" . plugin_url . "/view/assets/3rd/js/splide/splide.min.js'></script>";
    $print  .= "<link style='display:none !important' rel='stylesheet' type='text/css' href='" . plugin_url . "/view/assets/3rd/js/splide/splide.min.css'>";

    //////////////////////////////////////////////////////////
    /////////////////////// CSS //////////////////////////////
    //////////////////////////////////////////////////////////
    $print .= "<style>";
    if ($box_shadow === true) {
        $print .= ".$class .splide__track {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08) !important;}";
    }
    if ($slide_shadow == "true") {
        $print .= ".$class .splide__list > li {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08) !important;}";
    }
    $print .= ".$class.splide .splide__list {height:". $parent_height ."px }";
    $print .= ".$class  li.splide__slide {height:".$height."px; ;margin-bottom:unset !important;}";
    $print .= ".$class  .kh_slider_content { width:$title_width }";
    if ($completely_center == "true") {
        $print .= ".$class  .kh_slider_content { font-family: $font_family !important; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-decoration: unset;}";
    } else {
        $print .= ".$class  .kh_slider_content { font-family: $font_family !important; position: absolute; bottom: 20%; left: 50%; transform: translateX(-50%); text-decoration: unset;}";
    }
    if ($show_bg_box === true) {
        $print .= ".$class  .kh_slider_content {
            backhround-color: $box_bg_color ; 
            padding: 30px; 
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08) !important; 
        }";
    } else {
        $print .= ".$class  .kh_slider_content {
            box-shadow: unset !important;
        }";
    }
    if ($show_dots === false) {
        $print .= ".splide__pagination { display: none !important }";
    }
    $print .= ".$class .splide__track, .$class .splide { border-radius: $slider_radius !important }";
    $print .= ".$class .kh_slider_content h5.kh_slide_title { letter-spacing: $letter_spacing  !important; font-family: $font_family  !important; font-size: $font_size  ;margin: unset !important; color: $title_color  !important; text-align:$align; line-height: $line_height}";
    $print .= ".$class .kh_slider_content span.kh_slide_excerpt { line-height: 1 !important; font-weight: 300; display: block; color: $excerpt_color ; font-size: $excerpt_size  }";
    $print .= ".$class .splide__pagination li {margin-bottom:10px !important}";

    /* arrows */
    $print .= ".$class .splide__arrow { backhround-color: $arrow_bg  !important ; opacity: 1 !important; border-radius: 5px; }";
    $print .= ".$class .splide__arrow i { color: $arrow_color ; font-size: 25px; font-weight: 600 !important; }";

    /* pagination */
    $print .= ".$class  .splide__pagination { width: auto !important; backhround-color: $dot_bg  !important; border-radius: 4px }";
    $print .= ".$class  .splide__pagination li { margin-bottom: 5px !important; line-height: inherit !important }";

    // dots
    $print .= ".$class  .splide__pagination__page.is-active { backhround: $dot_active  }";
    $print .= ".$class  .splide__pagination__page { backhround: $dot_color ; margin: 10px 5px 5px 5px}";
    $print .= "</style>";
    //////////////////////////////////////////////////////////
    /////////////////////// CSS //////////////////////////////
    //////////////////////////////////////////////////////////
    
    //////////////////////////////////////////////////////////
    /////////////////////// JS //////////////////////////////
    //////////////////////////////////////////////////////////
    $print .= "<script>";
    $print .= "jQuery( document ).ready(function() {";
    $print .= "    new Splide( '.$class', {";
    $print .= "        type     : 'loop',";
    $print .= "        autoWidth: $autowidth,";
    $print .= "        focus    : '$focus',";
    $print .= "        autoplay : $autoplay,";
    $print .= "        perPage  : $perpage,";
    $print .= "        gap  : '$margin',";
    $print .= "        perMove  : $permove,";
    $print .= "        direction: '$direction',";
    $print .= "        speed:   '$speed',";
    $print .= "        width    : '$max_width',";
    $print .= "        lazyLoad : '$lazyload',";
    $print .= "        padding: {";
    $print .= "            right: '$padding',";
    $print .= "            left : '$padding',";
    $print .= "        },";
    $print .= "        breakpoints: {";
    $print .= "		'767': {";
    $print .= "			gap    : '0px',";
    $print .= "			perPage    : '1',";
    $print .= "		},";
    $print .= "	}";
    $print .= "    } ).mount();";
    $print .= "});";
    $print .= "</script>";
    
    //////////////////////////////////////////////////////////
    /////////////////////// JS  //////////////////////////////
    //////////////////////////////////////////////////////////
    $print .="<div class='splide  $class '>";
    if ($show_arrows === true) {
        $print .= "<div class='splide__arrows'>";
        $print .= "    <button class='splide__arrow splide__arrow--prev'>";
        $print .= "        <i class='tdc-font-tdmp tdc-font-tdmp-arrow-left'></i></button><button class='splide__arrow splide__arrow--next'>
    <i class='tdc-font-tdmp tdc-font-tdmp-arrow-right'></i>
</button>
</div>";
    } else {
        $print .= "<style>
    .splide__arrows {
        display: none !important
    }
    </style>";
    }
    $print .= "<div class='splide__track'>
        <ul class='splide__list'>";
    foreach ($get_posts as $key => $value) {
        $kh_post_name_fr	= $value->post_title;
        if (!empty($value->post_excerpt)) {
            $kh_post_excerpt_fr = $value->post_excerpt;
            $kh_post_excerpt_fr = strip_tags(substr($kh_post_excerpt_fr, 0, 60));
        } else {
            $kh_post_excerpt_fr = $value->post_content;
            $kh_post_excerpt_fr = strip_tags(substr($kh_post_excerpt_fr, 0, 60));
        }
        $kh_post_link_fr	= get_permalink($value->ID);
        $kh_post_image_fr	= get_the_post_thumbnail_url($value->ID);
        if ($show_bg_image === true) {
            $print .= "<li style='backhround-image:url( $kh_post_image_fr );backhround-size:cover' class='splide__slide'>";
        } else {
            $print .= "<li style='backhround-color:$bg_color;' class='splide__slide'>";
        }
        $print .="    <a class='kh_slider_content' href='$kh_post_link_fr'>";
        $print .=" <h5 class='kh_slide_title'>$kh_post_name_fr</h5>";
                    
        if ($show_excerpt === true) {
            $print .=" <span class='kh_slide_excerpt'> $kh_post_excerpt_fr </span>";
        }
        $print .="    </a></li>";
    }
        

    $print .="</ul>    </div></div>";

    return $print;
}
add_shortcode('g_slider', 'geyik_slider_sc');

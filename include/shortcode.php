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

    $gs_post_name			= [];
    $gs_post_excerpt		= [];
    $gs_post_link			= [];
    $gs_post_image			= [];


    $print 					= "";
    $print .= "<script style='display:none !important' type='text/javascript' src='" . plugin_url . "/assets/3rd/js/splide/splide.min.js'></script>";
    $print .= "<link style='display:none !important' rel='stylesheet' type='text/css' href='" . plugin_url . "/assets/3rd/js/splide/splide.min.css'>";

    $print .=  "    <div class='splide $class'>";
    $print .=  " <div class='splide__arrows'>";
    $print .=  " 	<button class='splide__arrow splide__arrow--prev'>";
    $print .=  " 		<i class='tdc-font-tdmp tdc-font-tdmp-arrow-left'></i>";
    $print .=  " 	</button>";
    $print .=  " 	<button class='splide__arrow splide__arrow--next'>";
    $print .=  " 		<i class='tdc-font-tdmp tdc-font-tdmp-arrow-right'></i>";
    $print .=  " 	</button>";
    $print .=  " </div>";
    $print .=  "    	<div class='splide__track'>";
    $print .=  "		    <ul class='splide__list'>";

    foreach ($get_posts as $key => $value) {
        $gs_post_name_fr	= $value->post_title;
        if (!empty($value->post_excerpt)) {
            $gs_post_excerpt_fr = $value->post_excerpt;
            $gs_post_excerpt_fr = strip_tags(substr($gs_post_excerpt_fr, 0, 60)) . "...";
        } else {
            $gs_post_excerpt_fr = $value->post_content;
            $gs_post_excerpt_fr = strip_tags(substr($gs_post_excerpt_fr, 0, 60)) . "...";
        }
        $gs_post_link_fr	= get_permalink($value->ID);
        $gs_post_image_fr	= get_the_post_thumbnail_url($value->ID);

        $print .= "			<li style='background-image:url($gs_post_image_fr);background-size:cover' class='splide__slide'>
						<a class='gs_slider_content' href='$gs_post_link_fr'>
							<h5 class='gs_slide_title'> $gs_post_name_fr </h5>
							<span class='gs_slide_excerpt'>$gs_post_excerpt_fr</span>
						</a>
							</li>";
    }

    $print .= "<div class='splide__arrows'>";
    $print .= "   <button class='splide__arrow splide__arrow--prev'>";
    $print .= "    </button>";
    $print .= "    <button class='splide__arrow splide__arrow--next'>";
    $print .= "    </button>";
    $print .= "</div>";

    $print .=  "				</ul>";
    $print .=  "		</div>";
    $print .=  "	</div>";

    $print .= "<script>
				new Splide( '.$class', {
					type   		: 'loop',
					autoWidth	:  $autowidth,
					focus		: '$focus',
					autoplay	:  $autoplay,
					perPage		:  $perpage,
					perMove 	:  $permove,
					direction 	: '$direction',
					lazyLoad 	: '$lazyload'
				} ).mount();

				</script>";

    $print .= "<style>
		.splide {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08) !important;}
		li.splide__slide {height:450px;margin-bottom:unset !important}
		.gs_slider_content { position: absolute; bottom: 20%; left: 50%; transform: translateX(-50%); background-color: white; padding: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08) !important; }
		.gs_slider_content h5.gs_slide_title { margin: unset !important; color: #1e73be !important; }
		.gs_slider_content span.gs_slide_excerpt { line-height: 1 !important; font-weight: 300; display: block; color: rgb(102, 102, 102); }
		.splide__pagination li {margin-bottom:10px !important}

		/* arrows */
		.splide__arrow { background-color: rgba(255, 255, 255, 0.2); opacity: 1 !important; border-radius: 5px; }
		.splide__arrow i { color: white; font-size: 25px; font-weight: 600 !important; }

		/* pagination */
		.splide__pagination { width: 100px; background-color: rgba(56, 56, 56, 0.26) !important; border-radius: 4px }
		.splide__pagination li { margin-bottom: 5px !important }

		</style>";


    // include icons
    $print .= '<style>@font-face{font-family:"td-multipurpose";font-weight:normal;font-display:swap !important;font-style:normal;src:url("' . plugin_url . '/assets/fonts/kg-multipurpose/kg-multipurpose.eot");src:url("' . plugin_url . '/assets/fonts/kg-multipurpose/kg-multipurpose.eot?#iefix") format("embedded-opentype"),url("' . plugin_url . '/assets/fonts/kg-multipurpose/kg-multipurpose.ttf") format("truetype"),url("' . plugin_url . '/assets/fonts/kg-multipurpose/kg-multipurpose.woff") format("woff"),url("' . plugin_url . '/assets/fonts/kg-multipurpose/tdc-header-template-titletd-multipurpose.svg?#td-multipurpose") format("svg")}.tdc-font-tdmp{display:inline-block;font:normal normal normal 14px/1 td-multipurpose;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tdc-font-tdmp-arrow-left:before{content:"\e95c"}.tdc-font-tdmp-arrow-right:before{content:"\e95d"}</style>';

    return $print;

    echo '</div>';
}
add_shortcode('g_slider', 'geyik_slider_sc');
<style>

    <?php echo ".".$class ?>.splide {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08) !important;}
    <?php echo ".".$class ?> li.splide__slide {height:<?php echo $height; ?>;margin-bottom:unset !important}
    <?php echo ".".$class ?> .kg_slider_content { font-family: <?php echo $font_family ?> !important; position: absolute; bottom: 20%; left: 50%; transform: translateX(-50%); text-decoration: unset;
    <?php
    if ($show_bg === true) {
        ?>
            background-color: <?php echo $bg_color ?>; 
            padding: 30px; 
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08) !important; 
        <?php
    } else {
        ?>
            box-shadow: unset !important;
        <?php
    }
    ?>
    }

    <?php
        if ($show_dots === false) {
            ?>
            .splide__pagination { display: none !important }
            <?php
        }
 ?>
    <?php echo ".".$class ?> .splide__track, <?php echo ".".$class ?>.splide { border-radius: <?php echo $slider_radius ?> !important }
    <?php echo ".".$class ?> .kg_slider_content h5.kg_slide_title { letter-spacing: <?php echo $letter_spacing ?> !important; font-family: <?php echo $font_family ?> !important; font-size: <?php echo $font_size ?> ;margin: unset !important; color: <?php echo $title_color ?> !important; }
    <?php echo ".".$class ?> .kg_slider_content span.kg_slide_excerpt { line-height: 1 !important; font-weight: 300; display: block; color:  <?php echo $excerpt_color ?>; font-size: <?php echo $excerpt_size ?> }
    <?php echo ".".$class ?> .splide__pagination li {margin-bottom:10px !important}

    /* arrows */
    <?php echo ".".$class ?> .splide__arrow { background-color: <?php echo $arrow_bg ?> !important ; opacity: 1 !important; border-radius: 5px; }
    <?php echo ".".$class ?> .splide__arrow i { color: <?php echo $arrow_color ?>; font-size: 25px; font-weight: 600 !important; }

    /* pagination */
    <?php echo ".".$class ?> .splide__pagination { width: auto !important; background-color: <?php echo $dot_bg ?> !important; border-radius: 4px }
    <?php echo ".".$class ?> .splide__pagination li { margin-bottom: 5px !important; line-height: inherit !important }

    // dots 
    <?php echo ".".$class ?> .splide__pagination__page.is-active { background: <?php echo $dot_active ?> }
    @font-face{font-family:"td-multipurpose";font-weight:normal;font-display:swap !important;font-style:normal;src:url("<?php echo plugin_url ?>/view/assets/fonts/kg-multipurpose/kg-multipurpose.eot");src:url("<?php echo plugin_url ?>/view/assets/fonts/kg-multipurpose/kg-multipurpose.eot?#iefix") format("embedded-opentype"),url("<?php echo plugin_url ?>/view/assets/fonts/kg-multipurpose/kg-multipurpose.ttf") format("truetype"),url("<?php echo plugin_url ?>/view/assets/fonts/kg-multipurpose/kg-multipurpose.woff") format("woff"),url("<?php echo plugin_url ?>/view/assets/fonts/kg-multipurpose/tdc-header-template-titletd-multipurpose.svg?#td-multipurpose") format("svg")}.tdc-font-tdmp{display:inline-block;font:normal normal normal 14px/1 td-multipurpose;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tdc-font-tdmp-arrow-left:before{content:"\e95c"}.tdc-font-tdmp-arrow-right:before{content:"\e95d"}
    <?php echo ".".$class ?> .splide__pagination__page { background: <?php echo $dot_color ?>; margin: 10px 5px 5px 5px}
</style>


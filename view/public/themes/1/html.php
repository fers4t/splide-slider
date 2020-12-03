
<div class='splide <?php echo $class ?>'>
    <div class='splide__arrows'>
        <button class='splide__arrow splide__arrow--prev'>
            <i class='tdc-font-tdmp tdc-font-tdmp-arrow-left'></i>
        </button>
        <button class='splide__arrow splide__arrow--next'>
            <i class='tdc-font-tdmp tdc-font-tdmp-arrow-right'></i>
        </button>
    </div>
    <div class='splide__track'>
        <ul class='splide__list'>
        <?php
        foreach ($get_posts as $key => $value) {
            $kg_post_name_fr	= $value->post_title;
            if (!empty($value->post_excerpt)) {
                $kg_post_excerpt_fr = $value->post_excerpt;
                $kg_post_excerpt_fr = strip_tags(substr($kg_post_excerpt_fr, 0, 60)) . "...";
            } else {
                $kg_post_excerpt_fr = $value->post_content;
                $kg_post_excerpt_fr = strip_tags(substr($kg_post_excerpt_fr, 0, 60)) . "...";
            }
            $kg_post_link_fr	= get_permalink($value->ID);
            $kg_post_image_fr	= get_the_post_thumbnail_url($value->ID); ?>
            <li style='background-image:url(<?php echo $kg_post_image_fr ?> );background-size:cover' class='splide__slide'>
                <a class='kg_slider_content' href='<?php echo $kg_post_link_fr ?>'>
                    <h5 class='kg_slide_title'><?php echo $kg_post_name_fr ?> </h5>
                    <span class='kg_slide_excerpt'><?php echo $kg_post_excerpt_fr ?></span>
                </a>
            </li>
            <?php
        }
        ?>

            <div class='splide__arrows kg_dots'>
                <button class='splide__arrow splide__arrow--prev'>
                </button>
                <button class='splide__arrow splide__arrow--next'>
                </button>
            </div>
        </ul>
    </div>
</div>
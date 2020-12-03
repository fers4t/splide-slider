<?php

// add menu to admin panel
add_action('admin_menu', 'geyik_slider_add_menu');
function geyik_slider_add_menu()
{
    add_menu_page(
        __('Geyik Slider', 'textdomain'),
        __('Geyik Slider', 'textdomain'),
        'manage_options',
        'geyik-slider',
        'kg_admin_page',
        '',
        10
    );
}

function kg_admin_page()
{
    include kg_view_path . "panel/homepage.php";
    include kg_controller_path . "slide_form.php";
}


// enqueue js and css
// i'm using this way for run this files only in geyik slider page

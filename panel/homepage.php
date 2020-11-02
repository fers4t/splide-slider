<?php

// add menu to admin panel
add_action('admin_menu', 'geyik_slider_add_menu');
function geyik_slider_add_menu() {
     add_menu_page(
        __( 'Geyik Slider', 'textdomain' ),
        __( 'Geyik Slider','textdomain' ),
        'manage_options',
        'geyik-slider',
        'gs_admin_page',
        '',
        10
    );
}

function gs_admin_page() {
	?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=geyik-slider" method='POST'>
    <div class="geyik_slider">
    	<label>Kategori Seçiniz</label>
    		<select name="geyik_category">
    	        <?php category_list_option() ?>
    	    </select>
        <label>Kaç yazı olsun?</label>
            <input type="number" name="geyik_post_count">
        <label>Neye göre sıralansın?</label>
            <select name="geyik_post_order_by">
                <option value="date">Tarih</option>
                <option value="alphabetic">Alfabetik</option>
            </select>
        <label>Sıralama nasıl olsun?</label>
            <select name="geyik_post_order">
                <option value="ASC">Artan</option>
                <option value="DESC">Azalan</option>
            </select>
        <input type="submit" name="submit_geyik">
    </div>
</form>

     <?php
       
        if (isset($_POST['submit_geyik'])) {

            $gs_category            = $_POST['geyik_category'];
            $gs_post_count          = $_POST['geyik_post_count'];
            $gs_post_order          = $_POST['geyik_post_order'];
            $gs_post_order_by       = $_POST['geyik_post_order_by'];

            $gs_array = [
                'category'          => $gs_category,
                'post_count'        => $gs_post_count,
                'gs_post_order'     => $gs_post_order,
                'gs_post_order_by'  => $gs_post_order_by

            ];

            $gs_array               = json_encode($gs_array);
            $gs_filename            = plugin_path . "geyik_slider.json";
            file_put_contents($gs_filename, $gs_array);

            $shortcode              = "";
        }
}


// enqueue js and css
// i'm using this way for run this files only in geyik slider page
?>

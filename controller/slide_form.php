<?php
       
        if (isset($_POST['submit_geyik'])) {
            $kg_category            = $_POST['geyik_category'];
            $kg_post_count          = $_POST['geyik_post_count'];
            $kg_post_order          = $_POST['geyik_post_order'];
            $kg_post_order_by       = $_POST['geyik_post_order_by'];

            $kg_array = [
                'category'          => $kg_category,
                'post_count'        => $kg_post_count,
                'kg_post_order'     => $kg_post_order,
                'kg_post_order_by'  => $kg_post_order_by

            ];

            $kg_array               = json_encode($kg_array);
            $kg_filename            = plugin_path . "geyik_slider.json";
            file_put_contents($kg_filename, $kg_array);

            $shortcode              = "";
        }

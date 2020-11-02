<?php

function category_list_option(){
    $args = array(
        'orderby' => 'name',
        'order' => 'ASC'
    );
    $get_categories = get_categories($args);
    foreach ($get_categories as $key => $category) {
        $category_id = $category->term_id;
        $category_name = $category->name;
        $categories[] = array( 'ID' => $category_id, 'Category' => $category_name);
        
        echo '<option value="'.$category_id.'">' . $category_name . '</option>';
    }
}

?>
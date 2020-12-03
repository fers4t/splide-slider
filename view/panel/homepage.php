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
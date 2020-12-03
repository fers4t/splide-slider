<script>
jQuery( document ).ready(function() {
    new Splide( '.<?php echo $class ?>', {
        type   		: 'loop',
        autoWidth	:  <?php echo $autowidth ?>,
        focus		: '<?php echo $focus ?>',
        autoplay	:  <?php echo $autoplay ?>,
        perPage		:  <?php echo $perpage ?>,
        perMove 	:  <?php echo $permove ?>,
        direction 	: '<?php echo $direction ?>',
        lazyLoad 	: '<?php echo $lazyload ?>'
    } ).mount();
});
</script>
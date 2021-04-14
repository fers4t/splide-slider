<script>
jQuery( document ).ready(function() {
    new Splide( '.<?php echo $class ?>', {
        type     : 'loop',
        autoWidth: <?php echo $autowidth ?>,
        focus    : '<?php echo $focus ?>',
        autoplay : <?php echo $autoplay ?>,
        perPage  : <?php echo $perpage ?>,
        perMove  : <?php echo $permove ?>,
        direction: '<?php echo $direction ?>',
        width    : '<?php echo $max_width ?>',
        lazyLoad : '<?php echo $lazyload ?>',
        padding: {
            right: '<?php echo $padding ?>',
            left : '<?php echo $padding ?>',
        },
        breakpoints: {
		'767': {
			gap    : '0px',
		},
	}
    } ).mount();
});
</script>
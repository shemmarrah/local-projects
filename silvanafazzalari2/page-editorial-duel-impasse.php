<?php 
get_header();
	
?>
	<div class="editorial_container-slideshow">
		<?php 
		echo do_shortcode('[smartslider3 slider=2]');
		?>			
	</div>
	<div class="editorial_container-slideshow-mobile">
		<?php echo get_the_post_thumbnail(19); ?>

		<?php echo get_the_post_thumbnail(19); ?>

		<?php echo get_the_post_thumbnail(19); ?>

		<?php echo get_the_post_thumbnail(19); ?>

		<?php echo get_the_post_thumbnail(19); ?>

		<?php echo get_the_post_thumbnail(19); ?>	
	</div>		

<?php
get_footer();
 ?>
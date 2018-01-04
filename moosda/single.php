<?php 
get_header();

if (have_posts()) :
	while(have_posts()) : the_post() ?>
		<div class="pic">
			<div class="pic2"><?php the_post_thumbnail('banner-image'); ?></div>
			<div class="pic__btn"><p class="pic--color">button</p></div>
		</div>
		<a href="<?php the_permalink(); ?>"><h2> <?php the_title(); ?> </h2></a>
		<p><?php the_content(); ?></p>
	
	<?php endwhile;
	
 else :
		echo "no content";
	endif;

get_footer();
 ?>
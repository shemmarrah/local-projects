<?php 
get_header();
	
?>
<div class="commercial_container">
			<div class="sf_fashion">
				
				 <ul>
				 	<li>
				 	<a href="<?php bloginfo('template_url') ?>/motion-le-tulle-minika-ko">
				 	<?php echo get_the_post_thumbnail(606); ?>
					 	<div class="sf_fashion_content">
					 			<h3><?php $maincontent = get_post(606);
				 				echo $maincontent->post_title;?></h3>	
					 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					 </a>
				 	</li>


				 	<li>
				 	<a href="<?php bloginfo('template_url') ?>/motion-clouddress-minika-ko">
				 		<?php echo get_the_post_thumbnail(609); ?>
					 	<div class="sf_fashion_content">
					 			<h3><?php $maincontent = get_post(609);
				 				echo $maincontent->post_title;?></h3>
					 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a> 	
				 	</li>

				 </ul>
			</div>
					
		</div>

	
<?php
get_footer();
 ?>
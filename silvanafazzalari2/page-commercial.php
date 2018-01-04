<?php 
get_header();
	
?>
<div class="commercial_container">
			<div class="sf_fashion">
				
				 <ul>
				 	
				 	<li>
				 	<a href="<?php bloginfo('template_url') ?>/commercial-rapture-minika">
				 		<?php echo get_the_post_thumbnail(573); ?>
					 	<div class="sf_fashion_content">
					 			<h3><?php $maincontent = get_post(573);
				 				echo $maincontent->post_title;?></h3>
					 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a> 	
				 	</li>
				 	<li>
				 	<a href="<?php bloginfo('template_url') ?>/commercial-1957-collection">
				 		<?php echo get_the_post_thumbnail(575); ?>
					 	<div class="sf_fashion_content">
					 			<h3><?php $maincontent = get_post(575);
				 				echo $maincontent->post_title;?></h3>
					 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a> 	
				 	</li>	

				 	<li>
				 	<a href="<?php bloginfo('template_url') ?>/commercial-sahara">
				 		<?php echo get_the_post_thumbnail(577); ?>
					 	<div class="sf_fashion_content">
					 		<h3><?php $maincontent = get_post(577);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 	<li>
				 	<a href="<?php bloginfo('template_url') ?>/commercial-flower-girl">
				 		<?php echo get_the_post_thumbnail(582); ?>
					 	<div class="sf_fashion_content">
					 		<h3><?php $maincontent = get_post(582);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 	

				 	<li>
				 	<a href="<?php bloginfo('template_url') ?>/commercial-caitlin-shearer">
				 		<?php echo get_the_post_thumbnail(587); ?>
					 	<div class="sf_fashion_content">
					 		<h3><?php $maincontent = get_post(587);
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
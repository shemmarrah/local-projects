<?php 
get_header();
?>	
	


	<div style="height: 130px; width: 100%; float: left; background-color: #999;"></div>
	

			<div class="moo-sda-gallery-container">
			<div class="moo-sda-gallery__s-media">
						<ul>
							<li><a href="#"><?php echo get_the_post_thumbnail(73); ?></a></li>
							<li><a href="#"><?php echo get_the_post_thumbnail(76); ?></a></li>
							<li><a href="#"><?php echo get_the_post_thumbnail(79); ?></a></li>
						</ul>
					</div>
			<div class="moo-sda-gallery">
					<div class="moo-sda-gallery__header">	
						<h1>Gallery</h1>
					</div>
					
				 <ul>
				 	<li>
				 	<a href="<?php bloginfo('template_url') ?>/chior-gallery">
				 	<?php echo get_the_post_thumbnail(398); ?>
					 	<div class="moo-sda-gallery__content">
					 			<h3><?php $maincontent = get_post(398);
				 				echo $maincontent->post_title;?></h3>	
					 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					 </a>
				 	</li>
				 	<li>
				 	<a href="http://www.gracelink.net/kindergarten-archives" target="_blank">
				 		<?php echo get_the_post_thumbnail(400); ?>
					 	<div class="moo-sda-gallery__content">
					 			<h3><?php $maincontent = get_post(400);
				 				echo $maincontent->post_title;?></h3>
					 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a> 	
				 	</li>
				 	<li>
				 	<a href="http://www.gracelink.net/primary-archives" target="_blank">
				 		<?php echo get_the_post_thumbnail(402); ?>
					 	<div class="moo-sda-gallery__content">
					 		<h3><?php $maincontent = get_post(402);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 	<li>
				 	<a href="http://www.juniorpowerpoints.org/archives" target="_blank">
				 		<?php echo get_the_post_thumbnail(404); ?>
					 	<div class="moo-sda-gallery__content">
					 		<h3> <?php $maincontent = get_post(404);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 	<li>
				 	<a href="http://www.cornerstoneconnections.net/archives" target="_blank">
				 		<?php echo get_the_post_thumbnail(55); ?>
					 	<div class="moo-sda-gallery__content">
					 		<h3><?php $maincontent = get_post(55);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 	<li>
				 	<a href="https://absg.adventist.org/current-quarter" target="_blank">
				 		<?php echo get_the_post_thumbnail(58); ?>
					 	<div class="moo-sda-gallery__content">
					 		<h3><?php $maincontent = get_post(58);
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
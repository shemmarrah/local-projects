<?php 
get_header();
	
?>

<div class="booooo" style="height: 130px; width: 100%; float: left; background-color: #999;"></div>
	

<div class="moo-sda-department" >
			<div class="moo-sda-department__topic">
				<div class="moo-sda-department__title">
					<h2><?php $department = get_post(63);
			 		echo $department->post_title;?></h2>
			 	</div>
				<div class="moo-sda-department__s-media">
					<ul>
						<li><a href="#"><?php echo get_the_post_thumbnail(87); ?></a></li>
						<li><a href="#"><?php echo get_the_post_thumbnail(90); ?></a></li>
						<li><a href="#"><?php echo get_the_post_thumbnail(95); ?></a></li>
					</ul>
				</div>
			</div>
				
			

			<div class="moo-sda-department__descriptions moo-sda-department__descriptions-margin-bottom">
			
				<div class="moo-sda-department__descriptions-header">
					<h3>Description</h3>
				</div>

				<div class="container-fluid padding">
					<div class="row department-margin">
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event = get_post(22); 
								echo $event->post_title;?></h4>
							<P><?php $eventcomment = get_post(22); 
								echo $eventcomment->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(22); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(22); 
								echo $eventcomment2->post_content; ?></P>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(22); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(22); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(22); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(22); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(22); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(22); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(22); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(22); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(22); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(22); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(22); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(22); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(22); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(22); 
								echo $eventcomment2->post_content; ?></P>
						</div>
					</div>
				</div>
				
			</div>

			
		</div>

<?php
get_footer();
 ?>
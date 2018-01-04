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
						<li><a href="#"><?php echo get_the_post_thumbnail(73); ?></a></li>
						<li><a href="#"><?php echo get_the_post_thumbnail(76); ?></a></li>
						<li><a href="#"><?php echo get_the_post_thumbnail(79); ?></a></li>
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
							<h4><?php $event = get_post(223); 
								echo $event->post_title;?></h4>
							<P><?php $eventcomment = get_post(223); 
								echo $eventcomment->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(229); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(229); 
								echo $eventcomment2->post_content; ?></P>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(233); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(233); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(236); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(236); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(243); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(243); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(250); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(250); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(255); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(255); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(257); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(257); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(259); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(259); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(262); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(262); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(264); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(264); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(266); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(266); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(268); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(268); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(270); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(270); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(272); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(272); 
								echo $eventcomment2->post_content; ?></P>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(274); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(274); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(276); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(276); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(278); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(278); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(282); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(282); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(284); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(284); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(286); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(286); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(288); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(288); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(290); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(290); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(292); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(292); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(294); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(294); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(297); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(297); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(299); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(299); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(301); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(301); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(303); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(303); 
								echo $eventcomment2->post_content; ?></P>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(305); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(305); 
								echo $eventcomment2->post_content; ?></P>
						</div><div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(307); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(307); 
								echo $eventcomment2->post_content; ?></P>
						</div><div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<h4><?php $event2 = get_post(309); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(309); 
								echo $eventcomment2->post_content; ?></P>
						</div>
					</div>
				</div>
				
			</div>

			
		</div>

<?php
get_footer();
 ?>
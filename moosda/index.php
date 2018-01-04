<?php get_header(); ?>

	<div class="moo-sda-main">
		<div class="moo-sda-main__image">
		<div class="moo-sda-main__tint"></div>
			<?php echo get_the_post_thumbnail(13); ?>
		<div class="moo-sda-main__content">
			<h2><?php $maincontent = get_post(13);
			 echo $maincontent->post_title;?></h2>

		<p><?php $maincontent = get_post(13);
			 echo $maincontent->post_content;?>
			</p>	
		</div>
		<div class="moo-sda-main__button">
			<p>Prayer</p>
		</div>	
		</div>
	</div>

	<div class="moo-sda-main-mobile">
		<div class="moo-sda-main__image-mobile">
		<div class="moo-sda-main__tint-mobile"></div>
			<?php echo get_the_post_thumbnail(19); ?>
		<div class="moo-sda-main__content-mobile">
			<h2><?php $maincontent = get_post(19);
			 echo $maincontent->post_title;?></h2>

		<p><?php $maincontent = get_post(19);
			 echo $maincontent->post_content;?>
			</p>	
		</div>
		<div class="moo-sda-main__button-mobile">
			<p>Prayer</p>
		</div>	
		</div>
	</div>

	<div class="moo-sda-main-tablet">
		<div class="moo-sda-main__image-tablet">
		<div class="moo-sda-main__tint-tablet"></div>
			<?php echo get_the_post_thumbnail(16); ?>
		<div class="moo-sda-main__content-tablet">
			<h2><?php $maincontent = get_post(16);
			 echo $maincontent->post_title;?></h2>

		<p><?php $maincontent = get_post(16);
			 echo $maincontent->post_content;?>
			</p>	
		</div>
		<div class="moo-sda-main__button-tablet">
			<p>Prayer</p>
		</div>	
		</div>
	</div>


	<div class="moo-sda-main--divider"></div>


		<div class="moo-sda-schedule" >
			<div class="moo-sda-schedule__topic">
				<div class="moo-sda-schedule__title">
					<h1><?php $schedule = get_post(71);
			 		echo $schedule->post_title;?></h1>
			 	</div>
				<div class="moo-sda-schedule__s-media">
					<ul>
						<li><a href="" target="_blank"><?php echo get_the_post_thumbnail(73); ?></a></li>
						<li><a href="https://www.facebook.com/Mount-of-Olives-Seventh-Day-Adventist-Church-176149205849073/" target="_blank"><?php echo get_the_post_thumbnail(76); ?></a></li>
						<li><a href="#" target="_blank"><?php echo get_the_post_thumbnail(79); ?></a></li>
					</ul>
				</div>
			</div>
				
			

			<div class="moo-sda-schedule__events">
				<div id="meeting"></div>
				<div class="moo-sda-schedule__events-header">
					<h3>Events</h3>
				</div>

				<div class="container-fluid padding">
					<div class="row padding">
						<div class="col-md-6 col-sm-12 col-xs-12 events-padding">	
							<h4><?php $event = get_post(22); 
								echo $event->post_title;?></h4>
							<P><?php $eventcomment = get_post(22); 
								echo $eventcomment->post_content; ?></P>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 events-padding">
							<h4><?php $event2 = get_post(202); 
								echo $event2->post_title;?></h4>
							<P><?php $eventcomment2 = get_post(202); 
								echo $eventcomment2->post_content; ?></P>
						</div>
					</div>
				
					<div class="row padding">
						<div class="col-md-6 col-sm-12 col-xs-12 events-padding">
							<h4><?php $event3 = get_post(205); 
								echo $event3->post_title;?></h4>
							<P><?php $eventcomment3 = get_post(205); 
								echo $eventcomment3->post_content; ?></P>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 events-padding">
							<h4><?php $event4 = get_post(206); 
								echo $event4->post_title;?></h4>
							<P><?php $eventcomment4 = get_post(206); 
								echo $eventcomment4->post_content; ?></P>
						</div>
					</div>
				</div>
				
			</div>

			<div class="moo-sda-schedule__meetings">
				<div class="moo-sda-schedule__meetings-header">
					<h3>Meetings</h3>
				</div>
				<div class="container-fluid padding">
					<div class="row padding">
						<div class="col-md-6 col-sm-12 col-xs-12 meetings-padding">
							<h4><?php $event4 = get_post(210); 
								echo $event4->post_title;?></h4>
								<P><?php $eventcomment4 = get_post(210); 
								echo $eventcomment4->post_content; ?></P>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 meetings-padding">
							<h4><?php $event4 = get_post(214); 
								echo $event4->post_title;?></h4>
								<P><?php $eventcomment4 = get_post(214); 
								echo $eventcomment4->post_content; ?></P>
						</div>
					</div>

					<div class="row padding">
						<div class="col-md-6 col-sm-12 col-xs-12 meetings-padding">
							<h4><?php $event4 = get_post(216); 
								echo $event4->post_title;?></h4>
								<P><?php $eventcomment4 = get_post(216); 
								echo $eventcomment4->post_content; ?></P>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 meetings-padding">
							<h4><?php $event4 = get_post(218); 
								echo $event4->post_title;?></h4>
								<P><?php $eventcomment4 = get_post(218); 
								echo $eventcomment4->post_content; ?></P>
						</div>
					</div>
				</div>
			</div>
		</div>

		

	<div class="service-container">
			
			<div class="moo-sda-service">
				<div class="moo-sda-service__header">
					<h1>Service</h1>
				</div>
				<div class="moo-sda-service__links">
					<ul>
						<li><a href="SabbathSchool" class="moo-sda-service-active-first moo-sda-service-active">Sabbath School</a></li>
						<li><a href="DevineService" class="moo-sda-service-active">Devine Service</a></li>
						<li><a href="AyService" class="moo-sda-service-active">Ay Service</a></li>
						<li><a href="PrayerService" class="moo-sda-service-active">Prayer Service</a></li>
					</ul>
				</div>

				<div class="moo-sda-service__content">
					
				</div>

				<div class="moo-sda-service__links-mobile service__mobileLoad-Links">
					<ul>
						<li><a href="SabbathSchool" class="moo-sda-service-mobile-active-first moo-sda-service-mobile-active">Sabbath School</a></li>
						<li><a href="DevineService" class="moo-sda-service-mobile-active">Devine Service</a></li>
					</ul>
				</div>

				<div class="moo-sda-service__content-mobile service__mobileLoad-content">
					

				</div>
				<div class="moo-sda-service__links-mobile service__mobileLoad-Links2">
					<ul>
						<li><a href="AyService" class="moo-sda-service-mobile-active-first moo-sda-service-mobile-active">Adventist Youth</a></li>
						<li><a href="PrayerService" class="moo-sda-service-mobile-active">Prayer Service</a></li>
					</ul>
				</div>

				<div class="moo-sda-service__content-mobile service__mobileLoad-content2">
					
				</div>	
			
			</div>
	
			<div class="moo-sda-service__contact">
					<div class="moo-sda-service__contact-header">	
						<h3>Contact</h3>
					</div>
						<div class="moo-sda-service__contact-info">
						
							<div class="container-fluid padding">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<ul>
											<li><strong>Pastor:</strong> Michael Coleman</li>
											<li><strong>Email:</strong> truthcoleman@frontiernet.net</li>
											<li><strong>Pastor’s Study:</strong> 718-453-6312</li>	
											<li><strong>Email:</strong> bushmoo2000@yahoo.com</li>
											<li><strong>First Elder:</strong> Hector Stone</li>
											<li><strong>Phone:</strong> 718-322-8741</li>
											<li><strong>Email:</strong> goldstone25@aol.com</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>		
						
				</div>


				<div class="moo-sda-service__contact-mobile">
					<div class="moo-sda-service__contact-mobile-header">	
						<h3>Contact</h3>
					</div>
						<div class="moo-sda-service__contact-mobile-info">
						
							<div class="container-fluid padding">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<ul>
											<li><strong>Pastor:</strong><br/> Michael Coleman </li>
											<li><strong>Email:</strong><br/> truthcoleman@frontiernet.net</li>
											<li><strong>Pastor’s Study:</strong><br/> 718-453-6312</li>	
											<li><strong>Email:</strong> <br/>bushmoo2000@yahoo.com</li>
											
											
											<li><strong>First Elder:</strong><br/> Hector Stone</li>
											<li><strong>Phone: </strong>718-322-8741</li>
											<li><strong>Email: </strong> <br/>goldstone25@aol.com</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>		
						
				</div>
		</div> 
			
		<div class="location-cotainer">
			<div class="moo-sda-location">
					<div class="moo-sda-location__header">	
						<h1>Location</h1>
					</div>
			</div>
			<div class="moo-sda-location__map">
					<?php $map = get_post(66); ?>				
					<?php $map = get_post(66); 
					echo $map->post_content; ?>
			</div>
			<div class="moo-sda-location__transportation">
				<div class="moo-sda-location__transportation-header">
					<h3>Transportation</h3>
				</div>
				<div class="moo-sda-location__links">
					<ul>
						<li><a class="moo-sda-location-active moo-sda-location-active-first" href="Train">Train</a></li>
						<li><a class="moo-sda-location-active" href="Bus">Bus</a></li>
						<li><a class="moo-sda-location-active" href="Car">Car</a></li>
					</ul>
				</div>
				<div class="moo-sda-location__transportation-content">
					
				</div>
				</div>
				
			</div>

		</div>

		<div class="ellenwhite-container">
			<div class="moo-sda-ellenwhite__header">
				<h2>Ellen G White</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Duis ac eros libero. Suspendisse potenti. Nam ornare mi vitae nisi 
				interdum, non consectetur enim eleifend. Vestibulum sit 
				amet ultrices risus. Fusce ullamcorper porttitor ullamcorper. 
				Ut sed urna in ipsum facilisis condimentum a vitae lorem. Ut ac 
				metus dolor. Suspendisse potenti. </p>
			</div>
			<div class="moo-sda-ellenwhite__button">
				<a href="http://www.whiteestate.org/about/egwbio.asp" target="_blank"><p>More</p></a>
			</div>
		</div>
		


		<div class="lessons-container">
		<div id="lessons"></div>
			<div class="moo-sda-lessons">
					<div class="moo-sda-lessons__header">	
						<h1>Lessons</h1>
					</div>
				
				 <ul>
				 	<li>
				 	<a href="http://www.gracelink.net/archives-beginner" target="_blank">
				 	<?php echo get_the_post_thumbnail(43); ?>
					 	<div class="moo-sda-lessons__content">
					 			<h3><?php $maincontent = get_post(43);
				 				echo $maincontent->post_title;?></h3>	
					 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					 </a>
				 	</li>
				 	<li>
				 	<a href="http://www.gracelink.net/kindergarten-archives" target="_blank">
				 		<?php echo get_the_post_thumbnail(46); ?>
					 	<div class="moo-sda-lessons__content">
					 			<h3><?php $maincontent = get_post(46);
				 				echo $maincontent->post_title;?></h3>
					 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a> 	
				 	</li>
				 	<li>
				 	<a href="http://www.gracelink.net/primary-archives" target="_blank">
				 		<?php echo get_the_post_thumbnail(49); ?>
					 	<div class="moo-sda-lessons__content">
					 		<h3><?php $maincontent = get_post(49);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 	<li>
				 	<a href="http://www.juniorpowerpoints.org/archives" target="_blank">
				 		<?php echo get_the_post_thumbnail(52); ?>
					 	<div class="moo-sda-lessons__content">
					 		<h3><?php $maincontent = get_post(52);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 	<li>
				 	<a href="http://www.cornerstoneconnections.net/archives" target="_blank">
				 		<?php echo get_the_post_thumbnail(55); ?>
					 	<div class="moo-sda-lessons__content">
					 		<h3><?php $maincontent = get_post(55);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 	<li>
				 	<a href="https://absg.adventist.org/current-quarter" target="_blank">
				 		<?php echo get_the_post_thumbnail(58); ?>
					 	<div class="moo-sda-lessons__content">
					 		<h3><?php $maincontent = get_post(58);
				 			echo $maincontent->post_title;?></h3>
				 			<p><?php echo $maincontent->post_content; ?></p>
					 	</div>
					</a>
				 	</li>
				 </ul>
			</div>
					
		</div>
		
<?php get_footer(); ?>
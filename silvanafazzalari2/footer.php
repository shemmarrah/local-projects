<footer>
	<div class="sf-footer-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'sf2-footer' )); ?>
	<p> &copy; all rights reserved to <?php echo "silvana fazzalari"." ".date("Y");?></p>
		<div class="sf-footer-nav__s-media">
			<ul>
				<li><a href="https://www.instagram.com/silvanafazz/" target="__blank"><?php echo get_the_post_thumbnail(99); ?></a></li>
				<li><a href="https://www.facebook.com/SilvanaFazzalariPhotography/" target="__blank"><?php echo get_the_post_thumbnail(107); ?></a></li>
				<li><a href="#" target="__blank"><?php echo get_the_post_thumbnail(109); ?></a></li>
			</ul>
		</div>
	</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/shem_fw/js/action.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/shem_fw/js/bootstrap.min.js"></script>
<!--add filers-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/shem_fw/js/scrolloverflow.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/shem_fw/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/shem_fw/js/menuburger.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/shem_fw/js/cycle2/cycle2.js"></script>

<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: true,
				sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
				
			});
		});
		//alert('has many:'+ )
		// $(document).ready(function(){

		// 	//$('.section').addClass('boo');
		// 	$('#section1').mouseover(function(){
		// 		//
		// 		$('.section').eq(1).addClass('shadow');
		// 		  if ($('.section').hasClass('shadow')) {
		// 		  	$('.logo2').addClass('boo');
		// 		  	$('.logo').addClass('boo2');
		// 		    //alert('has:'+$('.section').length)
		// 		  }
		// 	}).mouseleave(function(){
		// 		$('.logo2').removeClass('boo');
		// 	})
			
		// });


		$(document).ready(function(){
			$('.nav-icon').on('click', function(){
				$('.menubar').slideToggle(400);
			});
		});

		$(document).ready(function(){
			$('li.active').click(function(){
				$('li.active').css('font-weight', '700');
				$('.menu-sf2-header-fashion-container').fadeIn(400);
				//
			})

			$('.nav-icon').click(function(){
				
				$('li.active').css('font-weight', '400');
				$('.menu-sf2-header-fashion-container').fadeOut(400);
			})
			
		});

		$(document).ready(function(){
			$('.sf2-about-click').on('click', function(){
				$('.sf2-about-wrapper').fadeIn(400);
			});
		});
		$(document).ready(function(){
			$('.sf2-about-tint').on('click', function(){
				$('.sf2-about-wrapper').fadeOut(400);
			});
		});
		//$('#slide1').addClass('shooz');

	
		//alert( "left: " + offset.left + ", top: " + offset.top );
	</script>


<?php wp_footer(); ?>
</body>
</html>
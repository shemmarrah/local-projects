<?php 
	//get_header(); 
	include 'header2.php';
?>

<div id="fullpage">
	<div class="section" id="section0">
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php bloginfo('template_url') ?>/shem_fw/css/videos/Minika_Ko_edit.mp4" type="video/mp4" title="silvana fazzalari Minika Ko">
			<source src="imgs/Le_Tulle_by_Mini_a_Ko.webm" type="video/webm">
		</video>
		<div class="video__tint-divider"></div>
	</div>
	<div class="section" id="section1">
	    <!--<div class="slide" id="slide1"><h1>Slide Backgrounds</h1></div> duplicate slide-->
		
		<div id="container">
		    <div id="slideshow" class="cycle-slideshow"
		       data-cycle-fx = "fade"
		       data-cycle-speed = "600"
		       data-cycle-timeout = "2500"
		       data-cycle-pager = "#pager"
		       data-cycle-pager-template ="<a herf='#'><img src='{{src}}' height=100 width=150/>"
		       data-cycle-next = "#next"
		       data-cycle-prev = "#prev"
		       data-cycle-manual-fx = "fade"
		       data-cycle-manual-speed = "400"
		       data-cycle-pager-fx = "fade">    
		        
		        <img src="<?php bloginfo('template_url') ?>/shem_fw/css/images/home_1_new.jpg" alt="silvana fazzalari home 1">
		        <img src="<?php bloginfo('template_url') ?>/shem_fw/css/images/home_2_new.jpg" alt="silvana fazzalari home 2">

		    </div>
		    <div id="pager"></div>
		    <!--<img id="prev" src="imgs/prev1.svg"/>
		    <img id="next" src="imgs/next1.svg"/>-->
		</div>

	</div>	
</div>


<!--[if IE]>
<script type="text/javascript">
	 var console = { log: function() {} };
</script>
<![endif]-->

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
			$('.nav-icon2').on('click', function(){
				$('.menubar').slideToggle(400);
			});
		});

		$(document).ready(function(){
			$('li.active').click(function(){
				$('li.active').css('font-weight', '700');
				$('.menu-sf2-header-fashion-container').fadeIn(400);
				//
			})

			$('.nav-icon2').click(function(){
				
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
	
</body>
</html>


	
<?Php //get_footer(); ?>
// $(document).ready(function(){
// 	$("").onClick(function(){
// 		$().fadeIn(600);
// 	});
// });

//drop down menu mobile
$(document).ready(function(){
	$('.sf-nav__links-mobile-button').click(function(){
		//$('.sf-nav__links-mobile-drop').slideToggle(300);
		$('.sf-nav__links-mobile-drop').fadeToggle(400);
	});
	
});

//drop down prayer button
$(document).ready(function(){
	$('.sf2-contact__form-show').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.sf2-contact-wrapper').fadeIn(400);
	});
	
});


//drop down prayer close button
$(document).ready(function(){
	$('.sf2-contact__form-close').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.sf2-contact-wrapper').fadeOut(400);
	});
	
});

$(document).ready(function(){
	$('.sf2-contact__form-divider').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.sf2-contact-wrapper').fadeOut(400);
	});
	
});


//drop down prayer button
// $(document).ready(function(){
// 	$('.moo-sda-main__button-tablet').click(function(){
// 		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
// 		$('.moo-sda-prayer__form-container').fadeIn(200);
// 	});
	
// });

//drop down prayer button
// $(document).ready(function(){
// 	$('.moo-sda-main__button-mobile').click(function(){
// 		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
// 		$('.moo-sda-prayer__form-container').fadeIn(200);
// 	});
	
// });

//drop down prayer button
// $(document).ready(function(){
// 	$('.moo-sda-main__button').click(function(){
// 		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
// 		$('.moo-sda-prayer__form-container').fadeIn(200);
// 	});
	
// });

//drop down prayer button
// $(document).ready(function(){
// 	$('.moo-sda-nav__prayer-mobile').click(function(){
// 		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
// 		$('.moo-sda-prayer__form-container').fadeIn(200);
// 	});
	
// });



//
$(document).ready(function(){

	$( ".moo-sda-service__content" ).load( "http://localhost/wordpress/wp-content/themes/moosda/shem_fw/content/SabbathSchool.php" );
	$('.moo-sda-service__links li a').click(function(){
		var page = $(this).attr('href');
		$('.moo-sda-service__content').load('http://localhost/wordpress/wp-content/themes/moosda/shem_fw/content/'+ page +'.php');
	return false;
	})
});

//load mobile content

$(document).ready(function(){

	$( ".service__mobileLoad-content" ).load( "http://localhost/wordpress/wp-content/themes/moosda/shem_fw/content/SabbathSchool.php" );
	$('.service__mobileLoad-Links li a').click(function(){
		var page = $(this).attr('href');
		$('.service__mobileLoad-content').load('http://localhost/wordpress/wp-content/themes/moosda/shem_fw/content/'+ page +'.php');
	return false;
	})
});

//load mobile content 2
$(document).ready(function(){

	$( ".service__mobileLoad-content2" ).load( "http://localhost/wordpress/wp-content/themes/moosda/shem_fw/content/AyService.php" );
	$('.service__mobileLoad-Links2 li a').click(function(){
		var page = $(this).attr('href');
		$('.service__mobileLoad-content2').load('http://localhost/wordpress/wp-content/themes/moosda/shem_fw/content/'+ page +'.php');
	return false;
	})
});

//load transportation content
$(document).ready(function(){

	$( ".moo-sda-location__transportation-content" ).load( "http://localhost/wordpress/wp-content/themes/moosda/shem_fw/transportation/Train.php" );
	$('.moo-sda-location__links li a').click(function(){
		var page = $(this).attr('href');
		$('.moo-sda-location__transportation-content').load('http://localhost/wordpress/wp-content/themes/moosda/shem_fw/transportation/'+ page +'.php');
	return false;
	})
});

// alert('hey');


$(document).ready(function() { 
		$('.moo-sda-service-active-first').addClass('active');
    $(".moo-sda-service__links li .moo-sda-service-active").click(function ( e ) {
        e.preventDefault();
        $(".moo-sda-service__links li a.active").removeClass("active"); //Remove any "active" class  
        $(this).addClass("active"); //Add "active" class to selected tab  
        $(this).show(); //Fade in the active content  
    });
});

$(document).ready(function() { 
		$('.moo-sda-service-mobile-active-first').addClass('active');
    $(".moo-sda-service__links-mobile li .moo-sda-service-mobile-active").click(function ( e ) {
        e.preventDefault();
        $(".moo-sda-service__links-mobile li a.active").removeClass("active"); //Remove any "active" class  
        $(this).addClass("active"); //Add "active" class to selected tab  
        $(this).show(); //Fade in the active content  
    });
});


$(document).ready(function() { 
		$('.moo-sda-location-active-first').addClass('active');
    $(".moo-sda-location__links li .moo-sda-location-active").click(function ( e ) {
        e.preventDefault();
        $(".moo-sda-location__links li a.active").removeClass("active"); //Remove any "active" class  
        $(this).addClass("active"); //Add "active" class to selected tab  
        $(this).show(); //Fade in the active content  
    });
});


//a href scroller

// $(document).ready(function(){
// 	$('a[href^="#"]').on('click',function (e) {
// 	    e.preventDefault();

// 	    var target = this.hash;
// 	    var $target = $(target);

// 	    $('html, body').stop().animate({
// 	        'scrollTop': $target.offset().top
// 	    }, 800, 'swing', function () {
// 	        window.location.hash = target;
// 	    });
// 	});
// });

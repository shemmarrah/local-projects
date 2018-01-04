// $(document).ready(function(){
// 	$("").onClick(function(){
// 		$().fadeIn(600);
// 	});
// });
//hover_out
$(document).ready(function(){
	$('.hover_out').hover(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.moo-sda-nav__links-mobile-drop').fadeOut(400);
	});
	
});

//drop down menu mobile
$(document).ready(function(){
	$('.moo-sda-nav__links-mobile-button').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.moo-sda-nav__links-mobile-drop').fadeToggle(400);
	});
	
});

//drop down prayer button
$(document).ready(function(){
	$('.moo-sda-nav__prayer').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.moo-sda-prayer__form-container').fadeIn(200);
	});
	
});

//drop down prayer button
$(document).ready(function(){
	$('.moo-sda-main__button-tablet').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.moo-sda-prayer__form-container').fadeIn(200);
	});
	
});

//drop down prayer button
$(document).ready(function(){
	$('.moo-sda-main__button-mobile').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.moo-sda-prayer__form-container').fadeIn(200);
	});
	
});

//drop down prayer button
$(document).ready(function(){
	$('.moo-sda-main__button').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.moo-sda-prayer__form-container').fadeIn(200);
	});
	
});

//drop down prayer button
$(document).ready(function(){
	$('.moo-sda-nav__prayer-mobile').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.moo-sda-prayer__form-container').fadeIn(200);
	});
	
});


//drop down prayer close button
$(document).ready(function(){
	$('.moo-sda-prayer__form-close').click(function(){
		//$('.moo-sda-nav__links-mobile-drop').slideToggle(300);
		$('.moo-sda-prayer__form-container').fadeOut(200);
	});
	
});

//
$(document).ready(function(){

	$( ".moo-sda-service__content" ).load( "http://www.shemmarrah.com/wp-content/themes/moosda/shem_fw/content/SabbathSchool.php" );
	$('.moo-sda-service__links li a').click(function(){
		var page = $(this).attr('href');
		$('.moo-sda-service__content').load('http://www.shemmarrah.com/wp-content/themes/moosda/shem_fw/content/'+ page +'.php');
	return false;
	})
});

//load mobile content

$(document).ready(function(){

	$( ".service__mobileLoad-content" ).load( "http://www.shemmarrah.com/wp-content/themes/moosda/shem_fw/content/SabbathSchool.php" );
	$('.service__mobileLoad-Links li a').click(function(){
		var page = $(this).attr('href');
		$('.service__mobileLoad-content').load('http://www.shemmarrah.com/wp-content/themes/moosda/shem_fw/content/'+ page +'.php');
	return false;
	})
});

//load mobile content 2
$(document).ready(function(){

	$( ".service__mobileLoad-content2" ).load( "http://www.shemmarrah.com/wp-content/themes/moosda/shem_fw/content/AyService.php" );
	$('.service__mobileLoad-Links2 li a').click(function(){
		var page = $(this).attr('href');
		$('.service__mobileLoad-content2').load('http://www.shemmarrah.com/wp-content/themes/moosda/shem_fw/content/'+ page +'.php');
	return false;
	})
});

//load transportation content
$(document).ready(function(){

	$( ".moo-sda-location__transportation-content" ).load( "http://www.shemmarrah.com/wp-content/themes/moosda/shem_fw/transportation/Train.php" );
	$('.moo-sda-location__links li a').click(function(){
		var page = $(this).attr('href');
		$('.moo-sda-location__transportation-content').load('http://www.shemmarrah.com/wp-content/themes/moosda/shem_fw/transportation/'+ page +'.php');
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

//
$(document).ready(function() { 
		$('.moo-sda-service-mobile-active-first').addClass('active');
    $(".service__mobileLoad-Links li").click(function ( e ) {
        e.preventDefault();
        $(".moo-sda-service__links-mobile li a.active").removeClass("active"); //Remove any "active" class  
        $(this).addClass("active"); //Add "active" class to selected tab  
        $(this).show(); //Fade in the active content  
    });
});

//
$(document).ready(function() { 
		$('moo-sda-service-mobile-active-first').addClass('active');
    $(".service__mobileLoad-Links2 li").click(function ( e ) {
        e.preventDefault();
        $(".service__mobileLoad-Links2 li a.active").removeClass("active"); //Remove any "active" class  
        $(this).addClass("active"); //Add "active" class to selected tab  
        $(this).show(); //Fade in the active content  
    });
});

//location ajax load
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

$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});


$(document).on('click','.searchbychar', function(event) {
    event.preventDefault();
    
});


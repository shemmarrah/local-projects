<?php 
	/*function load_files(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
add_action('wp_enqueue_scripts','load_files');*/


function register_my_menus() {
  register_nav_menus(
    array(
      'sf2-header' => __( 'sf2 Header Menu' ),
      'sf2-header-fashion' => __( 'sf2 Header Menu__fashion' ),
      // 'desktop-service-links' => __( 'service Menue' ),
      // 'mobile-service-links' => __( 'Mobile Menue' ),
      // 'mobile-service-links-2' => __( 'Mobile Menue2' ),
      'sf2-footer' => __( 'sf2 Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



function featured_image_support(){

		add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 825, 510, false );
		add_image_size('small-thumbnail', 180, 120, true);
		add_image_size('banner-image', 920, 210, array('left','top'));
}

add_action('after_setup_theme' , "featured_image_support");


// function add_my_scripts(){

//   wp_enqueue_script('style', get_stylesheet_directory_uri().'/shem_fw/js/action.js');
// }
// add_action('wp_enqueue_scripts','add_my_scripts');


 ?>

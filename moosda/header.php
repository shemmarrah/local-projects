<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="author" content="Shemmarrah John" />
    <meta name="keywords" content="The Mount Of Olives, Mount Of Olives sda, mount of olives seventh day adventist church, Seventh Day Adventist Church, MOOSDA">
    <meta name="description" content="The Mount of Olives Seventh Day Adventist Church is a place where everybody is somebody">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Mount Of Olives</title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/shem_fw/css/images/moo_sda_logo-icon-01.jpg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/shem_fw/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/shem_fw/css/bootstrap.min.css">
    <link href="<?php bloginfo('template_url'); ?>/shem_fw/css/shem.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/shem_fw/js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/shem_fw/js/action.js"></script>
    <script type="text/javascript" src="wp_redirect( $url );shem_fw/js/bootstrap.min.js"></script>

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>


  <div class="moo-sda-nav">
    <a href="<?php echo home_url(); ?>">
    <div class="logo">
      <?php echo get_the_post_thumbnail(1); ?>
    </div></a>

    <div class="moo-sda-nav__prayer"><p>prayer</p></div>
    <div class="moo-sda-nav__donate"><?php include 'forms/donate-button.php'; ?></div>
    <div class="moo-sda-nav__prayer-mobile"><img class="nav-images" src="<?php bloginfo('template_url'); ?>/forms/images/moo_sda_donationPrayer_buttons-02.png" alt=""></div>
    <div class="moo-sda-nav__donate-mobile"><?php include 'forms/donate-button-mobile.php'; ?></div>


    <div class="moo-sda-prayer__form-container">
      <div class="moo-sda-prayer__form-divider"></div>
        <div class="moo-sda-prayer__form">
          <div class="moo-sda-prayer__form-close glyphicon glyphicon-remove">
            
          </div>
          <?php include 'forms/prayer.php'; ?>
      </div>
    </div>

    <div class="moo-sda-nav__links">
      <div class="moo-sda-nav__links--right">
        <?php wp_nav_menu(array("theme_location" => "header")); ?>
      </div>
      
      <div class="moo-sda-nav__links-mobile-button glyphicon glyphicon-align-justify">
          
      </div>
      <div class="moo-sda-nav__links-mobile-drop">
          <?php wp_nav_menu(array("theme_location" => "header")); ?>

          <div class="hover_out"></div>
      </div>  
    </div>

  </div>


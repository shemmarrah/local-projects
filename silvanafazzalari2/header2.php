<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Silvana Fazzalari | Silvana | Fazzalari -->
<title>silvana fazzalari</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=0.8">
<meta name="referrer" content="origin-when-crossorigin">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="author" content="Shemmarrah John" />
<meta name="description" content="Silvana Fazzalari, superb photographer and videographer"/>
<meta name="keywords" content="Silvana Fazzalari, Silvana, Fazzalari" />
<meta name="Resource-type" content="Document" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/shem_fw/images/dphiius_logo-icon-01.jpg">
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/shem_fw/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/shem_fw/css/jquery.fullPage.css" />
<!-- <link rel="stylesheet" type="text/css" href="css/action.css" /> -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/shem_fw/css/slider_fx/style.css" />
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/shem_fw/css/bootstrap.min.css">
<link href="<?php bloginfo('template_url'); ?>/shem_fw/css/silvana.css" rel="stylesheet" type="text/css" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="sf2-contact-wrapper">
  <div class="sf2-contact__form-container">
    <div class="sf2-contact__form-divider"></div>
      <div class="sf2-contact__form">
        <div class="sf2-contact__form-d"></div>
          <div class="sf2-contact__form-close glyphicon glyphicon-remove"> 
        
          </div>
          <?php include 'forms/contactForm.php'; ?>
    </div>
  </div>
</div>
<div class="logo"><a href="index.php"><?php echo get_the_post_thumbnail(438); ?></a></div>
<div class="logo2"><a href="index.php"><?php echo get_the_post_thumbnail(441); ?></a></div>

<div class="nav-icon2 cross">
    <div class="span nav-icon-background"></div>
</div>

<div class="menubar">
  <div class="menubar__logo"><?php echo get_the_post_thumbnail(438); ?></div>
  <!-- <div class="menubar__links">
    <ul>
      <li><a href="index.php" title="">Home</a></li>
      <li><a href="" title="" class="active">Fashion</a></li>
      <li><a href="" title="">Motion</a></li>
      <li><a href="" title="">Creative Directive</a></li>
      <li><a href="" title="">Tears</a></li>
      <li><a href="" title="">About</a></li>
    </ul> 
  </div> -->
  <?php wp_nav_menu(array("theme_location" => "sf2-header")); ?>
  <!-- <div class="menubar__links-fashion">
    <ul>
      <li><a href="" title="">Editorial</a></li>
      <li><a href="" title="">Commercial</a></li>
      <li><a href="" title="">Beauty</a></li>
    </ul>

  </div> -->

  <?php wp_nav_menu(array("theme_location" => "sf2-header-fashion")); ?>
  <div class="menubar__social-media">
    <ul>
      <li><a href="https://www.instagram.com/silvanafazz/" target="__blank"><?php echo get_the_post_thumbnail(99); ?></a></li>
        <li><a href="https://www.facebook.com/SilvanaFazzalariPhotography/" target="__blank"><?php echo get_the_post_thumbnail(107); ?></a></li>
        <li><a href="#" target="__blank"><?php echo get_the_post_thumbnail(109); ?></a></li>
    </ul>
  </div>
</div>


<div class="sf2-about-wrapper">
<div class="sf2-about-tint"></div>
<div class="sf2-about">
<h3>About</h3>
<p>MY WORK QUESTIONS AND CHALLENGES THE INDUSTRY BY HYPEREXTENDING THE UNWRITTEN BOUNDARIES AND RULES THAT ARE CONSTANTLY RESHAPED AND REDEFINED BY OUR CULTURE, THE OVERALL MEANING OF WHAT “ART” IS, WHAT “FASHION” IS AND WHAT “PHOTOGRAPHY” IS. I AIM TO EXTEND AND DEVELOP THE PHOTOGRAPHIC FASHION EXPERIENCE BEYOND A MARKETING STRATEGY.

MY IMAGERY EXPLORES THE POTENTIAL OUTPUT AND ELEVATION OF THE PHOTOGRAPHIC EXPERIENCE WITH INTEREST IN INSTALLATION AND DIGITAL TECHNOLOGIES. EXCLUSIVELY SHOOTING FEMALE SUBJECTS, THE MINIMALISTIC MEETS ART DECO AESTHETIC GRABS ONTO IDEALS OF TECHNOLOGY AND COMMERCIALISM WITHIN THE FASHION INDUSTRY WHILE WORKING WITH PHOTOGRAPHY, VIDEO AND INTERACTIVE MEDIUMS TO GENERATE IMMERSIVE VIEWER PARTICIPATORY WORKS.

I WANT TO FUSE FASHION WITH EXPERIENCE TO CREATE A WORLD WHERE THERE IS NO RIGHT OR WRONG, WHERE THE UNIQUE RULES AND NORMALITY IS OREIGN, WHERE BEAUTY EXISTS IN ALL AND WOMEN ARE VIEWED AS POWERFUL, GRACEFUL AND STRONG; A PROGRESSIVE WORLD WHERE TECHNOLOGY IS THE FUTURE OF FASHION.</p>
</div>
</div>  
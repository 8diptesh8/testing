<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package designway
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- bootstrap 5-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/plugins/bootstrap5/css/bootstrap.min.css'?>">
	<!-- animation -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/plugins/aos/dist/aos.css'?>">
	<!-- styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/customStyles.css'?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/responsive.css'?>">
	<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'preganews' ); ?></a>

	<header id="masthead" class="site-header menuHead">

	<nav class="navbar navbar-expand-lg topBar">
  	<div class="container">
    <a class="navbar-brand brandLogo" href="#"><img src="<?php echo get_template_directory_uri().'/assets/images/metareverse_logo.png'?>"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"><img src="<?php echo get_template_directory_uri().'/assets/images/hamburger.svg'?>"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav navBtn">
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-secondary" href="#">Registration</a>
        </li>
      </ul>
      <div class="menuDet forTab">
    	<div class="callDet">
    		<img src="<?php echo get_template_directory_uri().'/assets/images/phone-solid.svg'?>">
      	<h6>call now:</h6>
      	<span><a href="#">0203 302 0476</a></span>
      </div>
      <div class="telDet">
      	<img src="<?php echo get_template_directory_uri().'/assets/images/telegram.svg'?>">
      	<h6>telegram:</h6>
      	<span><a href="#">@metareverse</a></span>
      </div>
      </div>
    </div>
    <div class="menuDet">
    	<div class="callDet">
    		<img src="<?php echo get_template_directory_uri().'/assets/images/phone-solid.svg'?>">
      	<h6>call now:</h6>
      	<span><a href="#">0203 302 0476</a></span>
      </div>
      <div class="telDet">
      	<img src="<?php echo get_template_directory_uri().'/assets/images/telegram.svg'?>">
      	<h6>telegram:</h6>
      	<span><a href="#">@metareverse</a></span>
      </div>
      </div>
  </div>
</nav>

	</header><!-- #masthead -->

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
  
		<nav class="main-navigation">
             
                <button class="menu-burger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                </button>
                <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                <ul class="nav-menu"> 
                    <li class="nav-item"><a href="#place">Lieu</a></li>
                    <li class="nav-item"><a href="#studio">Studio Koukaki</a></li>
                    <li class="nav-item"><a href="#story">Histoire</a></li>
                    <li class="nav-item"><a href="#characters">Personnages</a></li>
                </ul>

                
        <!-- Ajout de la video et de l'image fallback --> 

        <div class="header-content fade-in-section fade-in-section-top">
            <video id="header-video" autoplay muted loop playsinline poster="<?php echo get_template_directory_uri() . '/assets/images/image-fallback-header.png'; ?>">
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/header-video.mp4" type="video/mp4">
            </video>
            <img id="header-logo" class="logo-animation" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-parallax.png" alt="Logo">
        </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

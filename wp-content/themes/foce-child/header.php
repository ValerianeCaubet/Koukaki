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
  
    <nav id="site-navigation" class="main-navigation">
            <div class="boutonMenu">
				<span> </span>
	        </div>
	        <ul>
		    	<li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
	        </ul>
	    </nav><!-- #site-navigation -->


                <section class="menu-items MenuFull">
        	<div class="menu-items__container">
          		<img class="logoMenu"         src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/logomenu.png'; ?>" alt="logo menu">		      
          		<img id="catMenuBleu"         src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/bluecat.png'; ?>" alt="Chat bleu">
			    <img id="catMenuBlack"        src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/blackcat.png'; ?>" alt="Chat noir">
			    <img id="catMenuOrange"       src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/orangecat.png'; ?>" alt="Chat orange">
			    <img id="fleurMenuSunFlower"  src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/whiteflower.png'; ?>" alt="Fleur blanche">
			    <img id="fleurMenuOrchid"     src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/purpleflower.png'; ?>" alt="Orchidée violette">
			    <img id="fleurMenuHibiscus"   src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/orangeflower.png'; ?>" alt="Hibiscus orange">
			    <img id="fleurMenuRandom"     src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/pinkflower.png'; ?>" alt="fleur rose">
			    <img id="fleurMenuFlower"     src="<?php echo get_stylesheet_directory_uri() . '/assets/menuburger/flowers.png'; ?>" alt="Petite fleurs">
			    <ul class="liste">
					<li><a href="#story"><span class="Animetitre2">Histoire</span></a></li>
					<li><a href="#characters"><span class="Animetitre2">Personnages</span></a></li>
					<li><a href="#place"><span class="Animetitre2">Lieu</span></a></li>
					<li><a href="#studio"><span class="Animetitre2">Studio Koukaki</span></a></li>
			    </ul>
				<p class="menuParagraphe">STUDIO KOUKAKI</p>
			</div>
		</section>

	</header><!-- #masthead -->

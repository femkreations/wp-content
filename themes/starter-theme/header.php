<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Starter_Theme
 */
?>
 
<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
 
<head>
    <meta charset="<?php bloginfo( "charset" ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <?php wp_head(); // Lets other plugins and files tie into our theme's <head>?>
</head>
 
<body <?php body_class(); ?>>
<div id="page">

    <header id="top" role="banner" class="site-header container">
        <a href="#main" class="visuallyhidden focusable" id="skiptomain"><?php esc_html_e('Skip to content', 'starter-theme'); ?></a>
        
        <h1>
            <a href="<?php echo esc_url( home_url( "/" ) ); ?>">
                <img src="<?php echo get_theme_mod('header_image'); ?>">
                <?php bloginfo("name"); ?>
            </a>
        </h1>

        <nav class="siteNavigation--Main" role="navigation">
            <ul class="siteMenu">
                <?php wp_nav_menu( array( "theme_location" => "primary", "container" => '', 'items_wrap'=> '%3$s' ) ); ?>
            </ul><!-- .menu -->
        </nav><!-- siteNavigation -->  
    </header><!--  .container -->

    <main id="main">
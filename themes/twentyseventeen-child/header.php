<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
			<p>BREAKING...</p>
			<h1>TOP STORIES</h1> 



			<!DOCTYPE html>
<html>
<head>
	<title>Welcome home!</title>
</head>

<body>
	<h1 id="main">Across Africa<h1>
	<div id="regions">
	<h2>subscribe here</h2>
	
	<ul>
		<li>North Africa</li>
		<li>East Africa</li>
		<li>South Africa</li>
		<li>Central Africa</li>
		<li>West Africa</li>
	</div>

	<h1>Politics</h1>
	  <ul>
	  	<li>News and Analysis</li>
	  	<li>Elections</li>
	  	<li>Politician profile</li>
	  	<li>Press Releases</li>
	  </ul>
    
    <h1>Business</h1>
      <ul>
      	<li>Events</li>
      	<li>Technology</li>
      	<li>Business opportunities</li>
      	<li>Banking</li>
      </ul>

    <h1>Arts and Culture</h1>
      	<ul>
        <li>Music and film</li>
        <li>Books</li>
        <li>Health</li>
        <li>Society</li>
       </ul>
    
      
      <h1></h1>
	
	<h1></h1>
	<img src="https://cdn4.vectorstock.com/i/1000x1000/79/58/african-map-vector-627958.jpg" alt="Aftican map" width="100px">


	
</body>


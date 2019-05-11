<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'  => '</div>',
				)
			);
			?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My contact</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <h1>welcome to my contact</h1>
	<p class="p-welcome">Name:Solomon Abo</p>
	<p class="p-welcome">Email:sa1530@georgetown.edu</p>
	<p class="p-welcome">Location:Washington DC</p>
	<a href="final-project.html">visit font page here</a>
</body>
</html>

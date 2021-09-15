<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package locncapture
 */

?>

<div class="card">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
		locncapture_post_thumbnail();
	?>

	<header class="entry-header">
		<?php
			the_title();
		?>
	</header><!-- .entry-header -->

	<!-- <div class="entry-content">
		<?php
			the_content();
		?>
	</div> -->
	
	

	</article><!-- #post-<?php the_ID(); ?> -->
</div>



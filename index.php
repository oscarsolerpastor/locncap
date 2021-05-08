<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package locncapture
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php query_posts('posts_per_page=1&category_name=heroes&orderby=rand'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- Hero -->

			<div class="hero">
				<div class="hero-inner container">
					<div class="hero-text">
						<h1 class="hero-title">We are <span class="text-highlight">localization</span> <span class="text-underline"><?php the_title(); ?></span></h1>
						<p class="hero-description">In <span class="text-highlight"><?php bloginfo('name'); ?></span> we offer integral multimedia localization services in any language</p>
						<button class="primary-button">Ask for the reel!</button>
					</div>
					<div class="hero-image"><img src="<?php bloginfo('template_url'); ?>/assets/locncap-hero.gif"></div>
				</div>
			</div>

		<?php
			endwhile;
			endif;
		?>

		<!-- Intro -->
		
		<?php query_posts('posts_per_page=1&post_type=intro'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="intro">
				<div class="container section-inner">
					<video autoplay muted loop=infinite>
						<source src="<?php bloginfo('template_url'); ?>/assets/locncap-starfox.mp4" type="video/mp4">
					</video>
					<div class="text-block">
						<h2 class="section-title"><?php the_title(); ?></h2>
						<p class="section-description"><?php the_content(); ?></p>
					</div>
				</div>
			</div>

		<?php
			endwhile;
			endif;
		?>

		<!-- Services -->

		<div class="services">
			<div class="container">
				<h2 class="section-title">What we <span class="text-highlight">offer</span></h2>
				<div class="services-grid">
					<?php query_posts('posts_per_page=20&category_name=services&order=asc'); ?>
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>	
			</div>
		</div>

		<!-- About -->

		<?php query_posts('posts_per_page=1&post_type=about'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="about">
				<div class="container section-inner">
					<div class="text-block">
						<h2 class="section-title"><?php the_title(); ?></h2>
						<p class="section-description"><?php the_content(); ?></p>
					</div>
					<video autoplay muted loop=infinite>
						<source src="<?php bloginfo('template_url'); ?>/assets/locncap-ninjas.mov">
					</video>
				</div>
			</div>

		<?php
			endwhile;
			endif;
		?>

		<!-- Requirements -->

		<?php query_posts('posts_per_page=1&post_type=requirement'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="requirements">
				<div class="container section-inner">
					<div class="text-block">
						<h2 class="section-title"><?php the_title(); ?></h2>
						<p class="section-description"><?php the_content(); ?></p>
					</div>
				</div>
			</div>

		<?php
			endwhile;
			endif;
		?>
		

	</main><!-- #main -->

<?php
get_footer();

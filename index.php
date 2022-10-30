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

			<div class="hero" id="hero">
				<div class="container hero-inner">
					<div class="hero-content">
						<h1 class="hero-title">We are <span class="text-highlight">localization</span> <span class="text-underline"><?php the_title(); ?></span></h1>
						<p class="hero-description"><?php pll_e('In'); ?> <span class="text-highlight"><?php bloginfo('name'); ?></span> <?php pll_e('we offer integral multimedia localization services in any language'); ?></p>
						<a href="<?php echo site_url('/reel'); ?>"><button type="button"><?php pll_e('Ask for the reel!'); ?></button></a>
					</div>
					<div class="hero-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/locncap-hero.gif" class="animate">
						<div id="modalBtn" class="modal-trigger"></div>
					</div>
					<div id="videoModal" class="modal">
						<video controls poster="https://locncapture.com/wp-content/themes/locncapture/img/videoposter.png">
							<source src="https://locncapture.com/wp-content/themes/locncapture/vid/TheLoc&Capture_manifesto.mp4" type="video/mp4">
							<source src="https://locncapture.com/wp-content/themes/locncapture/vid/TheLoc&Capture_manifesto.ogg" type="video/ogg">
							<source src="https://locncapture.com/wp-content/themes/locncapture/vid/TheLoc&Capture_manifesto.webm" type="video/webm">
						</video>
						<span id="closeBtn" class="modal-close">&times;</span>
					</div>
				</div>
			</div>

		<?php
			endwhile;
			endif;
		?>

		<!-- Services -->
		
		<?php query_posts('posts_per_page=1&post_type=intro'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<section class="services" id="services">
				<div class="container section-inner-half">
					<div class="services-video">
						<video src="<?php bloginfo('template_url'); ?>/assets/locncap-starfox.mp4" type="video/mp4" autoplay loop muted class="#video-play animated"></video>
					</div>
					<div class="text-block">
						<h2 class="section-title"><?php the_title(); ?></h2>
						<p class="section-description"><?php the_content(); ?></p>
					</div>
				</div>
		</section>

		<?php
			endwhile;
			endif;
		?>

		<!-- Characters -->

		<section class="characters" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/players-background-pattern.jpg');">
			<div class="container section-inner-full">
				<h2 class="section-title" style="text-align: center"><?php pll_e('Choose your'); ?> <span class="text-highlight"><?php pll_e('player'); ?></span></h2>
				<div class="videogame">
					<div class="players">
						<div class="player player-1">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-01-hover.png" alt="player 01">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-01.png" alt="player 01" class="featured-player">
						</div>
						<div class="player player-2">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-02-hover.png" alt="player 02">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-02.png" alt="player 02" class="featured-player">
						</div>
						<div class="player player-3">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-03-hover.png" alt="player 03">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-03.png" alt="player 03" class="featured-player">
						</div>
						<div class="player player-4">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-04-hover.png" alt="player 04">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-04.png" alt="player 04" class="featured-player">
						</div>
						<div class="player player-5">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-05-hover.png" alt="player 05">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-05.png" alt="player 05" class="featured-player">
						</div>
						<div class="player player-6">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-06-hover.png" alt="player 06">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-06.png" alt="player 06" class="featured-player">
						</div>
						<div class="player player-7">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-07-hover.png" alt="player 07">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-07.png" alt="player 07" class="featured-player">
						</div>
						<div class="player player-8">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-08-hover.png" alt="player 08">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-08.png" alt="player 08" class="featured-player">
						</div>
						<div class="player player-9">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-09-hover.png" alt="player 09">
							<img src="<?php bloginfo('template_url'); ?>/assets/player-09.png" alt="player 09" class="featured-player">
						</div>
					</div>
					<div class="choosed-player">
						<video src="<?php bloginfo('template_url'); ?>/assets/player-09-loop.webm" type="video/webm" autoplay loop muted></video>
					</div>
				</div>
			</div>
		</section>

		<!-- Offer -->

		<section class="offer" id="offer">
			<div class="container section-inner-full">
				<h2 class="section-title"><?php pll_e('What we'); ?> <span class="text-highlight"><?php pll_e('offer'); ?></span></h2>
				<div class="offer-grid">
					<?php query_posts('posts_per_page=20&category_name=services&order=desc'); ?>
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
		</section>

		<!-- About -->

		<?php query_posts('posts_per_page=1&post_type=about'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="about" id="about">
			<div class="container section-inner-half">
				<div class="about-video">
					<video id="video-play" class="animate" autoplay muted loop=infinite>
						<source src="<?php bloginfo('template_url'); ?>/assets/locncap-scene-about.mp4" type="video/mp4">
					</video>
				</div>
				<div class="text-block">
					<h2 class="section-title"><?php the_title(); ?></h2>
					<p class="section-description"><?php the_content(); ?></p>
				</div>
			</div>
		</section>

		<?php
			endwhile;
			endif;
		?>

		<!-- Contact -->

		<div class="contact" id="contact">
			<div class="container section-inner-half">
				<div class="text-block">
					<span class="wave">👋🏻</span>
					<h2 class="contact-title"><?php pll_e('Send us a message to'); ?> <a href="mailto:hola@locncapture.com">hola@locncapture.com</a> <?php pll_e('and tell us what you need'); ?>.</h2>
					<p><?php pll_e('Visit us at'); ?> <a href="http://maps.google.com/?q=María de Molina 41, Oficina 317 (Spaces) Madrid 28006" target="_blank"Calle de >María de Molina 41, Oficina 317 (Spaces) Madrid 28006</a></p>
				</div>
			</div>
		</div>


		<!-- Requirements -->

		<!-- <?php query_posts('posts_per_page=1&post_type=requirement'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="requirements">
				<div class="container section-inner-left">
					<div class="text-block">
						<h2 class="section-title"><?php the_title(); ?></h2>
						<p class="section-description"><?php the_content(); ?></p>
					</div>
				</div>
			</div>

		<?php
			endwhile;
			endif;
		?> -->
		

	</main><!-- #main -->

	<?php
	get_footer();



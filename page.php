<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package locncapture
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="page-content">
				<?php
					$pageid = get_the_id();
					$content_post = get_post($pageid);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					echo $content;
				?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();

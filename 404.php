<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package locncapture
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="page-content">
				<h1 class="page-title"><?php pll_e('Oops! That page can&rsquo;t be found'); ?>.</h1>
			</div>
		</div>
	</main><!-- #main -->


<?php
get_footer();

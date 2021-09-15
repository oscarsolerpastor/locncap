<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package locncapture
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
		<div class="footer-content">
			<div class="footer-logo">
				<img src="<?php bloginfo('template_url'); ?>/assets/locncap-logo-white.svg" class="logo"></div>
			<div class="footer-legal">
				<div>
					<p>Loc & Capture <?php echo date("Y"); ?> &copy; All rights reserved.</p>
				</div>
				<div>
					<a href="">Terms and conditions</a>
				</div>
				<div>
					<a href="https://www.linkedin.com/company/locncapture/"><img src="<?php bloginfo('template_url'); ?>/assets/linkedin-logo.svg"></a>
				</div>
				
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

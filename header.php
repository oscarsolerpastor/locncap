<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package locncapture
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'locncapture' ); ?></a>

	<header id="masthead">

		<div class="container header-inner">

			<div class="site-branding">
				<a href="<?php echo get_site_url(); ?>">
					<img src="<?php bloginfo('template_url'); ?>/assets/locncap-logo.svg" class="logo">
				</a>
			</div><!-- .site-branding -->

			<a href="#" class="toggle-nav"> 
				<img src="<?php bloginfo('template_url'); ?>/assets/toggle.svg">
			</a>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>

				<div class="language-select">
					<a lang="en-US" hreflang="en-US" href="<?php echo site_url(''); ?>">EN</a>
					|
					<a lang="es-ES" hreflang="es-ES" href="<?php echo site_url('/es'); ?>">ES</a>
				</div>

			</nav><!-- #site-navigation -->
			
			

		</div>

	</header><!-- #masthead -->

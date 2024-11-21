<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Palm_Code_Assesment
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
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e( 'Skip to content', 'palm-code-assesment' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<?php
				the_custom_logo();
				?>
				<!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" type="button">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							viewBox="0 0 50 50" width="24px" height="24px">
							<line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="50" y1="25"
								x2="0" y2="25" />
							<line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="50" y1="10"
								x2="0" y2="10" />
							<line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="0" y1="40"
								x2="50" y2="40" />
						</svg>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>

				</nav><!-- #site-navigation -->

				<a href="#" class="button-transparent">Jetz Anfragen</a>
			</div>
		</header><!-- #masthead -->
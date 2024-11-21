<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Palm_Code_Assesment
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<div class="widget widget-address">
				<?php the_custom_logo(); ?>
				<p class="font-bold text-lg leading-[22px]">
					Alarm­anlagen­bau-Korsing<br />
					GmbH & Co. KG
				</p>
				<p>
					Walter-Korsing-Straße 21<br />15230 Frankfurt (Oder)
                </p>
			</div>
			<div class="widget">
				<h3 class="widget-title">Unternehmen</h3>
				<div class="widget-content">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-1',
							'menu_id' => 'footer-1',
							'class' => 'footer-menu',
						)
					); ?>
				</div>
			</div>
			<div class="widget">
				<h3 class="widget-title">Leistungen</h3>
				<div class="widget-content">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-2',
							'menu_id' => 'footer-2',
							'class' => 'footer-menu',
						)
					); ?>
				</div>
			</div>
			<div class="widget">
				<h3 class="widget-title">Den Kontakt Halten</h3>
				<div class="widget-content">
					<p>
						<a href="tel:+49335545620">+49 335 545620</a>
					<p>
					<p>
						<a href="mailto:info@alarm­anlagen­bau-korsing.de">
							info@alarm­anlagen­bau-korsing.de
						</a>
					</p>
				</div>

			</div>

		</div><!-- .site-info -->
		<div class="bottom-link">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'bottom',
					'menu_id' => 'bottom',
					'class' => 'bottom-menu',
				)
			); ?>
		</div>
	</div>
</footer><!-- #colophon -->
<aside class="offcanvas-menu -right-80">
	<button type="button" class="close-menu">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"
			width="50px" height="50px">
			<line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="7" y1="7" x2="43" y2="43" />
			<line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="43" y1="7" x2="7" y2="43" />
		</svg>
	</button>
	<?php the_custom_logo(); ?>
	<?php wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id' => 'primary-menu',
		)
	); ?>
	<a href="#" class="button-transparent">Jetz Anfragen</a>
</aside>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
<section class="our-testimonial regular-section">
	<div class="container">
		<header>
			<h2 class="section-title">Was unsere Kunden sagen</h2>
			<hr />
			<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
				tempor incididunt ut labore et
				dolore magna aliqua.</p>
		</header>
		<div class="slick-container">
			<div class="slick">
				<?php
				$args = array(
					'post_type' => 'testimonial',
					'no_found_rows' => true,
					'update_post_term_cache' => false,
					'update_post_meta_cache' => false,
				);

				$query = new \WP_Query( $args );

				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						?>
						<div>
							<div class="card">
								<div class="rating">
									<?php
									$rating = carbon_get_the_post_meta( 'rating' );
									for ( $i = 0; $i < $rating; $i++ ) {
										?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" alt="star">
										<?php
									}
									?>
								</div>
								<p><?php the_content(); ?></p>
								<span class="author"><?php the_title(); ?></span>
							</div>
						</div>
						<?php
					}
				}

				wp_reset_postdata();
				wp_reset_query();
				?>
			</div>
		</div>
	</div>
</section>
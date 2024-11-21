<section class="our-services regular-section">
	<div class="container">
		<header>
			<h2 class="section-title">Our Services</h2>
			<hr />
			<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
				tempor incididunt ut labore et
				dolore magna aliqua.</p>
		</header>
		<div class="content">
			<?php
			$args = array(
				'post_type' => 'service',
				'posts_per_page' => 5,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'no_found_rows' => true,
				'update_post_term_cache' => false,
				'update_post_meta_cache' => false,
			);

			$query = new \WP_Query( $args );


			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<div class="card">
						<figure>
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
							<figcaption>
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?></p>
							</figcaption>
						</figure>
					</div>
					<?php
				}
			}

			wp_reset_postdata();
			wp_reset_query();
			?>

			<div class="card flex flex-col justify-center gap-4 ">
				<p class="!text-[22px] !leading-[27px] !font-bold">Lorem Ipsum</p>
				<a href="#" class="font-bold !text-sm !leading-[17px]">Jetz Anfragen &gt;</a>
			</div>
		</div>
	</div>
</section>
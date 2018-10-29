<section class="masthead">
	<div class="container masthead-slider">
		<?php

		$selected_posts = get_sub_field('selected_posts');

		// The Query

		if ($selected_posts) {
			$args = array(
				'post__in' => $selected_posts,
				// 'orderby' => 'post__in',
				'post_date' => 'DESC'
			);
		} else {
			$args = array(
				'posts_per_page' => 5
			);
		}
		$the_query = new WP_Query($args);

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) { 
				$the_query->the_post();
				$category = get_the_category(); 

				$count = 0;

				foreach ($category as $key => $cat) {
					if ($cat->parent !== 5 && $cat->parent !== 2) {
						if ($count === 0) {
							$displayCat = $cat;
							$count = 1;
						}
					}
				}
				?>
				<div>
				<div class="row middle-xs">
					<div class="col-xs-12 col-md-6 last-md first-xs">
						<a href="<?php echo get_the_permalink(); ?>">
						<div class="box">

							<img class="jarallax-img" src="<?php echo get_the_post_thumbnail_url(); // Fullsize image for the single post. ?>" alt="">
							<!-- <div class="jarallax" data-speed="0.96" data-jarallax>
								<img class="jarallax-img" src="http://placehold.it/650x360" alt="">
							</div> -->
							<span class="image-credit"><img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/ltklogo.svg"><?php echo get_field('ltk_publisher'); ?></span>
						</div>
					</a>
					</div>
					<div class="col-xs-12 col-md-6 last-xs first-md">
						<div class="box">
							<h4><?php echo $displayCat->name; ?></h4>
							<a href="<?php echo get_the_permalink(); ?>"><h1><?php echo get_the_title(); ?></h1></a>
							<p><?php echo get_the_excerpt(); ?></p>
							<?php echo do_shortcode('[ssba-buttons url="' . get_the_permalink() . '" title="' . get_the_title() .'"]'); ?>
							<a href="<?php echo get_the_permalink(); ?>" class="btn btn-outline">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<?php }
			wp_reset_postdata();
		} else {
			// no posts found
		}

		?>
	</div>
</section>
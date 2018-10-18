<?php get_header(); ?>

	<main role="main" aria-label="Content">
	<!-- section -->
	<section class="single-post">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-7 content">
					<div class="box">
						<?php if ( have_posts() ) : while (have_posts() ) : the_post(); 

							$is_sponsored = get_field('is_sponsored');

							?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php

								$category = get_the_category(); 
								$tags = get_the_tags(); 

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


								<a class="category" href="<?php echo site_url(); ?>/categories/<?php echo $displayCat->slug; ?>"><h4><?php echo $displayCat->name; ?></h4></a>

								<!-- post title -->
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1>
									<?php the_title(); ?>
								</h1></a>
								<!-- /post title -->

								<?php if ($is_sponsored) { ?>
									<div class="sponsored-by">
										<h3>Sponsored By <img src="<?php echo get_field('sponsored_by_logo'); ?>"></h3>
									</div>
								<?php } ?>

								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail(); // Fullsize image for the single post. ?>
									</a>
									<a title="View posts by emmahill" class="image-credit" href="<?php echo site_url(); ?>/tag/<?php echo get_field('ltk_publisher'); ?>/"><img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/ltklogo.svg"><?php echo get_field('ltk_publisher'); ?></a>
								<?php endif; ?>
								<!-- /post thumbnail -->

								

								<!-- post details -->
								<span class="date">
									<time datetime="<?php the_time( 'n.j.y' ); ?>">
										<?php the_date( 'n.j.y' ); ?>
									</time>
								</span>

								<?php the_content(); // Dynamic Content. ?>

								<div class="post-tags">
									<ul>
									<?php 

									if ($tags) {
										foreach ($tags as $key => $tag) { ?>									
										<li>
											<a href="<?php echo site_url(); ?>/tag/<?php echo $tag->slug; ?>/"><?php echo $tag->slug; ?></a>
										</li> 
									<?php } 
									 } ?>
									</ul>
								</div>



								<?php echo do_shortcode('[ssba-buttons]'); ?>

								<section class="ltk-posts">
									<div class="ltk-slider">
										<?php 
										if( have_rows('ltk_code_blocks') ):

									 	// loop through the rows of data
									    while ( have_rows('ltk_code_blocks') ) : the_row();

									        // display a sub field value
									        the_sub_field('code_block');
									    endwhile;
									else :

									endif;
										?>
										<div>
											<?php if (get_sub_field('slide_headline')) { ?>
												<div class="row">
													<div class="col-xs-12">
														<div class="box">
															<a href="<?php echo get_sub_field('slide_url'); ?>" target="_blank">
																<div class="app-banner">
																	<h1 class="text--white"><?php echo get_sub_field('slide_headline'); ?></h1>
																	<p class="text--white"><?php echo get_sub_field('slide_copy'); ?></p>
																	<a href="<?php echo get_sub_field('slide_url'); ?>" target="_blank" class="btn"><?php echo get_sub_field('slide_cta'); ?></a>
																</div>
															</a>
														</div>
													</div>
												</div>
											<?php } else { ?>
												<div class="row">
													<div class="col-xs-12">
														<div class="box">
															<a href="https://ltk.app.link/5GbVhN7o9N" target="_blank">
																<div class="app-banner">
																	<h1 class="text--white">Download the app.</h1>
																	<p class="text--white">discover and follow your favorite influencers</p>
																	<a href="https://ltk.app.link/5GbVhN7o9N" target="_blank" class="btn">DOWNLOAD</a>
																</div>
															</a>
														</div>
													</div>
												</div>
											<?php } ?>
											
										</div>

									</div>

									<div class="arrows">
										<i class="fas fa-chevron-left prev"></i>
										<i class="fas fa-chevron-right next"></i>
									</div>
								</section>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else : ?>

							<!-- article -->
							<article>

								<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

							</article>
							<!-- /article -->

						<?php endif; ?>

					</div>
				</div>
				<div class="col-xs-12 col-md-offset-2 col-md-3">
					<div class="box sidebar">
						<div class="ad-slider">
							<?php 

							$tags = get_the_tags();
							$r_tags = [];

							if (get_field('sponsored_ad_post')) {
								$ad_args = array(
									'p' => get_field('sponsored_ad_post')->ID
								);
							} else {
								$ad_args = array( 
									'post_type' => 'rs_advertisement',
									'post_status' => 'publish',
									'tag' => 'sidebar'
								);
							}

							

							$ads = new WP_Query($ad_args);

							if ( $ads->have_posts() ) : while ($ads->have_posts() ) : $ads->the_post();

								$url = get_field('url'); 
								$desktop_image = get_field('desktop_image'); ?>
	 								<div>
										<a href="<?php echo $url; ?>" target="_blank" class="ad-banner">
											<img src="<?php echo get_field('desktop_image'); ?>" class="hide-mobile" style="width: 100%;">
											<img src="<?php echo get_field('mobile_image'); ?>" class="show-mobile" style="width: 100%;">
										</a>
								</div>

								<?php endwhile;

								endif;

							?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /section -->
	
	<section class="posts-tiles">
			<div class="container">
				<div class="row middle-xs start-xs">
					<div class="col-xs-12">
						<div class="box">
							<h1>You may also like...</h1>
						</div>
					</div>
				</div>
				<div class="row middle-xs start-xs">
					<div class="post-slider">

					<?php

						// $tags = wp_get_post_tags($post->ID);
						$r_categories = [];

						foreach ($category as $key => $cat) {
							array_push($r_categories, $cat->term_id);
						}

						$related_query = new WP_Query( 
							array( 
								'post__not_in' => array($post->ID),
								'posts_per_page' => 10,
								'category__in' => $r_categories
							)
						);

						if ($related_query->have_posts()) : while ($related_query->have_posts()) : $related_query->the_post(); 


							?>
							
							<?php get_template_part( 'card-loop' ); ?>

							<?php

						endwhile; 

						wp_reset_postdata();
					endif;


					?>


				</div>
			</div>
		</div>
	</section>

	<?php

	get_template_part('partials/section', 'capture_bar');

	?>
</main>
<?php $blob = get_the_title(); ?>

<input type="hidden" id="pageTitle" value="<?php print (str_replace(' ', '_', strtolower($blob))); ?>">



<?php get_footer(); ?>

<?php get_header(); ?>


	<section class="general-page-header" style="background: url('<?php echo get_the_post_thumbnail_url(); // Fullsize image for the single post. ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">
		<div class="container">
			<div class="row middle-xs">
				<div class="col-xs-12 col-md-6">
					<div class="box">
						<div class="header-box">
							<h2 class="text--white">Title</h2>
							<h2 class="text--white bottom-line">Subheader</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php if (get_field('has_sidebar')) { ?>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-7 content">
						<div class="box">

							<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

								<!-- article -->
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<?php the_content(); ?>

								</article>
								<!-- /article -->

							<?php endwhile; ?>

							<?php else : ?>

								<!-- article -->
								<article>

									<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

								</article>
								<!-- /article -->

							<?php endif; ?>

						</div>
					</div>
					<div class="col-xs-12 col-md-offset-1 col-md-4">
						<div class="box sidebar">
							<div class="ad-slider">
								<?php

								$ad_args = array(
									'p' => get_field('advertisement')->ID,
									'post_type' => 'rs_advertisement'
								);

								$ads = new WP_Query($ad_args);

								if ( $ads->have_posts() ) : while ($ads->have_posts() ) : $ads->the_post(); 
									$url = get_field('url'); 
									$desktop_image = get_field('desktop_image');
									?>

									<div>
											<a href="<?php echo $url; ?>" target="_blank" class="ad-banner">
												<img src="<?php echo get_field('desktop_image'); ?>" class="hide-mobile" style="width: 100%;">
												<img src="<?php echo get_field('mobile_image'); ?>" class="show-mobile" style="width: 100%;">
											</a>
									</div>

								<?php endwhile;
								wp_reset_postdata();
									endif;

								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> 

	<?php } else { ?>


		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12 content">
						<div class="box">

							<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

								<!-- article -->
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<?php the_content(); ?>

								</article>
								<!-- /article -->

							<?php endwhile; ?>

							<?php else : ?>

								<!-- article -->
								<article>

									<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

								</article>
								<!-- /article -->

							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</section> 

	<?php } ?>
<?php get_footer(); ?>

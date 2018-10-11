<?php

$count = get_sub_field('count');

if (!$count) {
	$count = 10;
}

$tags = get_sub_field('taxonomy');
$categories = get_sub_field('category');
// $sort_by = get_sub_field('sort_by');

$query = new WP_Query( 
		array( 
			'category__in' => $categories,
			'tag__in' => $tags,
			'posts_per_page' => $count
		)
	);

?>

<section class="posts-grid">
	<div class="container">
		<div class="row">
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 

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
			<div class="col-xs-12 col-md-4">
				<div class="box">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<article>
						<div class="row">
							<div class="col-xs-5 col-md-5">
								<figure style="max-width: 100%;">
									<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<div class="grid-image" style="background: url('<?php echo get_the_post_thumbnail_url(); // Fullsize image for the single post. ?>') no-repeat center center; -webkit-background-size: cover; background-size: cover; -moz-background-size: cover; height: 120px; width: 100%;"></div>
										
									</a>
									<a title="View posts by <?php echo get_field('ltk_publisher'); ?>" class="image-credit" href="<?php echo site_url(); ?>/publisher/?n=<?php echo get_field('ltk_publisher'); ?>"><img src="http://localhost:8888/liketoknowit/wp-content/uploads/2018/09/ltklogo.svg"><?php echo get_field('ltk_publisher'); ?></a>
								<?php endif; ?>
								</figure>
							</div>
							<div class="col-xs-7 col-md-7">
								<div class="box">
									<h5 class="text--tag"><?php echo $displayCat->name; ?></h5>
									<h4><?php echo get_the_title(); ?></h4>
								</div>
							</div>
						</div>
						
					</article>
				</a>
				</div>
			</div>

			<?php

			endwhile;  
				wp_reset_postdata();
			endif;

			?>
		</div>
	</div>
</section>
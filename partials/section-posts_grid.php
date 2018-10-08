<?php

$count = get_sub_field('count');

$tags = get_sub_field('taxonomy');
$categories = get_sub_field('category');
// $sort_by = get_sub_field('sort_by');

$query = new WP_Query( 
					array( 
						'category__and' => $categories,
						'tag__and' => $tags,
						'count' => 3
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
					<article>
						<div class="row">
							<div class="col-xs-12 col-md-5">
								<figure>
									<img src="http://placehold.it/150x150">
								</figure>
							</div>
							<div class="col-xs-12 col-md-7">
								<div class="box">
									<h5 class="text--tag"><?php echo $displayCat->name; ?></h5>
									<h4><?php echo get_the_title(); ?></h4>
								</div>
							</div>
						</div>
						
					</article>
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
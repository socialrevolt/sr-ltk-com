<?php 

$title = get_sub_field('title'); 

?>

<section class="posts-tiles">
	<div class="container">
		<div class="row middle-xs start-xs">
			<div class="col-xs-12">
				<div class="box">
					<h2><?php echo $title; ?></h2>
				</div>
			</div>
		</div>
		<div class="row middle-xs start-xs">
			<div class="post-slider">
				<?php

				$tags = get_sub_field('taxonomy');
				$categories = get_sub_field('category');
				$sort_by = get_sub_field('sort_by');
				$publisher = get_sub_field('publisher');


				if ($publisher) {
					$meta_query = array(
						'relation' => 'OR',
						array(
							'key'     => 'ltk_publisher',
							'compare' => '=',
					        'value'   => 'jennajenovic'
					    ),
					    array(
							'key'     => 'ltk_code_blocks_%_publisher',
							'compare'   => 'LIKE',
					        'value'   => 'jennajenovic'						        
					    )
					);
				} else {
					$meta_query = [];
				}

				$query = new WP_Query( 
					array( 
						'suppress_filters' => FALSE,
    					'posts_per_page' => 10,
    					'meta_query' => $meta_query
						// 'category__in' => $categories, // Display posts that have this category (and any children of that category), using category id
						// 'tag__in' => $tags,
						// 'category__in' => 4, // Display posts that have this category (not children of that category)
						// 'cat' => '2,6,17,38', // Display posts that have these categories, using category id
						// 'cat' => '-12,-34,-56', // Display all posts except those from a category by prefixing its id with a '-' (minus) sign.
						// 'category__and' => array( 2, 6 ), // Display posts that are in multiple categories.
						// 'category__in' => array( 2, 6 ), // To display posts from either category 2 OR 6, you could use cat as mentioned above, or by using category__in (note this does not show posts from any children of these categories)
						// 's' => 'keyword', // Display posts that match the search term "keyword"
					)
				);

				if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

					get_template_part( 'card-loop' );

				endwhile;  
				wp_reset_postdata();
			endif;


				?>

			</div>
			<div class="arrows">
				<i class="fas fa-chevron-left prev"></i>
				<i class="fas fa-chevron-right next"></i>
			</div>
		</div>
	</div>
</section>
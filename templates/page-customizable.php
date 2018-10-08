<?php 
/* 
Template name: Customizable Page
*/
get_header(); ?>

<?php 

// $query = new WP_Query( 
// 	array( 
// 		'cat' => 4, // Display posts that have this category (and any children of that category), using category id
// 		'category__in' => 4, // Display posts that have this category (not children of that category)
// 		'cat' => '2,6,17,38', // Display posts that have these categories, using category id
// 		'cat' => '-12,-34,-56', // Display all posts except those from a category by prefixing its id with a '-' (minus) sign.
// 		'category__and' => array( 2, 6 ), // Display posts that are in multiple categories.
// 		'category__in' => array( 2, 6 ), // To display posts from either category 2 OR 6, you could use cat as mentioned above, or by using category__in (note this does not show posts from any children of these categories)
// 		'category__not_in' => array( 2, 6 ), // You can also exclude multiple categories this way
// 		's' => 'keyword', // Display posts that match the search term "keyword"
// 	),
// );

// if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

// endwhile; endif;

?>

<main class="main" role="main">
<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

  // are there any rows within within our flexible content?
  if( have_rows('page_layout') ): 

    // loop through all the rows of flexible content
    while ( have_rows('page_layout') ) : the_row();

    	// Product Callout 
    	if( get_row_layout() == 'category_tiles' )
      		get_template_part('partials/section', 'category_tiles');

      	// Product Callout 
    	if( get_row_layout() == 'masthead' )
      		get_template_part('partials/section', 'masthead');

      if( get_row_layout() == 'title_block' )
          get_template_part('partials/section', 'title_block');

      	// Product Callout 
    	if( get_row_layout() == 'promotion_boxes' )
      		get_template_part('partials/section', 'promotion_boxes');

      	// Product Callout 
    	if( get_row_layout() == 'capture_bar' )
      		get_template_part('partials/section', 'capture_bar');

      	// Product Callout 
    	if( get_row_layout() == 'post_tiles' )
      		get_template_part('partials/section', 'post_tiles');

      	// Product Callout 
    	if( get_row_layout() == 'posts_grid' )
      		get_template_part('partials/section', 'posts_grid');

      	// Product Callout 
    	if( get_row_layout() == 'full_width_advertisement' )
      		get_template_part('partials/section', 'full_width_advertisement');



	endwhile; // close the loop of flexible content
  endif; // close flexible content conditional

endwhile; 

endif; // close the WordPress loop ?>
</main>

<?php get_footer(); ?>

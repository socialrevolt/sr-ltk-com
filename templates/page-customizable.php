<?php 
/* 
Template name: Customizable Page
*/
get_header(); ?>

<?php 

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
      if( get_row_layout() == 'general_header' )
          get_template_part('partials/section', 'general_page_header');

      	// Product Callout 
    	if( get_row_layout() == 'full_width_advertisement' )
      		get_template_part('partials/section', 'full_width_advertisement');



	endwhile; // close the loop of flexible content
  endif; // close flexible content conditional

endwhile; 

endif; // close the WordPress loop ?>
</main>

<?php get_footer(); ?>

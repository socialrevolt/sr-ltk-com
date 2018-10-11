<?php

/*
Template name: Publisher
*/

get_header(); ?>


<section class="title-block">
	<div class="row middle-xs center-xs">
		<div class="col-xs-12">
			<div class="box">
				<h1><img src="http://localhost:8888/liketoknowit/wp-content/uploads/2018/09/ltklogo.svg" style="margin-right: 12px; height: 30px;"><?php print_r($_GET['n']); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="posts-tiles">
	<div class="container">
		<div class="row">

			<?php 

			$args = array(
				'posts_per_page' => -1,
				'meta_key' => 'ltk_publisher',
				'meta_value' => $_GET['n']
			);

			$query = new WP_Query($args);

			if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>


						<div class="col-xs-12 col-md-4">
							<?php get_template_part( 'card-loop' ); ?>
						</div>

			<?php 

			endwhile; 
			else : ?>

				<!-- article -->
				<article>
					<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

			<?php endif; ?>
</div>
	</div>
</section>

<?php get_template_part('partials/section', 'capture_bar'); ?>

<?php get_footer(); ?>
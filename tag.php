<?php get_header(); ?>

<section class="title-block">
	<div class="row middle-xs center-xs">
		<div class="col-xs-12">
			<div class="box">
				<h1><?php echo single_tag_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="post-tiles">
	<div class="container">
		<div class="row">

<?php 

if (have_posts()): while (have_posts()) : the_post(); ?>


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

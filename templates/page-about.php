<?php 

/* 
Template name: About Page
*/

get_header(); ?>


	<section class="general-page-header" style="background: url('<?php echo get_the_post_thumbnail_url(); // Fullsize image for the single post. ?>') no-repeat top center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">
		<div class="container">
			<div class="row middle-xs">
				<div class="col-xs-12 col-md-6">
					<div class="box">
							<h1 class="text--white text--didot">LIKEtoKNOW.it is the single largest influencer shopping channel and consumer media platform.</h1>
							<p class="text--white text--didot">Millions of inspired shoppers use our app, website, newsletter and social channels every day to discover, curate, and shop influencer content. </p>
							<a href="http://hyperurl.co/fjl8nn" target="_blank" class="btn btn-pink">Download the app</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="black-bar">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<div class="box content-boxes">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="box">
									<p>100% shoppable<br>Shop new fashion, home, beauty looks and more daily</p>
									
								</div>
							</div>	
							<div class="col-xs-12 col-md-4">
								<div class="box">
									<p>Endless discovery<br>Find new influencers and follow who inspires you</p>
								</div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="box">
									<p>Create your lifestyle collection<br>Track of all your likes, loves, and Wish List items in one place</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="box phone">
						<img src="http://sliketoknowit.wpengine.com/wp-content/uploads/2018/10/phone.png">
					</div>
				</div>
			</div>
		</div>	
	</section>

	<section>
		<div class="container">
			<div class="row center-xs middle-xs">
				<div class="col-xs-12 col-md-10 content center-xs">
					<div class="box">

						<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<h3 style="margin: 10% auto 5%;" class="text--didot">Whether you're looking for new favorite influencers, the perfect pair of booties, or the living room couch you’ve been on the hunt for, it’s all here on the LIKEtoKNOW.it app.</h3>

								<a href="http://hyperurl.co/fjl8nn" target="_blank"><img style="margin: 5% auto;" src="http://localhost:8888/wpengine-ltk/wp-content/uploads/2018/10/Group-10.jpg"></a>
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


	<?php get_template_part('partials/section', 'capture_bar'); ?>
<?php get_footer(); ?>

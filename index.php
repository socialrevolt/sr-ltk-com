<?php get_header(); ?>

<section class="masthead">
	<div class="container masthead-slider">

		<?php

		// The Query
		$the_query = new WP_Query(array(
			'posts_per_page' => 5
		));

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) { 
				$the_query->the_post();
				?>
				<div>
				<div class="row middle-xs">
					<div class="col-xs-12 col-md-6 last-md first-xs">
						<div class="box">
							<img class="jarallax-img" src="http://placehold.it/650x360" alt="">
							<!-- <div class="jarallax" data-speed="0.96" data-jarallax>
								<img class="jarallax-img" src="http://placehold.it/650x360" alt="">
							</div> -->
						</div>
					</div>
					<div class="col-xs-12 col-md-6 last-xs first-md">
						<div class="box">
							<h4>fashion</h4>
							<a href="<?php echo get_the_permalink(); ?>"><h1><?php echo get_the_title(); ?></h1></a>
							<p><?php echo get_the_excerpt(); ?></p>
							<a href="<?php echo get_the_permalink(); ?>" class="btn btn-outline">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<?php }
			wp_reset_postdata();
		} else {
			// no posts found
		}

		?>
	</div>
</section>


<section class="promotion-boxes">
	<div class="container">
		<div class="row middle-xs center-xs">
			<div class="col-xs-12 col-md-6">
				<div class="box bg--pink">
					<h1>Go behind the screen</h1>
					<p>with more than 100 of the world's top global influencers.</p>
					<a href="" class="btn btn-outline">Buy The Book</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="box bg--black">
					<h1>Download the app</h1>
					<p>discover and follow your favorite influencers.</p>
					<h4>Buy the book</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="category-tiles">
	<div class="container">
		<div class="row middle-xs center-xs">
			<div class="col-xs-12">
				<div class="box">
					<h1 class="text--title">Categories</h1>
				</div>
			</div>
		</div>
		<div class="row middle-xs center-xs">
			<div class="col-xs-12 col-md-3">
				<div class="box">
					<h4 class="text--white">Fashion</h4>
					<div class="jarallax" data-speed="0.96" data-jarallax>
						<img class="jarallax-img" src="http://placehold.it/250x250" alt="">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="box">
					<h4 class="text--white">Fashion</h4>
					<div class="jarallax" data-speed="0.96" data-jarallax>
						<img class="jarallax-img" src="http://placehold.it/250x250" alt="">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="box">
					<h4 class="text--white">Fashion</h4>
					<div class="jarallax" data-speed="0.96" data-jarallax>
						<img class="jarallax-img" src="http://placehold.it/250x250" alt="">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="box">
					<h4 class="text--white">Fashion</h4>
					<div class="jarallax" data-speed="0.96" data-jarallax>
						<img class="jarallax-img" src="http://placehold.it/250x250" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="posts-tiles">
	<div class="container">
		<div class="row middle-xs center-xs">
			<div class="col-xs-12">
				<div class="box">
					<h1>Trending</h1>
				</div>
			</div>
		</div>
		<div class="row middle-xs start-xs">
			<div class="col-xs-12">
				<div class="box">
					<h2>Around the world</h2>
				</div>
			</div>
		</div>
		<div class="row middle-xs start-xs">
			<div class="post-slider">
				<div>
					<article>
						<figure>
							<img src="http://placehold.it/400x300">
						</figure>
						<h5 class="text--tag">Fashion</h5>
						<h3 class="text--didot">Seen in Sao Paolo</h3>
						<p>Statement bags and wide leg silhouettes, take a tip in street style chic from a few of #LTKBrasil's most fashionable... </p>
					</article>
				</div>
				<div>
					<article>
						<figure>
							<img src="http://placehold.it/400x300">
						</figure>
						<h5 class="text--tag">Fashion</h5>
						<h3 class="text--didot">Seen in Sao Paolo</h3>
						<p>Statement bags and wide leg silhouettes, take a tip in street style chic from a few of #LTKBrasil's most fashionable... </p>
					</article>
				</div>
				<div>
					<article>
						<figure>
							<img src="http://placehold.it/400x300">
						</figure>
						<h5 class="text--tag">Fashion</h5>
						<h3 class="text--didot">Seen in Sao Paolo</h3>
						<p>Statement bags and wide leg silhouettes, take a tip in street style chic from a few of #LTKBrasil's most fashionable... </p>
					</article>
				</div>
				<div>
					<article>
						<figure>
							<img src="http://placehold.it/400x300">
						</figure>
						<h5 class="text--tag">Fashion</h5>
						<h3 class="text--didot">Seen in Sao Paolo</h3>
						<p>Statement bags and wide leg silhouettes, take a tip in street style chic from a few of #LTKBrasil's most fashionable... </p>
					</article>
				</div>
				<div>
					<article>
						<figure>
							<img src="http://placehold.it/400x300">
						</figure>
						<h5 class="text--tag">Fashion</h5>
						<h3 class="text--didot">Seen in Sao Paolo</h3>
						<p>Statement bags and wide leg silhouettes, take a tip in street style chic from a few of #LTKBrasil's most fashionable... </p>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="capture-bar bg--pink">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<div class="box">
					<h1>Stay in the know.</h1>
				</div>
			</div>
			<div class="col-xs-12 col-md-offset-1 col-md-7">
				<div class="box">

				</div>
			</div>
		</div>
	</div>
</section>

<section class="posts-grid">
	<div class="container">
		<div class="row middle-xs center-xs">
			<div class="col-xs-12">
				<div class="box">
					<h1>Recent</h1>
				</div>
			</div>
		</div>
		<div class="row">
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
									<h5 class="text--tag">Beauty</h5>
									<h4>This color crush is making us blush...</h4>
								</div>
							</div>
						</div>
						
					</article>
				</div>
			</div>
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
									<h5 class="text--tag">Beauty</h5>
									<h4>This color crush is making us blush...</h4>
								</div>
							</div>
						</div>
						
					</article>
				</div>
			</div>
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
									<h5 class="text--tag">Beauty</h5>
									<h4>This color crush is making us blush...</h4>
								</div>
							</div>
						</div>
						
					</article>
				</div>
			</div>
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
									<h5 class="text--tag">Beauty</h5>
									<h4>This color crush is making us blush...</h4>
								</div>
							</div>
						</div>
						
					</article>
				</div>
			</div>
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
									<h5 class="text--tag">Beauty</h5>
									<h4>This color crush is making us blush...</h4>
								</div>
							</div>
						</div>
						
					</article>
				</div>
			</div>
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
									<h5 class="text--tag">Beauty</h5>
									<h4>This color crush is making us blush...</h4>
								</div>
							</div>
						</div>
						
					</article>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="advertisement bg--pink advertisement--full-width">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="row middle-xs">
				<div class="col-xs-12 col-md-6">
					<div class="box float-image">
						<img src="http://localhost:8888/liketoknowit/wp-content/uploads/2018/09/LTK-book-1-Copy.png">
					</div>
				</div>
				<div class="col-xs-12 col-md-6 center-xs">
					<div class="box content">
						<img src="<?php echo bloginfo('template_url'); ?>/img/ltk-logo-black.svg" class="logo-img" alt="LIKEtoKnow.it Logo">
						<h2>Stories from the influencer next door</h2>
						<a href="" class="btn">Buy the book</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="box">
				<div class="jarallax image" data-speed="0.96" data-jarallax>
					<img class="jarallax-img" src="http://placehold.it/650x360" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

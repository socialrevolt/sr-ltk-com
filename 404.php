<?php get_header(); ?>
	<main role="main" aria-label="Content">
		<!-- section -->
		<section>
			<div class="container">
				<div class="row middle-xs"  style="min-height: 500px;">
					<div class="col-xs-12 col-md-12 center-xs">
						<div class="box">
							<!-- article -->
							<article id="post-404">

								<h1><?php esc_html_e( "404 - We didn't find what you were looking for", 'html5blank' ); ?></h1>
								<h2>
									<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Return home?', 'html5blank' ); ?></a>
								</h2>

							</article>
							<!-- /article -->
						</div>	
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

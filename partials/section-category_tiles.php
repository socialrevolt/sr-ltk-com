<section class="category-tiles">
	<div class="container">
		<div class="row middle-xs center-xs">
			<div class="col-xs-12">
				<div class="box">
					<h1 class="text--title"><?php echo get_sub_field('section_title'); ?></h1>
				</div>
			</div>
		</div>
		<div class="row middle-xs center-xs">

			<?php

			$categories = get_sub_field('selected_categories');

			$count = 0;

			foreach ($categories as $cat => $value) { 
				if ($count < 3) { 

					$img = do_shortcode(sprintf('[wp_custom_image_category term_id="%s"]',$value->term_id));

					?>

					<div class="col-xs-6 col-md-3">
						<div class="box">
							<a href="<?php echo site_url(); ?>/categories/<?php echo $value->slug; ?>">
								<h4 class="text--white"><?php echo $value->name; ?></h4>
								<div class="jarallax" data-speed="0.96" data-jarallax>
									<img class="jarallax-img" src="<?php echo $img; ?>" >
								</div>
								</a>
						</div>
					</div>


				<?php }
				
				?>
				
				
			<?php 
				$count++;
			}

			$tile_text = get_sub_field('tile_text');
			$tile_link = get_sub_field('tile_link');

			if (!$tile_text) {
				$tile_text = 'See More In The App';
			}

			if (!$tile_link) {
				$tile_link = 'https://ltk.app.link/gFj5s4l3MR';
			}

			?>

			<div class="col-xs-6 col-md-3">
				<div class="box last">
					<a href="<?php echo $tile_link; ?>" target="_blank">
						<h4 class="text--white"><?php echo $tile_text; ?></h4>
						<div class="jarallax last" data-speed="0.96" data-jarallax>
							<img class="jarallax-img" src="https://sliketoknowit.wpengine.com/wp-content/uploads/2018/10/fitness-tile.jpg" >
						</div>
						</a>
				</div>
			</div>

		</div>
		</div>
	</div>
</section>
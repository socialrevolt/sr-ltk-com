<?php

$ads = get_sub_field('advertisements');

?>

<section class="promotion-boxes">
	<div class="container">
		<div class="row middle-xs center-xs">

			<?php 

			foreach ($ads as $key => $ad) {
				$desktop = get_field('desktop_image',$ad->ID);
				$mobile = get_field('mobile_image',$ad->ID);
				$url = get_field('url', $ad->ID);

				?>
				<div class="col-xs-12 col-md-6">
					<a target="_blank" href="<?php echo $url; ?>"><img src="<?php echo $desktop; ?>"></a>
				</div>
				<?php
			} ?>
			<!-- <div class="col-xs-12 col-md-6">
				<div class="box bg--pink">
					<h1>Go behind the screen</h1>
					<p>with more than 100 of the world's top global influencers.</p>
					<a href="" class="btn btn-outline">Buy The Book</a>
				</div>
			</div> -->
			<!-- <div class="col-xs-12 col-md-6">
				<div class="box bg--black">
					<h1>Download the app</h1>
					<p>discover and follow your favorite influencers.</p>
					<h4>Buy the book</h4>
				</div>
			</div> -->
		</div>
	</div>
</section>
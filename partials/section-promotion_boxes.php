<?php

$ads = get_sub_field('advertisements');

?>

<section class="promotion-boxes">
	<div class="container">
		<div class="row middle-xs center-xs">
			<div class="promotion-slider">
				<?php 
				foreach ($ads as $key => $ad) {
					$url = get_field('url', $ad->ID);

					?>
					<a target="_blank" href="<?php echo $url; ?>">
						<img src="<?php echo get_field('desktop_image',$ad->ID); ?>">
					</a>
					<?php
				} ?>
			</div>
		</div>
	</div>
</section>
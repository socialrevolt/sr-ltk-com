<?php
$ad = get_sub_field('ad');
?>

<section class="advertisement">
	<div class="container">
		<a href="<?php echo get_field('url',$ad->ID); ?>" target="_blank">
			<img src="<?php echo get_field('desktop_image',$ad->ID); ?>" class="hide-mobile" style="width: 100%;">
			<img src="<?php echo get_field('mobile_image',$ad->ID); ?>" class="show-mobile" style="width: 100%;">
		</a>
	</div>
</section>
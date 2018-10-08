<?php
$ad = get_sub_field('ad');
?>

<section class="advertisement">
	<a href="<?php echo get_field('url',$ad->ID); ?>" target="_blank"><img src="<?php echo get_field('desktop_image',$ad->ID); ?>" style="width: 100%;"></a>
	<!-- <div class="row">
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
	</div> -->
</section>
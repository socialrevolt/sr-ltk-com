<?php

$category = get_the_category(); 

$count = 0;

foreach ($category as $key => $cat) {
	if ($cat->parent !== 5 && $cat->parent !== 2) {
		if ($count === 0) {
			$displayCat = $cat;
			$count = 1;
		}
	}
}

?>

<div>
	<article>
		<figure>
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail() ) { // Check if Thumbnail exists. ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post. ?>
				</a>
				<span class="image-credit"><img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/ltklogo.svg"><?php echo get_field('ltk_publisher'); ?></span>
			<?php } else { ?>

			<?php } ?>
			<!-- /post thumbnail -->
		</figure>
		<h5 class="text--tag"><a href="<?php echo site_url(); ?>/categories/<?php echo $displayCat->slug; ?>"><?php echo $displayCat->name; ?></a></h5>
		<a href="<?php echo get_the_permalink(); ?>"><h3 class="text--didot"><?php echo get_the_title(); ?></h3></a>
		<p><?php echo get_the_excerpt(); ?></p>
	</article>
</div>

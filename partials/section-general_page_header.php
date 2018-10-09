<?php 

$header = get_sub_field('header');
$subheader = get_sub_field('subheader');
$image = get_sub_field('image');

?>

<section class="general-page-header" style="background: url('<?php echo $image; ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">
	<div class="container">
		<div class="row middle-xs">
			<div class="col-xs-12 col-md-6">
				<div class="box">
					<div class="header-box">
						<h2 class="text--white"><?php echo $header; ?></h2>
						<h2 class="text--white bottom-line"><?php echo $subheader; ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
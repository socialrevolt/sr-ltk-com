<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- 		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23743351-7"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-23743351-7');
		</script>
 -->
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TNTSXVC');</script>
		<!-- End Google Tag Manager -->

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.10.3/jarallax.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" rel="stylesheet">

			<!-- Flexbox -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css">
		<!-- End Flexbox -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNTSXVC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->


		<header class="header clear bg--gray" role="banner">
			<div class="menu-toggle">
				<img class="toggle" src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/ltklogo.svg">
				<i class="fas fa-times"></i>
			</div>
			<div class="container">
				<div class="row middle-xs center-xs">
					<div class="col-xs-12 col-md-3">
						<div class="logo">
							<a href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/ltk-logo-black.svg" class="logo-img logo-black" alt="LIKEtoKnow.it Logo"></a>
							<a href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/ltklogo.svg" class="logo-img logo-white" alt="LIKEtoKnow.it Logo"></a>
						</div>
					</div>
					<div class="col-xs-12 col-md-9 nav-container">
						<div class="box">
							<nav class="nav" role="navigation">
								<?php 

								$args = array('menu' => 'Header' );

								wp_nav_menu($args); ?>
							</nav>
							<?php //get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</header>

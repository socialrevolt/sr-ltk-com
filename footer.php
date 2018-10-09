			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="row top-xs center-xs center-md">
						<div class="col-xs-12 col-md-10">
							<a href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/ltklogo.svg" class="logo-img rs"></a>

							<div class="ltk-footer">
								<ul class="subnav">
									<li><a href="https://www.instagram.com/liketoknow.it/?hl=en" target="_blank">@LIKEtoKNOW.it</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.europe/?hl=en" target="_blank">@LIKEtoKNOW.it.europe</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.BRASIL/" target="_blank">@LIKEtoKNOW.it.brasil</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.family/?hl=en" target="_blank">@LIKEtoKNOW.it.family</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.home/?hl=en" target="_blank">@LIKEtoKNOW.it.home</a></li>
									
								</ul>
							</div>	

							<p>Copyright 2018 rewardStyle.com | <a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a></p>
							<nav>
							<?php 

									$args = array('menu' => 'Footer' );

									wp_nav_menu($args); 

							?>
							</nav>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->

			

		</div>
		<!-- /wrapper -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.10.3/jarallax.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.10.0/jarallax-element.js"></script>
	    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<?php wp_footer(); ?>

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


	</body>
</html>

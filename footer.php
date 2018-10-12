			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="row top-xs center-xs center-md">
						<div class="col-xs-12 col-md-10">
							<a href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/ltklogo.svg" class="logo-img rs"></a>

							<div class="ltk-footer">
								<ul class="subnav">
									<li><a href="https://www.instagram.com/liketoknow.it/?hl=en" target="_blank">@LIKEtoKNOW.it</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.home/?hl=en" target="_blank">@LIKEtoKNOW.it.home</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.family/?hl=en" target="_blank">@LIKEtoKNOW.it.family</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.europe/?hl=en" target="_blank">@LIKEtoKNOW.it.europe</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.BRASIL/" target="_blank">@LIKEtoKNOW.it.brasil</a></li>
								</ul>
							</div>	


							<div class="download-buttons">
								<div class="row center-xs">
									<div class="col-xs-6 col-md-3 end-xs">
										<div class="box">	
											<a href="https://itunes.apple.com/app/apple-store/id1154027990?pt=2050509&ct=LTK%20dot%20com&mt=8" target="_blank">
												<img src="<?php echo bloginfo('template_url'); ?>/img/download-ltk-ios.png">
											</a>
										</div>
									</div>
									<div class="col-xs-6 col-md-3 start-xs">
										<div class="box">
											<a href="https://play.google.com/store/apps/details?id=com.rewardstyle.liketoknowit&referrer=utm_source%3DLTKdotcom%26utm_medium%3Dweb">
												<img src="<?php echo bloginfo('template_url'); ?>/img/download-ltk-android.png">
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="powered-by">
								<div class="row bottom-xs">
									<div class="col-xs-12 col-md-12">
										<div class="box">
											<p>powered by <img src="<?php echo bloginfo('template_url'); ?>/img/rewardStyle_Logo_WHITE.svg"></p>
											<p class="learn-more">Learn more about <a href="">Influencers</a>+<a href="">Brands</a></p>
										</div>
									</div>
								</div>	
							</div>

							<p class="copyright">Copyright 2018 rewardStyle.com</p><nav>
							<?php  $args = array('menu' => 'Footer' ); wp_nav_menu($args); ?>
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


	</body>
</html>

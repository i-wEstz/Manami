			<footer class="site_footer">
				<section class="section_sociallinks">
					<div class="container">
						<h2>Find out more</h2>
						<ul class="social__list">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</section>
				<div class="footer__section footer__section--top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="footer_contact">
									<h4>ติดต่อเรา</h4>
									<ul>
										<li><a href="tel:+66812699685">+66(8)1–269–9685</a></li>
										<li><a href="mailto:manamithailand@gmail.com">manamithailand@gmail.com</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="footer_menu">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<?php
												wp_nav_menu(
													array(
														'menu' => 'footer-menu-1',
														'container' => 'nav',
														'container_class' => 'footer_nav',
														//'theme_location' => 'footer_menu',
													)
												);
											?>
										</div>
										<div class="col-xs-12 col-sm-6">
											<?php
												wp_nav_menu(
													array(
														'menu' => 'footer-menu-2',
														'container' => 'nav',
														'container_class' => 'footer_nav',
														//'theme_location' => 'footer_menu',
													)
												);
											?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<form class="form_newsletter">
									<h3>Newsletter</h3>
									<p><input type="email"></p>
									<p><button type="submit" class="btn btn--white btn--outlined">Sign Up</button></p>
								</form>
							</div>
						</div>
					</div>					
				</div>
				<div class="footer__section footer__section--bottom">
					<div class="container">
						<div class="row middle-sm">
							<div class="col-xs-12 col-sm-6">
								<div class="disclaimer">
									<?php 
										$disclaimer = get_page_by_path( 'disclaimer ' );
										echo apply_filters( 'the_content', $disclaimer->post_content );
									?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="payments_list">
									<h3>ช่องทางการชำระเงิน</h3>
									<ul>
										<li><img src="<?php echo get_theme_file_uri( 'img/icon-payment-visa.png' ); ?>"></li>
										<li><img src="<?php echo get_theme_file_uri( 'img/icon-payment-mastercard.png' ); ?>"></li>
										<li><img src="<?php echo get_theme_file_uri( 'img/icon-payment-cod.png' ); ?>"></li>
										<li><img src="<?php echo get_theme_file_uri( 'img/icon-payment-paypal.png' ); ?>"></li>
									</ul>
								</div>
							</div>
						</div>			
					</div>			
				</div>
			</footer>
		</div>
	<?php wp_footer(); ?>
	</body>
</html>
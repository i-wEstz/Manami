<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<?php wp_head(); ?>
</head>
<body <?php body_class('fix_header'); ?>>
	<div class="main_wrapper">
		<?php 
			global $woocommerce;
			$myaccount_url = get_option( 'woocommerce_myaccount_page_id' );
			$cart_url = $woocommerce->cart->get_cart_url();
		?>
		<header class="site_header">
			<div class="topbar">
				<div class="container">
					<div class="topbar__message">Shop with free standard delivery and returns</div>
				</div>
			</div>
			<div class="site_header__wrapper">
				<div class="container">
					<a href="http://line.me/ti/p/%40manamithailand" target="_blank" class="livechat__trigger">Line Official</a>
					<div class="site_header__content clearfix">
						<h1 class="site_logo"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						<ul class="user__menu">
							<li><a href="#" class="social__icon social__icon--facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="social__icon social__icon--youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<li><a href="#" class="social__icon social__icon--instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="language_menu">
								<ul class="language_selector">
									<li><a href="#">TH</a></li>
									<li><a href="#">EN</a></li>
								</ul>
							</li>
						</ul>
						<div class="icon_menu__wrapper">
							<a href="<?php echo esc_url( get_permalink( $myaccount_url ) ); ?>" class="icon_menu icon_menu--myaccount">My Account</a>
							<a href="<?php echo esc_url( $cart_url ); ?>" class="icon_menu icon_menu--cart">Cart</a>
							<a href="#site_nav" class="icon_menu icon_menu--trigger menu__trigger"><span>Menu</span></a>
						</div>
					</div>
					<?php
						wp_nav_menu(
							array(
								'menu' => 'main-menu',
								'container' => 'nav',
								'container_class' => 'site_nav',
								'theme_location' => 'main_menu',
							)
						);
					?>
				</div>
				
			</div>
		</header>
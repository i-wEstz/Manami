<?php
	
	// Theme Assets
	function theme_assets() {
		wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Prompt:300,400,700|Varela+Round&subset=thai' );
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'animsition', 'https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css' );
		wp_enqueue_style( 'manami-ecommerce', get_stylesheet_uri(), null, '1.0' );

		global $is_IE;
		if( $is_IE ) {
			wp_enqueue_script( 'selectivizr', 'https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js' );
		}
		
		wp_enqueue_script( 'headroom', 'https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/headroom.min.js', array('jquery'), '0.9.3', true );
		wp_enqueue_script( 'jQuery_headroom', 'https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.3/jQuery.headroom.min.js', array('jquery'), '0.9.3', true );
		
		wp_enqueue_script( 'prettyembed', get_theme_file_uri( 'js/jquery.prettyembed.min.js' ), array('jquery'), '1.2.1', true );
		
		wp_enqueue_script( 'animsition', 'https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js', array('jquery'), '4.0.2', true );
		wp_enqueue_script( 'instafeed', 'https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js', array('jquery'), '1.4.1', true );
		wp_enqueue_script( 'imagesloaded', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.pkgd.min.js', array('jquery'), '3.0.47', true );
		wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js', array('jquery'), '1.6.0', true );
		wp_enqueue_script( 'easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), '1.4.1', true );
		wp_enqueue_script( 'mobile-detect', 'https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.3.6/mobile-detect.min.js', array('jquery'), '1.3.6', true );
	
		wp_enqueue_script( 'manami-ecommerce', get_theme_file_uri( 'js/main.min.js' ), array('jquery'), '1.0', true );
	}

	if ( !is_admin() ) {
		add_action( 'wp_enqueue_scripts', 'theme_assets', 99 );
	}
	
	// Disable Admin Bar
	add_filter('show_admin_bar', '__return_false');
	
	// Title Tag
	add_theme_support( 'title-tag' );
	
	// Post Thumbnail
	add_theme_support( 'post-thumbnails' );
	
	// Register Menu
	register_nav_menu( 'main_menu', 'Main Menu');
	register_nav_menu( 'footer_menu', 'Footer Menu');
	
	// HTML5 Search Form
	add_theme_support( 'html5', array( 'search-form' ) );
	
	// Page Excerpt
	add_post_type_support( 'page', 'excerpt' );
	
	// The Slug
	function the_slug() {
	    global $post;
	    return $post->post_name;
	}
	
	// Remove TablePress CSS
	add_filter( 'tablepress_use_default_css', '__return_false' );
	
	// WooCommerce
	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'woocommerce_support' );
	
	// Remove WooCommerce Style
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

	//Register WooCommerce Custom Style Kritchapon.C 21Sep2017
	function wp_enqueue_woocommerce_style(){
	wp_register_style( 'manami-woocommerce', get_template_directory_uri() . '/woocommerce/assets/css/woocommerce.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'manami-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );
//End of Register WooCommerce Custom Style
	
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
	function manami_theme_wrapper_start() {
		echo '<main class="site_content"><div class="woocommerce__wrapper">';
	}
	add_action('woocommerce_before_main_content', 'manami_theme_wrapper_start', 10 );

	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
	function manami_theme_wrapper_end() {
		echo '</div></main>';
	}
	add_action('woocommerce_after_main_content', 'manami_theme_wrapper_end', 10 );
	
	// Product Archive Baner
	function manami_banner_image() {
		if( is_shop() ) {
			$page = wc_get_page_id( 'shop' );
			$page_banner = get_the_post_thumbnail( $page, 'full' );
			echo '<div class="shop_page__banner">'.$page_banner.'</div>';		
		} else if( is_product() ) {
			global $post;
			$product_banner = get_field( 'product_banner', $post );
			if( $product_banner ) {
				echo '<div class="product__banner"><img src="'.$product_banner['url'].'"></div>';				
			}
		}
		else if ( is_cart() ){ // Add By Kritchapon.C 27Sep2017
			$page = wc_get_page_id( 'cart' );
			$page_banner = get_the_post_thumbnail( $page, 'full' );
			echo '<div class="shop_page__banner">'.$page_banner.'</div>';
		}
	}
	add_action( 'woocommerce_before_main_content', 'manami_banner_image', 15 );
	//add_action( 'woocommerce_before_cart', 'manami_banner_image', 1 );
	
	// Breadcrumb
	function manami_breadcrumb() {
		$custom = array(
			'wrap_before' => '<nav class="woocommerce-breadcrumb"><div class="container container-fluid">',
            'wrap_after' => '</div></nav>',
		);
		return $custom;
	}
	// add_filter( 'woocommerce_breadcrumb_defaults', 'manami_breadcrumb' );
	
	// Remove Breadcrumb
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
	
	// Product
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	
	function manami_product_content() {
		global $post;
		echo '<div class="product__content">';
		echo apply_filters( 'the_content', $post->post_content );
		echo '</div>';
	}
	add_action( 'woocommerce_single_product_summary', 'manami_product_content', 25 );
	
	
?>

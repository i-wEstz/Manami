<?php get_header(); ?>
<main class="site_content">
	<section class="section_intro nopadding">
		<div class="intro__slideshow">
			<div class="slide_wrapper">
				<div><img src="<?php echo get_theme_file_uri( 'img/intro/slide-1.jpg' ); ?>"></div>
			</div>
		</div>
	</section>
	<?php
		$aboutus = get_page_by_path( 'about-us' );
	?>
	<section class="section_about">
		<div class="container">
			<div class="row top-sm">
				<div class="col-xs-12 col-sm-6">
					<div class="about__img"><?php echo get_the_post_thumbnail( $aboutus, 'full' ); ?></div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="about__content">
						<h2><?php echo apply_filters( 'the_title', $aboutus->post_title ); ?></h2>
						<?php echo apply_filters( 'the_excerpt', $aboutus->post_excerpt ); ?>
						<p><a href="<?php the_permalink( $aboutus ); ?>">&gt; Read Article</a></p>
					</div>
				</div>
			</div>
			<div class="row bottom-sm">
				<div class="col-xs-12 col-sm-6">
					<div class="seemore_instagram">
						<div class="seemore_instagram__content">
							<h3>See more<br>
								photos<br>
								follow us on<br>
								Instagram</h3>
							<p><a href="#" class="btn btn--white">Follow</a></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<?php $shoppage = wc_get_page_id( 'shop' );  ?>
					<div class="seemore_products">
						<a href="<?php echo the_permalink( $shoppage ); ?>">
							<img src="<?php echo get_theme_file_uri( 'img/img-products-update-aug30.jpg'); ?>" alt="img-products" width="1440" height="1440" />
							<span>View All Products</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section_frontpage_video">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<div class="prettyembed" data-pe-videoid="irDExrYbEtw" data-pe-fitvids="true"></div>
				</div>
			</div>
		</div>
	</section>
<!--
	<section class="section_knowledge fillscreen">
		<div class="knowledge__block" style="">
			<div class="container container-fluid">
				<div class="row middle-md">
					<div class="col-xs-12 col-md-6">
						<div class="knowledge__featured">
							<h3>หุ่นสวยด้วย "ผลไม้"<br>7 วัน 7 ชนิด</h3>
							<p><a href="#" class="btn btn--black btn--outlined">Read More</a></p>
						</div>
					</div>
					<div class="col-xs-12 col-md-6"><div class="knowledge__spacer"></div></div>
				</div>
			</div>
		</div>
	</section>
-->
	<section class="section_newsletter">
		<div class="container">
			<div class="row bottom-sm">
				<div class="col-xs-12 col-sm-6">
					<div class="newsletter__wrapper">
						<form class="newsletter__form">
							<h3>Want to know more?</h3>
							<p><input type="text" placeholder="Your Email"></p>
							<p><button class="btn btn--white">Sign Up</button></p>
						</form>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="qalink">
						<a href="#">
							<img src="<?php echo get_theme_file_uri( 'img/img-qa-update-aug30.jpg' ); ?>">
							<!-- <span>Q/A</span> -->
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section_intragram">
		<div class="container">
			<h2><span>#MANAMILIVE</span></h2>
			<div id="instafeed" class="instagram__wrapper">
				<?php for($i = 1; $i <= 16; $i++ ) { ?>
					<a href="#"><img src="<?php echo get_theme_file_uri( 'img/instagram/instagram-'.$i.'.jpg' ); ?>"></a>
				<?php } ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
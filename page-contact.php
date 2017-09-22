<?php get_header(); ?>
<main class="site_content">
	<?php 
		$contact_subpages = get_pages(
			array(
				'sort_order' => 'asc',
				'sort_column' => 'menu_order',
				'parent' => $post->ID,
				'post_type' => 'page',
				'post_status' => 'publish',
			)
		);
	?>
	<section class="seciton_page seciton_page--contact">
		<div class="container container-fluid">
			<div class="contact__wrapper">
				<div class="contact__header">
					<h2>Contact Us</h2>
				</div>
				<div class="clearfix">
					<?php foreach( $contact_subpages as $post ) : setup_postdata( $post ); ?>
					<div class="contact__column">
						<div class="contact__info">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
						<div class="contact__map">
							<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7751.061674874345!2d100.53409289999999!3d13.7468306!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f43939a2caf2963!2sSiam+Paragon!5e0!3m2!1sen!2sth!4v1496559660149" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
						</div>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section_sociallinks">
		<div class="container container-fluid">
			<h2>Find out more</h2>
			<ul class="social__list">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</section>
</main>
<?php get_footer(); ?>
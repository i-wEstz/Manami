<?php get_header();?>
<?php if( have_posts()) while( have_posts()): the_post(); ?>
<main class="site_content">
	<section class="seciton_page seciton_page--cart">
		<div class="container container-fluid">
			<div class="cart_page__wrapper">
				<h2 class="cart_page__title">
					<?php the_title(); ?>
				</h2>
				<div class="cart_page__content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php endwhile; ?>
<?php get_footer();?>
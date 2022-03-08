<?php get_header();
/*
 Template Name: contact us
 */
?>

<section class="container-slick">
	<div class="header_slider-container contact-us_slider-container container-padd">

		<div class="header_slider contact-us_slider">

			<!-- --- -->
			<div class="header_social-links">
				<a href="<?php the_field('linked_link', 'option'); ?>" class="header_linkedin"><img src="<?php bloginfo('template_url'); ?>/img/social/linked-in-logo.png" class="linkedin-icon"></a>
				<a href="<?php the_field('twitter_link', 'option'); ?>" class="header_twitter"><img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" class="twitter-icon"></a>
				<a href="<?php the_field('youtube_link', 'option'); ?>" class="header_youtube"><img src="<?php bloginfo('template_url'); ?>/img/social/youtube-symbol.png" class="youtube-icon"></a>
				<span class="header_social-line"></span>
			</div>


			<!-- --- -->
			<div class="slick-slider-block">
				<div class="header_slider-block contact-us_slider-block">
					<div class="slider-block_text contact-us_slider-block_text">
						<h2 class="slider-block_title contact-us_slider-block_title"><?php the_field('title-hs_2', 'option') ?></h2>
						<p class="slider-block_dsc contact-us_slider-block_dsc"><?php the_field('text-hs_2', 'option') ?></p>
						<a class="slider-block_button" href="<?php the_field('button_link-hs_2', 'option') ?>">
							<span><?php the_field('button_text-hs_2', 'option') ?></span>
						</a>
					</div>

					<div class="slider-block_graphic">
						<div class="slider-block_image contact-us_slider-block_image">
							<img src="<?php bloginfo('template_url'); ?>/img/contact-img.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
</header>

<section class="contact-us-form-section ">
	<div class="contact-us-form-section_gradient container-padd">
		<div class="contact-us-form-section_form">
			<div class="contact-us-form-section_form-title">
				<p><?php the_field('title-contactp') ?></p>
			</div>
			<div class="contact-us-form-section_form-dsc">
				<p><?php the_field('text_under_title-contactp') ?></p>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="101" title="Contact form on contact page"]') ?>
		</div>
	</div>
</section>

<section class="contact-us-location container-padd">

	<div class="contact-us-location_container">
		<!-- --- -->
		<div class="contact-us-location_our-location">
			<p class="contact-us-location_our-location_title"><?php the_field('left_title-contactp') ?></p>

			<div class="contact-us-location_our-location_map">
				<img src="<?php the_field('left_img-contactp') ?>" alt="">
				<div class="contact-us-location_our-location_address">
					<p><?php the_field('information-contactp') ?></p>
				</div>
			</div>
		</div>

		<!-- --- -->
		<div class="contact-us-location_our-how-we-work">
			<p class="contact-us-location_how-we-work_title"><?php the_field('right_title-contactp') ?></p>
			<!-- <img src="<?php the_field('right_img-contactp') ?>" alt=""> -->
			<img src="<?php bloginfo('template_url'); ?>/img/contact-bottom-img.jpg" alt="">
		</div>
	</div>

</section>

<section class="contact-us_footer-subtitle">
	<p><?php the_field('text_bottom-contactp') ?></p>
</section>

<?php get_footer(); ?>
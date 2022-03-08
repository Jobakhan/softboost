<?php get_header();
/*
 Template Name: home
 */
?>

<section class="container-slick">
	<div class="header_slider-container partner-up_slider-container container-padd">

		<div class="header_slider partner-up_slider">

			<!-- --- -->
			<div class="header_social-links">
				<a href="<?php the_field('linked_link', 'option'); ?>" class="header_linkedin"><img src="<?php bloginfo('template_url'); ?>/img/social/linked-in-logo.png" class="linkedin-icon"></a>
				<a href="<?php the_field('twitter_link', 'option'); ?>" class="header_twitter"><img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" class="twitter-icon"></a>
				<a href="<?php the_field('youtube_link', 'option'); ?>" class="header_youtube"><img src="<?php bloginfo('template_url'); ?>/img/social/youtube-symbol.png" class="youtube-icon"></a>
				<span class="header_social-line"></span>
			</div>


			<!-- --- -->
			<div class="slick-slider-block">
				<div class="header_slider-block partner-up_slider-block">
					<div class="slider-block_text partner-up_slider-block_text">
						<h2 class="slider-block_title partner-up_slider-block_title"><?php the_field('title-hs_5', 'option') ?></h2>
						<p class="slider-block_dsc partner-up_slider-block_dsc"><?php the_field('text-hs_5', 'option') ?></p>
						<a class="slider-block_button " href="<?php the_field('button_link-hs_5', 'option') ?>">
							<span><?php the_field('button_text-hs_5', 'option') ?></span>
						</a>
					</div>

					<div class="slider-block_graphic">
						<div class="slider-block_image partner-up_slider-block_image">
							<img src="<?php bloginfo('template_url'); ?>/img/partner-up-slider-img1.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="header_slider-container launch-your-program_slider-container container-padd">

		<div class="header_slider launch-your-program_slider">

			<!-- --- -->
			<div class="header_social-links">
				<a href="<?php the_field('linked_link', 'option'); ?>" class="header_linkedin"><img src="<?php bloginfo('template_url'); ?>/img/social/linked-in-logo.png" class="linkedin-icon"></a>
				<a href="<?php the_field('twitter_link', 'option'); ?>" class="header_twitter"><img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" class="twitter-icon"></a>
				<a href="<?php the_field('youtube_link', 'option'); ?>" class="header_youtube"><img src="<?php bloginfo('template_url'); ?>/img/social/youtube-symbol.png" class="youtube-icon"></a>
				<span class="header_social-line"></span>
			</div>


			<!-- --- -->
			<div class="slick-slider-block">
				<div class="header_slider-block launch-your-program_slider-block">
					<div class="slider-block_text launch-your-program_slider-block_text">
						<h2 class="slider-block_title launch-your-program_slider-block_title"><?php the_field('title-hs_6', 'option') ?>!</h2>
						<p class="slider-block_dsc launch-your-program_slider-block_dsc"><?php the_field('text-hs_6', 'option') ?></p>
						<a class="slider-block_button" href="<?php the_field('button_link-hs_6', 'option') ?>">
							<span><?php the_field('button_text-hs_6', 'option') ?></span>
						</a>
					</div>

					<div class="slider-block_graphic">
						<div class="slider-block_image launch-your-program_slider-block_image">
							<img src="<?php bloginfo('template_url'); ?>/img/launch-your-program-slider-img1.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="header_slider-container collaborate_slider-container container-padd">

		<div class="header_slider">

			<!-- --- -->
			<div class="header_social-links">
				<a href="<?php the_field('linked_link', 'option'); ?>" class="header_linkedin"><img src="<?php bloginfo('template_url'); ?>/img/social/linked-in-logo.png" class="linkedin-icon"></a>
				<a href="<?php the_field('twitter_link', 'option'); ?>" class="header_twitter"><img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" class="twitter-icon"></a>
				<a href="<?php the_field('youtube_link', 'option'); ?>" class="header_youtube"><img src="<?php bloginfo('template_url'); ?>/img/social/youtube-symbol.png" class="youtube-icon"></a>
				<span class="header_social-line"></span>
			</div>


			<!-- --- -->
			<div class="slick-slider-block">
				<div class="header_slider-block">
					<div class="slider-block_text">
						<h2 class="slider-block_title"><?php the_field('title-hs_4', 'option') ?></h2>
						<p class="slider-block_dsc"><?php the_field('text-hs_4', 'option') ?></p>
						<a class="slider-block_button" href="<?php the_field('button_link-hs_4', 'option') ?>">
							<span><?php the_field('button_text-hs_4', 'option') ?></span>
						</a>
					</div>

					<div class="slider-block_graphic">
						<div class="slider-block_image">
							<img src="<?php bloginfo('template_url'); ?>/img/collaborate.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="section_search-block container-padd">
	<div class="search-block">
		<p class="search-block_title">Search Partnership Opportunities</p>
		<form class="search-form" name="search" method="#" action="#">
			<p class="select-block input-text-block">
				<input type="text" class="input-text" placeholder="Keyword">
			</p>
			<p class="select-block">
				<select name="partnershiptype" size="1">
					<option selected value="p1">Partnership Type</option>
					<option value="s2">Partnership Type1</option>
					<option value="s3">Partnership Type2</option>
					<option value="s4">Partnership Type3</option>
				</select>
			</p>
			<p class="select-block">
				<select name="industry" size="1">
					<option selected value="i1">Industry</option>
					<option value="s2">Industry1</option>
					<option value="s3">Industry2</option>
					<option value="s4">Industry3</option>
				</select>
			</p>
			<button type="submit">Search</button>
		</form>
	</div>
</section>
</header>


<main class="main">
	<section class="video-block">
		<div class="video-block_container">
			<div class="video-block_text">
				<p class="video-block_title " data-aos="fade-right" data-aos-duration="1500">
					<?php the_field('title-vhp') ?>
				</p>
				<p class="video-block_dsc" data-aos="fade-right" data-aos-duration="1500">
					<?php the_field('text-vhp') ?>
				</p>
				<div class="video-block_steps" data-aos="fade-up" data-aos-duration="1500">
					<div class="video-block_steps_step1">
						<div class="video-block_steps_step1-icon">
							<img src="<?php bloginfo('template_url'); ?>/img/video-block-icons/Vector1.png" alt="">
						</div>
						<p class="video-block_steps_step1-title">Post</p>
						<i class="step1_icon fa fa-caret-right"></i>
					</div>
					<div class="video-block_steps_step2">
						<div class="video-block_steps_step2-icon">
							<img src="<?php bloginfo('template_url'); ?>/img/video-block-icons/Vector2.png" alt="">
						</div>
						<p class="video-block_steps_step2-title">Collaborate</p>
						<i class="step2_icon fa fa-caret-right"></i>
					</div>
					<div class="video-block_steps_step3">
						<div class="video-block_steps_step3-icon">
							<img src="<?php bloginfo('template_url'); ?>/img/video-block-icons/Vector3.png" alt="">
						</div>
						<p class="video-block_steps_step3-title">Launch!</p>
					</div>
				</div>
			</div>

			<div class="video-block_play-video">
				<div class="video-block_play-video_dsc" data-aos="zoom-out-up" data-aos-duration="1500">
					<p>
						Transform partnership models from Sales Channels to <span style="font-weight: bold;"> REVENUE INFRATRUCTURES </span> across your organization
					</p>
				</div>
				<div class="video-block_play-video_btn" data-aos="zoom-out-up" data-aos-duration="1500">
					<div class="video-block_play-video_btn-icon">
						<img src="<?php bloginfo('template_url'); ?>/img/video-block-icons/Vector4.png" alt="">
					</div>
					<div class="video-block_play-video_btn-title">
						PLAY VIDEO
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="partner-info container-padd">
		<div class="partner-info_title">
			<p>
				<?php the_field('title-amb') ?>
			</p>
		</div>
		<div class="partner-info_dsc">
			<p>
				<?php the_field('text-amb') ?>
			</p>
		</div>
		<div class="partner-info_button">
			<a href="<?php the_field('button_link-amb') ?>"><?php the_field('button_text-amb') ?> </a>
		</div>
	</section>

	<section class="who-uses container-padd">
		<div class="who-uses_title" data-aos="fade-left" data-aos-duration="1500">
			<p><?php the_field('ttle-wub') ?></p>
		</div>
		<div class="who-uses_subtitle" data-aos="fade-right" data-aos-duration="1500">
			<p><?php the_field('top_text-wub') ?></p>
		</div>
		<div class="who-uses_graphics-container">
			<div class="who-uses_graphics">
				<div class="who-uses_graphics-faces">
					<div class="who-uses_graphics-faces-left" data-aos="fade-left" data-aos-duration="1500">
						<div class="graphics-faces_block-img" style="margin-top: 0px"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-faces1.png" alt=""></div>
						<div class="graphics-faces_block-img"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-faces4.png" alt=""></div>
					</div>
					<div class="who-uses_graphics-faces-center" data-aos="fade-up" data-aos-duration="1500">
						<div class="graphics-faces_block-img" style="margin-top: 0px"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-faces2.png" alt=""></div>
						<div class="graphics-faces_block-img"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-faces5.png" alt=""></div>
					</div>
					<div class="who-uses_graphics-faces-right" data-aos="fade-right" data-aos-duration="1500">
						<div class="graphics-faces_block-img" style="margin-top: 0px"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-faces3.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="who-uses_graphics-icons">
				<div class="who-uses_flex-icons" data-aos="fade-right" data-aos-duration="1500">
					<div class="graphics-icons_block-img"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-icons1.png" alt=""></div>
					<div class="graphics-icons_block-img"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-icons2.png" alt=""></div>
				</div>
				<div class="who-uses_flex-icons" data-aos="fade-left" data-aos-duration="1500">
					<div class="graphics-icons_block-img"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-icons3.png" alt=""></div>
					<div class="graphics-icons_block-img"><img src="<?php bloginfo('template_url'); ?>/img/who-uses/graphics-icons4.png" alt=""></div>
				</div>
			</div>
		</div>
		<div class="who-uses_footer" data-aos="fade-up" data-aos-duration="1500">
			<p><?php the_field('bottom_text-wub') ?></p>
		</div>
	</section>

	<section class="logo-stripe">
		<h3 class="logo-stripe__title container-padd"><?php the_field('title-logos') ?> </h3>
		<div class="logos__slider">
			<?php
			if (have_rows('items_logos')) :
				while (have_rows('items_logos')) : the_row();
			?>
					<img src="<?php the_sub_field('logo'); ?>" class="logo-stripe__img">
			<?php
				endwhile;
			else :
			endif;
			?>

		</div>
	</section>

	<section class="app-block container-padd">
		<div class="app-block_info">
			<div class="app-block_info-title" data-aos="fade-right" data-aos-duration="1500">
				<p>Partnerships for every business function. Leaders get new var oppurtunities delivered, daily.</p>
			</div>
			<div class="app-block_info-example">
				<div class="app-block_info-example_app-icon" data-aos="fade-up" data-aos-duration="1500">
					<img src="<?php bloginfo('template_url'); ?>/img/app-block/app-icon.png" alt="">
				</div>
				<div class="app-block_info-example_app-notifications" data-aos="fade-left" data-aos-duration="1500">
					<img src="<?php bloginfo('template_url'); ?>/img/app-block/app-notifications.png" alt="">
				</div>
			</div>
		</div>

		<div class="app-block_form">
			<div class="app-block_form-title">
				<div class="app-block_form-title-icon">
					<img src="<?php bloginfo('template_url'); ?>/img/app-block/app-block_form-title-icon.png" data-aos="fade-right" data-aos-duration="1500">
				</div>
				<div class="app-block_form-title-text">
					<p class="app-block_form-title-text_title" data-aos="fade-right" data-aos-duration="1500">Get the APP</p>
					<p class="app-block_form-title-text_dsc" data-aos="fade-left" data-aos-duration="1500">We’ll text you the link</p>
				</div>
			</div>

			<div class="app-block_get-app-form" data-aos="fade-down" data-aos-duration="1500">
				<?php echo do_shortcode('[contact-form-7 id="100" title="Get the app form"]') ?>
				<div class="get-app-form_footer-text">
					<img src="<?php bloginfo('template_url'); ?>/img/app-block/get-app-form_footer-icon.png" class="get-app-form_footer-icon">
					<p>We do not sell personal information</p>
				</div>

				<label class="app-block-label"> <input type="checkbox"> Signup for our Newsletter  </label>
			</div>
		</div>
	</section>

	<section class="collaborative container-padd">
		<div class="collaborative_title" data-aos="fade-up" data-aos-duration="1500">
			<p><?php the_field('title-collbl') ?></p>
		</div>

		<div class="collaborative_schemes-container">
			<div class="collaborative_scheme" data-aos="fade-left" data-aos-duration="1500">
				<div class="collaborative_scheme-title">
					<p>
						<?php the_field('left_text-collbl') ?>
					</p>
				</div>
				<div class="collaborative_scheme-image">
					<img src="<?php bloginfo('template_url'); ?>/img/collaborative/collaborative_scheme-image.png" alt="">
				</div>
			</div>

			<div class="collaborative_shceme2" data-aos="fade-right" data-aos-duration="1500">
				<div class="collaborative_shceme2-htitle">
					<p> <?php the_field('right_text-collbl') ?> </p>
				</div>
				<div class="collaborative_shceme2-image">
					<img src="<?php bloginfo('template_url'); ?>/img/collaborative/collaborative_shceme2-image.png" alt="">
				</div>
				<div class="collaborative_shceme2-ftitle">
					<p> <?php the_field('right_text_bottom-collbl') ?></p>
				</div>
			</div>

		</div>
	</section>

	<section class="why-it-works container-padd">
		<div class="why-it-works_title" data-aos="fade-right" data-aos-duration="1500">
			<p><?php the_field('title-why') ?></p>
		</div>
		<div class="why-it-works_dsc" data-aos="fade-left" data-aos-duration="1500">
			<p><?php the_field('sub-title-why') ?></p>
		</div>
		<div class="why-it-works_advantage">
			<?php
			if (have_rows('items-why')) :
				while (have_rows('items-why')) : the_row();
			?>
					<div class="why-it-works_advantage-block" data-aos="fade-up" data-aos-duration="1500">
						<div class="why-it-works_advantage-block_icon"><img src="<?php the_sub_field('image') ?>" alt=""></div>
						<div class="why-it-works_advantage-block_title">
							<p><?php the_sub_field('title') ?></p>
						</div>
						<div class="why-it-works_advantage-block_dsc">
							<p><?php the_sub_field('text') ?></p>
						</div>
					</div>
			<?php
				endwhile;
			else :
			endif;
			?>

		</div>
	</section>

	<section class="create-acc" id="register">
		<div class="create-acc_title" data-aos="fade-right" data-aos-duration="1500">
			<p>Create an account</p>
		</div>
		<div class="create-acc_form" data-aos="fade-down" data-aos-duration="1500">
			<div class="form-tag-create-acc" name="create-acc" method="#" action="#">
				<div class="create-acc_inputs">
					<div class="create-acc_business">
						<input type="text" placeholder="Business Name">
						<input type="email" placeholder="Email address">
						<select name="industry" size="1">
							<option selected value="i1">Industry</option>
							<option value="s2">Industry1</option>
							<option value="s3">Industry2</option>
							<option value="s4">Industry3</option>
						</select>
					</div>
					<div class="create-acc_username">
						<input type="text" placeholder="Username">
						<input type="password" placeholder="Password">
						<input type="password" placeholder="Verify Password">

					</div>
				</div>
				<!-- <div class="create-acc-df"> -->
				<?php echo do_shortcode('[contact-form-7 id="216" title="capcha for"]') ?>
				<button type="submit">CREATE ACCOUNT</button>
				<!-- </div> -->
			</div>
		</div>
	</section>

	<section class="footer-subscribe container-padd">
		<div class="footer-subscribe_container">
			<div class="footer-subscribe_logo">
				<div class="footer-subscribe_logo-img">
					<img src="<?php bloginfo('template_url'); ?>/img/logo-white2.png" alt="">
				</div>
				<div class="footer-subscribe_logo-title">
					<p>Varmodel</p>
				</div>
			</div>

			<div class="footer-subscribe_form-block">
				<div class="footer-subscribe_form-block_title">
					<img src="<?php bloginfo('template_url'); ?>/img/footer-subscribe_form-block_title.png" alt="">
				</div>
				<?php echo do_shortcode('[contact-form-7 id="98" title="Contact form 1"]') ?>
			</div>
		</div>
	</section>

	<div class="youtube-popap">
		<div class="youtube-popap__bg"></div>
		<svg viewBox="0 0 744.09 1052.4">
			<g>
				<path d="m814.29 606.65a314.29 314.29 0 1 1 -628.57 0 314.29 314.29 0 1 1 628.57 0z" stroke="#000" stroke-width="5" transform="matrix(1.1048 0 0 1.1048 -179.21 -162.53)" />
				<g transform="matrix(.91837 0 0 .91837 47.587 10.944)" stroke="#fff" stroke-linecap="round" stroke-width="133.87" fill="none">
					<path d="m176.51 362.87 356.13 356.13" />
					<path d="m532.64 362.87-356.13 356.13" />
				</g>
			</g>
		</svg>
		<div class="youtube-popap__wrapper">


			<!-- <video controls="controls"> -->
			<!-- <source src="<?php the_field('video-file') ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'> -->
			<!-- </video> -->
			<p class="video-link-test" data-video-src='https://www.youtube.com/embed/IUDilsZ7QgA'></p>
			<iframe src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

	</div>


	<div class="pre-footer-img">
		<img src="<?php bloginfo('template_url'); ?>/img/back/footer-section.jpg" alt="image">
	</div>

	<?php get_footer(); ?>
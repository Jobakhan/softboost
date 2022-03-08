<?php get_header();
/*
 Template Name: about us
 */
?>

<section class="container-slick">
    <div class="header_slider-container about-us_slider-container container-padd">

        <div class="header_slider about-us_slider">

            <!-- --- -->
            <div class="header_social-links">
                <a href="<?php the_field('linked_link', 'option'); ?>" class="header_linkedin"><img src="<?php bloginfo('template_url'); ?>/img/social/linked-in-logo.png" class="linkedin-icon"></a>
                <a href="<?php the_field('twitter_link', 'option'); ?>" class="header_twitter"><img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" class="twitter-icon"></a>
                <a href="<?php the_field('youtube_link', 'option'); ?>" class="header_youtube"><img src="<?php bloginfo('template_url'); ?>/img/social/youtube-symbol.png" class="youtube-icon"></a>
                <span class="header_social-line"></span>
            </div>


            <!-- --- -->
            <div class="slick-slider-block">
                <div class="header_slider-block about-us_slider-block">
                    <div class="slider-block_text about-us_slider-block_text">
                        <h2 class="slider-block_title about-us_slider-block_title"><?php the_field('title-hs_1', 'option') ?></h2>
                        <p class="slider-block_dsc about-us_slider-block_dsc"><?php the_field('text-hs_1', 'option') ?></p>
                        <a class="slider-block_button" href="<?php the_field('button_link-hs_1', 'option') ?>">
                            <span><?php the_field('button_text-hs_1', 'option') ?></span>
                        </a>
                    </div>

                    <div class="slider-block_graphic">
                        <div class="slider-block_image about-us_slider-block_image">
                            <img src="<?php bloginfo('template_url'); ?>/img/about-slider.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
</header>


<main class="main">
    <section class="about-titles container-padd">
        <p class="about-titles_top"><?php the_field('title-about-fb') ?></p>
        <p style="margin: 0px"><?php the_field('sub-title-about-fb') ?></p>
    </section>

    <section class="about-info container-padd">
        <div class="about-info_container">
            <div class="about-info_images">
                <div class="about-info_images-top">
                    <img src="<?php the_field('image-about-fb') ?>" alt="">
                </div>
                <div class="about-info_images-icon">
                    <!-- <img src="<?php bloginfo('template_url'); ?>/img/about-us/about-info_images-icon.png" alt=""> -->
                    <img src="<?php bloginfo('template_url'); ?>/img/about-vector-new.png" alt="">
                </div>
            </div>

            <div class="about-info_text">
                <p><?php the_field('text-about-fb') ?></p>
            </div>
        </div>
    </section>

    <section class="about-services container-padd">
        <div class="about-services_all-block">
            <?php
            if (have_rows('items-about-fb')) :
                while (have_rows('items-about-fb')) : the_row();
            ?>
                    <div class="about-services_servis-block">
                        <div class="servis-block_icon">
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                        </div>
                        <p><?php the_sub_field('text'); ?></p>
                    </div>

            <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="about-services_dsc">
            <p><?php the_field('text_under_items-about-fb') ?></p>
        </div>
    </section>

    <section class="about-startups container-padd">
        <div class="about-startups_container">
            <div class="about-startups_text">
                <p><?php the_field('text-third-about') ?></p>
            </div>
            <div class="about-startups_image">
                <!-- <img src="<?php the_field('image-third-about') ?>" alt=""> -->
                <img src="<?php bloginfo('template_url'); ?>/img/botoom-img-about.jpg" alt="">
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
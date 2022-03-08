<?php get_header();
/*
 Template Name: our mission
 */
?>

<section class="container-slick">
    <div class="header_slider-container our-mission_slider-container container-padd">

        <div class="header_slider our-mission_slider">

            <!-- --- -->
            <div class="header_social-links">
                <a href="<?php the_field('linked_link', 'option'); ?>" class="header_linkedin"><img src="<?php bloginfo('template_url'); ?>/img/social/linked-in-logo.png" class="linkedin-icon"></a>
                <a href="<?php the_field('twitter_link', 'option'); ?>" class="header_twitter"><img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" class="twitter-icon"></a>
                <a href="<?php the_field('youtube_link', 'option'); ?>" class="header_youtube"><img src="<?php bloginfo('template_url'); ?>/img/social/youtube-symbol.png" class="youtube-icon"></a>
                <span class="header_social-line"></span>
            </div>


            <!-- --- -->
            <div class="slick-slider-block">
                <div class="header_slider-block our-mission_slider-block">
                    <div class="slider-block_text our-mission_slider-block_text">
                        <h2 class="slider-block_title our-mission_slider-block_title"><?php the_field('title-hs_3', 'option') ?></h2>
                        <p class="slider-block_dsc our-mission_slider-block_dsc"><?php the_field('text-hs_3', 'option') ?></p>
                        <a class="slider-block_button" href="<?php the_field('button_link-hs_3', 'option') ?>">
                            <span><?php the_field('button_text-hs_3', 'option') ?></span>
                        </a>
                    </div>

                    <div class="slider-block_graphic">
                        <div class="slider-block_image our-mission_slider-block_image">
                            <img src="<?php bloginfo('template_url'); ?>/img/our-mission-slider-img1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


</header>

<section class="our-mission-info container-padd">
    <div class="our-mission-info_title">
        <p><?php the_field('title-misiion-page') ?> </p>
    </div>

    <div class="our-mission-info_dsc">
        <p><?php the_field('text-misiion-page') ?></p>
    </div>

    <div class="our-mission-info_staff">
        <?php
        if (have_rows('items-misiion-page')) :
            while (have_rows('items-misiion-page')) : the_row();
        ?>
                <div class="our-mission-info_staff-one-block">
                    <div class="staff-one-block_img">
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                    </div>
                    <div class="staff-one-block_name">
                        <p class="staff-one-block_name_title"><?php the_sub_field('name'); ?></p>
                        <p>
                            <?php the_sub_field('position'); ?>
                        </p>
                    </div>
                    <div class="staff-one-block_social-links">
                        <div class="staff-one-block_social-facebook">
                            <a href="<?php the_sub_field('linkedin_link'); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/img/social/facebook.png" alt="">
                            </a>
                        </div>
                        <div class="staff-one-block_social-twitter">
                            <a href="<?php the_sub_field('facebook_link'); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>

        <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
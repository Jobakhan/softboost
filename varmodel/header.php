<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body <?php body_class($class) ?>>

  <a class="to-top" href="#to-top">
    <img src="<?php bloginfo('template_url'); ?>/img/to-top.jpg" alt="to top">
</a>
  <header class="header" id="to-top">

    <div class="support">
    <img src="<?php bloginfo('template_url'); ?>/img/back/chat-icon.png" class="support__mobile" alt="">
      <div class="support__wrapper">
        HELP
        <img src="<?php bloginfo('template_url'); ?>/img/back/support.jpg" class="support__desctop" alt="">
      </div>
    </div>

    <section class="header__popaps">
      <div class="header__popap ">
        <span class="header__popup-close">
          <svg viewBox="0 0 744.09 1052.4">
            <g>
              <path d="m814.29 606.65a314.29 314.29 0 1 1 -628.57 0 314.29 314.29 0 1 1 628.57 0z" stroke="#000" stroke-width="5" transform="matrix(1.1048 0 0 1.1048 -179.21 -162.53)" />
              <g transform="matrix(.91837 0 0 .91837 47.587 10.944)" stroke="#fff" stroke-linecap="round" stroke-width="133.87" fill="none">
                <path d="m176.51 362.87 356.13 356.13" />
                <path d="m532.64 362.87-356.13 356.13" />
              </g>
            </g>
          </svg>
        </span>
        <h3 class="header__popap-title"><?php the_field('title-plpopap', 'option') ?></h3>

        <p class="header__platform-text"><?php the_field('sub_title-plpopap', 'option') ?></p>
        <img src="<?php the_field('image', 'option') ?>" alt="" class="header__platform-img">
        <div class="header__platform-df">
          <p class="header__platform-titles">Find Assets</p>
          <p class="header__platform-titles">Build Solutions</p>
          <p class="header__platform-titles">Co-brand Sell</p>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/img/back/fragment-for-popap.jpg" alt="fragment" class="header__popap-fragment">
        <div class="header__popup-btns">
          <span class="header__popup-btn header__popup-btn-pev">
            <img src="<?php bloginfo('template_url'); ?>/img/back/btn-popup.png" alt="">
          </span>
          <span class="header__popup-btn header__popup-btn-next">
            <img src="<?php bloginfo('template_url'); ?>/img/back/btn-popup.png" alt="">
          </span>
        </div>

        <button class="create-trial__popup">CREATE TRIAL ACCOUNT</button>

      </div>

      <div class="header__popap ">
        <span class="header__popup-close">
          <svg viewBox="0 0 744.09 1052.4">
            <g>
              <path d="m814.29 606.65a314.29 314.29 0 1 1 -628.57 0 314.29 314.29 0 1 1 628.57 0z" stroke="#000" stroke-width="5" transform="matrix(1.1048 0 0 1.1048 -179.21 -162.53)" />
              <g transform="matrix(.91837 0 0 .91837 47.587 10.944)" stroke="#fff" stroke-linecap="round" stroke-width="133.87" fill="none">
                <path d="m176.51 362.87 356.13 356.13" />
                <path d="m532.64 362.87-356.13 356.13" />
              </g>
            </g>
          </svg>
        </span>

        <h3 class="header__popap-title"><?php the_field('title-dapopup', 'option'); ?></h3>
        <div class="header__datest-cont">

          <?php
          if (have_rows('items-dapopup', 'option')) :
            while (have_rows('items-dapopup', 'option')) : the_row();
          ?>
              <div class="header__datest-item">
                <img src="<?php the_sub_field('icon'); ?>" alt="icon">
                <h4 class="header__datest-title"><?php the_sub_field('title'); ?></h4>
                <p class="header__datest-text"><?php the_sub_field('text'); ?></p>
              </div>

          <?php
            endwhile;
          else :
          endif;
          ?>
        </div>

        <img src="<?php bloginfo('template_url'); ?>/img/back/fragment-for-popap.jpg" alt="fragment" class="header__popap-fragment">
        <div class="header__popup-btns">
          <span class="header__popup-btn header__popup-btn-pev">
            <img src="<?php bloginfo('template_url'); ?>/img/back/btn-popup.png" alt="">
          </span>
          <span class="header__popup-btn header__popup-btn-next">
            <img src="<?php bloginfo('template_url'); ?>/img/back/btn-popup.png" alt="">
          </span>
        </div>
        <button class="create-trial__popup">CREATE TRIAL ACCOUNT</button>
      </div>

      <div class="header__popap">
        <span class="header__popup-close">
          <svg viewBox="0 0 744.09 1052.4">
            <g>
              <path d="m814.29 606.65a314.29 314.29 0 1 1 -628.57 0 314.29 314.29 0 1 1 628.57 0z" stroke="#000" stroke-width="5" transform="matrix(1.1048 0 0 1.1048 -179.21 -162.53)" />
              <g transform="matrix(.91837 0 0 .91837 47.587 10.944)" stroke="#fff" stroke-linecap="round" stroke-width="133.87" fill="none">
                <path d="m176.51 362.87 356.13 356.13" />
                <path d="m532.64 362.87-356.13 356.13" />
              </g>
            </g>
          </svg>
        </span>


        <h3 class="header__popap-title"><?php the_field('title-prpopup', 'option') ?></h3>
        <div class="header__products">
          <div class="header__products-item">
            <div class="header__products-header"><?php the_field('title_item_1-prpopup', 'option') ?></div>
            <div class="header__product-img">
              <img src="<?php the_field('icon-prpopup_1', 'option') ?>" alt="icon">
            </div>
            <p class="header__products-text"><?php the_field('text_item_1-prpopup', 'option') ?></p>
            <span class="header__products-text--color"><?php the_field('orange_text_1-prpopup', 'option') ?></span>
            <a href="<?php the_field('button_link-prpopup_1', 'option') ?>" class="header__products-btn"><?php the_field('button_text-prpopup_1', 'option') ?></a>
          </div>
          <div class="header__products-item">
            <div class="header__products-header"><?php the_field('title_item_2-prpopup', 'option') ?></div>
            <div class="header__product-img">
              <img src="<?php the_field('icon-prpopup_2', 'option') ?>" alt="icon">
            </div>
            <p class="header__products-text"><?php the_field('text_item_2-prpopup', 'option') ?></p>
            <span class="header__products-text--color"><?php the_field('orange_text_2-prpopup', 'option') ?></span>
            <a href="<?php the_field('button_link-prpopup_2', 'option') ?>" class="header__products-btn"><?php the_field('button_text-prpopup_2', 'option') ?></a>
          </div>
          <div class="header__products-item">
            <div class="header__products-header"><?php the_field('title_item_3-prpopup', 'option') ?></div>
            <div class="header__product-img">
              <img src="<?php the_field('icon-prpopup_3', 'option') ?>" alt="icon">
            </div>
            <p class="header__products-text"><?php the_field('text_item_3-prpopup', 'option') ?></p>
            <span class="header__products-text--color"><?php the_field('orange_text_3-prpopup', 'option') ?></span>
            <a href="<?php the_field('button_link-prpopup_3', 'option') ?>" class="header__products-btn"><?php the_field('button_text-prpopup_3', 'option') ?></a>
          </div>

        </div>

        <img src="<?php bloginfo('template_url'); ?>/img/back/fragment-for-popap.jpg" alt="fragment" class="header__popap-fragment">
        <div class="header__popup-btns">
          <span class="header__popup-btn header__popup-btn-pev">
            <img src="<?php bloginfo('template_url'); ?>/img/back/btn-popup.png" alt="">
          </span>
          <span class="header__popup-btn header__popup-btn-next">
            <img src="<?php bloginfo('template_url'); ?>/img/back/btn-popup.png" alt="">
          </span>
        </div>


        <button class="create-trial__popup">CREATE TRIAL ACCOUNT</button>
      </div>

      <div class="header__popap">
        <span class="header__popup-close">
          <svg viewBox="0 0 744.09 1052.4">
            <g>
              <path d="m814.29 606.65a314.29 314.29 0 1 1 -628.57 0 314.29 314.29 0 1 1 628.57 0z" stroke="#000" stroke-width="5" transform="matrix(1.1048 0 0 1.1048 -179.21 -162.53)" />
              <g transform="matrix(.91837 0 0 .91837 47.587 10.944)" stroke="#fff" stroke-linecap="round" stroke-width="133.87" fill="none">
                <path d="m176.51 362.87 356.13 356.13" />
                <path d="m532.64 362.87-356.13 356.13" />
              </g>
            </g>
          </svg>
        </span>
        <h3 class="header__popap-title">Login</h3>
        <div class="header__popap-df">
          <div class="header__popap-left">
            <img src="<?php bloginfo('template_url'); ?>/img/back/login-img.jpg" alt="img">
          </div>
          <div class="header__popap-right">
            <div class="header__login">
              <img src="<?php bloginfo('template_url'); ?>/img/back/logo-for-app.jpg" class="header__login-top-logo">
              <!-- <img src="<?php bloginfo('template_url'); ?>/img/back/login-logo.jpg" alt="logo" class="header__login-top-logo"> -->
              <div class="header__form">
                <input type="text" placeholder="Username" class="header__login-input">
                <input type="password" placeholder="Password" class="header__login-input">
                <div class="header__login-links">
                  <a href="#"> Forgot username </a>
                  <a href="#"> Forgot password</a>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="216" title="capcha for"]') ?>


                <button class="header__login-btn"> login</button>


                <span class="header__text-or">or</span>

                <a href="#register" class="header__login-create">Create new account</a>
              </div>
            </div>
          </div>
        </div>

        <img src="<?php bloginfo('template_url'); ?>/img/back/fragment-for-popap.jpg" alt="fragment" class="header__popap-fragment">
        <div class="header__popup-btns">
          <span class="header__popup-btn header__popup-btn-pev">
            <img src="<?php bloginfo('template_url'); ?>/img/back/btn-popup.png" alt="">
          </span>
          <span class="header__popup-btn header__popup-btn-next">
            <img src="<?php bloginfo('template_url'); ?>/img/back/btn-popup.png" alt="">
          </span>
        </div>
      </div>

    </section>

    <section class="header_top-bar-container ">
      <div class="header_top-bar container">
        <div class="header_logo">
          <div class="header_logo-image">
            <?php the_custom_logo() ?>
          </div>
          <div class="header_logo-title">
            <p>Varmodel </p>
          </div>
        </div>

        <nav class="header_menu">
          <ul class="header_menu-list">
            <li class="header_menu-item"><a href="#">PLATFORM<i class="menu-angle fa fa-angle-down"></i></a>
            </li>
            <li class="header_menu-item"><a href="#">DATASETS<i class="menu-angle fa fa-angle-down"></i></a>
            </li>
            <li class="header_menu-item"><a href="#">PRODUCTS<i class="menu-angle fa fa-angle-down"></i></a>
            </li>
            <li class="header_menu-item"><a href="#">LOGIN<i class="menu-angle fa fa-angle-down"></i></a>
            </li>
            <li class="header_menu-item header_item-register"><a href="#register">REGISTER</a></li>
          </ul>
        </nav>

        <div class="header_menu-mobile">
          <div class="header_menu-burger">
            <span class="header_menu-burger-line"></span>
          </div>
          <span class="header_menu-mobile-text"> Menu </span>
        </div>

      </div>
    </section>
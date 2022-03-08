</main>
<footer class="footer ">
  <section class="footer_top container-padd">
    <div class="footer_top-container">
      <!-- <div class="footer_top_info">
        <p><?php the_field('left_text-footer', 'option'); ?></p>
      </div> -->

      <div class="footer_top_menu" data-aos="fade-right" data-aos-duration="1500">
        <nav class="footer_menu">
          <?php
          wp_nav_menu(array(
            'menu_class'      => 'footer_menu-list',
            'theme_location'  => 'header_menu',
            'container' => false
          ));
          ?>
        </nav>
      </div>

      <div class="footer_top_social">
        <a href="<?php the_field('insta_link', 'option'); ?>" class="header_linkedin"><img src="<?php bloginfo('template_url'); ?>/img/social/instagram.png" class="instagram-icon" data-aos="fade-up" data-aos-duration="1500"></a>
        <a href="<?php the_field('twitter_link', 'option'); ?>" class="header_twitter"><img src="<?php bloginfo('template_url'); ?>/img/social/twitter.png" class="twitter-icon" data-aos="fade-up" data-aos-duration="2000"></a>
        <a href="<?php the_field('linked_link', 'option'); ?>" class="header_youtube"><img src="<?php bloginfo('template_url'); ?>/img/social/linkedin2.png" class="linkedin-icon" data-aos="fade-up" data-aos-duration="2500"></a>
      </div>
    </div>
  </section>

  <section class="footer_copyright">
    <div class="footer_copyright-text">
      <p><?php the_field('copyright_text', 'option'); ?></p>
    </div>
    <div class="footer_copyright-links">
      <nav class="copyright-links">
        <ul class="copyright-links-list">
          <li class="copyright-links-item copyright-links-item-line"><a href="<?php the_field('terms_of_use_link', 'option'); ?>">Terms of Use</a></li>
          <li class="copyright-links-item copyright-links-item-line"><a href="<?php the_field('privacy_policy_link', 'option'); ?>">Privacy Policy</a></li>
          <!-- <li class="copyright-links-item"><a href="<?php the_field('email_subscription-link', 'option'); ?>">Email Subscription</a></li> -->
        </ul>
      </nav>
    </div>
  </section>
</footer>


<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true
  });
</script>
</body>

</html>
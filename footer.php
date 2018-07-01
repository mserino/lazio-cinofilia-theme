<?php
  $custom_options_creator_name    = get_option('custom_options_creator_name');
  $custom_options_creator_url     = get_option('custom_options_creator_url');
?>
  <footer class="footer">
    <div class="container footer-container">
      <div class="footer-logo-container">
        <img src="assets/img/logo.png" alt="">
      </div>

      <h5 class="footer-heading">Copyright <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></h5>

      <div class="footer-social">

        <?php $social_footer_loop = new WP_Query(array(
                'post_type' => 'social',
                'orderby' => 'post_id',
                'order' => 'ASC'
              )); ?>
        <?php if ( $social_footer_loop->have_posts() ) : ?>
          <?php while($social_footer_loop->have_posts()) : $social_footer_loop->the_post(); ?>
            <?php
              $social_icon_class = get_field('social_icon_class');
              $social_icon_url = get_field('social_icon_url');
            ?>
            <a href="<?php echo $social_icon_url; ?>" target="blank" title="<?php the_title(); ?>" class="social-icon-link">
              <i class="footer-icon <?php echo $social_icon_class;?> fa-2x"></i>
            </a>
          <?php endwhile; wp_reset_query(); ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="footer-credits">
      <div class="footer-credits-name">Created by <a href="<?php echo $custom_options_creator_url; ?>" target="_blank"><?php echo $custom_options_creator_name; ?></a></div>
    </div>
  </footer>

  <?php wp_footer(); ?>
  </body>
</html>

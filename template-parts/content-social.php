<section class="social-box">
  <p class="social-text">Seguici sui social per avere informazioni sulle ultime novità</p>
  <div class="social-icons">
    <?php $social_loop = new WP_Query(array(
            'post_type' => 'social',
            'orderby' => 'post_id',
            'order' => 'ASC'
          )); ?>
    <?php if ( $social_loop->have_posts() ) : ?>
      <?php while($social_loop->have_posts()) : $social_loop->the_post(); ?>
        <?php
          $social_icon_class = get_field('social_icon_class');
          $social_icon_url = get_field('social_url');
        ?>
        <a href="<?php echo $social_icon_url; ?>" target="blank" title="<?php the_title(); ?>" class="social-icon-link">
          <i class="social-icon <?php echo $social_icon_class;?> fa-2x"></i>
        </a>
      <?php endwhile; wp_reset_query(); ?>
    <?php endif; ?>
  </div>
</section>

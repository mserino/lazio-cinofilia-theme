<section class="home-sponsors text-center">
  <div class="container">
    <h2 class="sponsors-title">I nostri sponsor</h2>
    <div class="sponsors-container">
      <?php $sponsor_loop = new WP_Query(array(
              'post_type' => 'sponsors',
              'orderby' => 'post_id',
              'order' => 'ASC'
            )); ?>
      <?php if ( $sponsor_loop->have_posts() ) : ?>
        <?php while($sponsor_loop->have_posts()) : $sponsor_loop->the_post(); ?>
          <?php
            $sponsor_url = get_field('sponsor_url');
          ?>
          <a href="<?php echo $sponsor_url; ?>" target="_blank" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('medium'); ?>
          </a>
        <?php endwhile; wp_reset_query(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>

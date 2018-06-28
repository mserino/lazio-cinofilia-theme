<aside class="aside col-12 col-md-4">
  <div class="aside-section">
    <div class="aside-title">
      Social
    </div>

    <div class="aside-body">
      <div class="aside-description aside-icons drop-shadow">
        <?php $social_sidebar_loop = new WP_Query(array(
                'post_type' => 'social',
                'orderby' => 'post_id',
                'order' => 'ASC'
              )); ?>
        <?php if ( $social_sidebar_loop->have_posts() ) : ?>
          <?php while($social_sidebar_loop->have_posts()) : $social_sidebar_loop->the_post(); ?>
            <?php
              $social_icon_class = get_field('social_icon_class');
              $social_url = get_field('social_url');
            ?>
            <a href="<?php echo $social_url; ?>" target="blank" title="<?php the_title(); ?>" class="social-icon-link">
              <i class="aside-icon <?php echo $social_icon_class;?> fa-3x"></i>
            </a>
          <?php endwhile; wp_reset_query(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php dynamic_sidebar( 'sidebar-1' ); ?>

  <div class="aside-section">
    <div class="aside-title">
      Post recenti
    </div>

    <div class="aside-body">
      <ul class="aside-articles-list">
        <?php
          $sidebar_query = new WP_Query( array(
            'posts_per_page' => 5,
          ));
        ?>
        <?php if ( $sidebar_query->have_posts() ) : ?>
          <?php while ( $sidebar_query->have_posts() ) : $sidebar_query->the_post(); ?>
            <li class="aside-article drop-shadow row">
              <div class="aside-article-img col-3" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
              </div>
              <div class="aside-article-details col-9">
                  <a href="<?php the_permalink(); ?>" class="link link-unstyled">
                    <h6 class="aside-article-title">
                      <?php the_title(); ?>
                    </h6>
                  </a>
                  <span class="aside-article-date label"><?php the_time('F jS, Y'); ?></span>
              </div>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <li class="article drop-shadow">
            <h6><?php __('No News'); ?></h6>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</aside>

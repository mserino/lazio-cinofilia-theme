<aside class="aside col-12 col-md-4">
  <?php dynamic_sidebar( 'sidebar-2' ); ?>
  <div class="aside-section">
    <div class="aside-title">
      Categorie
    </div>
    <div class="aside-body">
      <div class="aside-description drop-shadow">
        <?php wp_list_categories(); ?>
      </div>
    </div>
  </div>

  <div class="aside-section">
    <div class="aside-title">
      Archivio
    </div>
    <div class="aside-body">
      <div class="aside-description drop-shadow">
        <?php wp_get_archives('type=monthly'); ?>
      </div>
    </div>
  </div>

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

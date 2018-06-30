<?php get_header(); ?>

<section class="slideshow">
  <?php echo do_shortcode( '[recent_post_slider design="design-3" show_category_name="false"]' ); ?>
</section>

<!-- Social Icons -->
<?php get_template_part('template-parts/content', 'social'); ?>

<main class="container home-main">
  <div class="row">
    <section class="home-articles col-12 col-md-8">
      <!-- Latest Articles -->
      <ul class="articles-list">
        <?php
          $homepage_query = new WP_Query( array(
            'posts_per_page' => 3,
          ));
        ?>
        <?php if ( $homepage_query->have_posts() ) : ?>
          <?php while ( $homepage_query->have_posts() ) : $homepage_query->the_post(); ?>
            <li class="article drop-shadow">
              <h4><?php the_title(); ?></h4>
              <span class="article-date label"><?php the_time('j F Y'); ?></span>
              <div class="article-img-container" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
              </div>
              <p class="article-excerpt"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title_attribute(); ?>" class="link">Leggi tutto</a>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <li class="article drop-shadow">
            <h4><?php __('No News'); ?></h4>
          </li>
        <?php endif; ?>
      </ul>
    </section>

    <!-- Sidebar -->
    <?php get_sidebar('home'); ?>
  </div>
</main>

<!-- Sponsors -->
<?php get_template_part('template-parts/content', 'sponsors'); ?>

<!-- Footer -->
<?php get_footer(); ?>

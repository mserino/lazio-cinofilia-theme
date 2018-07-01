<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

  <section class="page-heading">
    <h2>
      <?php single_cat_title(); ?>
    </h2>
  </section>

  <main class="container home-main">
    <div class="row">
      <section class="home-articles col-12 col-md-8">
          <!-- Archive List -->
          <ul class="news-articles-list">
            <?php if (have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <li class="news-article drop-shadow">
                  <div class="row">
                    <div class="news-article-img-container col-3" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                    </div>
                    <div class="news-article-details col-9">
                      <h5><?php the_title(); ?></h5>
                      <span class="article-date label"><?php the_time('j F Y'); ?></span>
                      <p class="article-excerpt news-article-excerpt"><?php the_excerpt(); ?></p>
                      <a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title_attribute(); ?>" class="link">Leggi tutto</a>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <li class="article drop-shadow">
                <h4><?php __('No News'); ?></h4>
              </li>
            <?php endif; ?>
          </ul>
          <!-- Pagination -->
          <div class="pagination row">
            <div class="older col-6"><?php previous_posts_link('<< Pagina precedente'); ?></div>
            <div class="newest col-6 text-right"><?php next_posts_link('Pagina successiva >>'); ?></div>
          </div>
      </section>

      <!-- Sidebar -->
      <?php get_sidebar('news'); ?>
    </div>
  </main>
<?php endif; ?>

<!-- Sponsors -->
<?php get_template_part('template-parts/content', 'sponsors'); ?>

<!-- Footer -->
<?php get_footer(); ?>

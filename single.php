<?php get_header(); ?>

<!-- Social Icons -->
<?php get_template_part('template-parts/content', 'social'); ?>

<div class="container breadcrumbs-container">
  <?php
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    }
  ?>
</div>

<?php if ( have_posts() ) : ?>
  <!-- Start of the main loop. -->
  <?php while ( have_posts() ) : the_post(); ?>

    <section class="page-heading row">
      <div class="col-12 col-md-10 offset-md-1">
        <h1><?php the_title(); ?></h1>
      </div>
    </section>

    <main class="container home-main">
      <div class="row">
        <section class="home-articles col-12 col-md-10 offset-md-1">
          <!-- Latest Articles -->
          <div class="articles-list">
            <div class="article drop-shadow">
              <div class="article-img-container" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
              </div>
              <span class="article-date label"><?php the_time('j F Y'); ?></span>
              <p class="article-content"><?php the_content(); ?></p>
            </div>
          </div>
          <div class="pagination row">
            <div class="older col-6"><?php previous_post_link(); ?> </div>
            <div class="newest col-6 text-right"><?php next_post_link(); ?></div>
          </div>
        </section>
      </div>
    </main>

    <?php wp_link_pages(); ?>

  <?php endwhile; ?>
<?php endif; ?>

<!-- Sponsors -->
<?php get_template_part('template-parts/content', 'sponsors'); ?>

<!-- Footer -->
<?php get_footer(); ?>

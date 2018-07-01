<?php
  /*
    Template Name: Page Generic
  */
  get_header();
?>

<section class="page-heading">
  <h1><?php the_title(); ?></h1>
</section>

<main class="container home-main">
  <div class="row">
    <section class="home-articles col-12 col-md-10 offset-md-1">
      <?php the_content(); ?>
    </section>
  </div>
</main>

<!-- Social Icons -->
<?php get_template_part('template-parts/content', 'social'); ?>

<!-- Sponsors -->
<?php get_template_part('template-parts/content', 'sponsors'); ?>

<?php get_footer(); ?>

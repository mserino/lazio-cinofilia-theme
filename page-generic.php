<?php
  /*
    Template Name: Custom WordPress Theme Generic
  */
  get_header();
?>

<div class="row row-container">
  <main class="main col-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
      endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
  </main>
</div>

<?php get_footer(); ?>

<?php
  /*
    Template Name: Page Attività
  */
  get_header();
?>

<section class="page-heading page-heading--padding-bottom">
  <h1><?php the_title(); ?></h1>
</section>

<main class="container">
  <div class="row">
    <ul class="activity-list col-12">
      <?php $activity_loop = new WP_Query(array(
        'post_type' => 'page_attivita',
        'orderby' => 'post_id',
        'order' => 'ASC'
      )); ?>
      <?php while($activity_loop->have_posts()) : $activity_loop->the_post(); ?>
        <?php
          $activity_position = get_field('activity_position');
        ?>
        <li class="activity-container drop-shadow">
          <div class="row">
            <?php if ($activity_position == 'left') : ?>
              <div class="col-12 col-md-6">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive activity-img">
              </div>
            <?php endif; ?>
            <div class="col-12 col-md-6 activity-description">
              <h2 class="activity-title"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
            <?php if ($activity_position == 'right') : ?>
              <div class="col-12 col-md-6">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive activity-img">
              </div>
            <?php endif; ?>
          </div>
        </li>
      <?php endwhile;?>
    </ul>
  </div>
</main>

<?php get_footer(); ?>

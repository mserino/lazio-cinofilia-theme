<?php
  /*
    Template Name: Page Attività
  */
  get_header();
?>

<section class="page-heading page-heading--padding-bottom">
  <h1><?php the_title(); ?></h1>
</section>

<ul class="activity-list container">
  <?php $activity_loop = new WP_Query(array(
    'post_type' => 'page_attivita',
    'orderby' => 'post_id',
    'order' => 'ASC'
  )); ?>
  <?php while($activity_loop->have_posts()) : $activity_loop->the_post(); ?>
    <?php
      $activity_position = get_field('activity_position');
    ?>
    <li class="activity-container row drop-shadow">
      <?php if ($activity_position == 'left') : ?>
        <div class="col-12 col-md-6 col-no-padding">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive activity-img">
        </div>
      <?php endif; ?>
      <div class="col-12 col-md-6 activity-description">
        <h2 class="activity-title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
      <?php if ($activity_position == 'right') : ?>
        <div class="col-12 col-md-6 col-no-padding">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive activity-img">
        </div>
      <?php endif; ?>
    </li>
  <?php endwhile;?>
</ul>

<?php get_footer(); ?>

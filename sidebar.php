<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <?php get_sidebar('home');?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
  <?php get_sidebar('news');?>
<?php endif; ?>

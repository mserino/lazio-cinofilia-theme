<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="La S.S. Lazio Cinofilia nasce nel Dicembre 2017 da un gruppo di amici appassionati di sport cinofili e tifosi della Lazio, con l’affiliazione alla Società Polisportiva Lazio. L’intento del gruppo è di diffondere la cultura sportiva in ambito cinofilo, allenandosi con i propri amici a quattro zampe e partecipando a competizioni di sport come Disc Dog, Rally Obedience, Agility, eccetera.">

    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <div class="logo-container">
      <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>">
    </div>
    <header class="header" id="header">
      <!-- Hamburger icon (only visible on Mobile) -->
      <i class="visible-xs header-icon icon-open fas fa-bars fa-2x" id="header-open"></i>
      <i class="visible-xs header-icon icon-close fas fa-times fa-2x" id="header-close"></i>

      <!-- Header navigation -->
      <?php
        if(has_nav_menu('primary')) {
          wp_nav_menu(array(
            'theme_location'          => 'primary',
            'container'               => false,
            'menu_class'              => 'header-list',
            'fallback_cb'             => false,
            'depth'                   => 4
          ));
        }
      ?>
    </header>

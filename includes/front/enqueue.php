<?php
  function custom_enqueue() {
    wp_register_style('custom_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('custom_fontawesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css');
    wp_register_style('custom_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Ubuntu:300,300i,400,400i,500,500i,700,700i');
    wp_register_style('custom_style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('custom_bootstrap');
    wp_enqueue_style('custom_fontawesome');
    wp_enqueue_style('custom_fonts');
    wp_enqueue_style('custom_style');

    wp_register_script('custom_script', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('custom_script');
  }

<?php

function custom_setup_theme() {
  add_theme_support('post-thumbnails'); // allows to use feature image
  add_theme_support( 'custom-logo' ); // allows to use custom logo
  register_nav_menu('primary', __('Primary Menu', 'custom'));
}

<?php
function custom_widgets() {
  register_sidebar( array(
      'name'          => __( 'Homepage Sidebar', 'custom' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'Sidebar for Homepage', 'custom' ),
      'before_widget' => '<div id="%1$s" class="aside-section widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="aside-title">',
      'after_title'   => '</div>'
    ));
}

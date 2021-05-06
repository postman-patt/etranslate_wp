<?php
// Theme Support
  function wp_theme_setup(){

    //Custom logo
    add_theme_support('custom-logo');

    //Register navwalker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    //Post format support
    add_theme_support('post-formats', array('gallery'));

    //Thumbnail Featured Image
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'wp_theme_setup');

//register_navwalker

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

//Widgets Locations

function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Update Message',
    'id'    => 'message',
    'before_widget' => '<div class="container">',
    'after_widget' => '</div>',
    'before_title'  => '<h3>',
    'after_title' => '</h3>'
  ));
  register_sidebar(array(
    'name'  => 'box1',
    'id'    => 'box1',
    'before_widget' => '<div class="box mx-3 py-4 mb-4">',
    'after_widget' => '</div>',
    'before_title'  => '<h3>',
    'after_title' => '</h3>'
  ));
  register_sidebar(array(
    'name'  => 'box2',
    'id'    => 'box2',
    'before_widget' => '<div class="box mx-3 py-4 mb-4">',
    'after_widget' => '</div>',
    'before_title'  => '<h3>',
    'after_title' => '</h3>'
  ));
  register_sidebar(array(
    'name'  => 'box3',
    'id'    => 'box3',
    'before_widget' => '<div class="box mx-3 py-4 mb-4">',
    'after_widget' => '</div>',
    'before_title'  => '<h3>',
    'after_title' => '</h3>'
  ));
  register_sidebar(array(
    'name'  => 'Client Showcase',
    'id'    => 'clients',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title'  => '<h1>',
    'after_title' => '</h1>'
  ));
}
add_action('widgets_init', 'wpb_init_widgets');

// Customizer
require get_template_directory(). '/inc/customizer.php';

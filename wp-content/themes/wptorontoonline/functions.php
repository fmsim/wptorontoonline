<?php
  function torontoonline_scripts() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'torontoonline_scripts');

  /** Navigation **/
  register_nav_menus(array(
    'main_menu' => __("Main Menu", 'torontoonline')
  ));

  /** Widget zone **/
  /**
   * %1$s - (found to load widget id)
   * %2$s - (found to load widget class/classes)
   * %s - (found here)
  **/
  function torontoonline_theme_widgets() {
    register_sidebar(array(
      'name'          => __('Sidebar Testimonials'),
      'id'            => 'testimonials',
      'description'    => 'Testimonials Widgets',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }
  add_action('widgets_init', 'torontoonline_theme_widgets');

  /** Add featured images**/
  add_theme_support('post-thumbnails');

  add_image_size('featured', 1100, 418, true); // name, width, height, crop

  /** Removes wordpress bar on the top **/
  add_filter('show_admin_bar', '__return_false');

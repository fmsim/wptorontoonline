<?php
  function torontoonline_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'torontoonline_scripts');
  // register menus
  register_nav_menus([
    'main_menu' => __("Main Menu", 'torontoonline')
  ]);
  // removes wordpress bar on the top
  add_filter('show_admin_bar', '__return_false');

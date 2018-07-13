<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WordPress PSD Theme Development</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="page">
      <header id="masthead" class="site-header" role="banner">
        <div class="container">
          <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.svg;">
            </a>
          </div> <!-- .logo -->
          <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
              wp_nav_menu([
                'theme_location' => 'main-menu'
              ]);
            ?>
          </nav>
        </div> <!-- .container -->
      </header> <!-- #masthead .site-header -->
      <div class="container content">

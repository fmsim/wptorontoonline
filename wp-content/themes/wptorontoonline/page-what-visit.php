/*
 * Template Name: What To Visit
*/

<?php get_header(); ?>
  <?php if (has_post_thumbnail()) : ?>
    <div class="featured">
      <?php the_post_thumbnail('featured'); ?>
      <h2><?php the_title(); ?></h2>
    </div>

  <?php else : ?>
    <h2 class="noimage"><?php the_title(); ?></h2>
  <?php endif; ?>

<div id="primary" class="primary no-sidebar post-<?php the_ID(); ?>">
  <?php $args = array(
    'posts_per_page' => 5,
    'cat'            => 8,
    'order'          => 'DESC',
    'orderby'        => 'date',
  ); ?>
  <?php $visit = new WP_QUERY($args); ?>
  <ul class="blog-visit">
    <?php while ($visit->have_posts()) : $visit->the_post(); ?>
      <!--<?php print_r($visit); ?>-->

      <li>
        <div class="featured">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium-blog'); ?>
          </a>
          <div class="category">
            <?php the_category(', ') ?>
          </div> <!-- .category -->
        </div> <!-- .featured -->

        <div class="content">
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
        </div> <!-- .content -->

        <div class="post-information">
          <div class="author">
            By: <span><?php the_author(); ?></span>
          </div>
          <!-- the_date() => only for one post at the same day -->
          <div class="date"><?php the_time('F j, Y'); ?></div>
        </div> <!-- .post-information -->
      </li>

    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul> <!-- .blog-visit -->
</div> <!-- #primary .primary post-<?php the_ID(); ?> -->

<?php get_footer(); ?>
